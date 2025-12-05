<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('order')
            ->where('user_id', Auth::id())
            ->join('document_type', 'order.document_type_id', '=', 'document_type.document_type_id')
            ->select('order.*', 'document_type.name as document_name', 'document_type.description', 'document_type.fields')
            ->orderBy('ordered_at', 'desc')
            ->get();
            
        return view('orders', compact('orders'));
    }

    public function create()
    {
        // Get all active document types
        $documentTypes = DB::table('document_type')
            ->where('is_active', true)
            ->get();
            
        return view('document', compact('documentTypes'));
    }

    public function store(Request $request)
    {
        // Get the document type
        $documentType = DB::table('document_type')
            ->where('document_type_id', $request->document_type_id)
            ->first();

        if (!$documentType) {
            return back()->withErrors(['error' => 'Invalid document type selected.']);
        }

        // Decode the fields from JSON
        $fields = json_decode($documentType->fields, true);

        // Build dynamic validation rules
        $validationRules = [
            'document_type_id' => 'required|exists:document_type,document_type_id'
        ];

        foreach ($fields as $field) {
            if (isset($field['validation'])) {
                $validationRules[$field['name']] = $field['validation'];
            }
        }

        // Validate the request
        $validated = $request->validate($validationRules);

        try {
            DB::beginTransaction();

            // Create order
            $orderId = DB::table('order')->insertGetId([
                'user_id' => Auth::id(),
                'document_type_id' => $validated['document_type_id'],
                'amount' => $documentType->amount,
                'status' => 'Pending',
                'ordered_at' => now(),
            ]);

            // Prepare order fields dynamically
            $orderFields = [];
            foreach ($fields as $field) {
                if (isset($validated[$field['name']])) {
                    $orderFields[] = [
                        'order_id' => $orderId,
                        'field_name' => $field['name'],
                        'field_value' => $validated[$field['name']],
                        'created_at' => now()
                    ];
                }
            }

            // Insert all fields
            if (!empty($orderFields)) {
                DB::table('order_fields')->insert($orderFields);
            }

            DB::commit();

            return redirect()->route('home')
                ->with('success', 'Document request submitted successfully!');

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
            ->select('order.*', 'document_type.name as document_name', 'document_type.fields')
            ->first();

        if (!$order) {
            abort(404, 'Order not found');
        }

        $fields = DB::table('order_fields')
            ->where('order_id', $id)
            ->get()
            ->keyBy('field_name');

        // Decode field definitions
        $fieldDefinitions = json_decode($order->fields, true);

        return view('document-view', compact('order', 'fields', 'fieldDefinitions'));
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $order = DB::table('order')
                ->where('order_id', $id)
                ->where('user_id', Auth::id())
                ->first();

            if (!$order) {
                return back()->withErrors(['error' => 'Order not found or you do not have permission to delete it.']);
            }

            // Delete order_fields first (child records) - handled by CASCADE if set
            DB::table('order_fields')->where('order_id', $id)->delete();
            
            // Then delete the order (parent record)
            DB::table('order')->where('order_id', $id)->delete();

            DB::commit();

            return redirect()->route('home')
                ->with('success', 'Order deleted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to delete order: ' . $e->getMessage()]);
        }
    }

    // API endpoint to get document type fields
    public function getDocumentFields($id)
    {
        $documentType = DB::table('document_type')
            ->where('document_type_id', $id)
            ->where('is_active', true)
            ->first();

        if (!$documentType) {
            return response()->json(['error' => 'Document type not found'], 404);
        }

        return response()->json([
            'success' => true,
            'document' => [
                'id' => $documentType->document_type_id,
                'name' => $documentType->name,
                'description' => $documentType->description,
                'amount' => $documentType->amount,
                'fields' => json_decode($documentType->fields, true)
            ]
        ]);
    }
}