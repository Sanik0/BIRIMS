  <!-- header section -->
  @include('shared.header')
  <!-- modal Section -->
  <!-- Modal Cancel Appointment Section -->
  <div id="cancelAppointmentModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
      <form id="cancelAppointmentForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
          @csrf
          @method('DELETE')
          <h3 class="font-bold text-[40px]">Cancel Appointment</h3>
          <div class="flex items-center justify-center w-full">
              <p class="font-regular text-[20px] text-gray-500">Are you sure you want to cancel your <span id="cancelAppointmentService" class="text-[#EF4444]">appointment</span>? This action cannot be undone.</p>
          </div>
          <div class="flex flex-col w-full gap-[20px]">
              <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Cancel Appointment</button>
              <div class="cancelAppointmentBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Close</div>
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
                          Easily request barangay documents such as certificates, permits, and clearances.
                          Submit your details and track the status of your requests online.
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

          <section class="w-full items-center px-[15px] sm:px-[0] justify-center flex">
              <div class=" flex flex-col w-full max-w-[815px] gap-[30px]">
                  <div class="flex items-center">
                      <div id="btnShowForm" class="py-[12px] text-[14px] font-medium text-[#EA580C] border-b-[#EA580C] px-[12px] w-fit border-b-[1px] hover:cursor-pointer">Book Appointment</div>
                      <div id="btnShowSched" class="py-[12px] text-[14px] font-medium text-[#D4D4D8] border-b-[#D4D4D8] px-[12px] w-fit border-b-[1px] hover:cursor-pointer">My Appointments</div>
                  </div>

                  <form id="schedForm" method="POST" action="{{ route('appointment.store') }}" class="flex flex-col gap-[30px] w-full mb-[30px]">
                      @csrf
                      <!-- Error Messages -->
                      @if($errors->any())
                      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <ul class="list-disc list-inside">
                              @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif

                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Diagnostic Services: <span class="text-red-500">*</span></label>
                          <div class="w-full flex px-[8px] py-[10px] rounded-[4px] border-[#A1A1AA] border-solid border-[1px]">
                              <select name="service" required class="w-full text-[18px] font-normal focus:outline-none">
                                  <option value="">Select a service</option>
                                  <option value="Blood Test" {{ old('service') == 'Blood Test' ? 'selected' : '' }}>Blood Test</option>
                                  <option value="X-Ray" {{ old('service') == 'X-Ray' ? 'selected' : '' }}>X-Ray</option>
                                  <option value="Ultrasound" {{ old('service') == 'Ultrasound' ? 'selected' : '' }}>Ultrasound</option>
                                  <option value="ECG" {{ old('service') == 'ECG' ? 'selected' : '' }}>ECG</option>
                                  <option value="General Checkup" {{ old('service') == 'General Checkup' ? 'selected' : '' }}>General Checkup</option>
                              </select>
                          </div>
                      </div>


                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Preferred Date: <span class="text-red-500">*</span></label>
                          <div class="w-full flex px-[8px] py-[10px] border-[#A1A1AA] border-solid border-[1px]">
                              <input type="date" name="date" id="appointment-date" value="{{ old('date') }}"
                                  min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                  class="text-[18px] font-normal focus:outline-none w-full" required />
                          </div>
                      </div>

                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap"> Preffered Time: <span class="text-red-500">*</span></label>
                          <div class="w-full flex px-[8px] py-[10px] rounded-[4px] border-[#A1A1AA] border-solid border-[1px]">
                              <select name="time" required class="w-full text-[18px] font-normal focus:outline-none">
                                  <option value="">Select a time</option>
                                  <option value="08:00 AM" {{ old('time') == '08:00 AM' ? 'selected' : '' }}>08:00 AM</option>
                                  <option value="09:00 AM" {{ old('time') == '09:00 AM' ? 'selected' : '' }}>09:00 AM</option>
                                  <option value="10:00 AM" {{ old('time') == '10:00 AM' ? 'selected' : '' }}>10:00 AM</option>
                                  <option value="11:00 AM" {{ old('time') == '11:00 AM' ? 'selected' : '' }}>11:00 AM</option>
                                  <option value="01:00 PM" {{ old('time') == '01:00 PM' ? 'selected' : '' }}>01:00 PM</option>
                                  <option value="02:00 PM" {{ old('time') == '02:00 PM' ? 'selected' : '' }}>02:00 PM</option>
                                  <option value="02:30 PM" {{ old('time') == '02:30 PM' ? 'selected' : '' }}>02:30 PM</option>
                                  <option value="03:00 PM" {{ old('time') == '03:00 PM' ? 'selected' : '' }}>03:00 PM</option>
                                  <option value="04:00 PM" {{ old('time') == '04:00 PM' ? 'selected' : '' }}>04:00 PM</option>
                              </select>
                          </div>
                      </div>

                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">First Name: <span class="text-red-500">*</span></label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="text" name="first_name" required value="{{ old('first_name', $user->firstname ?? '') }}" readonly class="text-[18px] font-normal focus:outline-none w-full bg-gray-50" placeholder="Ex. Juan" />
                          </div>
                      </div>

                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Last Name: <span class="text-red-500">*</span></label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="text" name="last_name" required value="{{ old('last_name', $user->lastname ?? '') }}" readonly class="text-[18px] font-normal focus:outline-none w-full bg-gray-50" placeholder="Ex. Dela Cruz" />
                          </div>
                      </div>

                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Middle Name:</label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="text" name="middle_name" value="{{ old('middle_name', $user->middlename ?? '') }}" readonly class="text-[18px] font-normal focus:outline-none w-full bg-gray-50" placeholder="(Optional)" />
                          </div>
                      </div>

                      <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] sm:gap-[100px]">
                          <label class="text-[18px] w-full max-w-[190px] font-medium whitespace-nowrap">Email: <span class="text-red-500">*</span></label>
                          <div class="w-full flex px-[8px] py-[10px] border-b-[1px] border-b-[#A1A1AA]">
                              <input type="email" name="email" required value="{{ old('email', $user->email ?? '') }}" readonly class="w-full text-[18px] font-normal focus:outline-none bg-gray-50" placeholder="sample@gmail.com" />
                          </div>
                      </div>

                      <div class="w-full flex items-center justify-end gap-[50px]">
                          <button type="button" onclick="document.getElementById('schedForm').reset()" class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 hover:cursor-pointer transition-all duration-300 border-[#FDBA74] border-[1px] px-[20px] py-[8px] text-[20px] text-[#FDBA74] font-medium">Cancel</button>
                          <button type="submit" class="rounded-[4px] hover:cursor-pointer hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] px-[20px] py-[8px] text-[20px] text-[#ffffff] font-medium">Save</button>
                      </div>
                  </form>

                  <div id="notifSched" class="w-full flex-col" style="display: none;">
                      @forelse($appointments as $appointment)
                      <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px] px-[0px] border-[#E4E4E7] py-[15px]">
                          <div class="flex gap-[20px]">
                              <div class="flex flex-col gap-[0px]">
                                  <h1 class="font-medium text-[25px] font-serif">{{ $appointment->service }} Appointment</h1>
                                  <p class="text-[18px] font-normal text-[#71717A]">
                                      {{ \Carbon\Carbon::parse($appointment->date)->format('F d, Y') }} at {{ $appointment->time }} • {{ $appointment->service }}
                                  </p>
                                  <p class="text-[14px] text-gray-600 mt-1">Symptoms: {{ $appointment->symptoms }}</p>
                                  <small class="font-semibold text-[#D4D4D8] text-[12px]">
                                      {{ \Carbon\Carbon::parse($appointment->created_at)->format('d M Y') }}
                                  </small>
                              </div>
                          </div>
                          <div class="margin-left-auto flex">
                              <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                  <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EFEFEF">
                                      <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                  </svg>
                              </div>
                              <!-- Action -->
                              <div class="action-box absolute bottom-0 right-0 z-[99] mr-[25px] mb-[-20px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px]">
                                  <button type="button"
                                      data-appointment-id="{{ $appointment->appointment_id }}"
                                      data-service="{{ $appointment->service }}"
                                      class="cancel-appointment-btn flex items-center gap-[8px]">
                                      <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                      </svg>
                                      <div class="text-[#71717A] font-semibold text-[18px]">Cancel Appointment</div>
                                  </button>
                              </div>
                          </div>
                      </div>
                      @empty
                      <div class="p-[30px] text-center">
                          <svg class="w-[60px] h-[60px] mx-auto mb-[15px] text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                          <p class="text-gray-500 text-[14px]">No appointments scheduled yet</p>
                          <p class="text-gray-400 text-[12px] mt-[5px]">Your scheduled appointments will appear here</p>
                      </div>
                      @endforelse
                  </div>
              </div>
          </section>
      </main>

      <script>
          document.addEventListener('DOMContentLoaded', function() {
              // Tab switching (Form/Schedule)
              const btnForm = document.getElementById('btnShowForm');
              const btnSched = document.getElementById('btnShowSched');
              const schedForm = document.getElementById('schedForm');
              const notifSched = document.getElementById('notifSched');

              if (btnSched && btnForm) {
                  btnSched.addEventListener('click', function() {
                      if (!btnSched.classList.contains('text-orange-600')) {
                          // Show schedule
                          notifSched.style.display = 'flex';
                          schedForm.style.display = 'none';

                          // Make Sched active
                          btnSched.classList.add('text-orange-600', 'border-b-orange-600');
                          btnSched.classList.remove('text-gray-400', 'border-b-gray-400');

                          // Make Form inactive
                          btnForm.classList.add('text-gray-400', 'border-b-gray-400');
                          btnForm.classList.remove('text-orange-600', 'border-b-orange-600');
                      }
                  });

                  btnForm.addEventListener('click', function() {
                      if (!btnForm.classList.contains('text-orange-600')) {
                          // Show form
                          notifSched.style.display = 'none';
                          schedForm.style.display = 'flex';

                          // Make Form active
                          btnForm.classList.add('text-orange-600', 'border-b-orange-600');
                          btnForm.classList.remove('text-gray-400', 'border-b-gray-400');

                          // Make Sched inactive
                          btnSched.classList.add('text-gray-400', 'border-b-gray-400');
                          btnSched.classList.remove('text-orange-600', 'border-b-orange-600');
                      }
                  });
              }

              // Toggle action boxes (three dots menu)
              document.addEventListener('click', function(e) {
                  const toggleBtn = e.target.closest('.toggle-btn');

                  if (toggleBtn) {
                      e.stopPropagation();
                      const actionBox = toggleBtn.nextElementSibling;

                      // Close all other action boxes
                      document.querySelectorAll('.action-box').forEach(box => {
                          if (box !== actionBox) {
                              box.classList.add('hidden');
                              box.classList.remove('flex');
                          }
                      });

                      // Toggle current action box
                      actionBox.classList.toggle('hidden');
                      actionBox.classList.toggle('flex');
                  } else if (!e.target.closest('.action-box')) {
                      // Close all action boxes when clicking outside
                      document.querySelectorAll('.action-box').forEach(box => {
                          box.classList.add('hidden');
                          box.classList.remove('flex');
                      });
                  }
              });

              // Cancel appointment modal
              const modal = document.getElementById('cancelAppointmentModal');
              const cancelBtn = document.querySelector('.cancelAppointmentBtn');

              // Open modal when clicking cancel buttons
              document.querySelectorAll('.cancel-appointment-btn').forEach(button => {
                  button.addEventListener('click', function(e) {
                      e.preventDefault();
                      const appointmentId = this.dataset.appointmentId;
                      const service = this.dataset.service;
                      openCancelModal(appointmentId, service);
                  });
              });

              // Close modal when clicking cancel button
              if (cancelBtn) {
                  cancelBtn.addEventListener('click', function() {
                      modal.classList.add('hidden');
                      modal.classList.remove('flex');
                  });
              }

              // Close modal when clicking outside
              if (modal) {
                  modal.addEventListener('click', function(e) {
                      if (e.target === modal) {
                          modal.classList.add('hidden');
                          modal.classList.remove('flex');
                      }
                  });
              }
          });

          document.getElementById('appointment-date').addEventListener('input', function() {
              const selectedDate = new Date(this.value);
              const day = selectedDate.getDay();

              // 0 = Sunday, 6 = Saturday
              if (day === 0 || day === 6) {
                  alert('Appointments are not available on Saturdays and Sundays. Please select another date.');
                  this.value = '';
              }
          });

          // Open cancel modal function
          function openCancelModal(appointmentId, service) {
              const modal = document.getElementById('cancelAppointmentModal');
              const form = document.getElementById('cancelAppointmentForm');
              const serviceSpan = document.getElementById('cancelAppointmentService');

              if (form && serviceSpan && modal) {
                  // Set the form action with the appointment ID
                  form.action = "{{ route('appointment.destroy', ':id') }}".replace(':id', appointmentId);

                  // Set the service in the modal
                  serviceSpan.textContent = service + ' appointment';

                  // Show modal
                  modal.classList.remove('hidden');
                  modal.classList.add('flex');
              }
          }
      </script>
  </body>

  </html>