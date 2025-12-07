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
                 <div class="sm:flex hidden gap-[20px]">
                     <div class="h-[50px] w-[50px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                         <img class="w-full h-full object-center object-cover" src="{{asset('images/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg')}}" alt="">
                     </div>
                     <a href="#" class="group rounded-[4px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] px-[20px] flex items-center gap-[12px]">
                         <svg class="h-[25px] w-[25px]  group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px"
                             viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                             <path
                                 d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                         </svg>
                         <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
                     </a>
                 </div>
             </div>

             <section class="w-full items-center justify-center flex">
                 <div class="container mx-auto px-4 py-8">

                     {{-- Document Type Selection --}}
                     <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                         <label class="block text-lg font-semibold text-gray-700 mb-4">Select Document Type</label>
                         <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                             @foreach($documentTypes as $docType)
                             <div class="border-2 rounded-lg p-4 cursor-pointer transition-all hover:border-orange-500 hover:shadow-lg document-type-card {{ $loop->first ? 'border-orange-500' : 'border-gray-200' }}"
                                 data-document-id="{{ $docType->document_type_id }}"
                                 onclick="selectDocumentType({{ $docType->document_type_id }})">
                                 <h3 class="font-bold text-lg mb-2">{{ $docType->name }}</h3>
                                 <p class="text-gray-600 text-sm mb-3">{{ $docType->description }}</p>
                                 <p class="text-green-600 font-semibold">₱{{ number_format($docType->amount, 2) }}</p>
                             </div>
                             @endforeach
                         </div>
                     </div>

                     {{-- Dynamic Form --}}
                     <form action="{{ route('document.store') }}" method="POST" class="bg-white rounded-lg shadow-md p-6">
                         @csrf

                         <input type="hidden" name="document_type_id" id="selected_document_type" value="{{ $documentTypes->first()->document_type_id ?? '' }}">

                         <div id="dynamic-fields-container">
                             {{-- Fields will be loaded here via JavaScript --}}
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

                         {{-- Success Message --}}
                         @if (session('success'))
                         <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mt-6">
                             <strong class="font-bold">Success!</strong>
                             <p>{{ session('success') }}</p>
                         </div>
                         @endif

                         <div class="flex justify-end mt-8 gap-4">
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
                 </div>


             </section>
         </main>
         <script>
             // Pass user data from Laravel to JavaScript - DECLARE ONCE
             const userData = {
                 user_fullname: "{{ auth()->user()->firstname ?? '' }} {{ auth()->user()->middlename ? strtoupper(substr(auth()->user()->middlename, 0, 1)) . '.' : '' }} {{ auth()->user()->lastname ?? '' }}".trim(),
                 user_age: {
                     {
                         auth() - > user() - > birthdate ? \Carbon\ Carbon::parse(auth() - > user() - > birthdate) - > age : 0
                     }
                 },
                 user_address: "{{ auth()->user()->address ?? '' }}",
                 user_civil_status: "{{ auth()->user()->civil_status ?? '' }}"
             };

             let currentDocumentId = document.getElementById('selected_document_type')?.value || null;
             let currentBaseAmount = 0;

             // Auto-populate fields when document is loaded or changed
             function autoPopulateFields(fields) {
                 fields.forEach(field => {
                     if (field.auto_populate && userData[field.auto_populate]) {
                         const element = document.querySelector(`[name="${field.name}"]`);
                         if (element) {
                             element.value = userData[field.auto_populate];

                             // Trigger change event for any dependencies
                             element.dispatchEvent(new Event('change'));
                             element.dispatchEvent(new Event('input'));
                         }
                     }
                 });
             }

             // Load fields on page load
             document.addEventListener('DOMContentLoaded', function() {
                 if (currentDocumentId) {
                     loadDocumentFields(currentDocumentId);
                 }
             });

             function selectDocumentType(documentId) {
                 currentDocumentId = documentId;
                 document.getElementById('selected_document_type').value = documentId;

                 // Update card styles
                 document.querySelectorAll('.document-type-card').forEach(card => {
                     if (card.dataset.documentId == documentId) {
                         card.classList.add('border-orange-500');
                         card.classList.remove('border-gray-200');

                         // Get and store the base amount from this card
                         const amountText = card.querySelector('.text-green-600').textContent;
                         currentBaseAmount = parseFloat(amountText.replace('₱', '').replace(',', ''));
                     } else {
                         card.classList.remove('border-orange-500');
                         card.classList.add('border-gray-200');
                     }
                 });

                 // Load the fields for this document type
                 loadDocumentFields(documentId);
             }

             function loadDocumentFields(documentId) {
                 fetch(`/api/document-fields/${documentId}`)
                     .then(response => response.json())
                     .then(data => {
                         if (data.success) {
                             // Store the base amount
                             currentBaseAmount = parseFloat(data.document.amount);
                             renderFields(data.document.fields);

                             // Auto-populate after fields are rendered
                             setTimeout(() => {
                                 autoPopulateFields(data.document.fields);
                             }, 100);
                         }
                     })
                     .catch(error => {
                         console.error('Error loading fields:', error);
                     });
             }

             function renderFields(fields) {
                 const container = document.getElementById('dynamic-fields-container');
                 container.innerHTML = '';

                 fields.forEach(field => {
                     // Skip display/computed fields - we'll handle them separately
                     if (field.type === 'display' && field.computed) {
                         return;
                     }

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
                         defaultOption.textContent = field.placeholder || 'Select an option';
                         input.appendChild(defaultOption);

                         field.options.forEach(option => {
                             const opt = document.createElement('option');
                             opt.value = option;
                             opt.textContent = option;
                             input.appendChild(opt);
                         });

                         // Add event listener for payment_mode field
                         if (field.name === 'payment_mode') {
                             input.addEventListener('change', function() {
                                 const purposeField = document.querySelector('[name="purpose"]');
                                 calculateTotalAmount(this.value, purposeField?.value);
                             });
                         }

                         // Add event listener for purpose field
                         if (field.name === 'purpose') {
                             input.addEventListener('change', function() {
                                 const paymentModeField = document.querySelector('[name="payment_mode"]');
                                 calculateTotalAmount(paymentModeField?.value, this.value);
                             });
                         }
                     } else if (field.type === 'textarea') {
                         input = document.createElement('textarea');
                         input.className = baseInputClass;
                         input.rows = 4;
                     } else {
                         input = document.createElement('input');
                         input.type = field.type;
                         input.className = baseInputClass;
                     }

                     input.name = field.name;
                     input.placeholder = field.placeholder || '';

                     if (field.required) {
                         input.required = true;
                     }

                     // Check for readonly fields
                     if (field.readonly) {
                         input.readOnly = true;
                         input.className += ' bg-gray-100 cursor-not-allowed';
                     }

                     // Auto-populate fields
                     if (field.auto_populate) {
                         const today = new Date();

                         // Date auto-population
                         if (field.auto_populate === 'current_day') {
                             input.value = today.getDate();
                         } else if (field.auto_populate === 'current_month') {
                             const months = ['January', 'February', 'March', 'April', 'May', 'June',
                                 'July', 'August', 'September', 'October', 'November', 'December'
                             ];
                             input.value = months[today.getMonth()];
                         } else if (field.auto_populate === 'current_year') {
                             input.value = today.getFullYear();
                         }
                         // User data auto-population
                         else if (field.auto_populate === 'user_fullname' && typeof userData !== 'undefined') {
                             input.value = userData.user_fullname || '';
                         } else if (field.auto_populate === 'user_age' && typeof userData !== 'undefined') {
                             input.value = userData.user_age || '';
                         } else if (field.auto_populate === 'user_address' && typeof userData !== 'undefined') {
                             input.value = userData.user_address || '';
                         } else if (field.auto_populate === 'user_civil_status' && typeof userData !== 'undefined') {
                             input.value = userData.user_civil_status || '';
                         }
                     }

                     // Apply max_width only for specific short fields (like phone, zip codes)
                     // and ensure minimum width of 250px
                     if (field.max_width) {
                         const wrapper = document.createElement('div');
                         wrapper.style.maxWidth = field.max_width;
                         wrapper.style.minWidth = '250px'; // Ensure minimum readable width
                         wrapper.appendChild(input);

                         fieldWrapper.appendChild(label);
                         fieldWrapper.appendChild(wrapper);
                     } else {
                         fieldWrapper.appendChild(label);
                         fieldWrapper.appendChild(input);
                     }

                     // Set default value for date fields
                     if (field.type === 'date' && !input.value) {
                         input.value = new Date().toISOString().split('T')[0];
                     }

                     container.appendChild(fieldWrapper);
                 });
             }

             function calculateTotalAmount(paymentMode, purpose) {
                 // Check if purpose is Educational - if so, base amount is free
                 let baseAmount = currentBaseAmount;
                 const isEducational = purpose === 'Educational Purpose';

                 if (isEducational) {
                     baseAmount = 0;
                 }

                 const deliveryFee = paymentMode === 'Cash on Delivery' ? 50 : 0;
                 const totalAmount = baseAmount + deliveryFee;

                 // Update or create the total display
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

                 displayDiv.innerHTML = `
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-md font-medium text-gray-600">Base Amount:</span>
                    <span class="text-lg font-semibold ${isEducational ? 'text-green-600 line-through' : 'text-gray-700'}">
                        ₱${currentBaseAmount.toFixed(2)}
                        ${isEducational ? '<span class="ml-2 text-green-600 no-underline font-bold">FREE</span>' : ''}
                    </span>
                </div>
                ${isEducational ? `
                <div class="flex items-start gap-2 bg-green-100 p-3 rounded-lg border border-green-300">
                    <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <p class="text-sm text-green-700 font-medium">Educational Purpose discount applied! Base fee waived.</p>
                </div>
                ` : ''}
                ${deliveryFee > 0 ? `
                <div class="flex justify-between items-center">
                    <span class="text-md font-medium text-gray-600">Delivery Fee:</span>
                    <span class="text-lg font-semibold text-orange-600">₱${deliveryFee.toFixed(2)}</span>
                </div>
                <hr class="border-gray-300">
                ` : ''}
                <div class="flex justify-between items-center pt-2">
                    <span class="text-lg font-bold text-gray-800">Total Amount to Pay:</span>
                    <span class="text-3xl font-bold text-green-600">₱${total.toFixed(2)}</span>
                </div>
            </div>
        `;
             }
         </script>
     </body>

     </html>