       <!-- header section -->
       @include('shared.header')
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
       <!-- modal Section -->
       <div id="modal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
           <form method="POST" action="{{ route('profile.update') }}" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
               @csrf
               @method('PUT')
               <h3 class="font-bold text-[40px]">Update Information</h3>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">First Name:</Label>
                       <input required name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}" type="text" placeholder="Ex. Juan" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('firstname')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Last Name:</Label>
                       <input required name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}" type="text" placeholder="Ex. Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('lastname')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Middle Name:</Label>
                       <input name="middlename" value="{{ old('middlename', auth()->user()->middlename) }}" type="text" placeholder="(Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Birthdate:</Label>
                       <input required name="birthdate" value="{{ old('birthdate', auth()->user()->birthdate) }}" type="date" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('birthdate')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Gender:</Label>
                       <Select required name="gender" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                           <option value="">Choose Gender</option>
                           <option value="male" {{ old('gender', auth()->user()->gender) == 'male' ? 'selected' : '' }}>Male</option>
                           <option value="female" {{ old('gender', auth()->user()->gender) == 'female' ? 'selected' : '' }}>Female</option>
                           <option value="lgbt" {{ old('gender', auth()->user()->gender) == 'lgbt' ? 'selected' : '' }}>LGBTQ+</option>
                           <option value="prefer not to say" {{ old('gender', auth()->user()->gender) == 'prefer not to say' ? 'selected' : '' }}>Prefer not to say</option>
                       </Select>
                       @error('gender')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Place of Birth:</Label>
                       <input name="place_of_birth" value="{{ old('place_of_birth', auth()->user()->place_of_birth) }}" type="text" placeholder="Ex. Quezon City" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Citizenship</Label>
                       <input name="citizenship" value="{{ old('citizenship', auth()->user()->citizenship) }}" type="text" placeholder="Ex. Filipino" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Civil Status:</Label>
                       <Select name="civil_status" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                           <option value="">Choose Status</option>
                           <option value="single" {{ old('civil_status', auth()->user()->civil_status) == 'single' ? 'selected' : '' }}>Single</option>
                           <option value="married" {{ old('civil_status', auth()->user()->civil_status) == 'married' ? 'selected' : '' }}>Married</option>
                       </Select>
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Occupation:</Label>
                       <input name="occupation" value="{{ old('occupation', auth()->user()->occupation) }}" type="text" placeholder="Ex. Teacher" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">House #:</Label>
                       <input name="house_number" value="{{ old('house_number', auth()->user()->house_number) }}" type="number" placeholder="Ex. 123" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Street:</Label>
                       <Select name="street" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                           <option value="">Choose Street</option>
                           <option value="gemini" {{ old('street', auth()->user()->street) == 'gemini' ? 'selected' : '' }}>Gemini</option>
                       </Select>
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Email:</Label>
                       <input required name="email" value="{{ old('email', auth()->user()->email) }}" type="email" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('email')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Contact Number:</Label>
                       <input required name="contact" value="{{ old('contact', auth()->user()->contact) }}" type="tel" maxlength="11" placeholder="Ex. 09xxxxxxxxx" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('contact')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">New Password (Optional):</Label>
                       <input name="password" type="password" placeholder="Leave blank to keep current" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('password')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Confirm Password:</Label>
                       <input name="password_confirmation" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col w-full gap-[20px]">
                   <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Save Changes</button>
                   <div id="cancelBtn" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
               </div>
           </form>
       </div>
       <!-- password modal Section -->
       <div id="pwdModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
           <form method="POST" action="{{ route('password.update') }}" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
               @csrf
               @method('PUT')
               <h3 class="font-bold text-[40px]">Update Password</h3>

               <div class="flex flex-col gap-[20px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Current Password:</Label>
                       <input required name="current_password" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('current_password')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>

                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">New Password:</Label>
                       <input required name="password" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('password')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>

                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Confirm Password:</Label>
                       <input required name="password_confirmation" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col w-full gap-[20px]">
                   <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Save</button>
                   <div id="pwdCancelBtn" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
               </div>
           </form>
       </div>
       <!--  delete account modal -->
       <div id="deleteAccModal" class="modal w-full fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
           <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
               <h3 class="font-bold text-[40px]">Delete Account</h3>
               <div class="flex items-center justify-center w-full">
                   <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete <span class="text-[#EF4444]">Your Account</span>? This action cannot be undone and all your information will be lost.</p>
               </div>
               <div class="flex flex-col w-full gap-[20px]">
                   <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete Account</button>
                   <div id="cancelDeleteBtn" class="cancelBtn  flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
               </div>
           </form>
       </div>

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
                           <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Settings</h1>
                           <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">Manage your account. Update your credentials, edit your personal details, and customize your profile settings</p>
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

               <!--informations -->
               <section class="w-full flex items-center justify-center px-[15px] sm:px-[0] z-[10]">
                   <div class="w-full max-w-[815px] flex flex-col gap-[50px] relative">
                       <!-- personal informations -->
                       <div class="flex flex-col gap-[15px] w-full">
                           <div class="flex items-center justify-between">
                               <h2 class="font-bold text-[25px]">Personal Information</h2>
                               <div id="modalBtn" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[25px]">Edit</div>
                           </div>
                           <div class="w-full rounded-[4px] border-solid border-[1px] py-[20px] border-[#D4D4D8]">
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="rounded-[50%] h-[98px] w-[98px] bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                                           <span class="text-white text-[40px] font-bold">
                                               {{ strtoupper(substr(auth()->user()->firstname, 0, 1)) }}{{ strtoupper(substr(auth()->user()->lastname, 0, 1)) }}
                                           </span>
                                       </div>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Full Name</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">
                                           {{ auth()->user()->firstname }} {{ auth()->user()->middlename }} {{ auth()->user()->lastname }}
                                       </p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Email</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->email }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Contact Number</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->contact }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Address</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">
                                           {{ auth()->user()->house_number }} {{ auth()->user()->street }} Street,
                                           <br>
                                           Barangay San Bartolome,
                                           <br>
                                           Quezon City, Metro Manila,
                                           <br>
                                           Philippines
                                       </p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Gender</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ ucfirst(auth()->user()->gender) }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Place of Birth:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->place_of_birth ?? 'N/A' }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Citizenship:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->citizenship ?? 'N/A' }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Civil Status:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ ucfirst(auth()->user()->civil_status ?? 'N/A') }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Occupation:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->occupation ?? 'N/A' }}</p>
                                   </div>
                               </div>
                               <div class="px-[20px] py-[15px] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Birth Date</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">
                                           {{ \Carbon\Carbon::parse(auth()->user()->birthdate)->format('d F Y') }}
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- account and privacy -->
                       <div class="flex flex-col gap-[15px] w-full mb-[30px]">
                           <h2 class="font-bold text-[25px]">Account & Privacy</h2>
                           <div class="w-full rounded-[4px] border-solid border-[1px] py-[20px] border-[#D4D4D8]">
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Verify Account</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Not Verified</p>
                                   </div>
                                   <a href="{{url('/verify')}}" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[20px]">Verify</a>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Change Password</div>
                                   </div>
                                   <div id="pwdBtn" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[20px]">Edit</div>
                               </div>
                               <div class=" px-[20px] py-[15px] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Delete My Account</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">This will Delete all your account’s information and cannot be undone</p>
                                   </div>
                                   <div id="deleteAccBtn" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[20px]">Delete</div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

           </main>
           <script>
               document.addEventListener('DOMContentLoaded', function() {
                   const modal = document.getElementById('modal');
                   const openModalBtn = document.getElementById('modalBtn');
                   const cancelBtn = document.getElementById('cancelBtn');
                   // change password modal
                   const pwdModal = document.getElementById('pwdModal');
                   const openPwdBtn = document.getElementById('pwdBtn');
                   const pwdCancelBtn = document.getElementById('pwdCancelBtn')
                   // delete account modal
                   const deleteAccModal = document.getElementById('deleteAccModal');
                   const deleteAccBtn = document.getElementById('deleteAccBtn');
                   const cancelDeleteBtn = document.getElementById('cancelDeleteBtn')

                   openModalBtn.addEventListener('click', function() {
                       modal.style.display = 'flex';
                   })

                   cancelBtn.addEventListener('click', function() {
                       modal.style.display = 'none';
                   })

                   // change password function

                   openPwdBtn.addEventListener('click', function() {
                       pwdModal.style.display = 'flex';
                   })

                   pwdCancelBtn.addEventListener('click', function() {
                       pwdModal.style.display = 'none';
                   })

                   // delete account function

                   deleteAccBtn.addEventListener('click', function() {
                       deleteAccModal.style.display = 'flex';
                   })

                   cancelDeleteBtn.addEventListener('click', function() {
                       deleteAccModal.style.display = 'none';
                   })


               })
           </script>
           @if ($errors->has('firstname') || $errors->has('lastname') || $errors->has('email') || $errors->has('contact'))
           <script>
               document.addEventListener('DOMContentLoaded', function() {
                   const modal = document.getElementById('modal');
                   if (modal) {
                       modal.classList.remove('hidden');
                       modal.classList.add('flex');
                   }
               });
           </script>
           @endif
           @if ($errors->has('current_password') || $errors->has('password'))
           <script>
               document.addEventListener('DOMContentLoaded', function() {
                   const passwordModal = document.getElementById('pwdModal');
                   if (passwordModal) {
                       passwordModal.classList.remove('hidden');
                       passwordModal.classList.add('flex');
                   }
               });
           </script>
           @endif
       </body>

       </html>