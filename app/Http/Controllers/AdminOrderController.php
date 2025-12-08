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
            $query->where(function ($q) use ($search) {
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
            // Get the order details before updating
            $order = DB::table('order')
                ->where('order_id', $id)
                ->first();

            if (!$order) {
                return back()->withErrors(['error' => 'Order not found.']);
            }

            $oldStatus = $order->status;
            $newStatus = $validated['status'];

            // Update order status
            DB::table('order')
                ->where('order_id', $id)
                ->update([
                    'status' => $newStatus
                ]);

            // Create notification if status changed
            if ($oldStatus !== $newStatus) {
                $this->createStatusNotification($order, $newStatus);
            }

            return redirect()->route('admin.orders.index')
                ->with('success', 'Order status updated successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to update order: ' . $e->getMessage()]);
        }
    }

    private function createStatusNotification($order, $newStatus)
    {
        $statusMessages = [
            'Pending' => 'Your document request is now pending review.',
            'Processing' => 'Your document request is now being processed.',
            'Ready for Pickup' => 'Your document is ready for pickup at the barangay hall.',
            'Delivered' => 'Your document has been delivered.',
            'Cancelled' => 'Your document request has been cancelled.'
        ];

        $title = "Order Status Updated: {$newStatus}";
        $body = $statusMessages[$newStatus] ?? "Your order status has been updated to {$newStatus}.";
        $body .= " Document Type: {$order->document_type}";

        DB::table('notification')->insert([
            'user_id' => $order->user_id,
            'title' => $title,
            'body' => $body,
            'read' => 0,
            'created_at' => now()
        ]);
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