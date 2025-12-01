     <!-- header Section -->
     @include('admin.shared.header')
     <!-- modal add user Section -->
     <div id="addModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
         <form action="{{ route('users.store')}}" method="POST" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
             @csrf
             <input type="hidden" name="form_type" value="create">
             <h3 class="font-bold text-[40px]">Add User</h3>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">First Name:</Label>
                     <input required value="{{ old('firstname')}}" name="firstname" type="text" placeholder="Ex. Juan" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Last Name:</Label>
                     <input required value="{{ old('lastname')}}" name="lastname" type="text" placeholder="Ex. Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Middle Name:</Label>
                     <input value="{{ old('middlename')}}" name="middlename" type="text" placeholder="(Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     @error('middlename')
                     <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                     @enderror
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Birthdate:</Label>
                     <input required value="{{ old('birthdate')}}" name="birthdate" type="date" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Gender:</Label>
                     <Select required name="gender" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Gender</option>
                         <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                         <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                         <option value="lgbt" {{ old('gender') == 'lgbt' ? 'selected' : '' }}>LGBTQ+</option>
                         <option value="prefer not to say" {{ old('gender') == 'prefer not to say' ? 'selected' : '' }}>Prefer not to say</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Place of Birth:</Label>
                     <input required value="{{ old('birthplace')}}" name="birthplace" type="text" placeholder="Ex. Quezon City" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Citizenship</Label>
                     <input value="{{ old('citizenship')}}" name="citizenship" type="text" placeholder="Ex. Filipino" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Civil Status:</Label>
                     <Select name="civil" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Gender</option>
                         <option value="single" {{ old('civil') == 'single' ? 'selected' : '' }}>Single</option>
                         <option value="married" {{ old('civil') == 'married' ? 'selected' : '' }}>Married</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Occupation:</Label>
                     <input value="{{ old('occupation')}}" name="occupation" type="text" placeholder="(Optional) Ex. Teacher" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">House #:</Label>
                     <input required value="{{ old('housenumber')}}" name="housenumber" type="number" placeholder="Ex. 123" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Street:</Label>
                     <Select required name="street" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Street</option>
                         <option value="gemini" {{ old('street') == 'gemini' ? 'selected' : '' }}>Gemini</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Email:</Label>
                     <input required value="{{ $errors->has('email') ? '' : old('email') }}" name="email" type="Email" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     @error('email')
                     <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                     @enderror
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Contact:</Label>
                     <input required value="{{ $errors->has('contact') ? '' : old('contact') }}" name="contact" type="number" placeholder="Ex. 09765098761" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     @error('contact')
                     <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                     @enderror
                 </div>
             </div>
             <div class="flex flex-col items-center gap-[30px] w-full">
                 <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                     <div class="flex flex-col w-full">
                         <Label class="font-medium text-[18px]">Create Passord:</Label>
                         <input required name="password" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     </div>
                     <div class="flex flex-col w-full">
                         <Label class="font-medium text-[18px]">Confirm Password:</Label>
                         <input required name="password_confirmation" type="text" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     </div>
                 </div>
                 @error('password')
                 <small class=" w-full text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>
             <div class="flex flex-col w-full gap-[20px]">
                 <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create User</button>
                 <div id="" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
             </div>
         </form>
     </div>
     <!-- modal delete user Section -->
     <div id="deleteModal" class="modal w-full fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
         <form id="deleteForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
             @csrf
             @method('DELETE')
             <h3 class="font-bold text-[40px]">Delete User</h3>
             <div class="flex items-center justify-center w-full">
                 <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete <span id="deleteUserName" class="text-[#EF4444]">this user</span>? This action cannot be undone.</p>
             </div>
             <div class="flex flex-col w-full gap-[20px]">
                 <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete User</button>
                 <div class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
             </div>
         </form>
     </div>
     <!-- modal edit user Section -->
     <div id="editModal" class="modal w-full fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-start">
         <form id="editForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
             @csrf
             @method('PUT')
             <input type="hidden" name="form_type" value="edit">
             <input type="hidden" id="edit_user_id" name="user_id" value="">
             <h3 class="font-bold text-[40px]">Edit User</h3>
             <div class="w-full flex-col gap-[30px]">
                 <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                     <div class="flex flex-col w-full">
                         <Label class="font-medium text-[18px]">First Name:</Label>
                         <input id="edit_firstname" name="firstname" type="text" placeholder="Ex. Juan" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     </div>
                     <div class="flex flex-col w-full">
                         <Label class="font-medium text-[18px]">Last Name:</Label>
                         <input id="edit_lastname" name="lastname" type="text" placeholder="Ex. Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     </div>
                 </div>
                 @error('firstname')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
                 @error('lastname')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>

             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Middle Name:</Label>
                     <input id="edit_middlename" name="middlename" type="text" placeholder="(Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Birthdate:</Label>
                     <input id="edit_birthdate" name="birthdate" type="date" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Gender:</Label>
                     <Select id="edit_gender" name="gender" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Gender</option>
                         <option value="male">Male</option>
                         <option value="female">Female</option>
                         <option value="lgbt">LGBTQ+</option>
                         <option value="prefer not to say">Prefer not to say</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Place of Birth:</Label>
                     <input id="edit_birthplace" name="birthplace" type="text" placeholder="Ex. Quezon City" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Citizenship</Label>
                     <input id="edit_citizenship" name="citizenship" type="text" placeholder="Ex. Filipino" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Civil Status:</Label>
                     <Select id="edit_civil" name="civil" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Status</option>
                         <option value="single">Single</option>
                         <option value="married">Married</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Occupation:</Label>
                     <input id="edit_occupation" name="occupation" type="text" placeholder="Ex. Teacher" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">House #:</Label>
                     <input id="edit_housenumber" name="housenumber" type="number" placeholder="Ex. 123" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Street:</Label>
                     <Select id="edit_street" name="street" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <option value="">Choose Street</option>
                         <option value="gemini">Gemini</option>
                     </Select>
                 </div>
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Email:</Label>
                     <input id="edit_email" name="email" type="email" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 @error('email')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>
             <div class="flex flex-col gap-[10px]">
                 <div class="flex flex-col">
                     <Label class="font-medium text-[18px]">Contact:</Label>
                     <input id="edit_contact" name="contact" type="number" placeholder="Ex. 09765098761" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 @error('contact')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>
             <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Update Password:</Label>
                     <input name="password" type="password" placeholder="Leave blank to keep current" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Confirm Password:</Label>
                     <input name="password_confirmation" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 </div>
             </div>
             <div class="flex flex-col w-full gap-[20px]">
                 <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Update User</button>
                 <div class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
             </div>
         </form>
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
                     <div class="h-[90px] min-w-[90px] sm:flex hidden max-w-[90px] rounded-[50%] overflow-hidden">
                         <img class="h-full w-full object-center object-cover" src="{{asset('images/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg')}}" alt="">
                     </div>
                     <div class="flex flex-col">
                         <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Users</h1>
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

             <section class="w-full px-[15px] sm:p-[0] flex flex-col gap-[15px]">
                 <div class="w-full flex-col sm:flex-row items-start gap-[10px] sm:gap-[0] sm:items-center justify-between flex">
                     <div data-modal="addModal" class=" addBtn rounded-[4px] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer hover:text-gray-50 bg-orange-500 px-[20px] py-[10px] text-[16px] font-medium text-white flex items-center gap-[12px]">
                         <svg class="h-[25px] w-[25px] fill-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                             <path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113Z" />
                         </svg>
                         Add new User
                     </div>
                     <form method="GET" action="{{ route('users.index')}}" class="flex  w-full sm:w-fit items-center gap-[20px]">
                         <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                             <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                             </svg>
                             <select name="role" class="appearance-none focus:outline-none" name="" id="">
                                 <option value="Filter">Filter By: Role</option>
                                 <option value="0" {{ request('role') == 0 ? 'selected' : '' }}>Resident</option>
                                 <option value="0" {{ request('role') == 1 ? 'selected' : '' }}>Admin</option>
                             </select>
                         </div>

                         <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-full sm:w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                             <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                             </svg>
                             <input name="search" value="{{ request('search')}}" class="w-full focus:outline-none" placeholder="Search" type="text">
                         </div>
                         <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition-all duration-300 font-medium">
                             Search
                         </button>

                         @if(request('search') || request('role'))
                         <a href="{{ route('users.index') }}" class="px-4 py-2 border border-gray-400 text-gray-600 rounded-lg hover:bg-gray-100 transition-all duration-300 font-medium">
                             Clear
                         </a>
                         @endif
                     </form>
                 </div>

                 <table class="w-full hidden sm:table border-collapse text-left border-[1px] border-gray-300 rounded-[4px]">
                     <thead>
                         <tr class="border-b-[1px] border-gray-300 bg-[#FFF7ED]">
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Name</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Email</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Verified</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Role</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Date Created</th>
                             <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($users as $user)
                         <tr class="border-b-[1px] border-gray-300 bg-white">
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">{{ $user->firstname}} {{ $user->middlename ? substr($user->middlename, 0, 1) . '.' : '' }} {{ $user->lastname}}</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600 underline">{{ $user->email}}</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">No</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $user->role == 0 ? 'Resident' : 'Admin'}}</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $user->created_at}}</td>
                             <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                 <div data-modal="editModal"
                                     data-user-id="{{ $user->user_id }}"
                                     data-firstname="{{ $user->firstname }}"
                                     data-lastname="{{ $user->lastname }}"
                                     data-middlename="{{ $user->middlename }}"
                                     data-birthdate="{{ $user->birthdate }}"
                                     data-gender="{{ $user->gender }}"
                                     data-birthplace="{{ $user->place_of_birth }}"
                                     data-citizenship="{{ $user->citizenship }}"
                                     data-civil="{{ $user->civil_status }}"
                                     data-occupation="{{ $user->occupation }}"
                                     data-housenumber="{{ $user->house_number }}"
                                     data-street="{{ $user->street }}"
                                     data-email="{{ $user->email }}"
                                     data-contact="{{ $user->contact }}"
                                     class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                     <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div data-modal="deleteModal"
                                     data-user-id="{{ $user->user_id }}"
                                     data-user-name="{{ $user->firstname }} {{ $user->lastname }}"
                                     class="deleteBtn hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                     <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                         <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                     </svg>
                                     Delete
                                 </div>
                             </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>

                 <!-- Mobile User Cards -->
                 <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                     @foreach ($users as $user)
                     <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                         <h6 class="text-[14px] text-gray-600 font-semibold">Full Name:</h6>
                         <p class="text-[16px] font-medium">{{ $user->firstname}} {{ $user->middlename ? substr($user->middlename, 0, 1) . '.' : '' }} {{ $user->lastname}}</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Email:</h6>
                         <p class="text-[16px] font-medium underline">{{ $user->email }}</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Verified:</h6>
                         <p class="text-[16px] font-medium">No</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Role:</h6>
                         <p class="text-[16px] font-medium">{{ $user->role == 0 ? 'Resident' : 'Admin'}}</p>
                         <h6 class="text-[14px] text-gray-600 font-semibold">Action:</h6>
                         <div class="w-full flex items-center gap-[10px]">
                             <div data-modal="editModal"
                                 data-user-id="{{ $user->user_id }}"
                                 data-firstname="{{ $user->firstname }}"
                                 data-lastname="{{ $user->lastname }}"
                                 data-middlename="{{ $user->middlename }}"
                                 data-birthdate="{{ $user->birthdate }}"
                                 data-gender="{{ $user->gender }}"
                                 data-birthplace="{{ $user->place_of_birth }}"
                                 data-citizenship="{{ $user->citizenship }}"
                                 data-civil="{{ $user->civil_status }}"
                                 data-occupation="{{ $user->occupation }}"
                                 data-housenumber="{{ $user->house_number }}"
                                 data-street="{{ $user->street }}"
                                 data-email="{{ $user->email }}"
                                 data-contact="{{ $user->contact }}"
                                 class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                 <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                     <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                 </svg>
                                 Edit
                             </div>
                             <div data-modal="deleteModal"
                                 data-user-id="{{ $user->user_id }}"
                                 data-user-name="{{ $user->firstname }} {{ $user->lastname }}"
                                 class="deleteBtn hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                 <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                     <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                 </svg>
                                 Delete
                             </div>
                         </div>
                     </div>
                     @endforeach
                 </div>

                 <!-- Pagination Links -->
                 <div class="mt-[20px] mb-[20px] bg-white rounded-[4px] p-[10px]">
                    {{ $users->appends(request()->query())->links() }}
                 </div>
                 <style>
                     nav[role="navigation"] a,
                     nav[role="navigation"] span {
                         background: white !important;
                     }
                 </style>
             </section>

         </main>
         <script>
             document.addEventListener('DOMContentLoaded', function() {

                 // 🔹 Open modal
                 document.querySelectorAll('.addBtn, .editBtn, .deleteBtn').forEach(btn => {
                     btn.addEventListener('click', function() {
                         const modalId = this.getAttribute('data-modal');
                         const modal = document.getElementById(modalId);
                         if (!modal) return;

                         // If it's an edit button, populate the form
                         if (this.classList.contains('editBtn')) {
                             const userId = this.getAttribute('data-user-id');
                             const editForm = document.getElementById('editForm');

                             if (editForm) {
                                 editForm.action = `/admin/users/${userId}`;
                             }

                             // Populate all fields
                             document.getElementById('edit_user_id').value = userId;
                             document.getElementById('edit_firstname').value = this.getAttribute('data-firstname') || '';
                             document.getElementById('edit_lastname').value = this.getAttribute('data-lastname') || '';
                             document.getElementById('edit_middlename').value = this.getAttribute('data-middlename') || '';
                             document.getElementById('edit_birthdate').value = this.getAttribute('data-birthdate') || '';
                             document.getElementById('edit_gender').value = this.getAttribute('data-gender') || '';
                             document.getElementById('edit_birthplace').value = this.getAttribute('data-birthplace') || '';
                             document.getElementById('edit_citizenship').value = this.getAttribute('data-citizenship') || '';
                             document.getElementById('edit_civil').value = this.getAttribute('data-civil') || '';
                             document.getElementById('edit_occupation').value = this.getAttribute('data-occupation') || '';
                             document.getElementById('edit_housenumber').value = this.getAttribute('data-housenumber') || '';
                             document.getElementById('edit_street').value = this.getAttribute('data-street') || '';
                             document.getElementById('edit_email').value = this.getAttribute('data-email') || '';
                             document.getElementById('edit_contact').value = this.getAttribute('data-contact') || '';
                         }

                         // If it's a delete button, set the user ID and name
                         if (this.classList.contains('deleteBtn')) {
                             const userId = this.getAttribute('data-user-id');
                             const userName = this.getAttribute('data-user-name');
                             const deleteForm = document.getElementById('deleteForm');
                             const userNameSpan = document.getElementById('deleteUserName');

                             if (deleteForm) {
                                 deleteForm.action = `/admin/users/${userId}`;
                             }
                             if (userNameSpan && userName) {
                                 userNameSpan.textContent = userName;
                             }
                         }

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

                 // 🔹 Close modal when clicking outside
                 document.querySelectorAll('.modal').forEach(modal => {
                     modal.addEventListener('click', function(e) {
                         if (e.target === this) {
                             this.classList.remove('flex');
                             this.classList.add('hidden');
                         }
                     });
                 });

             });
         </script>
         @if ($errors->any())
         <script>
             document.addEventListener('DOMContentLoaded', function() {
                 // Check which form had the error
                 const formType = "{{ old('form_type', 'create') }}";

                 let modal;
                 if (formType === 'edit') {
                     modal = document.getElementById('editModal');

                     // Repopulate edit form with old values
                     const editForm = document.getElementById('editForm');
                     if (editForm) {
                         // Set form action if there's an old user_id
                         const userId = "{{ old('user_id') }}";
                         if (userId) {
                             editForm.action = `/admin/users/${userId}`;
                         }
                     }

                     // Populate fields with old values
                     @if(old('firstname'))
                     document.getElementById('edit_firstname').value = "{{ old('firstname') }}";
                     @endif
                     @if(old('lastname'))
                     document.getElementById('edit_lastname').value = "{{ old('lastname') }}";
                     @endif
                     @if(old('middlename'))
                     document.getElementById('edit_middlename').value = "{{ old('middlename') }}";
                     @endif
                     @if(old('birthdate'))
                     document.getElementById('edit_birthdate').value = "{{ old('birthdate') }}";
                     @endif
                     @if(old('gender'))
                     document.getElementById('edit_gender').value = "{{ old('gender') }}";
                     @endif
                     @if(old('birthplace'))
                     document.getElementById('edit_birthplace').value = "{{ old('birthplace') }}";
                     @endif
                     @if(old('citizenship'))
                     document.getElementById('edit_citizenship').value = "{{ old('citizenship') }}";
                     @endif
                     @if(old('civil'))
                     document.getElementById('edit_civil').value = "{{ old('civil') }}";
                     @endif
                     @if(old('occupation'))
                     document.getElementById('edit_occupation').value = "{{ old('occupation') }}";
                     @endif
                     @if(old('housenumber'))
                     document.getElementById('edit_housenumber').value = "{{ old('housenumber') }}";
                     @endif
                     @if(old('street'))
                     document.getElementById('edit_street').value = "{{ old('street') }}";
                     @endif
                     @if(old('email'))
                     document.getElementById('edit_email').value = "{{ old('email') }}";
                     @endif
                     @if(old('contact'))
                     document.getElementById('edit_contact').value = "{{ old('contact') }}";
                     @endif
                 } else {
                     modal = document.getElementById('addModal');
                 }

                 if (modal) {
                     modal.classList.remove('hidden');
                     modal.classList.add('flex');
                 }
             });
         </script>
         @endif
     </body>

     </html>