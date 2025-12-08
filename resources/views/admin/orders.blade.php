          <!-- Sidebar Section -->
          @include('admin.shared.header')
          <!-- modal add user Section -->
          <div id="addModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
              <form class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
                  <h3 class="font-bold text-[40px]">Create Order</h3>
                  <div class="flex flex-col w-full">
                      <Label class="font-medium text-[18px]">Document:</Label>
                      <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                          <option value="">Choose Document</option>
                      </Select>
                  </div>
                  <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                      <div class="flex flex-col w-full">
                          <Label class="font-medium text-[18px]">First Name:</Label>
                          <input type="text" placeholder="Ex. Juan" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                      </div>
                      <div class="flex flex-col w-full">
                          <Label class="font-medium text-[18px]">Last Name:</Label>
                          <input type="text" placeholder="Ex. Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                      </div>
                  </div>
                  <div class="flex flex-col gap-[10px]">
                      <div class="flex flex-col">
                          <Label class="font-medium text-[18px]">Middle Name:</Label>
                          <input type="text" placeholder="(Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                      </div>
                  </div>
                  <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                      <div class="flex flex-col w-full">
                          <Label class="font-medium text-[18px]">House #:</Label>
                          <input type="text" placeholder="Ex. 123" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                      </div>
                      <div class="flex flex-col w-full">
                          <Label class="font-medium text-[18px]">Street:</Label>
                          <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                              <option value="">Choose Street</option>
                          </Select>
                      </div>
                  </div>
                  <div class="flex flex-col w-full">
                      <Label class="font-medium text-[18px]">Contact No:</Label>
                      <input type="text" placeholder="Ex. 09123456789" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                  </div>
                  <div class="flex flex-col w-full">
                      <Label class="font-medium text-[18px]">Total Amount:</Label>
                      <input type="text" readonly placeholder="" value="₱0.00" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                  </div>
                  <div class="flex flex-col w-full gap-[20px]">
                      <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create Order</button>
                      <div id="" class="flex cancelBtn items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
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
                              <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Manage Orders</h1>
                              <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">
                                  Track, review, and update incoming orders. Keep records organized and ensure every request is processed efficiently.
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

                  @if ($errors->any())
                  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mx-[15px] sm:mx-0">
                      <strong class="font-bold">Error!</strong>
                      <ul class="mt-2 list-disc list-inside">
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif

                  <section class="w-full flex px-[15px] sm:p-[0] flex-col gap-[15px]">
                      <div class="w-full flex-col sm:flex-row items-start gap-[10px] sm:gap-[0] sm:items-center justify-start flex">
                          <form method="GET" action="{{ route('admin.orders.index') }}" class="flex w-full sm:w-fit items-center gap-[20px]">
                              <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                                  <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                      <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                                  </svg>
                                  <select class="appearance-none focus:outline-none" name="status" onchange="this.form.submit()">
                                      <option value="">All Status</option>
                                      <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                                      <option value="Processing" {{ request('status') == 'Processing' ? 'selected' : '' }}>Processing</option>
                                      <option value="Ready for Pickup" {{ request('status') == 'Ready for Pickup' ? 'selected' : '' }}>Ready for Pickup</option>
                                      <option value="Delivered" {{ request('status') == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                      <option value="Cancelled" {{ request('status') == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                  </select>
                              </div>

                              <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-full sm:w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                                  <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                      <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                                  </svg>
                                  <input class="w-full focus:outline-none" placeholder="Search" type="text" name="search" value="{{ request('search') }}">
                              </div>
                          </form>
                      </div>
                      {{-- Desktop Table --}}
                      <table class="w-full hidden sm:table border-collapse text-left border-[1px] border-gray-300 rounded-[4px]">
                          <thead>
                              <tr class="border-b-[1px] border-gray-300 bg-[#FFF7ED]">
                                  <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Document Type</th>
                                  <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Requested By</th>
                                  <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Date Requested</th>
                                  <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Payment Mode</th>
                                  <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Status</th>
                                  <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse($orders as $order)
                              <tr class="border-b-[1px] border-gray-300 bg-white">
                                  <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">{{ $order->document_type }}</td>
                                  <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">
                                      {{ $order->firstname }} {{ $order->middlename ? strtoupper(substr($order->middlename, 0, 1)) . '.' : '' }} {{ $order->lastname }}
                                  </td>
                                  <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">
                                      {{ \Carbon\Carbon::parse($order->ordered_at)->format('d-m-Y') }}
                                  </td>
                                  <td class="px-[20px] py-[10px] font-regular text-[15px]">
                                      <span class="px-3 py-1 rounded-full text-sm font-medium
                    @if($order->mode_payment == 'Cash on Delivery') bg-orange-100 text-orange-700 border border-orange-200
                    @elseif($order->mode_payment == 'Pay at Counter (Pick Up)') bg-indigo-100 text-indigo-700 border border-indigo-200
                    @else bg-gray-100 text-gray-700 border border-gray-200
                    @endif">
                                          {{ $order->mode_payment ?? 'N/A' }}
                                      </span>
                                  </td>
                                  <td class="px-[20px] py-[10px] font-regular text-[16px]">
                                      <span class="px-3 py-1 rounded-full text-sm font-medium
                    @if($order->status == 'Pending') bg-yellow-100 text-yellow-800
                    @elseif($order->status == 'Processing') bg-blue-100 text-blue-800
                    @elseif($order->status == 'Ready for Pickup') bg-purple-100 text-purple-800
                    @elseif($order->status == 'Delivered') bg-green-100 text-green-800
                    @elseif($order->status == 'Cancelled') bg-red-100 text-red-800
                    @endif">
                                          {{ $order->status }}
                                      </span>
                                  </td>
                                  <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                      <button data-order-id="{{ $order->order_id }}" class="viewBtn bg-blue-100 text-blue-500 border-blue-500 cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                          <svg class="h-[20px] transition-all duration-300 fill-blue-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                              <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                                          </svg>
                                          View
                                      </button>
                                      <button data-order-id="{{ $order->order_id }}" class="editBtn bg-green-100 text-green-500 border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                          <svg class="h-[20px] transition-all duration-300 fill-green-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                              <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                          </svg>
                                          Edit
                                      </button>
                                      <button data-order-id="{{ $order->order_id }}" class="deleteBtn bg-red-100 text-red-500 border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                          <svg class="h-[20px] transition-all duration-300 fill-red-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                              <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                          </svg>
                                          Delete
                                      </button>
                                  </td>
                              </tr>
                              @empty
                              <tr>
                                  <td colspan="6" class="px-[20px] py-[40px] text-center text-gray-500">
                                      No orders found
                                  </td>
                              </tr>
                              @endforelse
                          </tbody>
                      </table>

                      {{-- Mobile Orders Cards --}}
                      <div class="w-full gap-[20px] mb-[30px] flex sm:hidden flex-col">
                          @forelse($orders as $order)
                          <div class="w-full border-[1px] border-gray-300 rounded-[4px] flex flex-col gap-[10px] p-[10px]">
                              <h6 class="text-[14px] text-gray-600 font-semibold">Document Type:</h6>
                              <p class="text-[16px] font-medium">{{ $order->document_type }}</p>

                              <h6 class="text-[14px] text-gray-600 font-semibold">Requested By</h6>
                              <p class="text-[16px] font-medium">
                                  {{ $order->firstname }} {{ $order->middlename ? strtoupper(substr($order->middlename, 0, 1)) . '.' : '' }} {{ $order->lastname }}
                              </p>

                              <h6 class="text-[14px] text-gray-600 font-semibold">Date Requested:</h6>
                              <p class="text-[16px] font-medium">{{ \Carbon\Carbon::parse($order->ordered_at)->format('d-m-Y') }}</p>

                              <h6 class="text-[14px] text-gray-600 font-semibold">Payment Mode:</h6>
                              <p class="text-[16px] font-medium">
                                  <span class="px-3 py-1 rounded-full text-sm font-medium
                @if($order->mode_payment == 'Cash on Delivery') bg-orange-100 text-orange-700 border border-orange-200
                @elseif($order->mode_payment == 'Pay at Counter (Pick Up)') bg-indigo-100 text-indigo-700 border border-indigo-200
                @else bg-gray-100 text-gray-700 border border-gray-200
                @endif">
                                      {{ $order->mode_payment ?? 'N/A' }}
                                  </span>
                              </p>

                              <h6 class="text-[14px] text-gray-600 font-semibold">Status:</h6>
                              <p class="text-[16px] font-medium">
                                  <span class="px-3 py-1 rounded-full text-sm font-medium
                @if($order->status == 'Pending') bg-yellow-100 text-yellow-800
                @elseif($order->status == 'Processing') bg-blue-100 text-blue-800
                @elseif($order->status == 'Ready for Pickup') bg-purple-100 text-purple-800
                @elseif($order->status == 'Delivered') bg-green-100 text-green-800
                @elseif($order->status == 'Cancelled') bg-red-100 text-red-800
                @endif">
                                      {{ $order->status }}
                                  </span>
                              </p>

                              <h6 class="text-[14px] text-gray-600 font-semibold">Action:</h6>
                              <div class="w-full flex items-center gap-[10px]">
                                  <button data-order-id="{{ $order->order_id }}" class="viewBtn bg-blue-100 text-blue-500 border-blue-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                      <svg class="h-[20px] transition-all duration-300 fill-blue-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                                          <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z" />
                                      </svg>
                                      View
                                  </button>
                                  <button data-order-id="{{ $order->order_id }}" class="editBtn bg-green-100 text-green-500 border-green-500 border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] font-medium text-[14px]">
                                      <svg class="h-[20px] transition-all duration-300 fill-green-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                      </svg>
                                      Edit
                                  </button>
                                  <button data-order-id="{{ $order->order_id }}" class="deleteBtn bg-red-100 text-red-500 border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px font-medium text-[14px">
                                      <svg class="h-[20px] transition-all duration-300 fill-red-500 w-[20px]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                          <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                      </svg>
                                      Delete
                                  </button>
                              </div>
                          </div>
                          @empty
                          <div class="w-full text-center py-[40px] text-gray-500">
                              No orders found
                          </div>
                          @endforelse
                      </div>
                  </section>
              </main>

              {{-- View Order Details Modal --}}
              <div id="viewModal" class="modal hidden fixed inset-0 bg-black/50 backdrop-blur-[5px] items-center justify-center z-50 overflow-y-auto p-4">
                  <div class="bg-white rounded-lg p-6 w-[90%] max-w-2xl max-h-[90vh] overflow-y-auto">
                      <div class="flex justify-between items-center mb-6">
                          <h2 class="text-2xl font-bold">Order Details</h2>
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
              {{-- Edit Status Modal --}}
              <div id="editModal" class="modal hidden fixed inset-0 bg-black/50 backdrop-blur-[5px] items-center justify-center z-50">
                  <div class="bg-white rounded-lg p-6 w-[90%] max-w-md">
                      <h2 class="text-2xl font-bold mb-4">Update Order Status</h2>
                      <form id="editForm" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="mb-4">
                              <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                              <select id="statusSelect" name="status" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                                  <option value="Pending">Pending</option>
                                  <option value="Processing">Processing</option>
                                  <option value="Ready for Pickup" data-mode="pickup">Ready for Pickup</option>
                                  <option value="Delivered" data-mode="delivery">Delivered</option>
                                  <option value="Cancelled">Cancelled</option>
                              </select>
                          </div>
                          <div class="flex justify-end gap-4">
                              <button type="button" class="cancelBtn px-6 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Cancel</button>
                              <button type="submit" class="px-6 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">Update</button>
                          </div>
                      </form>
                  </div>
              </div>

              {{-- Delete Confirmation Modal --}}
              <div id="deleteModal" class="modal hidden fixed inset-0 bg-black/50 backdrop-blur-[5px] items-center justify-center z-50">
                  <div class="bg-white rounded-lg p-6 w-[90%] max-w-md">
                      <h2 class="text-2xl font-bold mb-4">Delete Order</h2>
                      <p class="mb-6">Are you sure you want to delete this order? This action cannot be undone.</p>
                      <form id="deleteForm" method="POST">
                          @csrf
                          @method('DELETE')
                          <div class="flex justify-end gap-4">
                              <button type="button" class="cancelBtn px-6 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50">Cancel</button>
                              <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                          </div>
                      </form>
                  </div>
              </div>

              <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      const orders = @json($orders);

                      // View button click
                      document.querySelectorAll('.viewBtn').forEach(btn => {
                          btn.addEventListener('click', function() {
                              const orderId = this.getAttribute('data-order-id');
                              const order = orders.find(o => o.order_id == orderId);

                              if (!order) return;

                              // Build modal content with all order details
                              let content = `<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="col-span-2"><h3 class="text-lg font-semibold text-orange-600 mb-2">Document Information</h3></div>
                <div><label class="text-sm font-semibold text-gray-600">Document Type:</label><p class="text-base text-gray-900">${order.document_type || 'N/A'}</p></div>
                <div><label class="text-sm font-semibold text-gray-600">Status:</label><p class="text-base"><span class="px-3 py-1 rounded-full text-sm font-medium ${order.status == 'Pending' ? 'bg-yellow-100 text-yellow-800' : ''} ${order.status == 'Processing' ? 'bg-blue-100 text-blue-800' : ''} ${order.status == 'Ready for Pickup' ? 'bg-purple-100 text-purple-800' : ''} ${order.status == 'Delivered' ? 'bg-green-100 text-green-800' : ''} ${order.status == 'Cancelled' ? 'bg-red-100 text-red-800' : ''}">${order.status}</span></p></div>
                <div><label class="text-sm font-semibold text-gray-600">Amount:</label><p class="text-base text-gray-900">₱${parseFloat(order.amount || 0).toFixed(2)}</p></div>
                <div><label class="text-sm font-semibold text-gray-600">Date Requested:</label><p class="text-base text-gray-900">${new Date(order.ordered_at).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })}</p></div>
                <div class="col-span-2 mt-4"><h3 class="text-lg font-semibold text-orange-600 mb-2">Requester Information</h3></div>
                <div><label class="text-sm font-semibold text-gray-600">Full Name:</label><p class="text-base text-gray-900">${order.firstname || ''} ${order.middlename ? order.middlename.charAt(0).toUpperCase() + '.' : ''} ${order.lastname || ''}</p></div>`;

                              // Add document-specific fields if they exist
                              if (order.full_name) content += `<div class="col-span-2 mt-4"><h3 class="text-lg font-semibold text-orange-600 mb-2">Document Details</h3></div><div><label class="text-sm font-semibold text-gray-600">Name on Document:</label><p class="text-base text-gray-900">${order.full_name}</p></div>`;
                              if (order.address) content += `<div><label class="text-sm font-semibold text-gray-600">Address:</label><p class="text-base text-gray-900">${order.address}</p></div>`;
                              if (order.age) content += `<div><label class="text-sm font-semibold text-gray-600">Age:</label><p class="text-base text-gray-900">${order.age}</p></div>`;
                              if (order.civil_status) content += `<div><label class="text-sm font-semibold text-gray-600">Civil Status:</label><p class="text-base text-gray-900">${order.civil_status.charAt(0).toUpperCase() + order.civil_status.slice(1)}</p></div>`;
                              if (order.years_residency) content += `<div><label class="text-sm font-semibold text-gray-600">Years of Residency:</label><p class="text-base text-gray-900">${order.years_residency} years</p></div>`;
                              if (order.occupation) content += `<div><label class="text-sm font-semibold text-gray-600">Occupation:</label><p class="text-base text-gray-900">${order.occupation}</p></div>`;
                              if (order.monthly_income) content += `<div><label class="text-sm font-semibold text-gray-600">Monthly Income:</label><p class="text-base text-gray-900">₱${parseFloat(order.monthly_income).toFixed(2)}</p></div>`;
                              if (order.num_family_members) content += `<div><label class="text-sm font-semibold text-gray-600">Family Members:</label><p class="text-base text-gray-900">${order.num_family_members}</p></div>`;
                              if (order.purpose) content += `<div class="col-span-2"><label class="text-sm font-semibold text-gray-600">Purpose:</label><p class="text-base text-gray-900">${order.purpose}</p></div>`;
                              if (order.valid_until) content += `<div><label class="text-sm font-semibold text-gray-600">Valid Until:</label><p class="text-base text-gray-900">${new Date(order.valid_until).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })}</p></div>`;
                              if (order.mode_payment) content += `<div><label class="text-sm font-semibold text-gray-600">Payment Mode:</label><p class="text-base text-gray-900">${order.mode_payment}</p></div>`;
                              if (order.contact) content += `<div><label class="text-sm font-semibold text-gray-600">Contact Number:</label><p class="text-base text-gray-900">${order.contact}</p></div>`;
                              content += `</div>`;

                              document.getElementById('viewModalContent').innerHTML = content;
                              document.getElementById('viewModal').classList.remove('hidden');
                              document.getElementById('viewModal').classList.add('flex');
                          });
                      });

                      // Edit button click with conditional status options
                      document.querySelectorAll('.editBtn').forEach(btn => {
                          btn.addEventListener('click', function() {
                              const orderId = this.getAttribute('data-order-id');
                              const order = orders.find(o => o.order_id == orderId);
                              const form = document.getElementById('editForm');
                              const statusSelect = document.getElementById('statusSelect');

                              if (!form || !statusSelect) {
                                  console.error('Edit form or status select not found');
                                  return;
                              }

                              form.action = `/admin/orders/${orderId}`;

                              // Show/hide options based on payment mode
                              const pickupOption = statusSelect.querySelector('[data-mode="pickup"]');
                              const deliveryOption = statusSelect.querySelector('[data-mode="delivery"]');

                              if (!pickupOption || !deliveryOption) {
                                  console.error('Status options not found');
                                  return;
                              }

                              if (order && order.mode_payment) {
                                  if (order.mode_payment === 'Cash on Delivery') {
                                      // Hide "Ready for Pickup", show "Delivered"
                                      pickupOption.style.display = 'none';
                                      deliveryOption.style.display = 'block';
                                  } else if (order.mode_payment === 'Pay at Counter (Pick Up)') {
                                      // Show "Ready for Pickup", hide "Delivered"
                                      pickupOption.style.display = 'block';
                                      deliveryOption.style.display = 'none';
                                  } else {
                                      // Show both if payment mode is unknown
                                      pickupOption.style.display = 'block';
                                      deliveryOption.style.display = 'block';
                                  }
                              }

                              // Pre-select the current status
                              if (order) {
                                  statusSelect.value = order.status;
                              }

                              document.getElementById('editModal').classList.remove('hidden');
                              document.getElementById('editModal').classList.add('flex');
                          });
                      });

                      // Delete button click
                      document.querySelectorAll('.deleteBtn').forEach(btn => {
                          btn.addEventListener('click', function() {
                              const orderId = this.getAttribute('data-order-id');
                              const form = document.getElementById('deleteForm');
                              form.action = `/admin/orders/${orderId}`;

                              document.getElementById('deleteModal').classList.remove('hidden');
                              document.getElementById('deleteModal').classList.add('flex');
                          });
                      });

                      // Close modals
                      document.querySelectorAll('.cancelBtn').forEach(btn => {
                          btn.addEventListener('click', function() {
                              const modal = this.closest('.modal');
                              if (modal) {
                                  modal.classList.remove('flex');
                                  modal.classList.add('hidden');
                              }
                          });
                      });
                  });
              </script>
          </body>

          </html>