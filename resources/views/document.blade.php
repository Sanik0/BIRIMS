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
                 <div class="rounded-[4px] w-full max-w-[990px] border-gray-300 border-[1px] px-[35px] py-[20px] mb-[]">
                     <div class="border-b-[1px] pb-[10px] flex flex-col gap-[30px] relative">
                         <div class="rounded-[50%] hidden sm:block h-[100px] w-[100px] overflow-hidden absolute left-0">
                             <img src="{{asset('images/download (6).png')}}" class="w-full h-[full] object-center object-cover" alt="">
                         </div>
                         <div>
                             <p class="font-medium text-[16px] font-serif text-center">Republic Of the Philippines</p>
                             <p class="font-medium text-[16px] font-serif text-center">Nationlal Capital Region</p>
                             <p class="font-medium text-[16px] font-serif text-center">Municipality OF Lorem Ipsum</p>
                             <p class="font-medium text-[16px] font-serif text-center">Barangay San Bartolome</p>
                         </div>
                         <div class="font-bold text-[18px] font-serif text-center">OFFICE OF THE SANGGUNIANG BAYAN</div>
                     </div>
                     <div class="flex flex-col w-full gap-[50px] py-[30px]">
                         <h1 class="font-bold text-[20px] font-serif text-center">BARANGAY CERTIFICATE OF RESIDENCY</h1>
                         <div class="w-full flex items-center gap-[60px]">
                             <div class="rounded-[4px] hidden sm:flex border-[1px] border-[#B8FB3C] w-full bg-[#F2FFD5] items-center justify-center flex-col gap-[25px] max-w-[320px] px-[15px] py-[20px]">
                                 <div class="w-full h-[10px] bg-[#FF0000]"></div>
                                 <div class="flex flex-col">
                                     <div class="font-bold text-[18px] font-serif text-center">NORBERTO J. <br> PODADOR</div>
                                     <p class="font-regular font-serif text-[16px] italic">Punong Barangay</p>
                                 </div>
                                 <div class="font-medium text-[18px] font-serif text-center">BARANGAY KAGAWAD</div>
                                 <div class="font-bold text-[16px] font-serif">Rolando M. Rodel</div>
                                 <div class="font-bold text-[16px] font-serif">George E. Washington</div>
                                 <div class="font-bold text-[16px] font-serif">Mark D. Bohol</div>
                                 <div class="font-bold text-[16px] font-serif">Carlos I. Gulo</div>
                                 <div class="font-bold text-[16px] font-serif">Brenda G. Garcia</div>
                                 <div class="font-bold text-[16px] font-serif">Jennifer P. Panghilinan</div>
                                 <div class="flex flex-col items-center justify-center">
                                     <div class="font-bold text-[16px] font-serif">Marco L. Lupang</div>
                                     <p class="font-regular font-serif text-[16px] italic">SK ChairPerson</p>
                                 </div>
                                 <div class="flex flex-col items-center justify-center">
                                     <div class="font-bold text-[16px] font-serif">Niko S. Roberto</div>
                                     <p class="font-regular font-serif text-[16px] italic"> Barangay Secretary</p>
                                 </div>
                                 <div class="flex flex-col items-center justify-center">
                                     <div class="font-bold text-[16px] font-serif">Ashley K. Curtis</div>
                                     <p class="font-regular font-serif text-[16px] italic">Barangay Treasurer</p>
                                 </div>
                                 <div class="w-full h-[10px] bg-[#FF0000]"></div>

                             </div>
                             <form action="{{ route('document.store') }}" method="POST" class="w-full flex flex-col gap-[70px]">
                                 @csrf

                                 {{-- Hidden field for document type --}}
                                 <input type="hidden" name="document_type_id" value="1"> {{-- Update with correct document_type_id --}}

                                 <h1 class="font-bold text-[35px] font-serif text-center">To Whom It May Concern</h1>

                                 <div class="font-medium text-[16px] font-serif">
                                     This is to certify that
                                     <input class="border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="Buong Pangalan"
                                         name="full_name"
                                         type="text"
                                         value="{{ old('full_name') }}"
                                         required>,
                                     <input class="max-w-[50px] border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="Edad"
                                         name="age"
                                         type="number"
                                         value="{{ old('age') }}"
                                         required>
                                     years old, Filipino and bona-fide resident of Barangay San Bartolome, Quezon City, for about
                                     <input class="max-w-[50px] border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="Taon"
                                         name="years_resided"
                                         type="number"
                                         value="{{ old('years_resided') }}"
                                         required>
                                     years.
                                     <br><br>
                                     THIS FURTHER CERTIFIES that he/she is known to me as a person of good moral character, a law-abiding citizen, and has never violated any law, ordinance, or rule duly implemented by the government authorities
                                     <br><br>
                                     This certification is issued upon the request of the above mention individual for
                                     <input class="border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="Layunin"
                                         name="purpose"
                                         type="text"
                                         value="{{ old('purpose') }}"
                                         required>
                                     purposes.
                                     <br><br>
                                     DONE AND ISSUED this
                                     <input class="max-w-[50px] border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="Day"
                                         name="issue_day"
                                         type="number"
                                         min="1"
                                         max="31"
                                         value="{{ old('issue_day') }}"
                                         required> day of
                                     <input class="max-w-[100px] border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="Month"
                                         name="issue_month"
                                         type="text"
                                         value="{{ old('issue_month') }}"
                                         required>,
                                     <input class="max-w-[70px] border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="Year"
                                         name="issue_year"
                                         type="number"
                                         value="{{ old('issue_year', date('Y')) }}"
                                         required>
                                     at Barangay San Bartolome, Quezon City.
                                     <br><br>

                                     <div class="w-full flex flex-col items-center justify-end">
                                         <h1 class="w-full font-bold text-[25px] font-serif underline text-right">NORBERTO J. PODADOR</h1>
                                         <p class="w-full text-[16px] font-medium font-serif text-right">Punong Barangay</p>
                                     </div>
                                     <br><br>

                                     Paid Under OR. No;
                                     <input class="max-w-[100px] border-b-[1px] border-b-black focus:outline-none"
                                         placeholder="OR No."
                                         name="or_number"
                                         type="text"
                                         value="{{ old('or_number') }}"
                                         required>
                                     <br>
                                     Date
                                     <input class="border-b-[1px] border-b-black focus:outline-none text-gray-400"
                                         placeholder="araw"
                                         name="payment_date"
                                         type="date"
                                         value="{{ old('payment_date', date('Y-m-d')) }}"
                                         required>
                                     <br>
                                     At; Barangay San Bartolome, Quezon City
                                 </div>

                                 {{-- Error Messages --}}
                                 @if ($errors->any())
                                 <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
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
                                 <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                                     <strong class="font-bold">Success!</strong>
                                     <p>{{ session('success') }}</p>
                                 </div>
                                 @endif

                                 <div class="w-full justify-end mt-[30px] flex gap-[50px]">
                                     <a href="{{ route('home') }}"
                                         class="flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">
                                         Cancel
                                     </a>
                                     <button type="submit"
                                         class="flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">
                                         Save
                                     </button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </section>
         </main>

     </body>

     </html>