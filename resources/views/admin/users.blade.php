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
                         <Label class="font-medium text-[18px]">Create Password:</Label>
                         <div class="relative">
                             <input required id="password" name="password" type="password" placeholder="" class="w-full py-[10px] pr-[40px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                             <button type="button" onclick="togglePassword('password', 'eyeIcon1')" class="absolute right-0 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                 <svg id="eyeIcon1" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                     <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                     <circle cx="12" cy="12" r="3"></circle>
                                 </svg>
                             </button>
                         </div>
                     </div>
                     <div class="flex flex-col w-full">
                         <Label class="font-medium text-[18px]">Confirm Password:</Label>
                         <div class="relative">
                             <input required id="password_confirmation" name="password_confirmation" type="password" placeholder="" class="w-full py-[10px] pr-[40px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                             <button type="button" onclick="togglePassword('password_confirmation', 'eyeIcon2')" class="absolute right-0 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                 <svg id="eyeIcon2" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                     <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                     <circle cx="12" cy="12" r="3"></circle>
                                 </svg>
                             </button>
                         </div>
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
                     <div class="relative">
                         <input id="edit_password" name="password" type="password" placeholder="Leave blank to keep current" class="w-full py-[10px] pr-[40px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <button type="button" onclick="togglePassword('edit_password', 'eyeIcon3')" class="absolute right-0 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                             <svg id="eyeIcon3" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                 <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                 <circle cx="12" cy="12" r="3"></circle>
                             </svg>
                         </button>
                     </div>
                 </div>
                 <div class="flex flex-col w-full">
                     <Label class="font-medium text-[18px]">Confirm Password:</Label>
                     <div class="relative">
                         <input id="edit_password_confirmation" name="password_confirmation" type="password" placeholder="" class="w-full py-[10px] pr-[40px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                         <button type="button" onclick="togglePassword('edit_password_confirmation', 'eyeIcon4')" class="absolute right-0 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                             <svg id="eyeIcon4" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                 <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                 <circle cx="12" cy="12" r="3"></circle>
                             </svg>
                         </button>
                     </div>
                 </div>
             </div>
             <div class="flex flex-col w-full gap-[20px]">
                 <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Update User</button>
                 <div class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
             </div>
         </form>
     </div>
     {{-- View User Modal --}}
     <div id="viewModal" class="modal hidden fixed inset-0 bg-black/50 backdrop-blur-[5px] items-center justify-center z-50 overflow-y-auto p-4">
         <div class="bg-white rounded-lg p-6 w-[90%] max-w-3xl max-h-[90vh] overflow-y-auto">
             <div class="flex justify-between items-center mb-6">
                 <h2 class="text-2xl font-bold">User Details</h2>
                 <button type="button" class="cancelBtn text-gray-500 hover:text-gray-700">
                     <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
             <div id="viewModalContent" class="space-y-4"></div>
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
                         <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Users</h1>
                         <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">
                             View, add, update, and remove user accounts. Maintain accurate records and ensure smooth access for all users.
                         </p>
                     </div>
                 </div>
                 <div class="sm:flex hidden items-center gap-[20px]">
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

             <section class="w-full px-[15px] sm:p-[0] flex flex-col gap-[15px]">
                 <div class="w-full flex-col sm:flex-row items-start gap-[10px] sm:gap-[0] sm:items-center justify-between flex">
                     <div data-modal="addModal" class=" addBtn rounded-[4px] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer hover:text-gray-50 bg-orange-500 px-[20px] py-[10px] text-[16px] font-medium text-white flex items-center gap-[12px]">
                         <svg class="h-[25px] w-[25px] fill-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                             <path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113Z" />
                         </svg>
                         Add new User
                     </div>
                     <form method="GET" action="{{ route('users.index')}}" class="flex  w-full sm:w-fit items-center gap-[20px]">

                         <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-full sm:w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                             <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                             </svg>
                             <input name="search" value="{{ request('search')}}" class="w-full focus:outline-none" placeholder="Search" type="text">
                         </div>
                         <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded-sm hover:bg-orange-600 transition-all duration-300 font-medium">
                             Search
                         </button>

                         @if(request('search') || request('role'))
                         <a href="{{ route('users.index') }}" class="px-4 py-2 border border-gray-400 text-gray-600 rounded-sm hover:bg-gray-100 transition-all duration-300 font-medium">
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
                                 <button data-modal="viewModal"
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
                                     data-role="{{ $user->role }}"
                                     data-created="{{ $user->created_at }}"
                                     class="viewBtn bg-blue-100 text-blue-500 border-blue-500 cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                     <svg class="h-[20px] w-[20px] fill-blue-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                         <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                                     </svg>
                                     View
                                 </button>
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
                                     class="editBtn bg-green-100 text-green-500 border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                     <svg class="h-[20px] transition-all duration-300 fill-green-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
                                         <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                     </svg>
                                     Edit
                                 </div>
                                 <div data-modal="deleteModal"
                                     data-user-id="{{ $user->user_id }}"
                                     data-user-name="{{ $user->firstname }} {{ $user->lastname }}"
                                     class="deleteBtn bg-red-100 text-red-500 border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                     <svg class="h-[20px] transition-all duration-300 fill-red-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
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
                             <button data-modal="viewModal"
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
                                 data-role="{{ $user->role }}"
                                 data-created="{{ $user->created_at }}"
                                 class="viewBtn bg-blue-100 text-blue-500 border-blue-500 cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                 <svg class="h-[20px] w-[20px] fill-blue-500" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                     <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                                 </svg>
                                 View
                             </button>
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
                                 class="editBtn bg-green-100 text-green-500 border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                 <svg class="h-[20px] transition-all duration-300 fill-green-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                     <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                 </svg>
                                 Edit
                             </div>
                             <div data-modal="deleteModal"
                                 data-user-id="{{ $user->user_id }}"
                                 data-user-name="{{ $user->firstname }} {{ $user->lastname }}"
                                 class="deleteBtnbg-red-100 text-red-500 border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                 <svg class="h-[20px] transition-all duration-300 fill-red-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
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
                 document.querySelectorAll('.addBtn, .editBtn, .deleteBtn, .viewBtn').forEach(btn => {
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

                         // If it's a view button, populate the content
                         if (this.classList.contains('viewBtn')) {
                             const firstname = this.getAttribute('data-firstname') || '';
                             const middlename = this.getAttribute('data-middlename') || '';
                             const lastname = this.getAttribute('data-lastname') || '';
                             const fullName = `${firstname} ${middlename ? middlename.charAt(0).toUpperCase() + '.' : ''} ${lastname}`;

                             const content = `
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-2"><h3 class="text-lg font-semibold text-orange-600 mb-2">Personal Information</h3></div>
                    <div><label class="text-sm font-semibold text-gray-600">Full Name:</label><p class="text-base text-gray-900">${fullName}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Email:</label><p class="text-base text-gray-900">${this.getAttribute('data-email') || 'N/A'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Contact:</label><p class="text-base text-gray-900">${this.getAttribute('data-contact') || 'N/A'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Birthdate:</label><p class="text-base text-gray-900">${this.getAttribute('data-birthdate') || 'N/A'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Gender:</label><p class="text-base text-gray-900">${this.getAttribute('data-gender') || 'N/A'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Place of Birth:</label><p class="text-base text-gray-900">${this.getAttribute('data-birthplace') || 'N/A'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Citizenship:</label><p class="text-base text-gray-900">${this.getAttribute('data-citizenship') || 'N/A'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Civil Status:</label><p class="text-base text-gray-900">${this.getAttribute('data-civil') || 'N/A'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Occupation:</label><p class="text-base text-gray-900">${this.getAttribute('data-occupation') || 'N/A'}</p></div>
                    <div class="col-span-2"><label class="text-sm font-semibold text-gray-600">Address:</label><p class="text-base text-gray-900">${this.getAttribute('data-housenumber') || ''} ${this.getAttribute('data-street') || ''}, Barangay San Bartolome, Quezon City</p></div>
                    <div class="col-span-2 mt-4"><h3 class="text-lg font-semibold text-orange-600 mb-2">Account Information</h3></div>
                    <div><label class="text-sm font-semibold text-gray-600">Role:</label><p class="text-base text-gray-900">${this.getAttribute('data-role') == 0 ? 'Resident' : 'Admin'}</p></div>
                    <div><label class="text-sm font-semibold text-gray-600">Account Created:</label><p class="text-base text-gray-900">${this.getAttribute('data-created') || 'N/A'}</p></div>
                </div>
            `;

                             document.getElementById('viewModalContent').innerHTML = content;
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
             //  Password visibility toggle
             function togglePassword(inputId, iconId) {
                 const input = document.getElementById(inputId);
                 const icon = document.getElementById(iconId);

                 if (input.type === 'password') {
                     input.type = 'text';
                     // Eye with slash (hidden state)
                     icon.innerHTML = `
                        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                        <line x1="1" y1="1" x2="23" y2="23"></line>
                    `;
                 } else {
                     input.type = 'password';
                     // Normal eye (visible state)
                     icon.innerHTML = `
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    `;
                 }
             }
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