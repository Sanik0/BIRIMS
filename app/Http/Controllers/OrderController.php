<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        // Get document types if you want to make it dynamic
        $documentTypes = DB::table('document_type')->get();
        return view('document', compact('documentTypes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'document_type_id' => 'required|exists:document_type,document_type_id',
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:150',
            'years_resided' => 'required|integer|min:0',
            'purpose' => 'required|string|max:255',
            'issue_day' => 'required|integer|min:1|max:31',
            'issue_month' => 'required|string|max:50',
            'issue_year' => 'required|integer|min:1900|max:2100',
            'or_number' => 'required|string|max:100',
            'payment_date' => 'required|date',
        ]);

        try {
            DB::beginTransaction();

            // Create order
            $orderId = DB::table('order')->insertGetId([
                'user_id' => Auth::id(),
                'document_type_id' => $validated['document_type_id'],
                'amount' => 50, // Set default amount or get from document_type
                'status' => 'Pending',
                'ordered_at' => now(),
            ]);

            // Prepare order fields
            $fields = [
                ['order_id' => $orderId, 'field_name' => 'full_name', 'field_value' => $validated['full_name'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'age', 'field_value' => $validated['age'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'years_resided', 'field_value' => $validated['years_resided'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'purpose', 'field_value' => $validated['purpose'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'issue_day', 'field_value' => $validated['issue_day'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'issue_month', 'field_value' => $validated['issue_month'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'issue_year', 'field_value' => $validated['issue_year'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'or_number', 'field_value' => $validated['or_number'], 'created_at' => now()],
                ['order_id' => $orderId, 'field_name' => 'payment_date', 'field_value' => $validated['payment_date'], 'created_at' => now()],
            ];

            // Insert all fields
            DB::table('order_fields')->insert($fields);

            DB::commit();

            return redirect()->route('home')
                ->with('success', 'Barangay Certificate request submitted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()
                ->withErrors(['error' => 'Failed to submit order: ' . $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $order = DB::table('order')
            ->where('order_id', $id)
            ->where('user_id', Auth::id())
            ->join('document_type', 'order.document_type_id', '=', 'document_type.document_type_id')
            ->select('order.*', 'document_type.name as document_name')
            ->first();

        if (!$order) {
            abort(404, 'Order not found');
        }

        $fields = DB::table('order_fields')
            ->where('order_id', $id)
            ->get()
            ->keyBy('field_name');

        return view('document-view', compact('order', 'fields'));
    }
}