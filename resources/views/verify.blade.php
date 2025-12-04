  <!-- header section -->
  @include('shared.header')

  <body class="relative">
      <!-- sidebar section -->
      @include('shared.sidebar')
      <!-- mobile sidebar section -->
      @include('shared.mobile-sidebar')
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

          <section class="w-full px-[15px] sm:px-[0] items-center justify-center flex">
              <div class="flex w-full max-w-[948px] flex-col gap-[30px] mb-[30px]">
                  @if(session('error'))
                  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                      <span class="block sm:inline">{{ session('error') }}</span>
                  </div>
                  @endif

                  @if($verification)
                  <!-- Verification Pending State -->
                  <div class="max-w-[792px] flex flex-col gap-[20px] rounded-[4px] border-solid border-[1px] border-gray-300 p-[30px]">
                      <h1 class="text-[40px] font-bold">Verification Pending</h1>
                      <p class="text-[20px] text-gray-500 font-medium">Your verification request has been submitted and is currently under review. We'll notify you once it's been processed.</p>

                      <div class="flex flex-col gap-[10px]">
                          <div class="flex items-center gap-[10px]">
                              <span class="text-gray-600 font-medium">ID Type:</span>
                              <span class="text-gray-800 capitalize">{{ str_replace('_', ' ', $verification->type) }}</span>
                          </div>
                          <div class="flex items-center gap-[10px]">
                              <span class="text-gray-600 font-medium">Submitted:</span>
                              <span class="text-gray-800">{{ $verification->submitted_at->format('F d, Y h:i A') }}</span>
                          </div>
                      </div>

                      <div class="w-full max-w-[481px] h-fit overflow-hidden rounded-[4px] border border-gray-300">
                          <img class="w-full h-full object-center object-cover" src="{{ asset('storage/verifications/' . $verification->image) }}" alt="Submitted ID">
                      </div>

                      {{-- <a class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer" href="{{ route('notifications') }}">View Notifications</a> --}}
                  </div>
                  @else
                  <!-- Verification Upload Form -->
                  <div class="flex flex-col sm:flex-row w-full gap-[30px]">
                      <svg class="w-[290px] hidden sm:block h-[190px]" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                          <path style="fill:#F2F2F2;" d="M471.917,109.027H40.084C17.981,109.027,0,127.008,0,149.111v286.463 c0,22.103,17.981,40.083,40.084,40.083h431.833c22.103,0,40.083-17.981,40.083-40.083V149.111 C512,127.008,494.019,109.027,471.917,109.027z" />
                          <path style="fill:#E5E5E5;" d="M0,149.111v286.463c0,22.103,17.981,40.083,40.084,40.083h361.731L37.697,109.104 C16.701,110.344,0,127.811,0,149.111z" />
                          <g>
                              <path style="fill:#999999;" d="M428.092,231.95H248.518c-4.427,0-8.017-3.588-8.017-8.017s3.589-8.017,8.017-8.017h179.574 c4.427,0,8.017,3.588,8.017,8.017S432.519,231.95,428.092,231.95z" />
                              <path style="fill:#999999;" d="M428.092,197.745H248.518c-4.427,0-8.017-3.588-8.017-8.017s3.589-8.017,8.017-8.017h179.574 c4.427,0,8.017,3.588,8.017,8.017S432.519,197.745,428.092,197.745z" />
                              <path style="fill:#999999;" d="M428.092,430.764H86.046c-4.427,0-8.017-3.588-8.017-8.017s3.589-8.017,8.017-8.017h342.046 c4.427,0,8.017,3.588,8.017,8.017S432.519,430.764,428.092,430.764z" />
                          </g>
                      </svg>
                      <div class="w-full flex flex-col gap-[20px]">
                          <h1 class="font-semibold text-[40px]">We Need To Verify Your Identity</h1>
                          <p class="text-[16px] text-gray-400 font-regular">To access all features and ensure the security of our community, please submit a valid government-issued ID for verification.
                              <br><br>
                              Accepted IDs include: Government ID, Passport, Driver's License, or Voter's ID. Your information will be kept secure and confidential.
                          </p>
                      </div>
                  </div>

                  <form method="POST" action="{{ route('verify.store') }}" enctype="multipart/form-data" class="flex flex-col gap-[30px] w-full">
                      @csrf

                      <div class="flex flex-col gap-[30px] w-full">
                          <h2 class="font-semibold text-[25px]">Select ID Type</h2>

                          <label class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group cursor-pointer hover:border-orange-400 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50">
                              <input type="radio" name="id_type" value="government_id" required class="w-5 h-5 text-orange-500">
                              <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400 group-hover:fill-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                  <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                              </svg>
                              <div class="flex flex-col">
                                  <h3 class="font-medium text-[20px]">Government Issued ID</h3>
                                  <small class="font-normal text-gray-400 text-[14px]">National ID, Postal ID, or any government-issued identification</small>
                              </div>
                          </label>

                          <label class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group cursor-pointer hover:border-orange-400 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50">
                              <input type="radio" name="id_type" value="passport" required class="w-5 h-5 text-orange-500">
                              <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400 group-hover:fill-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                  <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                              </svg>
                              <div class="flex flex-col">
                                  <h3 class="font-medium text-[20px]">Passport</h3>
                                  <small class="font-normal text-gray-400 text-[14px]">Philippine Passport with photo and details</small>
                              </div>
                          </label>

                          <label class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group cursor-pointer hover:border-orange-400 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50">
                              <input type="radio" name="id_type" value="drivers_license" required class="w-5 h-5 text-orange-500">
                              <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400 group-hover:fill-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                  <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                              </svg>
                              <div class="flex flex-col">
                                  <h3 class="font-medium text-[20px]">Driver's License</h3>
                                  <small class="font-normal text-gray-400 text-[14px]">Valid Philippine driver's license</small>
                              </div>
                          </label>

                          <label class="w-full flex items-center gap-[8px] rounded-[4px] border-[1px] border-gray-400 p-[10px] group cursor-pointer hover:border-orange-400 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50">
                              <input type="radio" name="id_type" value="voters_id" required class="w-5 h-5 text-orange-500">
                              <svg class="h-[70px] min-w-[50px] w-[70px] fill-gray-400 group-hover:fill-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                  <path d="M566.15-461.54h163.08v-40H566.15v40Zm0-110.77h163.08v-40H566.15v40ZM230.77-347.69h264.61v-6.62q0-35-35.15-54.19-35.15-19.19-97.15-19.19-62 0-97.16 19.19-35.15 19.19-35.15 54.19v6.62Zm132.31-144.62q25.3 0 42.65-17.34 17.35-17.35 17.35-42.66 0-25.31-17.35-42.65-17.35-17.35-42.65-17.35-25.31 0-42.66 17.35-17.34 17.34-17.34 42.65t17.34 42.66q17.35 17.34 42.66 17.34ZM184.62-200q-27.62 0-46.12-18.5Q120-237 120-264.62v-430.76q0-27.62 18.5-46.12Q157-760 184.62-760h590.76q27.62 0 46.12 18.5Q840-723 840-695.38v430.76q0 27.62-18.5 46.12Q803-200 775.38-200H184.62Zm0-40h590.76q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93v-430.76q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H184.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93v430.76q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69ZM160-240v-480 480Z" />
                              </svg>
                              <div class="flex flex-col">
                                  <h3 class="font-medium text-[20px]">Voter's ID</h3>
                                  <small class="font-normal text-gray-400 text-[14px]">COMELEC Voter's identification card</small>
                              </div>
                          </label>

                          @error('id_type')
                          <small class="text-red-600 text-sm">{{ $message }}</small>
                          @enderror
                      </div>

                      <div class="w-full flex flex-col gap-[30px]">
                          <h2 class="font-semibold text-[25px]">Upload Your ID</h2>

                          <div id="uploadArea" class="rounded-[4px] border-dashed border-orange-400 border-[1px] py-[30px] flex gap-[25px] flex-col items-center justify-center cursor-pointer hover:bg-orange-50 transition-all">
                              <div class="bg-gray-100 rounded-[50%] p-[5px]">
                                  <svg class="h-[50px] w-[50px] fill-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                      <path d="m440-446-36 35q-11 11-27.5 11T348-412q-11-11-11-28t11-28l104-104q12-12 28-12t28 12l104 104q11 11 11.5 27.5T612-412q-11 11-27.5 11.5T556-411l-36-35v206h220q42 0 71-29t29-71q0-42-29-71t-71-29h-60v-80q0-83-58.5-141.5T480-720q-83 0-141.5 58.5T280-520h-20q-58 0-99 41t-41 99q0 58 41 99t99 41h60q17 0 28.5 11.5T360-200q0 17-11.5 28.5T320-160h-60q-91 0-155.5-63T40-377q0-78 47-139t123-78q25-92 100-149t170-57q117 0 198.5 81.5T760-520q69 8 114.5 59.5T920-340q0 75-52.5 127.5T740-160H520q-33 0-56.5-23.5T440-240v-206Zm40 6Z" />
                                  </svg>
                              </div>
                              <div>
                                  <h1 class="text-center text-[25px] font-medium text-orange-500">Tap to upload photo</h1>
                                  <p class="text-[18px] text-gray-400 font-medium">PNG, JPG or JPEG (max. 2MB)</p>
                              </div>
                              <div id="previewContainer" class="hidden w-full max-w-[400px]">
                                  <img id="preview" class="w-full rounded-[4px] border border-gray-300" src="" alt="Preview">
                                  <p id="fileName" class="text-center text-gray-600 mt-2"></p>
                              </div>
                              <div class="flex items-center justify-center gap-[10px] w-full max-w-[450px]">
                                  <hr class="w-full h-[1px] bg-gray-300 border-0">
                                  <p class="text-[18px] text-gray-400 font-medium">OR</p>
                                  <hr class="w-full h-[1px] bg-gray-300 border-0">
                              </div>
                              <label class="px-[20px] py-[10px] text-white font-medium text-[20px] rounded-[4px] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer bg-orange-500" for="cameraInput">Open Camera</label>
                              <input id="fileInput" name="id_image" type="file" accept="image/jpeg,image/jpg,image/png" class="hidden" required />
                              <input id="cameraInput" type="file" capture="environment" accept="image/*" class="hidden" />
                          </div>

                          @error('id_image')
                          <small class="text-red-600 text-sm">{{ $message }}</small>
                          @enderror
                      </div>

                      <div class="flex items-center justify-center gap-[20px]">
                          <a href="{{ route('home') }}" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</a>
                          <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Submit for Verification</button>
                      </div>
                  </form>
                  @endif
              </div>
          </section>

          <script>
              const uploadArea = document.getElementById('uploadArea');
              const fileInput = document.getElementById('fileInput');
              const cameraInput = document.getElementById('cameraInput');
              const preview = document.getElementById('preview');
              const previewContainer = document.getElementById('previewContainer');
              const fileName = document.getElementById('fileName');

              // Click on upload area to trigger file input
              uploadArea.addEventListener('click', function(e) {
                  if (e.target.tagName !== 'LABEL' && e.target.tagName !== 'INPUT') {
                      fileInput.click();
                  }
              });

              // Handle file selection from file input
              fileInput.addEventListener('change', function(e) {
                  handleFileSelect(e.target.files[0]);
              });

              // Handle file selection from camera
              cameraInput.addEventListener('change', function(e) {
                  const file = e.target.files[0];
                  if (file) {
                      // Transfer the file to the main file input
                      const dataTransfer = new DataTransfer();
                      dataTransfer.items.add(file);
                      fileInput.files = dataTransfer.files;
                      handleFileSelect(file);
                  }
              });

              function handleFileSelect(file) {
                  if (file && file.type.startsWith('image/')) {
                      const reader = new FileReader();
                      reader.onload = function(e) {
                          preview.src = e.target.result;
                          fileName.textContent = file.name;
                          previewContainer.classList.remove('hidden');
                      };
                      reader.readAsDataURL(file);
                  }
              }
          </script>
      </main>

  </body>

  </html>