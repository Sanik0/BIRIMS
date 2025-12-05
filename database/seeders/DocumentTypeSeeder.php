<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
    public function run()
    {
        $documentTypes = [
            [
                'name' => 'Barangay Certificate of Residency',
                'description' => 'Certificate to whom it may concern',
                'amount' => 50.00,
                'is_active' => true,
                'fields' => json_encode([
                    [
                        'name' => 'full_name',
                        'label' => 'Buong Pangalan',
                        'type' => 'text',
                        'placeholder' => 'Buong Pangalan',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ],
                    [
                        'name' => 'age',
                        'label' => 'Edad',
                        'type' => 'number',
                        'placeholder' => 'Edad',
                        'required' => true,
                        'validation' => 'required|integer|min:1|max:150',
                        'max_width' => '50px'
                    ],
                    [
                        'name' => 'years_resided',
                        'label' => 'Taon ng Paninirahan',
                        'type' => 'number',
                        'placeholder' => 'Taon',
                        'required' => true,
                        'validation' => 'required|integer|min:0',
                        'max_width' => '50px'
                    ],
                    [
                        'name' => 'purpose',
                        'label' => 'Layunin',
                        'type' => 'text',
                        'placeholder' => 'Layunin',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ],
                    [
                        'name' => 'issue_day',
                        'label' => 'Araw',
                        'type' => 'number',
                        'placeholder' => 'Day',
                        'required' => true,
                        'validation' => 'required|integer|min:1|max:31',
                        'max_width' => '50px'
                    ],
                    [
                        'name' => 'issue_month',
                        'label' => 'Buwan',
                        'type' => 'text',
                        'placeholder' => 'Month',
                        'required' => true,
                        'validation' => 'required|string|max:50',
                        'max_width' => '100px'
                    ],
                    [
                        'name' => 'issue_year',
                        'label' => 'Taon',
                        'type' => 'number',
                        'placeholder' => 'Year',
                        'required' => true,
                        'validation' => 'required|integer|min:1900|max:2100',
                        'max_width' => '70px'
                    ],
                    [
                        'name' => 'or_number',
                        'label' => 'OR Number',
                        'type' => 'text',
                        'placeholder' => 'OR No.',
                        'required' => true,
                        'validation' => 'required|string|max:100',
                        'max_width' => '100px'
                    ],
                    [
                        'name' => 'payment_date',
                        'label' => 'Petsa ng Pagbayad',
                        'type' => 'date',
                        'placeholder' => 'araw',
                        'required' => true,
                        'validation' => 'required|date'
                    ]
                ]),
                'template' => 'barangay_certificate',
                'created_at' => now()
            ],
            [
                'name' => 'Barangay Clearance',
                'description' => 'Clearance for legal purposes',
                'amount' => 100.00,
                'is_active' => true,
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
                        'name' => 'address',
                        'label' => 'Address',
                        'type' => 'text',
                        'placeholder' => 'Complete Address',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ],
                    [
                        'name' => 'civil_status',
                        'label' => 'Civil Status',
                        'type' => 'select',
                        'placeholder' => 'Select civil status',
                        'required' => true,
                        'validation' => 'required|string',
                        'options' => ['Single', 'Married', 'Widowed', 'Separated']
                    ],
                    [
                        'name' => 'purpose',
                        'label' => 'Purpose',
                        'type' => 'text',
                        'placeholder' => 'Purpose of clearance',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ],
                    [
                        'name' => 'valid_until',
                        'label' => 'Valid Until',
                        'type' => 'date',
                        'required' => true,
                        'validation' => 'required|date'
                    ]
                ]),
                'template' => 'barangay_clearance',
                'created_at' => now()
            ],
            [
                'name' => 'Certificate of Indigency',
                'description' => 'Certificate for low-income residents',
                'amount' => 30.00,
                'is_active' => true,
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
                        'placeholder' => 'Age',
                        'required' => true,
                        'validation' => 'required|integer|min:1|max:150'
                    ],
                    [
                        'name' => 'monthly_income',
                        'label' => 'Monthly Income',
                        'type' => 'number',
                        'placeholder' => 'Monthly income in PHP',
                        'required' => true,
                        'validation' => 'required|numeric|min:0'
                    ],
                    [
                        'name' => 'family_members',
                        'label' => 'Number of Family Members',
                        'type' => 'number',
                        'placeholder' => 'Number of family members',
                        'required' => true,
                        'validation' => 'required|integer|min:1'
                    ],
                    [
                        'name' => 'purpose',
                        'label' => 'Purpose',
                        'type' => 'text',
                        'placeholder' => 'Purpose of certificate',
                        'required' => true,
                        'validation' => 'required|string|max:255'
                    ]
                ]),
                'template' => 'certificate_indigency',
                'created_at' => now()
            ]
        ];

        DB::table('document_type')->insert($documentTypes);
    }
}