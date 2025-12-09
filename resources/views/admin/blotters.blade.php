   <!-- header Section -->
   @include('admin.shared.header')
   <!-- modal add announcement Section -->
   <div id="addModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
       <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           <h3 class="font-bold text-[40px]">Verification Request</h3>
           <div class="flex flex-col gap-[5px] w-full">
               <p class="font-regular text-[20px] text-gray-500">Valid ID</p>
               <p class="font-regular text-[20px] text-gray-500">Juan Dela Cruz</p>
               <p class="font-regular text-[20px] text-gray-500">juandelacruz@gmail.com</p>
           </div>
           <div class="w-full rounded-[4px] overflow-hidden h-fit sm:h-[287px]">
               <img class="h-full w-full object-center justify-center" src="{{asset('images/Screenshot 2025-10-01 204358.png')}}" alt="">
           </div>
           <div class="flex flex-col w-full gap-[20px]">
               <button class="w-full cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Go Back</button>
           </div>
       </form>
   </div>
   <div id="deleteModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
       <form id="deleteForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           @csrf
           @method('DELETE')
           <h3 class="font-bold text-[40px]">Delete Blotter Report</h3>
           <div class="flex items-center justify-center w-full">
               <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete <span id="deleteBlotterName" class="text-[#EF4444]">this blotter report</span>? This action cannot be undone.</p>
           </div>
           <div class="flex flex-col w-full gap-[20px]">
               <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete</button>
               <div class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
           </div>
       </form>
   </div>
   <div id="editModal" class="modal w-full fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
       <form id="editForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           @csrf
           @method('PUT')
           <h3 class="font-bold text-[40px]">Update Status</h3>

           <div class="flex flex-col gap-[10px]">
               <label class="font-medium text-[18px] text-gray-600">Reporter:</label>
               <p id="edit_reporter_name" class="text-[20px] font-semibold"></p>
           </div>

           <div class="flex flex-col gap-[10px]">
               <label class="font-medium text-[18px] text-gray-600">Complaint:</label>
               <p id="edit_complaint" class="text-[16px]"></p>
           </div>

           <div class="flex flex-col w-full">
               <Label class="font-medium text-[18px]">Status:</Label>
               <select id="edit_status" name="status" required class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   <option value="pending">Pending</option>
                   <option value="resolved">Resolved</option>
                   <option value="rejected">Rejected</option>
               </select>
           </div>

           <div class="flex flex-col w-full gap-[20px]">
               <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Update Status</button>
               <div class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
           </div>
       </form>
   </div>
   <!-- modal edit announcement Section -->
   <div id="viewModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
       <div class="rounded-[4px] h-fit max-h-[90vh] overflow-y-auto bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[640px] gap-[20px]">
           <h3 class="font-bold text-[40px]">View Blotter Report</h3>

           <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px]">
               <div class="flex flex-col gap-[5px]">
                   <label class="font-medium text-[16px] text-gray-600">Reporter Name:</label>
                   <p id="view_reporter_name" class="text-[18px] font-semibold"></p>
               </div>
               <div class="flex flex-col gap-[5px]">
                   <label class="font-medium text-[16px] text-gray-600">Reporter Age:</label>
                   <p id="view_reporter_age" class="text-[18px]"></p>
               </div>
           </div>

           <div class="flex flex-col gap-[5px]">
               <label class="font-medium text-[16px] text-gray-600">Reporter Address:</label>
               <p id="view_reporter_address" class="text-[16px]"></p>
           </div>

           <div class="flex flex-col gap-[5px]">
               <label class="font-medium text-[16px] text-gray-600">Reporter Contact:</label>
               <p id="view_reporter_contact" class="text-[16px]"></p>
           </div>

           <hr class="my-[10px]">

           <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px]">
               <div class="flex flex-col gap-[5px]">
                   <label class="font-medium text-[16px] text-gray-600">Respondent Name:</label>
                   <p id="view_respondent_name" class="text-[18px] font-semibold"></p>
               </div>
               <div class="flex flex-col gap-[5px]">
                   <label class="font-medium text-[16px] text-gray-600">Respondent Age:</label>
                   <p id="view_respondent_age" class="text-[18px]"></p>
               </div>
           </div>

           <div class="flex flex-col gap-[5px]">
               <label class="font-medium text-[16px] text-gray-600">Respondent Address:</label>
               <p id="view_respondent_address" class="text-[16px]"></p>
           </div>

           <div class="flex flex-col gap-[5px]">
               <label class="font-medium text-[16px] text-gray-600">Respondent Contact:</label>
               <p id="view_respondent_contact" class="text-[16px]"></p>
           </div>

           <hr class="my-[10px]">

           <div class="flex flex-col gap-[5px]">
               <label class="font-medium text-[16px] text-gray-600">Complaint:</label>
               <p id="view_complaint" class="text-[16px]"></p>
           </div>

           <div class="flex flex-col gap-[5px]">
               <label class="font-medium text-[16px] text-gray-600">Description:</label>
               <p id="view_description" class="text-[16px]"></p>
           </div>

           <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px]">
               <div class="flex flex-col gap-[5px]">
                   <label class="font-medium text-[16px] text-gray-600">Incident Date:</label>
                   <p id="view_incident_date" class="text-[16px]"></p>
               </div>
               <div class="flex flex-col gap-[5px]">
                   <label class="font-medium text-[16px] text-gray-600">Incident Time:</label>
                   <p id="view_incident_time" class="text-[16px]"></p>
               </div>
           </div>

           <button class="cancelBtn w-full px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300">Close</button>
       </div>
   </div>


   <body class="relative">
       <!-- Alerts Modal -->
       @if (session('success'))
       <div id="successAlert" class="fixed top-0 left-0 w-full py-[20px] flex items-center justify-center z-50 opacity-0 -translate-y-full transition-all duration-500 ease-out">
           <div class="flex items-start sm:items-center bg-[#e1ffe7] p-4 mb-4 text-sm text-medium rounded-[8px] border border-[rgb(40,194,71)] shadow-lg" role="alert">
               <svg class="w-4 h-4 me-2 shrink-0 mt-0.5 sm:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                   <path class="stroke-[rgb(40,194,71)]" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
               </svg>
               <p class="text-[rgb(40,194,71)]">
                   <span class="font-medium me-1 text-[rgb(40,194,71)]">Success!</span> {{ session('success') }}
               </p>
           </div>
       </div>
       <script>
           document.addEventListener('DOMContentLoaded', function() {
               const alert = document.getElementById('successAlert');

               if (alert) {
                   setTimeout(() => {
                       alert.classList.remove('-translate-y-full', 'opacity-0');
                       alert.classList.add('translate-y-0', 'opacity-100');
                   }, 100);

                   setTimeout(() => {
                       alert.classList.remove('translate-y-0', 'opacity-100');
                       alert.classList.add('-translate-y-full', 'opacity-0');

                       setTimeout(() => {
                           alert.remove();
                       }, 500);
                   }, 3000);
               }
           });
       </script>
       @endif
       <!--sidebar section -->
       @include('admin.shared.sidebar')
       <!-- mobile sidebar section -->
       @include('admin.shared.mobile-sidebar')
       <!-- Main Section -->
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
                       <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Blotter Reports</h1>
                       <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">
                           Review, update, and manage incident reports submitted by residents to ensure accurate records and proper follow-up.
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

           <section class="w-full flex px-[15px] sm:px-[0] flex-col gap-[15px]">
               <div class="w-full items-center justify-between flex">
                   <form class="flex  w-full sm:w-fit items-center gap-[20px]">
                       <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                           <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                               <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                           </svg>
                           <select class="appearance-none focus:outline-none" name="" id="">
                               <option value="Filter">Filter By Street:</option>
                           </select>
                       </div>

                       <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-full sm:w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                           <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                               <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                           </svg>
                           <input class="w-full focus:outline-none" placeholder="Search" type="text">
                       </div>
                   </form>
               </div>

               <table class="w-full hidden sm:table border-collapse text-left border-[1px] border-gray-300 rounded-[4px]">
                   <thead>
                       <tr class="border-b-[1px] border-gray-300 bg-[#FFF7ED]">
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Complainant</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Complaint</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Date of incident</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Status</th>
                           <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($blotters as $blotter)
                       <tr class="border-b-[1px] border-gray-300 bg-white">
                           <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">{{ $blotter->reporter_name }}</td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $blotter->complaint }}</td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $blotter->incident_date }}</td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px]">
                               <span class="px-[10px] py-[3px] rounded-full text-[14px] font-medium
                                {{ $blotter->status == 'resolved' ? 'bg-green-100 text-green-600' : '' }}
                                {{ $blotter->status == 'rejected' ? 'bg-red-100 text-red-600' : '' }}
                                {{ $blotter->status == 'pending' ? 'bg-yellow-100 text-yellow-600' : '' }}">
                                   {{ ucfirst($blotter->status ?? 'pending') }}
                               </span>
                           </td>
                           <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                               <div data-modal="viewModal"
                                   data-blotter-id="{{ $blotter->id }}"
                                   data-reporter-name="{{ $blotter->reporter_name }}"
                                   data-reporter-address="{{ $blotter->reporter_address }}"
                                   data-reporter-contact="{{ $blotter->reporter_contact }}"
                                   data-reporter-age="{{ $blotter->reporter_age }}"
                                   data-respondent-name="{{ $blotter->respondent_name }}"
                                   data-respondent-address="{{ $blotter->respondent_address }}"
                                   data-respondent-contact="{{ $blotter->respondent_contact }}"
                                   data-respondent-age="{{ $blotter->respondent_age }}"
                                   data-complaint="{{ $blotter->complaint }}"
                                   data-description="{{ $blotter->description }}"
                                   data-incident-date="{{ $blotter->incident_date }}"
                                   data-incident-time="{{ $blotter->incident_time }}"
                                   class="viewBtn bg-blue-100 text-blue-500 border-blue-500 hover:bg-blue-200 cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                   <svg class="h-[20px] w-[20px] fill-blue-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                       <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                                   </svg>
                                   View
                               </div>
                               <div data-modal="editModal"
                                   data-blotter-id="{{ $blotter->id }}"
                                   data-reporter-name="{{ $blotter->reporter_name }}"
                                   data-respondent-name="{{ $blotter->respondent_name }}"
                                   data-complaint="{{ $blotter->complaint }}"
                                   data-incident-date="{{ $blotter->incident_date }}"
                                   data-status="{{ $blotter->status ?? 'pending' }}"
                                   class="editBtn bg-green-100 text-green-500 border-green-500 hover:bg-green-200 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                   <svg class="h-[20px] w-[20px] fill-green-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                       <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                   </svg>
                                   Edit
                               </div>
                               <div data-modal="deleteModal"
                                   data-blotter-id="{{ $blotter->id }}"
                                   data-reporter-name="{{ $blotter->reporter_name }}"
                                   class="deleteBtn bg-red-100 text-red-500 border-red-500 hover:bg-red-200 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                   <svg class="h-[20px] w-[20px] fill-red-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                       <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                   </svg>
                                   Delete
                               </div>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>

               <!-- Mobile appointments Cards -->
               <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                   <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                       <h6 class="text-[14px] text-gray-600 font-semibold">Complainant:</h6>
                       <p data-modal="addModal" class="addBtn text-[16px] font-medium">Juan Dela Cruz</p>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Respondent:</h6>
                       <p class="text-[16px] font-medium">Pedro Santos</p>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Complaint:</h6>
                       <p class="text-[16px] font-medium">Physical assault during argument</p>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Status:</h6>
                       <div class="font-regular text-[16px]">
                           <span class="px-[10px] py-[3px] rounded-full text-[14px] font-medium
                                {{ $blotter->status == 'resolved' ? 'bg-green-100 text-green-600' : '' }}
                                {{ $blotter->status == 'rejected' ? 'bg-red-100 text-red-600' : '' }}
                                {{ $blotter->status == 'pending' ? 'bg-yellow-100 text-yellow-600' : '' }}">
                               {{ ucfirst($blotter->status ?? 'pending') }}
                           </span>
                       </div>
                       <h6 class="text-[14px] text-gray-600 font-semibold">Action:</h6>
                       <div class="w-full flex items-center gap-[10px]">
                           <div data-modal="viewModal"
                               data-blotter-id="{{ $blotter->id }}"
                               data-reporter-name="{{ $blotter->reporter_name }}"
                               data-reporter-address="{{ $blotter->reporter_address }}"
                               data-reporter-contact="{{ $blotter->reporter_contact }}"
                               data-reporter-age="{{ $blotter->reporter_age }}"
                               data-respondent-name="{{ $blotter->respondent_name }}"
                               data-respondent-address="{{ $blotter->respondent_address }}"
                               data-respondent-contact="{{ $blotter->respondent_contact }}"
                               data-respondent-age="{{ $blotter->respondent_age }}"
                               data-complaint="{{ $blotter->complaint }}"
                               data-description="{{ $blotter->description }}"
                               data-incident-date="{{ $blotter->incident_date }}"
                               data-incident-time="{{ $blotter->incident_time }}"
                               class="viewBtn bg-blue-100 text-blue-500 border-blue-500 hover:bg-blue-200 cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                               <svg class="h-[20px] w-[20px] fill-blue-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                   <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                               </svg>
                               View
                           </div>
                           <div data-modal="editModal"
                               data-blotter-id="{{ $blotter->id }}"
                               data-reporter-name="{{ $blotter->reporter_name }}"
                               data-respondent-name="{{ $blotter->respondent_name }}"
                               data-complaint="{{ $blotter->complaint }}"
                               data-incident-date="{{ $blotter->incident_date }}"
                               data-status="{{ $blotter->status ?? 'pending' }}"
                               class="editBtn bg-green-100 text-green-500 border-green-500 hover:bg-green-200 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                               <svg class="h-[20px] w-[20px] fill-green-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                   <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                               </svg>
                               Edit
                           </div>
                           <div data-modal="deleteModal"
                               data-blotter-id="{{ $blotter->id }}"
                               data-reporter-name="{{ $blotter->reporter_name }}"
                               class="deleteBtn bg-red-100 text-red-500 border-red-500 hover:bg-red-200 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                               <svg class="h-[20px] w-[20px] fill-red-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                   <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                               </svg>
                               Delete
                           </div>
                       </div>
                   </div>

               </div>
           </section>

       </main>
       <script>
           document.addEventListener('DOMContentLoaded', function() {
               // 🔹 View button
               document.querySelectorAll('.viewBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const modal = document.getElementById('viewModal');

                       document.getElementById('view_reporter_name').textContent = this.getAttribute('data-reporter-name') || '';
                       document.getElementById('view_reporter_age').textContent = this.getAttribute('data-reporter-age') || 'N/A';
                       document.getElementById('view_reporter_address').textContent = this.getAttribute('data-reporter-address') || '';
                       document.getElementById('view_reporter_contact').textContent = this.getAttribute('data-reporter-contact') || '';
                       document.getElementById('view_respondent_name').textContent = this.getAttribute('data-respondent-name') || '';
                       document.getElementById('view_respondent_age').textContent = this.getAttribute('data-respondent-age') || 'N/A';
                       document.getElementById('view_respondent_address').textContent = this.getAttribute('data-respondent-address') || '';
                       document.getElementById('view_respondent_contact').textContent = this.getAttribute('data-respondent-contact') || '';
                       document.getElementById('view_complaint').textContent = this.getAttribute('data-complaint') || '';
                       document.getElementById('view_description').textContent = this.getAttribute('data-description') || '';
                       document.getElementById('view_incident_date').textContent = this.getAttribute('data-incident-date') || '';
                       document.getElementById('view_incident_time').textContent = this.getAttribute('data-incident-time') || '';

                       modal.classList.remove('hidden');
                       modal.classList.add('flex');
                   });
               });

               // 🔹 Edit button
               document.querySelectorAll('.editBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const blotterId = this.getAttribute('data-blotter-id');

                       if (!blotterId) {
                           console.error('No blotter ID found!');
                           return;
                       }

                       const editForm = document.getElementById('editForm');
                       const modal = document.getElementById('editModal');

                       if (!editForm) {
                           console.error('Edit form not found!');
                           return;
                       }

                       editForm.action = `/admin/blotters/${blotterId}`;

                       document.getElementById('edit_reporter_name').textContent = this.getAttribute('data-reporter-name') || '';
                       document.getElementById('edit_complaint').textContent = this.getAttribute('data-complaint') || '';
                       document.getElementById('edit_status').value = this.getAttribute('data-status') || 'pending';

                       modal.classList.remove('hidden');
                       modal.classList.add('flex');
                   });
               });

               // 🔹 Delete button
               document.querySelectorAll('.deleteBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const blotterId = this.getAttribute('data-blotter-id');
                       const reporterName = this.getAttribute('data-reporter-name');

                       if (!blotterId) {
                           console.error('No blotter ID found!');
                           return;
                       }

                       const deleteForm = document.getElementById('deleteForm');
                       const nameSpan = document.getElementById('deleteBlotterName');
                       const modal = document.getElementById('deleteModal');

                       deleteForm.action = `/admin/blotters/${blotterId}`;
                       if (nameSpan) nameSpan.textContent = reporterName + "'s";

                       modal.classList.remove('hidden');
                       modal.classList.add('flex');
                   });
               });

               // 🔹 Close modal
               document.querySelectorAll('.cancelBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const modal = this.closest('.modal');
                       if (!modal) return;
                       modal.classList.remove('flex');
                       modal.classList.add('hidden');
                   });
               });

               // 🔹 Close modal when clicking outside
               document.querySelectorAll('.modal').forEach(modal => {
                   modal.addEventListener('click', function(e) {
                       if (e.target === this) {
                           this.classList.remove('flex');
                           this.classList.add('hidden');
                       }
                   });
               });

               // 🔹 Prevent double form submission
               document.querySelectorAll('form').forEach(form => {
                   form.addEventListener('submit', function(e) {
                       const submitBtn = this.querySelector('button[type="submit"]');
                       if (submitBtn && !submitBtn.disabled) {
                           submitBtn.disabled = true;
                           submitBtn.textContent = 'Submitting...';
                       }
                   });
               });
           });
       </script>
   </body>

   </html>