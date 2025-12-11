     <!-- header section -->
     @include('shared.header')

     <body class="relative">
         <!-- sidebar section -->
         @include('shared.sidebar')
         <!-- mobile sidebar section -->
         @include('shared.mobile-sidebar')
         <section class="w-full items-center flex sm:hidden px-[15px] py-[10px] border-b-[1px] border-b-gray-300 justify-between">
             <div class="flex gap-[10px] items-center">
                 <svg id="openMenuBtn" class="h-[50px] w-[50px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                     <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                 </svg>
             </div>
              <div class="flex items-center gap-[20px]">
              <div class="rounded-[50%] h-[50px] w-[50px] min-w-[50px] bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                  <span class="text-white text-[20px] font-bold">
                      {{ strtoupper(substr(auth()->user()->firstname, 0, 1)) }}{{ strtoupper(substr(auth()->user()->lastname, 0, 1)) }}
                  </span>
              </div>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="group rounded-[4px] py-[7px] px-[8px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center gap-[12px] w-full cursor-pointer">
                      <svg class="h-[25px] w-[25px] group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                          <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                      </svg>
                      <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
                  </button>
              </form>
          </div>
         </section>
         <main class="w-full h-[100vh] sm:pl-[290px] sm:pr-[20px] flex flex-col gap-[30px] transition-all duration-300">
             <div class="flex w-full items-start justify-between py-[25px] border-b-[1px] border-[#D4D4D8] px-[15px] sm:px-[0]">
                 <div class="flex items-center gap-[10px] max-w-[579px]">
                     <div class="flex flex-col">
                         <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Request Documents</h1>
                         <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">
                             Request official documents issued by the Barangay such as Certificates of Residency,
                             Indigency, Clearance, and more.
                         </p>
                     </div>
                 </div>
                 <div class="sm:flex items-center hidden gap-[20px]">
                  <div class="rounded-[50%] h-[50px] w-[50px] min-w-[50px] bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                      <span class="text-white text-[20px] font-bold">
                          {{ strtoupper(substr(auth()->user()->firstname, 0, 1)) }}{{ strtoupper(substr(auth()->user()->lastname, 0, 1)) }}
                      </span>
                  </div>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="group rounded-[4px] py-[7px] px-[8px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center gap-[12px] w-full cursor-pointer">
                          <svg class="h-[25px] w-[25px] group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                              <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                          </svg>
                          <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
                      </button>
                  </form>
              </div>
             </div>

             <section class="w-full items-center justify-center flex">
                 <div class="container mx-auto px-4 py-8">
                     @if(!auth()->user()->verification || auth()->user()->verification->status !== 'verified')
                     <!-- Not Verified State -->
                     <div class="w-full max-w-2xl mx-auto">
                         <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-[20px] border-[2px] border-orange-200 p-[32px] shadow-lg">

                             <!-- Header -->
                             <div class="text-center mb-[32px]">
                                 <div class="w-[80px] h-[80px] mx-auto mb-[20px] bg-gradient-to-br from-orange-500 to-orange-600 rounded-[20px] flex items-center justify-center shadow-lg">
                                     <svg class="w-[40px] h-[40px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                         <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" />
                                     </svg>
                                 </div>
                                 <h1 class="text-[36px] font-bold text-gray-800 mb-[12px]">Verification Required</h1>
                                 <p class="text-[16px] text-gray-600 leading-relaxed max-w-[600px] mx-auto">
                                     You need to verify your account before you can request barangay documents. Please complete the verification process to access this feature.
                                 </p>
                             </div>

                             <!-- Action Button -->
                             <div class="mt-[24px] flex flex-col sm:flex-row gap-[16px]">
                                 <a href="{{ route('verify.index') }}" class="w-full flex items-center justify-center gap-[8px] px-[24px] py-[14px] text-[18px] text-white font-semibold rounded-[12px] bg-orange-600 hover:bg-orange-700 transition-all duration-300">
                                     <svg class="w-[25px] h-[25px] fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                         <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
                                     </svg>
                                     Verify My Account
                                 </a>
                                 <a href="{{ route('home') }}" class="w-full flex items-center justify-center gap-[8px] px-[24px] py-[14px] text-[18px] text-orange-600 font-semibold rounded-[12px] border-[2px] border-orange-600 hover:bg-orange-50 transition-all duration-300">
                                     Back to Home
                                 </a>
                             </div>
                         </div>
                     </div>
                     @else

                     {{-- Dynamic Form --}}
                     <form action="{{ route('document.store') }}" method="POST" class="bg-white rounded-lg shadow-md p-6">
                         @csrf

                         <h2 class="text-2xl font-bold mb-6 text-gray-800">Request Barangay Document</h2>

                         {{-- Document Type Selection --}}
                         <div class="mb-6">
                             <label class="block text-sm font-semibold text-gray-700 mb-2">
                                 Document Type <span class="text-red-500">*</span>
                             </label>
                             <select name="document_type" id="document_type" required
                                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                                 onchange="loadFieldsForDocumentType(this.value)">
                                 <option value="">Select Document Type</option>
                                 <option value="certificate_of_residency">Certificate of Residency</option>
                                 <option value="barangay_clearance">Barangay Clearance</option>
                                 <option value="certificate_of_indigency">Certificate of Indigency</option>
                                 <option value="certificate_of_good_moral">Certificate of Good Moral</option>
                             </select>
                         </div>

                         {{-- Dynamic Fields Container --}}
                         <div id="dynamic-fields-container">
                             <p class="text-gray-500 text-center py-8">Please select a document type to continue</p>
                         </div>

                         {{-- Error Messages --}}
                         @if ($errors->any())
                         <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-6">
                             <strong class="font-bold">Oops! Something went wrong:</strong>
                             <ul class="mt-2 list-disc list-inside">
                                 @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                         @endif
                         <div class="flex justify-end mt-8 gap-4" id="form-buttons" style="display: none;">
                             <a href="{{ route('home') }}"
                                 class="px-6 py-3 text-lg text-orange-500 font-medium rounded border border-orange-500 hover:bg-orange-50 transition-all">
                                 Cancel
                             </a>
                             <button type="submit"
                                 class="px-6 py-3 text-lg bg-orange-500 text-white font-medium rounded border border-orange-500 hover:bg-orange-700 transition-all">
                                 Submit Request
                             </button>
                         </div>
                     </form>
                     @endif
                 </div>
             </section>

             <script>
                 const userData = {
                     user_fullname: "{{ auth()->user()->firstname ?? '' }} {{ auth()->user()->middlename ? strtoupper(substr(auth()->user()->middlename, 0, 1)) . '.' : '' }} {{ auth()->user()->lastname ?? '' }}".trim(),
                     user_age: {{ auth()->user()->birthdate ? \Carbon\Carbon::parse(auth()->user()->birthdate)->age : 0 }},
                     user_address: "{{ auth()->user()->house_number ?? '' }} {{ auth()->user()->street ?? '' }}, Barangay San Bartolome, Quezon City, Metro Manila, Philippines".trim(),
                     user_civil_status: "{{ auth()->user()->civil_status ?? '' }}",
                     user_occupation: "{{ auth()->user()->occupation ?? '' }}"
                 };

                 console.log('User Data:', userData); // Debug log

                 let currentBaseAmount = 0;

                 const documentConfigs = {
                     certificate_of_residency: {
                         name: 'Certificate of Residency',
                         amount: 20,
                         fields: ['full_name', 'address', 'age', 'years_residency', 'purpose', 'mode_payment']
                     },
                     barangay_clearance: {
                         name: 'Barangay Clearance',
                         amount: 20,
                         fields: ['full_name', 'address', 'civil_status', 'purpose', 'valid_until', 'mode_payment']
                     },
                     certificate_of_indigency: {
                         name: 'Certificate of Indigency',
                         amount: 20,
                         fields: ['full_name', 'age', 'address', 'occupation', 'monthly_income', 'num_family_members', 'purpose', 'mode_payment']
                     },
                     certificate_of_good_moral: {
                        name: 'Certificate of Good Moral',
                        amount: 20,
                        fields: ['full_name', 'age', 'address', 'purpose', 'mode_payment']
                    },
                 };

                 const fieldDefinitions = {
                     full_name: {
                         label: 'Full Name',
                         type: 'text',
                         placeholder: 'Enter full name',
                         required: true,
                         auto_populate: 'user_fullname'
                     },
                     age: {
                         label: 'Age',
                         type: 'number',
                         placeholder: 'Enter age',
                         required: true,
                         auto_populate: 'user_age'
                     },
                     address: {
                         label: 'Address',
                         type: 'text',
                         placeholder: 'Complete Address',
                         required: true,
                         auto_populate: 'user_address'
                     },
                     gender: {
                         label: 'Gender',
                         type: 'select',
                         options: ['Male', 'Female'],
                         required: true
                     },
                     civil_status: {
                         label: 'Civil Status',
                         type: 'select',
                         options: ['single', 'married', 'widowed', 'separated'],
                         required: true,
                         auto_populate: 'user_civil_status'
                     },
                     years_residency: {
                         label: 'Years of Residency',
                         type: 'number',
                         placeholder: 'Enter years',
                         required: true
                     },
                     purpose: {
                         label: 'Purpose',
                         type: 'select',
                         options: ['Employment', 'Educational Purpose', 'Government Transaction', 'ID Application',
                             'Bank/Loan Transaction', 'Business Permit', 'Legal/Court Matters',
                             'Medical Assistance', 'Travel/Visa', 'Others'
                         ],
                         required: true
                     },
                     occupation: {
                         label: 'Occupation',
                         type: 'text',
                         placeholder: 'Enter occupation',
                         required: false,
                         auto_populate: 'user_occupation'
                     },
                     monthly_income: {
                         label: 'Monthly Income',
                         type: 'number',
                         placeholder: 'Enter monthly income',
                         required: false
                     },
                     valid_until: {
                         label: 'Valid Until',
                         type: 'date',
                         required: true
                     },
                     num_family_members: {
                         label: 'Number of Family Members',
                         type: 'number',
                         placeholder: 'Enter number',
                         required: false
                     },
                     date: {
                         label: 'Day',
                         type: 'number',
                         placeholder: 'DD',
                         required: true
                     },
                     month: {
                         label: 'Month',
                         type: 'text',
                         placeholder: 'Month',
                         required: true
                     },
                     year: {
                         label: 'Year',
                         type: 'number',
                         placeholder: 'YYYY',
                         required: true
                     },
                     mode_payment: {
                         label: 'Mode of Payment',
                         type: 'select',
                         options: ['Pay at Counter (Pick Up)', 'Cash on Delivery'],
                         required: true
                     },
                     contact: {
                         label: 'Contact Number',
                         type: 'text',
                         placeholder: 'Enter contact number (09XXXXXXXXX)',
                         required: false
                     }
                 };

                 function loadFieldsForDocumentType(documentType) {
                     if (!documentType) {
                         document.getElementById('dynamic-fields-container').innerHTML =
                             '<p class="text-gray-500 text-center py-8">Please select a document type to continue</p>';
                         document.getElementById('form-buttons').style.display = 'none';
                         return;
                     }

                     const config = documentConfigs[documentType];
                     currentBaseAmount = config.amount;

                     renderFields(config.fields);
                     document.getElementById('form-buttons').style.display = 'flex';
                 }

                 function renderFields(fieldNames) {
                     const container = document.getElementById('dynamic-fields-container');
                     container.innerHTML = '';

                     fieldNames.forEach(function(fieldName) {
                         const field = fieldDefinitions[fieldName];
                         if (!field) return;

                         const fieldWrapper = document.createElement('div');
                         fieldWrapper.className = 'mb-6';

                         const label = document.createElement('label');
                         label.className = 'block text-sm font-semibold text-gray-700 mb-2';
                         label.textContent = field.label;
                         if (field.required) {
                             const required = document.createElement('span');
                             required.className = 'text-red-500';
                             required.textContent = ' *';
                             label.appendChild(required);
                         }

                         let input;
                         const baseInputClass = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500';

                         if (field.type === 'select') {
                             input = document.createElement('select');
                             input.className = baseInputClass;

                             const defaultOption = document.createElement('option');
                             defaultOption.value = '';
                             defaultOption.textContent = 'Select ' + field.label;
                             input.appendChild(defaultOption);

                             field.options.forEach(function(option) {
                                 const opt = document.createElement('option');
                                 opt.value = option;
                                 opt.textContent = option;
                                 input.appendChild(opt);
                             });

                             if (fieldName === 'mode_payment') {
                                 input.addEventListener('change', function() {
                                     const purposeField = document.querySelector('[name="purpose"]');
                                     calculateTotalAmount(this.value, purposeField ? purposeField.value : null);
                                     toggleContactField(this.value);
                                 });
                             }

                             if (fieldName === 'purpose') {
                                 input.addEventListener('change', function() {
                                     const paymentModeField = document.querySelector('[name="mode_payment"]');
                                     calculateTotalAmount(paymentModeField ? paymentModeField.value : null, this.value);
                                 });
                             }
                         } else {
                             input = document.createElement('input');
                             input.type = field.type;
                             input.className = baseInputClass;
                             input.placeholder = field.placeholder || '';
                         }

                         input.name = fieldName;
                         if (field.required) input.required = true;

                         // Auto-populate logic
                         if (field.auto_populate && userData[field.auto_populate]) {
                             const valueToSet = userData[field.auto_populate];

                             if (field.type === 'select') {
                                 // Set value directly for select fields
                                 input.value = valueToSet;
                                 console.log(`Setting ${fieldName} to: ${valueToSet}, actual value: ${input.value}`); // Debug
                             } else {
                                 input.value = valueToSet;
                                 console.log(`Setting ${fieldName} to: ${valueToSet}`); // Debug
                             }
                         }

                         // In the renderFields function, after creating the input element, add this code:

                         // Default date value
                         if (field.type === 'date' && !input.value) {
                             if (fieldName === 'valid_until') {
                                 // Set to 6 months from today
                                 const sixMonthsLater = new Date();
                                 sixMonthsLater.setMonth(sixMonthsLater.getMonth() + 6);
                                 input.value = sixMonthsLater.toISOString().split('T')[0];
                                 input.readOnly = true;
                                 input.classList.add('bg-gray-100', 'cursor-not-allowed');
                             } else {
                                 input.value = new Date().toISOString().split('T')[0];
                             }
                         }

                         fieldWrapper.appendChild(label);
                         fieldWrapper.appendChild(input);
                         container.appendChild(fieldWrapper);
                     });
                 }

                 function toggleContactField(paymentMode) {
                     const container = document.getElementById('dynamic-fields-container');
                     let contactField = document.getElementById('contact-field-wrapper');

                     if (paymentMode === 'Cash on Delivery') {
                         if (!contactField) {
                             const field = fieldDefinitions['contact'];

                             contactField = document.createElement('div');
                             contactField.id = 'contact-field-wrapper';
                             contactField.className = 'mb-6';

                             const label = document.createElement('label');
                             label.className = 'block text-sm font-semibold text-gray-700 mb-2';
                             label.textContent = field.label;

                             const required = document.createElement('span');
                             required.className = 'text-red-500';
                             required.textContent = ' *';
                             label.appendChild(required);

                             const input = document.createElement('input');
                             input.type = field.type;
                             input.name = 'contact';
                             input.placeholder = field.placeholder;
                             input.required = true;
                             input.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500';
                             input.value = "{{ auth()->user()->contact ?? '' }}";

                             contactField.appendChild(label);
                             contactField.appendChild(input);

                             const totalDisplay = document.getElementById('total-amount-display');
                             if (totalDisplay) {
                                 container.insertBefore(contactField, totalDisplay);
                             } else {
                                 container.appendChild(contactField);
                             }
                         }
                     } else {
                         if (contactField) {
                             contactField.remove();
                         }
                     }
                 }

                 function calculateTotalAmount(paymentMode, purpose) {
                     let baseAmount = currentBaseAmount;
                     const isEducational = purpose === 'Educational Purpose';

                     if (isEducational) {
                         baseAmount = 0;
                     }

                     const deliveryFee = paymentMode === 'Cash on Delivery' ? 30 : 0;
                     const totalAmount = baseAmount + deliveryFee;

                     updateTotalDisplay(totalAmount, deliveryFee, baseAmount, isEducational);
                 }

                 function updateTotalDisplay(total, deliveryFee, baseAmount, isEducational) {
                     let displayDiv = document.getElementById('total-amount-display');

                     if (!displayDiv) {
                         displayDiv = document.createElement('div');
                         displayDiv.id = 'total-amount-display';
                         displayDiv.className = 'mt-6 p-6 bg-gradient-to-r from-green-50 to-green-100 border-2 border-green-500 rounded-lg shadow-md';

                         const container = document.getElementById('dynamic-fields-container');
                         container.appendChild(displayDiv);
                     }

                     displayDiv.innerHTML = '<div class="space-y-3">' +
                         '<div class="flex justify-between items-center">' +
                         '<span class="text-md font-medium text-gray-600">Base Amount:</span>' +
                         '<span class="text-lg font-semibold ' + (isEducational ? 'text-green-600 line-through' : 'text-gray-700') + '">' +
                         '₱' + currentBaseAmount.toFixed(2) +
                         (isEducational ? '<span class="ml-2 text-green-600 no-underline font-bold">FREE</span>' : '') +
                         '</span>' +
                         '</div>' +
                         (isEducational ? '<div class="flex items-start gap-2 bg-green-100 p-3 rounded-lg border border-green-300">' +
                             '<svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">' +
                             '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>' +
                             '</svg>' +
                             '<p class="text-sm text-green-700 font-medium">Educational Purpose discount applied! Base fee waived.</p>' +
                             '</div>' : '') +
                         (deliveryFee > 0 ? '<div class="flex justify-between items-center">' +
                             '<span class="text-md font-medium text-gray-600">Delivery Fee:</span>' +
                             '<span class="text-lg font-semibold text-orange-600">₱' + deliveryFee.toFixed(2) + '</span>' +
                             '</div><hr class="border-gray-300">' : '') +
                         '<div class="flex justify-between items-center pt-2">' +
                         '<span class="text-lg font-bold text-gray-800">Total Amount to Pay:</span>' +
                         '<span class="text-3xl font-bold text-green-600">₱' + total.toFixed(2) + '</span>' +
                         '</div>' +
                         '</div>';
                 }
             </script>
         </main>

     </body>

     </html>