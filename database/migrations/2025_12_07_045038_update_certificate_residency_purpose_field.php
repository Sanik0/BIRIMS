<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::table('document_type')
            ->where('name', 'Barangay Certificate of Residency')
            ->update([
                'fields' => json_encode([
                    [
                        'name' => 'full_name',
                        'label' => 'Full Name',
                        'type' => 'text',
                        'placeholder' => 'Enter full name',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ],
                    [
                        'name' => 'age',
                        'label' => 'Age',
                        'type' => 'number',
                        'placeholder' => 'Enter age',
                        'required' => true,
                        'validation' => 'required|integer|min:1|max:150',
                        'max_width' => '150px'
                    ],
                    [
                        'name' => 'years_resided',
                        'label' => 'Years of Residency',
                        'type' => 'number',
                        'placeholder' => 'Enter years',
                        'required' => true,
                        'validation' => 'required|integer|min:0',
                        'max_width' => '150px'
                    ],
                    [
                        'name' => 'purpose',
                        'label' => 'Purpose',
                        'type' => 'select',
                        'placeholder' => 'Select purpose',
                        'required' => true,
                        'validation' => 'required|string|max:255',
                        'options' => [
                            'Employment',
                            'School Requirements',
                            'Bank Transaction',
                            'Loan Application',
                            'Government Transaction',
                            'Postal ID Application',
                            'Driver\'s License Application',
                            'Passport Application',
                            'NBI Clearance',
                            'Police Clearance',
                            'Business Permit',
                            'SSS/GSIS Transaction',
                            'PhilHealth Transaction',
                            'Pag-IBIG Transaction',
                            'Scholarship Application',
                            'Visa Application',
                            'Travel Purpose',
                            'Legal Matters',
                            'Court Hearing',
                            'Insurance Claim',
                            'Hospital Admission',
                            'Medical Assistance',
                            'Voter Registration',
                            'Senior Citizen ID',
                            'PWD ID Application',
                            'Barangay Clearance Requirement',
                            'Others'
                        ]
                    ],
                    [
                        'name' => 'issue_day',
                        'label' => 'Day',
                        'type' => 'number',
                        'placeholder' => 'Day',
                        'required' => true,
                        'validation' => 'required|integer|min:1|max:31',
                        'max_width' => '100px'
                    ],
                    [
                        'name' => 'issue_month',
                        'label' => 'Month',
                        'type' => 'text',
                        'placeholder' => 'Month',
                        'required' => true,
                        'validation' => 'required|string|max:50',
                        'max_width' => '150px'
                    ],
                    [
                        'name' => 'issue_year',
                        'label' => 'Year',
                        'type' => 'number',
                        'placeholder' => 'Year',
                        'required' => true,
                        'validation' => 'required|integer|min:1900|max:2100',
                        'max_width' => '120px'
                    ],
                    [
                        'name' => 'or_number',
                        'label' => 'OR Number',
                        'type' => 'text',
                        'placeholder' => 'Enter OR number',
                        'required' => true,
                        'validation' => 'required|string|max:100',
                        'max_width' => '200px'
                    ],
                    [
                        'name' => 'payment_date',
                        'label' => 'Payment Date',
                        'type' => 'date',
                        'placeholder' => 'Select date',
                        'required' => true,
                        'validation' => 'required|date'
                    ]
                ]),
                'updated_at' => now()
            ]);
    }

    public function down()
    {
        // Revert back to text input if needed
        DB::table('document_type')
            ->where('name', 'Barangay Certificate of Residency')
            ->update([
                'fields' => json_encode([
                    [
                        'name' => 'full_name',
                        'label' => 'Full Name',
                        'type' => 'text',
                        'placeholder' => 'Enter full name',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ],
                    [
                        'name' => 'age',
                        'label' => 'Age',
                        'type' => 'number',
                        'placeholder' => 'Enter age',
                        'required' => true,
                        'validation' => 'required|integer|min:1|max:150',
                        'max_width' => '150px'
                    ],
                    [
                        'name' => 'years_resided',
                        'label' => 'Years of Residency',
                        'type' => 'number',
                        'placeholder' => 'Enter years',
                        'required' => true,
                        'validation' => 'required|integer|min:0',
                        'max_width' => '150px'
                    ],
                    [
                        'name' => 'purpose',
                        'label' => 'Purpose',
                        'type' => 'text',  // ← Back to text
                        'placeholder' => 'Enter purpose',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ],
                    [
                        'name' => 'issue_day',
                        'label' => 'Day',
                        'type' => 'number',
                        'placeholder' => 'Day',
                        'required' => true,
                        'validation' => 'required|integer|min:1|max:31',
                        'max_width' => '100px'
                    ],
                    [
                        'name' => 'issue_month',
                        'label' => 'Month',
                        'type' => 'text',
                        'placeholder' => 'Month',
                        'required' => true,
                        'validation' => 'required|string|max:50',
                        'max_width' => '150px'
                    ],
                    [
                        'name' => 'issue_year',
                        'label' => 'Year',
                        'type' => 'number',
                        'placeholder' => 'Year',
                        'required' => true,
                        'validation' => 'required|integer|min:1900|max:2100',
                        'max_width' => '120px'
                    ],
                    [
                        'name' => 'or_number',
                        'label' => 'OR Number',
                        'type' => 'text',
                        'placeholder' => 'Enter OR number',
                        'required' => true,
                        'validation' => 'required|string|max:100',
                        'max_width' => '200px'
                    ],
                    [
                        'name' => 'payment_date',
                        'label' => 'Payment Date',
                        'type' => 'date',
                        'placeholder' => 'Select date',
                        'required' => true,
                        'validation' => 'required|date'
                    ]
                ]),
                'updated_at' => now()
            ]);
    }
};