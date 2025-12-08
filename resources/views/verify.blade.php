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
                      <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Verify Account</h1>
                      <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">
                          To start using our services, please complete the account verification process.
                          This helps us confirm your identity and ensure secure access to all features.
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

          <section class="w-full px-[15px] sm:px-[0] items-center justify-center flex">
              <div class="flex w-full max-w-[948px] flex-col gap-[30px] mb-[30px]">
                  @if(session('error'))
                  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                      <span class="block sm:inline">{{ session('error') }}</span>
                  </div>
                  @endif

                  @if($verification && $verification->status == 'pending')
                  <!-- Verification Pending State -->
                  <div class="w-full mx-auto">
                      <!-- Status Card -->
                      <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-[20px] border-[2px] border-orange-200 p-[32px] shadow-lg">

                          <!-- Header -->
                          <div class="text-center mb-[32px]">
                              <div class="w-[80px] h-[80px] mx-auto mb-[20px] bg-gradient-to-br from-orange-500 to-orange-600 rounded-[20px] flex items-center justify-center shadow-lg">
                                  <svg class="w-[40px] h-[40px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                  </svg>
                              </div>
                              <h1 class="text-[36px] font-bold text-gray-800 mb-[12px]">Verification Pending</h1>
                              <p class="text-[16px] text-gray-600 leading-relaxed max-w-[600px] mx-auto">Your verification request has been submitted and is currently under review. We'll notify you once it's been processed.</p>
                          </div>

                          <!-- Info Cards -->
                          <div class="grid grid-cols-1 md:grid-cols-2 gap-[16px] mb-[32px]">
                              <!-- ID Type Card -->
                              <div class="bg-white rounded-[16px] p-[20px] shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300">
                                  <div class="flex items-center gap-[12px]">
                                      <div class="w-[48px] h-[48px] bg-orange-100 rounded-[12px] flex items-center justify-center flex-shrink-0">
                                          <svg class="w-[24px] h-[24px] fill-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                              <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V8h16v10z" />
                                          </svg>
                                      </div>
                                      <div class="flex-1">
                                          <p class="text-[14px] text-gray-500 font-medium mb-[4px]">ID Type</p>
                                          <p class="text-[16px] text-gray-800 font-semibold capitalize">{{ str_replace('_', ' ', $verification->type) }}</p>
                                      </div>
                                  </div>
                              </div>

                              <!-- Submitted Date Card -->
                              <div class="bg-white rounded-[16px] p-[20px] shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300">
                                  <div class="flex items-center gap-[12px]">
                                      <div class="w-[48px] h-[48px] bg-orange-100 rounded-[12px] flex items-center justify-center flex-shrink-0">
                                          <svg class="w-[24px] h-[24px] fill-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                              <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" />
                                          </svg>
                                      </div>
                                      <div class="flex-1">
                                          <p class="text-[14px] text-gray-500 font-medium mb-[4px]">Submitted</p>
                                          <p class="text-[16px] text-gray-800 font-semibold">{{ $verification->submitted_at ? $verification->submitted_at->format('F d, Y') : 'N/A' }}</p>
                                          <p class="text-[13px] text-gray-500">{{ $verification->submitted_at ? $verification->submitted_at->format('h:i A') : '' }}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Submitted ID Image -->
                          <div class="bg-white rounded-[16px] p-[20px] shadow-sm border border-gray-200">
                              <h3 class="text-[16px] font-semibold text-gray-700 mb-[16px] flex items-center gap-[8px]">
                                  <svg class="w-[20px] h-[20px] fill-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                                  </svg>
                                  Submitted Document
                              </h3>
                              <div class="w-full max-w-[500px] mx-auto overflow-hidden rounded-[12px] border-[2px] border-gray-200 shadow-md hover:shadow-lg transition-all duration-300">
                                  <img class="w-full h-full object-center object-cover" src="{{ asset('verifications/' . $verification->image) }}" alt="Submitted ID">
                              </div>
                          </div>

                          <div class="mt-[24px]">
                              <a href="{{ url('/notifications')}}" class="w-full flex items-center justify-center gap-[8px] px-[24px] py-[14px] text-[18px] text-white font-semibold rounded-[12px] border-[2px bg-orange-600">
                                  <svg class="w-[25px] h-[25px] fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
                                  </svg>
                                  View Notifications
                              </a>
                          </div>
                      </div>
                  </div>
                  @elseif($verification && $verification->status == 'rejected')
                  <!-- Verification Rejected State -->
                  <div class="w-full mx-auto">
                      <!-- Status Card -->
                      <div class="bg-gradient-to-br from-red-50 to-rose-50 rounded-[20px] border-[2px] border-red-200 p-[32px] shadow-lg">

                          <!-- Header -->
                          <div class="text-center mb-[32px]">
                              <div class="w-[80px] h-[80px] mx-auto mb-[20px] bg-gradient-to-br from-red-500 to-red-600 rounded-[20px] flex items-center justify-center shadow-lg">
                                  <svg class="w-[40px] h-[40px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" />
                                  </svg>
                              </div>
                              <h1 class="text-[36px] font-bold text-gray-800 mb-[12px]">Verification Rejected</h1>
                              <p class="text-[16px] text-gray-600 leading-relaxed max-w-[600px] mx-auto">
                                  Unfortunately, your verification request was rejected. This may be due to unclear images, incomplete information, or invalid documents. Please review the requirements and try again.
                              </p>
                          </div>

                          <!-- Info Cards -->
                          <div class="grid grid-cols-1 md:grid-cols-2 gap-[16px] mb-[32px]">
                              <!-- ID Type Card -->
                              <div class="bg-white rounded-[16px] p-[20px] shadow-sm border border-gray-200">
                                  <div class="flex items-center gap-[12px]">
                                      <div class="w-[48px] h-[48px] bg-red-100 rounded-[12px] flex items-center justify-center flex-shrink-0">
                                          <svg class="w-[24px] h-[24px] fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                              <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V8h16v10z" />
                                          </svg>
                                      </div>
                                      <div class="flex-1">
                                          <p class="text-[14px] text-gray-500 font-medium mb-[4px]">Previous ID Type</p>
                                          <p class="text-[16px] text-gray-800 font-semibold capitalize">{{ str_replace('_', ' ', $verification->type) }}</p>
                                      </div>
                                  </div>
                              </div>

                              <!-- Rejected Date Card -->
                              <div class="bg-white rounded-[16px] p-[20px] shadow-sm border border-gray-200">
                                  <div class="flex items-center gap-[12px]">
                                      <div class="w-[48px] h-[48px] bg-red-100 rounded-[12px] flex items-center justify-center flex-shrink-0">
                                          <svg class="w-[24px] h-[24px] fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                              <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" />
                                          </svg>
                                      </div>
                                      <div class="flex-1">
                                          <p class="text-[14px] text-gray-500 font-medium mb-[4px]">Rejected On</p>
                                          <p class="text-[16px] text-gray-800 font-semibold">{{ $verification->updated_at ? $verification->updated_at->format('F d, Y') : 'N/A' }}</p>
<p class="text-[13px] text-gray-500">{{ $verification->updated_at ? $verification->updated_at->format('h:i A') : '' }}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="mt-[24px] flex flex-col sm:flex-row gap-[16px]">
                              <form method="POST" action="{{ route('verify.delete') }}" class="w-full">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="w-full flex items-center justify-center gap-[8px] px-[24px] py-[14px] text-[18px] text-white font-semibold rounded-[12px] border-[2px] bg-red-600 hover:bg-red-700 transition-all duration-300">
                                      <svg class="w-[25px] h-[25px] fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                          <path d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12z" />
                                      </svg>
                                      Delete & Try Again
                                  </button>
                              </form>
                          </div>
                      </div>
                  </div>
                  @elseif(!$verification || $verification->status == 'rejected')
                  <!-- Verification Upload Form -->
                  <div class="flex flex-col sm:flex-row w-full gap-[30px]">
                      <svg class="w-[200px] xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 64 64">

                          <!-- SOFT ORANGE BACKGROUND WITH SUBTLE LIGHT -->
                          <defs>
                              <linearGradient id="bgGrad" x1="0" y1="0" x2="0" y2="1">
                                  <stop offset="0%" stop-color="#FDBA74" /> <!-- soft top light -->
                                  <stop offset="100%" stop-color="#F97316" /> <!-- orange-500 -->
                              </linearGradient>

                              <linearGradient id="cardGrad" x1="0" y1="0" x2="1" y2="1">
                                  <stop offset="0%" stop-color="#FFFFFF" />
                                  <stop offset="100%" stop-color="#F8F8F8" />
                              </linearGradient>

                              <linearGradient id="shieldGrad" x1="0" y1="0" x2="0" y2="1">
                                  <stop offset="0%" stop-color="#FFF3E5" />
                                  <stop offset="100%" stop-color="#FB923C" />
                              </linearGradient>

                              <!-- Soft shadow for elements -->
                              <filter id="softShadow">
                                  <feDropShadow dx="0" dy="1.2" stdDeviation="1.2" flood-color="#000" flood-opacity="0.18" />
                              </filter>
                          </defs>

                          <!-- Outer Circle -->
                          <circle cx="32" cy="32" r="30" fill="url(#bgGrad)" />

                          <!-- ID Card Group -->
                          <g transform="translate(15,17)" filter="url(#softShadow)">
                              <!-- Card Base -->
                              <rect x="0" y="0" width="28" height="32" rx="4" fill="url(#cardGrad)" stroke="#E6E6E6" />

                              <!-- Avatar -->
                              <circle cx="14" cy="10" r="4.2" fill="#F97316" />
                              <path d="M9.5 15c2-2 7-2 9 0v3h-9v-3z" fill="#FB923C" />

                              <!-- Lines -->
                              <rect x="4" y="21" width="20" height="2.2" rx="1" fill="#FED7AA" />
                              <rect x="4" y="25" width="13" height="2.2" rx="1" fill="#FED7AA" />
                          </g>

                          <!-- Verification Shield -->
                          <g transform="translate(38,36) scale(0.8)" filter="url(#softShadow)">
                              <path d="M7 0 L13 3.2 C13.7 3.6 14.1 4.3 14.1 5.1 V9.7 C14.1 11.9 
                                12.1 14.1 9.3 15.4 7.7 16 6.3 16 4.7 15.4 
                                2 14 0 11.8 0 9.7 V5.1 C0 4.3 0.4 3.6 1.1 3.2 L7 0 Z"
                                  fill="url(#shieldGrad)" stroke="#C2410C" stroke-width="0.8" />

                              <!-- Checkmark -->
                              <path d="M4.2 8.2 L6.3 10.6 L10.8 6.6"
                                  fill="none" stroke="#9A3412" stroke-width="1.3"
                                  stroke-linecap="round" stroke-linejoin="round" />
                          </g>

                      </svg>

                      <div class="w-full flex flex-col gap-[20px]">
                          <h1 class="font-bold text-[40px]">Identity Verification</h1>
                          <p class="text-[16px] text-gray-400 font-regular">
                              To access all features and ensure the security of our community, please submit a valid government-issued ID for verification.
                              <br><br>
                              <span class="text-red-500 font-semibold">
                                  Important: The document you upload must clearly show your full address.
                                  Blurry or incomplete details may result in your verification being rejected.
                              </span>
                          </p>
                      </div>
                  </div>

                  <form method="POST" action="{{ route('verify.store') }}" enctype="multipart/form-data" class="flex flex-col gap-[30px] w-full">
                      @csrf

                      <div class="flex flex-col gap-[20px] w-full">
                          <h2 class="font-semibold text-[25px] text-gray-800">Select ID Type</h2>

                          <!-- Government ID -->
                          <label class="w-full flex items-center gap-[16px] rounded-[12px] border-[2px] border-gray-300 p-[16px] group cursor-pointer transition-all duration-300 hover:border-orange-400 hover:shadow-md hover:-translate-y-1 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:shadow-lg">
                              <input type="radio" name="id_type" value="government_id" required class="w-5 h-5 text-orange-500 cursor-pointer">

                              <div class="min-w-[70px] w-[70px] h-[70px] flex items-center justify-center bg-gray-100 rounded-[10px] group-hover:bg-orange-100 transition-all duration-300 has-[:checked]:bg-orange-200">
                                  <svg class="h-[40px] w-[40px] fill-gray-500 group-hover:fill-orange-500 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V8h16v10zm-10-7.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5S12.33 12 11.5 12 10 11.33 10 10.5zM7.5 16h9v-.75c0-1-2-1.5-4.5-1.5s-4.5.5-4.5 1.5V16zm7-9h5v1.5h-5V7zm0 2.5h5V11h-5V9.5z" />
                                  </svg>
                              </div>

                              <div class="flex flex-col flex-1">
                                  <h3 class="font-semibold text-[18px] text-gray-800 group-hover:text-orange-600 transition-colors duration-300">Government Issued ID</h3>
                                  <small class="font-normal text-gray-500 text-[14px] leading-relaxed">National ID, Postal ID, or any government-issued identification</small>
                              </div>
                          </label>

                          <!-- Passport -->
                          <label class="w-full flex items-center gap-[16px] rounded-[12px] border-[2px] border-gray-300 p-[16px] group cursor-pointer transition-all duration-300 hover:border-orange-400 hover:shadow-md hover:-translate-y-1 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:shadow-lg">
                              <input type="radio" name="id_type" value="passport" required class="w-5 h-5 text-orange-500 cursor-pointer">

                              <div class="min-w-[70px] w-[70px] h-[70px] flex items-center justify-center bg-gray-100 rounded-[10px] group-hover:bg-orange-100 transition-all duration-300">
                                  <svg class="h-[40px] w-[40px] fill-gray-500 group-hover:fill-orange-500 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M12 2C9.24 2 7 4.24 7 7c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM5 20v2h14v-2H5z" />
                                      <path d="M12 11c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3" />
                                  </svg>
                              </div>

                              <div class="flex flex-col flex-1">
                                  <h3 class="font-semibold text-[18px] text-gray-800 group-hover:text-orange-600 transition-colors duration-300">Passport</h3>
                                  <small class="font-normal text-gray-500 text-[14px] leading-relaxed">Philippine Passport with photo and details</small>
                              </div>
                          </label>

                          <!-- Driver's License -->
                          <label class="w-full flex items-center gap-[16px] rounded-[12px] border-[2px] border-gray-300 p-[16px] group cursor-pointer transition-all duration-300 hover:border-orange-400 hover:shadow-md hover:-translate-y-1 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:shadow-lg">
                              <input type="radio" name="id_type" value="drivers_license" required class="w-5 h-5 text-orange-500 cursor-pointer">

                              <div class="min-w-[70px] w-[70px] h-[70px] flex items-center justify-center bg-gray-100 rounded-[10px] group-hover:bg-orange-100 transition-all duration-300">
                                  <svg class="h-[40px] w-[40px] fill-gray-500 group-hover:fill-orange-500 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M18.92 5.01C18.72 4.42 18.16 4 17.5 4h-11c-.66 0-1.21.42-1.42 1.01L3 11v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 15c-.83 0-1.5-.67-1.5-1.5S5.67 12 6.5 12s1.5.67 1.5 1.5S7.33 15 6.5 15zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 10l1.5-4.5h11L19 10H5z" />
                                  </svg>
                              </div>

                              <div class="flex flex-col flex-1">
                                  <h3 class="font-semibold text-[18px] text-gray-800 group-hover:text-orange-600 transition-colors duration-300">Driver's License</h3>
                                  <small class="font-normal text-gray-500 text-[14px] leading-relaxed">Valid Philippine driver's license</small>
                              </div>
                          </label>

                          <!-- Voter's ID -->
                          <label class="w-full flex items-center gap-[16px] rounded-[12px] border-[2px] border-gray-300 p-[16px] group cursor-pointer transition-all duration-300 hover:border-orange-400 hover:shadow-md hover:-translate-y-1 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50 has-[:checked]:shadow-lg">
                              <input type="radio" name="id_type" value="voters_id" required class="w-5 h-5 text-orange-500 cursor-pointer">

                              <div class="min-w-[70px] w-[70px] h-[70px] flex items-center justify-center bg-gray-100 rounded-[10px] group-hover:bg-orange-100 transition-all duration-300">
                                  <svg class="h-[40px] w-[40px] fill-gray-500 group-hover:fill-orange-500 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M18 13h-.68l-2 2h1.91L19 17H5l1.78-2h2.05l-2-2H6l-3 3v4c0 1.1.89 2 1.99 2H19c1.1 0 2-.89 2-2v-4l-3-3zm-1-5.05l-4.95 4.95-3.54-3.54 4.95-4.95L17 7.95zm-4.24-5.66L6.39 8.66c-.39.39-.39 1.02 0 1.41l4.95 4.95c.39.39 1.02.39 1.41 0l6.36-6.36c.39-.39.39-1.02 0-1.41L14.16 2.3c-.38-.4-1.01-.4-1.4-.01z" />
                                  </svg>
                              </div>

                              <div class="flex flex-col flex-1">
                                  <h3 class="font-semibold text-[18px] text-gray-800 group-hover:text-orange-600 transition-colors duration-300">Voter's ID</h3>
                                  <small class="font-normal text-gray-500 text-[14px] leading-relaxed">COMELEC Voter's identification card</small>
                              </div>
                          </label>

                          @error('id_type')
                          <small class="text-red-600 text-sm mt-2 block">{{ $message }}</small>
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

                      <div class="flex flex-col sm:flex-row items-center justify-center gap-[20px]">
                          <a href="{{ route('home') }}" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</a>
                          <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Submit for Verification</button>
                      </div>
                  </form>
                  @else
                  <!-- Verification Verified State -->
                  <div class="w-full mx-auto">
                      <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-[20px] border-[2px] border-green-200 p-[32px] shadow-lg">
                          <div class="text-center mb-[32px]">
                              <div class="w-[80px] h-[80px] mx-auto mb-[20px] bg-gradient-to-br from-green-500 to-green-600 rounded-[20px] flex items-center justify-center shadow-lg">
                                  <svg class="w-[40px] h-[40px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                  </svg>
                              </div>
                              <h1 class="text-[36px] font-bold text-gray-800 mb-[12px]">Account Verified</h1>
                              <p class="text-[16px] text-gray-600 leading-relaxed max-w-[600px] mx-auto">
                                  Your account has been successfully verified! You now have full access to all barangay services.
                              </p>
                          </div>
                          <div class="mt-[24px]">
                              <a href="{{ route('home') }}" class="w-full flex items-center justify-center gap-[8px] px-[24px] py-[14px] text-[18px] text-white font-semibold rounded-[12px] bg-green-600 hover:bg-green-700 transition-all duration-300">
                                  Go to Home
                              </a>
                          </div>
                      </div>
                  </div>
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