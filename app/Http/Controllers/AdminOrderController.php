<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('order')
            ->leftJoin('order_information', 'order.order_information_id', '=', 'order_information.order_information_id')
            ->leftJoin('user', 'order.user_id', '=', 'user.user_id')
            ->select(
                'order.*',
                'order_information.*',
                'user.firstname',
                'user.lastname',
                'user.middlename'
            )
            ->orderBy('order.ordered_at', 'desc');

        // Filter by status if provided
        if ($request->has('status') && $request->status != '') {
            $query->where('order.status', $request->status);
        }

        // Search by document type or user name
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('order.document_type', 'like', "%{$search}%")
                  ->orWhere('user.firstname', 'like', "%{$search}%")
                  ->orWhere('user.lastname', 'like', "%{$search}%");
            });
        }

        $orders = $query->get();

        return view('admin.orders', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:Pending,Processing,Ready for Pickup,Delivered,Cancelled'
        ]);

        try {
            DB::table('order')
                ->where('order_id', $id)
                ->update([
                    'status' => $validated['status']
                ]);

            return redirect()->route('admin.orders.index')
                ->with('success', 'Order status updated successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to update order: ' . $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $order = DB::table('order')
            ->where('order.order_id', $id)
            ->leftJoin('order_information', 'order.order_information_id', '=', 'order_information.order_information_id')
            ->leftJoin('user', 'order.user_id', '=', 'user.user_id')
            ->select(
                'order.*',
                'order_information.*',
                'user.firstname',
                'user.lastname',
                'user.middlename',
                'user.email',
                'user.contact'
            )
            ->first();

        if (!$order) {
            abort(404, 'Order not found');
        }

        return view('admin.order-details', compact('order'));
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $order = DB::table('order')->where('order_id', $id)->first();

            if (!$order) {
                return back()->withErrors(['error' => 'Order not found.']);
            }

            // Delete order_information
            if ($order->order_information_id) {
                DB::table('order_information')
                    ->where('order_information_id', $order->order_information_id)
                    ->delete();
            }

            // Delete order
            DB::table('order')->where('order_id', $id)->delete();

            DB::commit();

            return redirect()->route('admin.orders.index')
                ->with('success', 'Order deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to delete order: ' . $e->getMessage()]);
        }
    }
}