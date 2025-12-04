 <!-- header section -->
 @include('admin.shared.header')
 <!-- modal add announcement Section -->
 <div id="addModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
     <form method="POST" action="{{ route('admin.appointment.store') }}" class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
         @csrf
         <h3 class="font-bold text-[40px]">Create Appointment</h3>

         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Service:</Label>
             <Select required name="service" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 <option value="">Choose Service</option>
                 <option value="consultation" {{ old('service') == 'consultation' ? 'selected' : '' }}>Consultation</option>
                 <option value="checkup" {{ old('service') == 'checkup' ? 'selected' : '' }}>Check-up</option>
                 <option value="vaccination" {{ old('service') == 'vaccination' ? 'selected' : '' }}>Vaccination</option>
             </Select>
             @error('service')
             <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
             @enderror
         </div>

         <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Date:</Label>
                 <input required value="{{ old('date') }}" name="date" type="date" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 @error('date')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Time:</Label>
                 <Select required name="time" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     <option value="">Choose Time</option>
                     <option value="09:00:00" {{ old('time') == '09:00:00' ? 'selected' : '' }}>9:00 AM</option>
                     <option value="10:00:00" {{ old('time') == '10:00:00' ? 'selected' : '' }}>10:00 AM</option>
                     <option value="11:00:00" {{ old('time') == '11:00:00' ? 'selected' : '' }}>11:00 AM</option>
                     <option value="13:00:00" {{ old('time') == '13:00:00' ? 'selected' : '' }}>1:00 PM</option>
                     <option value="14:00:00" {{ old('time') == '14:00:00' ? 'selected' : '' }}>2:00 PM</option>
                     <option value="15:00:00" {{ old('time') == '15:00:00' ? 'selected' : '' }}>3:00 PM</option>
                 </Select>
                 @error('time')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>
         </div>

         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Symptoms:</Label>
             <textarea name="symptoms" rows="3" placeholder="Describe your symptoms (Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">{{ old('symptoms') }}</textarea>
         </div>

         <div class="flex flex-col">
             <Label class="font-medium text-[18px]">Email:</Label>
             <input required id="email_lookup" type="email" value="{{ old('email') }}" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
             <input type="hidden" id="user_id" name="user_id" value="{{ old('user_id') }}">
             <small id="email_status" class="text-sm mt-1"></small>
             @error('email')
             <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
             @enderror
         </div>

         <div class="flex items-center flex-col sm:flex-row gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">First Name:</Label>
                 <input readonly id="firstname_display" type="text" placeholder="Auto-filled from email" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-400 text-[18px] bg-gray-50">
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Last Name:</Label>
                 <input readonly id="lastname_display" type="text" placeholder="Auto-filled from email" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-400 text-[18px] bg-gray-50">
             </div>
         </div>

         <div class="flex flex-col gap-[10px]">
             <div class="flex flex-col">
                 <Label class="font-medium text-[18px]">Middle Name:</Label>
                 <input readonly id="middlename_display" type="text" placeholder="Auto-filled from email" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-400 text-[18px] bg-gray-50">
             </div>
         </div>

         <div class="flex flex-col w-full gap-[20px]">
             <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create Appointment</button>
             <div class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
         </div>
     </form>
 </div>
 <script>
     // Auto-populate user details when email is entered
     document.addEventListener('DOMContentLoaded', function() {
         const emailInput = document.getElementById('email_lookup');
         const emailStatus = document.getElementById('email_status');
         const userIdInput = document.getElementById('user_id');
         const firstnameDisplay = document.getElementById('firstname_display');
         const lastnameDisplay = document.getElementById('lastname_display');
         const middlenameDisplay = document.getElementById('middlename_display');

         let debounceTimer;

         emailInput.addEventListener('input', function() {
             clearTimeout(debounceTimer);
             const email = this.value.trim();

             if (!email) {
                 clearUserFields();
                 return;
             }

             // Debounce the API call
             debounceTimer = setTimeout(() => {
                 lookupUser(email);
             }, 500);
         });

         function lookupUser(email) {
             emailStatus.textContent = 'Looking up user...';
             emailStatus.className = 'text-gray-500 text-sm mt-1';

             fetch(`/lookup-user?email=${encodeURIComponent(email)}`)
                 .then(response => response.json())
                 .then(data => {
                     if (data.success) {
                         userIdInput.value = data.user.user_id;
                         firstnameDisplay.value = data.user.firstname;
                         lastnameDisplay.value = data.user.lastname;
                         middlenameDisplay.value = data.user.middlename || '';

                         emailStatus.textContent = '✓ User found';
                         emailStatus.className = 'text-green-600 text-sm mt-1';
                     } else {
                         clearUserFields();
                         emailStatus.textContent = '✗ User not found. Please register first.';
                         emailStatus.className = 'text-red-600 text-sm mt-1';
                     }
                 })
                 .catch(error => {
                     clearUserFields();
                     emailStatus.textContent = '✗ Error looking up user';
                     emailStatus.className = 'text-red-600 text-sm mt-1';
                 });
         }

         function clearUserFields() {
             userIdInput.value = '';
             firstnameDisplay.value = '';
             lastnameDisplay.value = '';
             middlenameDisplay.value = '';
             emailStatus.textContent = '';
         }
     });
 </script>
 <!-- modal delete appointment Section -->
 <div id="deleteModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
     <form id="deleteForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
         @csrf
         @method('DELETE')
         <h3 class="font-bold text-[40px]">Delete Appointment</h3>
         <div class="flex items-center justify-center w-full">
             <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete this appointment for <span id="deleteAppointmentUser" class="text-[#EF4444]">this user</span>? This action cannot be undone and the user's appointment will be cancelled.</p>
         </div>
         <div class="flex flex-col w-full gap-[20px]">
             <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete Appointment</button>
             <div class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
         </div>
     </form>
 </div>
 <!-- modal edit appointment Section -->
 <div id="editModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
     <form id="editForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
         @csrf
         @method('PUT')
         <input type="hidden" name="form_type" value="edit">
         <input type="hidden" id="edit_appointment_id" name="appointment_id" value="">

         <h3 class="font-bold text-[40px]">Edit Appointment</h3>

         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Service:</Label>
             <Select required id="edit_service" name="service" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 <option value="">Choose Service</option>
                 <option value="consultation">Consultation</option>
                 <option value="checkup">Check-up</option>
                 <option value="vaccination">Vaccination</option>
             </Select>
             @error('service')
             <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
             @enderror
         </div>

         <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Date:</Label>
                 <input required id="edit_date" name="date" type="date" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                 @error('date')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Time:</Label>
                 <Select required id="edit_time" name="time" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                     <option value="">Choose Time</option>
                     <option value="09:00:00">9:00 AM</option>
                     <option value="10:00:00">10:00 AM</option>
                     <option value="11:00:00">11:00 AM</option>
                     <option value="13:00:00">1:00 PM</option>
                     <option value="14:00:00">2:00 PM</option>
                     <option value="15:00:00">3:00 PM</option>
                 </Select>
                 @error('time')
                 <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                 @enderror
             </div>
         </div>

         <div class="flex flex-col w-full">
             <Label class="font-medium text-[18px]">Symptoms:</Label>
             <textarea id="edit_symptoms" name="symptoms" rows="3" placeholder="Describe your symptoms (Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]"></textarea>
         </div>

         <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">First Name:</Label>
                 <input readonly id="edit_firstname" type="text" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-400 text-[18px] bg-gray-50">
             </div>
             <div class="flex flex-col w-full">
                 <Label class="font-medium text-[18px]">Last Name:</Label>
                 <input readonly id="edit_lastname" type="text" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-400 text-[18px] bg-gray-50">
             </div>
         </div>

         <div class="flex flex-col gap-[10px]">
             <div class="flex flex-col">
                 <Label class="font-medium text-[18px]">Middle Name:</Label>
                 <input readonly id="edit_middlename" type="text" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-400 text-[18px] bg-gray-50">
             </div>
         </div>

         <div class="flex flex-col">
             <Label class="font-medium text-[18px]">Email:</Label>
             <input readonly id="edit_email" type="email" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-400 text-[18px] bg-gray-50">
         </div>

         <div class="flex flex-col w-full gap-[20px]">
             <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Update Appointment</button>
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
                     <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Appointments</h1>
                     <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing
                         elit, sed do eiusmod tempor incididunt ut
                          labore et dolore </p>
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
             <div class="w-full flex-col sm:flex-row items-start gap-[10px] sm:gap-[0] sm:items-center justify-between flex">
                 <div data-modal="addModal" class="addBtn rounded-[4px] group hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer hover:text-gray-50 bg-orange-500 px-[20px] py-[10px] text-[16px] font-medium text-white flex items-center gap-[12px]">
                     <svg class="h-[25px] group-hover:fill-gray-50 transition-all duration-300 w-[25px] fill-white" xmlns="http://www.w3.org/2000/svg" height="24px"
                         viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                         <path
                             d="M280-320v40q0 17 11.5 28.5T320-240q17 0 28.5-11.5T360-280v-40h40q17 0 28.5-11.5T440-360q0-17-11.5-28.5T400-400h-40v-40q0-17-11.5-28.5T320-480q-17 0-28.5 11.5T280-440v40h-40q-17 0-28.5 11.5T200-360q0 17 11.5 28.5T240-320h40Zm270-60h180q13 0 21.5-8.5T760-410q0-13-8.5-21.5T730-440H550q-13 0-21.5 8.5T520-410q0 13 8.5 21.5T550-380Zm0 120h100q13 0 21.5-8.5T680-290q0-13-8.5-21.5T650-320H550q-13 0-21.5 8.5T520-290q0 13 8.5 21.5T550-260ZM160-80q-33 0-56.5-23.5T80-160v-440q0-33 23.5-56.5T160-680h200v-120q0-33 23.5-56.5T440-880h80q33 0 56.5 23.5T600-800v120h200q33 0 56.5 23.5T880-600v440q0 33-23.5 56.5T800-80H160Zm280-520h80v-200h-80v200Z" />
                     </svg>
                     Add new appointment
                 </div>
                 <form method="GET" action="{{ route('admin.appointment.index') }}" class="flex w-full sm:w-fit items-center gap-[20px]">
                     <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-full sm:w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                         <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                             <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                         </svg>
                         <input name="search" value="{{ request('search') }}" class="w-full focus:outline-none" placeholder="Search by name" type="text">
                     </div>

                     <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded-sm hover:bg-orange-600 transition-all duration-300 font-medium">
                         Search
                     </button>

                     @if(request('search'))
                     <a href="{{ route('admin.appointment.index') }}" class="px-4 py-2 border border-gray-400 text-gray-600 rounded-sm hover:bg-gray-100 transition-all duration-300 font-medium">
                         Clear
                     </a>
                     @endif
                 </form>
             </div>

             <table class="w-full hidden sm:table border-collapse text-left border-[1px] border-gray-300 rounded-[4px]">
                 <thead>
                     <tr class="border-b-[1px] border-gray-300 bg-[#FFF7ED]">
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Service</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Patient</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Date Appointed</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Time</th>
                         <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($appointments as $appointment)
                     <tr class="border-b-[1px] border-gray-300 bg-white">
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">{{ $appointment->service}}</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $appointment->user->firstname}} {{ $appointment->user->middlename ? substr($appointment->user->middlename, 0, 1) . '.' : '' }} {{ $appointment->user->lastname}}</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $appointment->date}}</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">{{ $appointment->time}}</td>
                         <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                             <div data-modal="editModal"
                                 data-appointment-id="{{ $appointment->appointment_id }}"
                                 data-service="{{ $appointment->service }}"
                                 data-date="{{ $appointment->date }}"
                                 data-time="{{ $appointment->time }}"
                                 data-symptoms="{{ $appointment->symptoms }}"
                                 data-firstname="{{ $appointment->user->firstname }}"
                                 data-lastname="{{ $appointment->user->lastname }}"
                                 data-middlename="{{ $appointment->user->middlename }}"
                                 data-email="{{ $appointment->user->email }}"
                                 class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                 <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                     <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                 </svg>
                                 Edit
                             </div>
                             <div data-modal="deleteModal"
                                 data-appointment-id="{{ $appointment->appointment_id }}"
                                 data-user-name="{{ $appointment->user->firstname }} {{ $appointment->user->lastname }}"
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

             <!-- Mobile appointments Cards -->
             <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                 @foreach ($appointments as $appointment)
                 <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                     <h6 class="text-[14px] text-gray-600 font-semibold">Service:</h6>
                     <p class="text-[16px] font-medium">{{ $appointment->service}}</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Patient:</h6>
                     <p class="text-[16px] font-medium">{{ $appointment->user->firstname}} {{ $appointment->user->middlename ? substr($appointment->user->middlename, 0, 1) . '.' : '' }} {{ $appointment->user->lastname}}</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Date Appointed:</h6>
                     <p class="text-[16px] font-medium">{{ $appointment->date}}</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Time:</h6>
                     <p class="text-[16px] font-medium">{{ $appointment->time}}</p>
                     <h6 class="text-[14px] text-gray-600 font-semibold">Action:</h6>
                     <div class="w-full flex items-center gap-[10px]">
                         <div data-modal="editModal"
                             data-appointment-id="{{ $appointment->appointment_id }}"
                             data-service="{{ $appointment->service }}"
                             data-date="{{ $appointment->date }}"
                             data-time="{{ $appointment->time }}"
                             data-symptoms="{{ $appointment->symptoms }}"
                             data-firstname="{{ $appointment->user->firstname }}"
                             data-lastname="{{ $appointment->user->lastname }}"
                             data-middlename="{{ $appointment->user->middlename }}"
                             data-email="{{ $appointment->user->email }}"
                             class="editBtn hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                             <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                 <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                             </svg>
                             Edit
                         </div>
                         <div data-modal="deleteModal"
                             data-appointment-id="{{ $appointment->appointment_id }}"
                             data-user-name="{{ $appointment->user->firstname }} {{ $appointment->user->lastname }}"
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
                 {{ $appointments->appends(request()->query())->links() }}
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

                     // If it's an edit button for appointments
                     if (this.classList.contains('editBtn')) {
                         const appointmentId = this.getAttribute('data-appointment-id');
                         const editForm = document.getElementById('editForm');

                         if (editForm && appointmentId) {
                             editForm.action = `/admin/appointment/${appointmentId}`;
                         }

                         // Set hidden appointment_id field
                         document.getElementById('edit_appointment_id').value = appointmentId || '';

                         // Populate editable fields
                         document.getElementById('edit_service').value = this.getAttribute('data-service') || '';
                         document.getElementById('edit_date').value = this.getAttribute('data-date') || '';
                         document.getElementById('edit_time').value = this.getAttribute('data-time') || '';
                         document.getElementById('edit_symptoms').value = this.getAttribute('data-symptoms') || '';

                         // Populate readonly user fields
                         document.getElementById('edit_firstname').value = this.getAttribute('data-firstname') || '';
                         document.getElementById('edit_lastname').value = this.getAttribute('data-lastname') || '';
                         document.getElementById('edit_middlename').value = this.getAttribute('data-middlename') || '';
                         document.getElementById('edit_email').value = this.getAttribute('data-email') || '';
                     }

                     // If it's a delete button for appointments
                     if (this.classList.contains('deleteBtn')) {
                         const appointmentId = this.getAttribute('data-appointment-id');
                         const userName = this.getAttribute('data-user-name');
                         const deleteForm = document.getElementById('deleteForm');
                         const userNameSpan = document.getElementById('deleteAppointmentUser');

                         if (deleteForm && appointmentId) {
                             deleteForm.action = `/admin/appointment/${appointmentId}`;
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
 </body>

 </html>