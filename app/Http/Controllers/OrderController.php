<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Document type configurations
    private $documentConfigs = [
        'certificate_of_residency' => [
            'name' => 'Certificate of Residency',
            'amount' => 50,
            'fields' => ['full_name', 'age', 'years_residency', 'purpose', 'mode_payment', 'contact']
        ],
        'barangay_clearance' => [
            'name' => 'Barangay Clearance',
            'amount' => 100,
            'fields' => ['full_name', 'address', 'civil_status', 'purpose', 'valid_until', 'mode_payment', 'contact']
        ],
        'certificate_of_indigency' => [
            'name' => 'Certificate of Indigency',
            'amount' => 0,
            'fields' => ['full_name', 'age', 'address', 'occupation', 'monthly_income', 'num_family_members', 'purpose', 'mode_payment', 'contact']
        ],
        'barangay_id' => [
            'name' => 'Barangay ID',
            'amount' => 150,
            'fields' => ['full_name', 'address', 'gender', 'civil_status', 'date', 'month', 'year', 'mode_payment', 'contact']
        ],
        'business_permit' => [
            'name' => 'Business Permit Clearance',
            'amount' => 200,
            'fields' => ['full_name', 'address', 'purpose', 'mode_payment', 'contact']
        ]
    ];

    public function index()
    {
        $orders = DB::table('order')
            ->where('user_id', Auth::id())
            ->leftJoin('order_information', 'order.order_information_id', '=', 'order_information.order_information_id')
            ->select('order.*', 'order_information.*')
            ->orderBy('order.ordered_at', 'desc')
            ->get();

        return view('orders', compact('orders'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('document', compact('user'));
    }

    public function store(Request $request)
    {
        // Validate document type exists
        $documentType = $request->input('document_type');
        
        if (!isset($this->documentConfigs[$documentType])) {
            return back()->withErrors(['error' => 'Invalid document type selected.']);
        }

        $config = $this->documentConfigs[$documentType];

        // Build validation rules based on required fields
        $validationRules = [
            'document_type' => 'required|string'
        ];

        foreach ($config['fields'] as $fieldName) {
            $validationRules[$fieldName] = 'required|string|max:255';
        }

        // Validate
        $validated = $request->validate($validationRules);

        try {
            DB::beginTransaction();

            // Calculate amount
            $baseAmount = $config['amount'];
            $actualAmount = $baseAmount;

            // Educational purpose discount
            if (isset($validated['purpose']) && $validated['purpose'] === 'Educational Purpose') {
                $actualAmount = 0;
            }

            // Delivery fee
            if (isset($validated['mode_payment']) && $validated['mode_payment'] === 'Cash on Delivery') {
                $actualAmount += 50;
            }

            // Insert into order_information
            $orderInfo = [];
            
            foreach ($config['fields'] as $fieldName) {
                if (isset($validated[$fieldName])) {
                    $orderInfo[$fieldName] = $validated[$fieldName];
                }
            }
            
            $orderInfo['amount'] = $actualAmount;
            $orderInfo['submitted_at'] = now();
            $orderInfo['updated_at'] = now();

            $orderInformationId = DB::table('order_information')->insertGetId($orderInfo);

            // Create order
            DB::table('order')->insert([
                'user_id' => Auth::id(),
                'document_type' => $config['name'],
                'order_information_id' => $orderInformationId,
                'amount' => $actualAmount,
                'status' => 'Pending',
                'ordered_at' => now(),
            ]);

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
            ->where('order.order_id', $id)
            ->where('order.user_id', Auth::id())
            ->leftJoin('order_information', 'order.order_information_id', '=', 'order_information.order_information_id')
            ->select('order.*', 'order_information.*')
            ->first();

        if (!$order) {
            abort(404, 'Order not found');
        }

        return view('document-view', compact('order'));
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

            // Delete order_information
            if ($order->order_information_id) {
                DB::table('order_information')
                    ->where('order_information_id', $order->order_information_id)
                    ->delete();
            }
            
            // Delete order
            DB::table('order')->where('order_id', $id)->delete();

            DB::commit();

            return redirect()->route('home')
                ->with('success', 'Order deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to delete order: ' . $e->getMessage()]);
        }
    }
}