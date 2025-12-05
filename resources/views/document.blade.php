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
                 <div class="h-[50px] w-[50px] rounded-[50%] bg-orange-600"></div>
             </div>
             <div class="flex items-center gap-[20px]">
                 <div class="h-[40px] w-[40px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                     <img class="w-full h-full object-center object-cover" src="{{asset('images/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg')}}" alt="">
                 </div>
                 <a href="#" class="group rounded-[4px] py-[7px] px-[8px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center gap-[12px]">
                     <svg class="h-[25px] w-[25px]  group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px"
                         viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                         <path
                             d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                     </svg>
                     <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
                 </a>
             </div>
         </section>
         <main class="w-full h-[100vh] sm:pl-[290px] sm:pr-[20px] flex flex-col gap-[30px] transition-all duration-300">
             <div class="flex w-full items-start justify-between py-[25px] border-b-[1px] border-[#D4D4D8] px-[15px] sm:px-[0]">
                 <div class="flex items-center gap-[10px] max-w-[579px]">
                     <div class="flex flex-col">
                         <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Verify Account</h1>
                         <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing
                             elit, sed do eiusmod tempor incididunt ut
                              labore et dolore </p>
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
             let currentDocumentId = {{ $documentTypes->first()?->document_type_id ?? 'null' }};

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
                             renderFields(data.document.fields);
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

                     if (field.type === 'select') {
                         input = document.createElement('select');
                         input.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500';

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
                     } else if (field.type === 'textarea') {
                         input = document.createElement('textarea');
                         input.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500';
                         input.rows = 4;
                     } else {
                         input = document.createElement('input');
                         input.type = field.type;
                         input.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500';

                         if (field.max_width) {
                             input.style.maxWidth = field.max_width;
                         }
                     }

                     input.name = field.name;
                     input.placeholder = field.placeholder || '';

                     if (field.required) {
                         input.required = true;
                     }

                     // Set default value for date fields
                     if (field.type === 'date' && !input.value) {
                         input.value = new Date().toISOString().split('T')[0];
                     }

                     fieldWrapper.appendChild(label);
                     fieldWrapper.appendChild(input);
                     container.appendChild(fieldWrapper);
                 });
             }
         </script>
     </body>

     </html>