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
   <!-- modal delete announcement Section -->
   <div id="deleteModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
       <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           <h3 class="font-bold text-[40px]">Reject Verification</h3>
           <div class="flex items-center justify-center w-full">
               <p class="font-regular text-[20px] text-gray-500">You are about to reject <span class="text-[#EF4444]"> Juan Dela Cruz's</span> Verification request, write down your reason why.</p>
           </div>
           <div class="flex flex-col w-full">
               <Label class="font-medium text-[18px]">Reason:</Label>
               <textarea type="text" placeholder="Write down your reason for rejection" value="₱0.00" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]"></textarea>
           </div>
           <div class="flex flex-col w-full gap-[20px]">
               <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Reject</button>
               <div id="" class="flex cancelBtn items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
           </div>
       </form>
   </div>
   <!-- modal edit announcement Section -->
   <div id="editModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
       <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
           <h3 class="font-bold text-[40px]">User Verified</h3>
           <div class="flex items-center justify-center w-full">
               <p class="font-regular w-full text-[20px] text-gray-500">User <span class="text-[#EF4444]"> Juan Dela Cruz</span> Has been verified.</p>
           </div>
           <div class="flex flex-col w-full gap-[20px]">
               <button class="w-full cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Go Back</button>
           </div>
       </form>
   </div>

   <body class="relative">
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
                       <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Verifications</h1>
                       <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">
                           Review and verify user submissions to ensure all accounts and documents meet the required standards.
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

           <main class="w-full min-h-screen flex items-start justify-center py-[30px] px-[15px] ">
               <section class="container w-full flex flex-col gap-[20px]">

                   <section class="w-full flex px-[15px] sm:px-[0] flex-col gap-[15px]">
                       <div class="w-full items-center justify-between flex">
                           <form method="GET" action="{{ route('admin.verifications.index') }}" class="flex w-full sm:w-fit items-center gap-[20px]">
                               <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                                   <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                       <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                                   </svg>
                                   <select name="type" class="appearance-none focus:outline-none" onchange="this.form.submit()">
                                       <option value="">Filter By Document</option>
                                       <option value="Valid ID" {{ request('type') == 'Valid ID' ? 'selected' : '' }}>Valid ID</option>
                                       <option value="Barangay ID" {{ request('type') == 'Barangay ID' ? 'selected' : '' }}>Barangay ID</option>
                                       <option value="Driver License" {{ request('type') == 'Driver License' ? 'selected' : '' }}>Driver License</option>
                                   </select>
                               </div>

                               <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-full sm:w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                                   <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                       <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                                   </svg>
                                   <input name="search" value="{{ request('search') }}" class="w-full focus:outline-none" placeholder="Search" type="text">
                               </div>
                           </form>
                       </div>

                       {{-- Desktop Table --}}
                       <table class="w-full hidden sm:table border-collapse text-left border-[1px] border-gray-300 rounded-[4px]">
                           <thead>
                               <tr class="border-b-[1px] border-gray-300 bg-[#FFF7ED]">
                                   <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Full Name</th>
                                   <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Email</th>
                                   <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Document</th>
                                   <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Status</th>
                                   <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @forelse($verifications as $verification)
                               <tr class="border-b-[1px] border-gray-300 bg-white">
                                   <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">
                                       {{ $verification->firstname }} {{ $verification->middlename ? strtoupper(substr($verification->middlename, 0, 1)) . '.' : '' }} {{ $verification->lastname }}
                                   </td>
                                   <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $verification->email }}</td>
                                   <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $verification->type }}</td>

                                   <td class="px-[20px] py-[10px] font-regular text-[16px]">
                                       <span class="px-3 py-1 rounded-full text-sm font-medium
                                @if($verification->status == 'pending') bg-yellow-100 text-yellow-800
                                @elseif($verification->status == 'verified') bg-green-100 text-green-800
                                @elseif($verification->status == 'rejected') bg-red-100 text-red-800
                                @endif">
                                           {{ ucfirst($verification->status) }}
                                       </span>
                                   </td>
                                   <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                       <button data-verification-id="{{ $verification->verification_id }}" class="viewBtn bg-blue-100 text-blue-500 border-blue-500 cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                           <svg class="h-[20px] w-[20px] fill-blue-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                               <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                                           </svg>
                                           View
                                       </button>
                                       @if($verification->status == 'pending')
                                       <button data-verification-id="{{ $verification->verification_id }}" class="verifyBtn bg-green-100 text-green-500 border border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px]font-medium text-[14px] ">
                                           <svg class="h-[20px] transition-all duration-300fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                               <path d="m424-408-86-86q-11-11-28-11t-28 11q-11 11-11 28t11 28l114 114q12 12 28 12t28-12l226-226q11-11 11-28t-11-28q-11-11-28-11t-28 11L424-408Z" />
                                           </svg>
                                           Verify
                                       </button>
                                       <button data-verification-id="{{ $verification->verification_id }}" class="rejectBtn bg-red-100 text-red-500 border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                           <svg class="h-[20px] transition-all duration-300 fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                               <path d="m480-424 116 116q11 11 28 11t28-11q11-11 11-28t-11-28L536-480l116-116q11-11 11-28t-11-28q-11-11-28-11t-28 11L480-536 364-652q-11-11-28-11t-28 11q-11 11-11 28t11 28l116 116-116 116q-11 11-11 28t11 28q11 11 28 11t28-11l116-116Z" />
                                           </svg>
                                           Reject
                                       </button>
                                       @endif
                                   </td>
                               </tr>
                               @empty
                               <tr>
                                   <td colspan="6" class="px-[20px] py-[40px] text-center text-gray-500">
                                       No verification requests found
                                   </td>
                               </tr>
                               @endforelse
                           </tbody>
                       </table>

                       {{-- Mobile Cards --}}
                       <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                           @forelse($verifications as $verification)
                           <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                               <h6 class="text-[14px] text-gray-600 font-semibold">Full Name:</h6>
                               <p class="text-[16px] font-medium">
                                   {{ $verification->firstname }} {{ $verification->middlename ? strtoupper(substr($verification->middlename, 0, 1)) . '.' : '' }} {{ $verification->lastname }}
                               </p>
                               <h6 class="text-[14px] text-gray-600 font-semibold">Email:</h6>
                               <p class="text-[16px] font-medium">{{ $verification->email }}</p>
                               <h6 class="text-[14px] text-gray-600 font-semibold">Document:</h6>
                               <p class="text-[16px] font-medium">{{ $verification->type }}</p>
                               <h6 class="text-[14px] text-gray-600 font-semibold">Date Submitted:</h6>
                               <p class="text-[16px] font-medium">{{ \Carbon\Carbon::parse($verification->submitted_at)->format('d-m-Y') }}</p>
                               <h6 class="text-[14px] text-gray-600 font-semibold">Status:</h6>
                               <p class="text-[16px] font-medium">
                                   <span class="px-3 py-1 rounded-full text-sm font-medium
                            @if($verification->status == 'pending') bg-yellow-100 text-yellow-800
                            @elseif($verification->status == 'verified') bg-green-100 text-green-800
                            @elseif($verification->status == 'rejected') bg-red-100 text-red-800
                            @endif">
                                       {{ ucfirst($verification->status) }}
                                   </span>
                               </p>
                               <h6 class="text-[14px] text-gray-600 font-semibold">Action:</h6>
                               <div class="w-full flex items-center gap-[10px]">
                                   <button data-verification-id="{{ $verification->verification_id }}" class="viewBtn bg-blue-100 text-blue-500 border-blue-500 cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                       <svg class="h-[20px] w-[20px] fill-blue-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                           <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                                       </svg>
                                       View
                                   </button>
                                   @if($verification->status == 'pending')
                                   <button data-verification-id="{{ $verification->verification_id }}" class="verifyBtn bg-green-100 text-green-500 border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                       <svg class="h-[20px] transition-all duration-300 fill-green-500 w-[20px] " xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                           <path d="m424-408-86-86q-11-11-28-11t-28 11q-11 11-11 28t11 28l114 114q12 12 28 12t28-12l226-226q11-11 11-28t-11-28q-11-11-28-11t-28 11L424-408Z" />
                                       </svg>
                                       Verify
                                   </button>
                                   <button data-verification-id="{{ $verification->verification_id }}" class="rejectBtn bg-red-100 text-red-500 border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                       <svg class="h-[20px] transition-all duration-300 fill-red-500 w-[20px] " xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                           <path d="m480-424 116 116q11 11 28 11t28-11q11-11 11-28t-11-28L536-480l116-116q11-11 11-28t-11-28q-11-11-28-11t-28 11L480-536 364-652q-11-11-28-11t-28 11q-11 11-11 28t11 28l116 116-116 116q-11 11-11 28t11 28q11 11 28 11t28-11l116-116Z" />
                                       </svg>
                                       Reject
                                   </button>
                                   @endif
                               </div>
                           </div>
                           @empty
                           <div class="w-full text-center py-[40px] text-gray-500">
                               No verification requests found
                           </div>
                           @endforelse
                       </div>
                   </section>
               </section>
           </main>

           {{-- View Details Modal --}}
           <div id="viewModal" class="modal hidden fixed inset-0 bg-black/50 backdrop-blur-[5px] items-center justify-center z-50 overflow-y-auto p-4">
               <div class="bg-white rounded-lg p-6 w-[90%] max-w-3xl max-h-[90vh] overflow-y-auto">
                   <div class="flex justify-between items-center mb-6">
                       <h2 class="text-2xl font-bold">Verification Details</h2>
                       <button type="button" class="cancelBtn text-gray-500 hover:text-gray-700">
                           <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                           </svg>
                       </button>
                   </div>
                   <div id="viewModalContent" class="space-y-4">
                       <!-- Content will be loaded dynamically -->
                   </div>
               </div>
           </div>

           {{-- Verify Confirmation Modal --}}
           <div id="verifyModal" class="modal hidden fixed inset-0 bg-black/50 backdrop-blur-[5px] items-center justify-center z-50">
               <div class="bg-white rounded-lg p-6 w-[90%] max-w-md">
                   <h2 class="text-2xl font-bold mb-4">Verify User</h2>
                   <p class="mb-6">Are you sure you want to verify this user? This will grant them access to all barangay services.</p>
                   <form id="verifyForm" method="POST">
                       @csrf
                       <div class="flex justify-end gap-4">
                           <button type="button" class="cancelBtn px-6 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Cancel</button>
                           <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600">Verify</button>
                       </div>
                   </form>
               </div>
           </div>

           {{-- Reject Confirmation Modal --}}
           <div id="rejectModal" class="modal hidden fixed inset-0 bg-black/50 backdrop-blur-[5px] items-center justify-center z-50">
               <div class="bg-white rounded-lg p-6 w-[90%] max-w-md">
                   <h2 class="text-2xl font-bold mb-4">Reject Verification</h2>
                   <p class="mb-6">Are you sure you want to reject this verification request?</p>
                   <form id="rejectForm" method="POST">
                       @csrf
                       <div class="flex justify-end gap-4">
                           <button type="button" class="cancelBtn px-6 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Cancel</button>
                           <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded hover:bg-red-600">Reject</button>
                       </div>
                   </form>
               </div>
           </div>

           <script>
               document.addEventListener('DOMContentLoaded', function() {
                   const verifications = @json($verifications);

                   // View button click
                   document.querySelectorAll('.viewBtn').forEach(btn => {
                       btn.addEventListener('click', function() {
                           const verificationId = this.getAttribute('data-verification-id');

                           fetch(`/admin/verifications/${verificationId}`)
                               .then(response => response.json())
                               .then(data => {
                                   if (data.success) {
                                       const v = data.verification;

                                       let content = `
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="col-span-2"><h3 class="text-lg font-semibold text-orange-600 mb-2">User Information</h3></div>
                                <div><label class="text-sm font-semibold text-gray-600">Full Name:</label><p class="text-base text-gray-900">${v.firstname || ''} ${v.middlename ? v.middlename.charAt(0).toUpperCase() + '.' : ''} ${v.lastname || ''}</p></div>
                                <div><label class="text-sm font-semibold text-gray-600">Email:</label><p class="text-base text-gray-900">${v.email || 'N/A'}</p></div>
                                <div><label class="text-sm font-semibold text-gray-600">Contact:</label><p class="text-base text-gray-900">${v.contact || 'N/A'}</p></div>
                                <div><label class="text-sm font-semibold text-gray-600">Birthdate:</label><p class="text-base text-gray-900">${v.birthdate ? new Date(v.birthdate).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' }) : 'N/A'}</p></div>
                                <div class="col-span-2"><label class="text-sm font-semibold text-gray-600">Address:</label><p class="text-base text-gray-900">${v.house_number || ''} ${v.street || ''}, Barangay San Bartolome, Quezon City</p></div>
                                <div class="col-span-2 mt-4"><h3 class="text-lg font-semibold text-orange-600 mb-2">Verification Details</h3></div>
                                <div><label class="text-sm font-semibold text-gray-600">Document Type:</label><p class="text-base text-gray-900">${v.type || 'N/A'}</p></div>
                                <div><label class="text-sm font-semibold text-gray-600">Status:</label><p class="text-base"><span class="px-3 py-1 rounded-full text-sm font-medium ${v.status == 'pending' ? 'bg-yellow-100 text-yellow-800' : ''} ${v.status == 'verified' ? 'bg-green-100 text-green-800' : ''} ${v.status == 'rejected' ? 'bg-red-100 text-red-800' : ''}">${v.status ? v.status.charAt(0).toUpperCase() + v.status.slice(1) : 'N/A'}</span></p></div>
                                <div><label class="text-sm font-semibold text-gray-600">Submitted At:</label><p class="text-base text-gray-900">${new Date(v.submitted_at).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' })}</p></div>
                                <div class="col-span-2 mt-4"><h3 class="text-lg font-semibold text-orange-600 mb-2">Submitted Document</h3></div>
                                <div class="col-span-2">
                                    <img src="/verifications/${v.image}" alt="Verification Document" class="w-full max-h-[400px] object-contain border border-gray-300 rounded-lg">
                                </div>
                            </div>
                        `;

                                       document.getElementById('viewModalContent').innerHTML = content;
                                       document.getElementById('viewModal').classList.remove('hidden');
                                       document.getElementById('viewModal').classList.add('flex');
                                   }
                               })
                               .catch(error => {
                                   console.error('Error:', error);
                                   alert('Failed to load verification details');
                               });
                       });
                   });

                   // Verify button click
                   document.querySelectorAll('.verifyBtn').forEach(btn => {
                       btn.addEventListener('click', function() {
                           const verificationId = this.getAttribute('data-verification-id');
                           document.getElementById('verifyForm').action = `/admin/verifications/${verificationId}/verify`;
                           document.getElementById('verifyModal').classList.remove('hidden');
                           document.getElementById('verifyModal').classList.add('flex');
                       });
                   });

                   // Reject button click
                   document.querySelectorAll('.rejectBtn').forEach(btn => {
                       btn.addEventListener('click', function() {
                           const verificationId = this.getAttribute('data-verification-id');
                           document.getElementById('rejectForm').action = `/admin/verifications/${verificationId}/reject`;
                           document.getElementById('rejectModal').classList.remove('hidden');
                           document.getElementById('rejectModal').classList.add('flex');
                       });
                   });

                   // Cancel button clicks (close modals)
                   document.querySelectorAll('.cancelBtn').forEach(btn => {
                       btn.addEventListener('click', function() {
                           document.querySelectorAll('.modal').forEach(modal => {
                               modal.classList.add('hidden');
                               modal.classList.remove('flex');
                           });
                       });
                   });

                   // Close modal when clicking outside
                   document.querySelectorAll('.modal').forEach(modal => {
                       modal.addEventListener('click', function(e) {
                           if (e.target === this) {
                               this.classList.add('hidden');
                               this.classList.remove('flex');
                           }
                       });
                   });
               });
           </script>

       </main>
       <script>
           document.addEventListener('DOMContentLoaded', function() {
               // 🔹 Open modal
               document.querySelectorAll('.addBtn, .editBtn, .deleteBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const modalId = this.getAttribute('data-modal');
                       const modal = document.getElementById(modalId);
                       if (!modal) return;
                       modal.classList.remove('hidden');
                       modal.classList.add('flex');
                   });
               });

               // 🔹 Close modal (for all)
               document.querySelectorAll('.cancelBtn').forEach(btn => {
                   btn.addEventListener('click', function() {
                       const modal = this.closest('.modal');
                       if (!modal) return;
                       modal.classList.remove('flex');
                       modal.classList.add('hidden');
                   });
               });

           });
       </script>
   </body>

   </html>