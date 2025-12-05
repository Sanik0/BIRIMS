        <!-- Sidebar Section -->
        @include('shared.header')
        <!-- modal Section -->

        <div id="modal" class="w-full h-[100%] fixed bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
            <form class="rounded-[4px] bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
                <h3 class="font-bold text-[40px]">Edit Email</h3>
                <textarea class="font-normal text-[20px] text-[#52525B] border-b-[#E4E4E7] border-b-[1px] resize-none focus:outline-none px-[20px] py-[15px]" placeholder="Enter your email..." name="" id=""></textarea>
                <div class="w-full flex gap-[50px]">
                    <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</button>
                    <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Save</button>
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
                            <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">My Orders</h1>
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

                <section class="w-full flex flex-col">
                    <div class="container mx-auto px-4 py-8">
                        {{-- Error Messages --}}
                        @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <strong class="font-bold">Error!</strong>
                            <ul class="mt-2 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {{-- Orders List --}}
                        @if($orders->isEmpty())
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-12 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">No orders yet</h3>
                            <p class="mt-2 text-gray-500">Start by requesting a barangay document</p>
                            <a href="{{ route('document.create') }}" class="mt-6 inline-block bg-orange-500 text-white px-6 py-3 rounded-md hover:bg-orange-600 transition-all">
                                Request Document
                            </a>
                        </div>
                        @else
                        <div class="space-y-4">
                            @foreach($orders as $order)
                            <div class="flex items-start px-[15px] gap-[30px] sm:gap-[0] sm:px-[0] sm:items-center justify-between flex-col sm:flex-row w-full py-[30px] border-b-gray-300 border-b-[1px] bg-white rounded-lg border-b-[1px]">
                                <div class="flex gap-[15px]">
                                    <div class="overflow-hidden border-[1px] border-gray-200 rounded-[4px]">
                                        <img class="object-center object-cover h-[138px] w-[96px]"
                                            src="{{ asset('images/indegency.png') }}"
                                            alt="{{ $order->document_name }}">
                                    </div>
                                    <div class="flex flex-col py-[10px] max-w-[225px]">
                                        <h3 class="text-[20px] font-semibold">{{ $order->document_name }}</h3>
                                        <p class="text-[14px] text-gray-500 mt-1">{{ $order->description }}</p>
                                        <p class="mt-auto text-[16px] font-medium text-gray-400">
                                            Amount: <span class="text-[#85BB65]">₱{{ number_format($order->amount, 2) }}</span>
                                        </p>
                                        <p class="text-[14px] text-gray-400 mt-1">
                                            Ordered: {{ \Carbon\Carbon::parse($order->ordered_at)->format('M d, Y') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-[15px]">
                                    <p class="text-gray-400 font-semibold text-[16px]">Status</p>
                                    @php
                                    $statusColors = [
                                    'Pending' => 'text-yellow-500',
                                    'In-transit' => 'text-blue-500',
                                    'Delivered' => 'text-green-500',
                                    'Cancelled' => 'text-red-500'
                                    ];
                                    $statusColor = $statusColors[$order->status] ?? 'text-gray-500';
                                    @endphp
                                    <h3 class="{{ $statusColor }} font-bold text-[20px]">{{ $order->status }}</h3>
                                </div>

                                <div class="flex flex-col gap-[15px]">
                                    <p class="text-gray-400 font-semibold text-[16px]">
                                        @if($order->status === 'Delivered')
                                        Delivered On
                                        @elseif($order->status === 'Cancelled')
                                        Cancelled
                                        @else
                                        Expected Delivery
                                        @endif
                                    </p>
                                    <h3 class="text-gray-600 font-bold text-[20px]">
                                        @php
                                        $expectedDate = \Carbon\Carbon::parse($order->ordered_at)->addDays(7);
                                        @endphp
                                        {{ $expectedDate->format('d F Y') }}
                                    </h3>
                                </div>

                                <div class="flex flex-col gap-[10px]">
                                    <button
                                        onclick="openModal({{ $order->order_id }})"
                                        class="rounded-[4px] bg-orange-500 text-[20px] font-medium text-white px-[20px] py-[8px] hover:bg-orange-700 transition-all duration-300 text-center">
                                        View Details
                                    </button>

                                    @if($order->status === 'Pending')
                                    <button
                                        onclick="openDeleteModal({{ $order->order_id }}, '{{ $order->document_name }}')"
                                        class="w-full rounded-[4px] border-[1px] border-red-500 text-[20px] font-medium text-red-500 px-[20px] py-[8px] hover:bg-red-50 transition-all duration-300">
                                        Cancel Order
                                    </button>
                                    @endif
                                </div>
                            </div>

                            {{-- Modal for this order --}}
                            <div id="modal-{{ $order->order_id }}" class="hidden fixed inset-0 bg-black/50 backdrop-blur-[5px]  z-50 flex items-center justify-center p-4">
                                <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
                                    {{-- Modal Header --}}
                                    <div class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                                        <h2 class="text-2xl font-bold text-gray-800">Order Details</h2>
                                        <button onclick="closeModal({{ $order->order_id }})" class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>

                                    {{-- Modal Content --}}
                                    <div class="p-6">
                                        {{-- Order Info --}}
                                        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <p class="text-sm text-gray-500 font-semibold">Order ID</p>
                                                <p class="text-lg font-medium">#{{ $order->order_id }}</p>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 font-semibold">Document Type</p>
                                                <p class="text-lg font-medium">{{ $order->document_name }}</p>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 font-semibold">Status</p>
                                                <p class="text-lg font-medium {{ $statusColor }}">{{ $order->status }}</p>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 font-semibold">Amount</p>
                                                <p class="text-lg font-medium text-green-600">₱{{ number_format($order->amount, 2) }}</p>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 font-semibold">Order Date</p>
                                                <p class="text-lg font-medium">{{ \Carbon\Carbon::parse($order->ordered_at)->format('F d, Y h:i A') }}</p>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 font-semibold">Expected Delivery</p>
                                                <p class="text-lg font-medium">{{ $expectedDate->format('F d, Y') }}</p>
                                            </div>
                                        </div>

                                        <hr class="my-6">

                                        {{-- Document Fields --}}
                                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                            <h3 class="text-xl font-bold mb-4">Document Information</h3>

                                            @php
                                            $fields = DB::table('order_fields')
                                            ->where('order_id', $order->order_id)
                                            ->get()
                                            ->keyBy('field_name');
                                            @endphp

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <p class="text-sm text-gray-500 font-semibold">Full Name</p>
                                                    <p class="text-base font-medium">{{ $fields['full_name']->field_value ?? 'N/A' }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500 font-semibold">Age</p>
                                                    <p class="text-base font-medium">{{ $fields['age']->field_value ?? 'N/A' }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500 font-semibold">Years Resided</p>
                                                    <p class="text-base font-medium">{{ $fields['years_resided']->field_value ?? 'N/A' }} years</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500 font-semibold">Purpose</p>
                                                    <p class="text-base font-medium">{{ $fields['purpose']->field_value ?? 'N/A' }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500 font-semibold">Issue Date</p>
                                                    <p class="text-base font-medium">
                                                        {{ $fields['issue_month']->field_value ?? 'N/A' }}
                                                        {{ $fields['issue_day']->field_value ?? 'N/A' }},
                                                        {{ $fields['issue_year']->field_value ?? 'N/A' }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500 font-semibold">OR Number</p>
                                                    <p class="text-base font-medium">{{ $fields['or_number']->field_value ?? 'N/A' }}</p>
                                                </div>
                                                <div class="md:col-span-2">
                                                    <p class="text-sm text-gray-500 font-semibold">Payment Date</p>
                                                    <p class="text-base font-medium">
                                                        {{ $fields['payment_date']->field_value ? \Carbon\Carbon::parse($fields['payment_date']->field_value)->format('F d, Y') : 'N/A' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Modal Footer --}}
                                    <div class="border-t border-gray-200 px-6 py-4 flex justify-end gap-3">
                                        <button onclick="closeModal({{ $order->order_id }})"
                                            class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>

                    <!-- Delete Order Modal -->
                    <div id="deleteOrderModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
                        <form id="deleteOrderForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
                            @csrf
                            @method('DELETE')
                            <h3 class="font-bold text-[40px]">Cancel Order</h3>
                            <div class="flex items-center justify-center w-full">
                                <p class="font-regular text-[20px] text-gray-500">Are you sure you want to cancel <span id="deleteOrderTitle" class="text-[#EF4444]">this order</span>? This action cannot be undone.</p>
                            </div>
                            <div class="flex flex-col w-full gap-[20px]">
                                <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Cancel Order</button>
                                <div onclick="closeDeleteModal()" class="flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
                            </div>
                        </form>
                    </div>

                    {{-- Modal Scripts --}}
                    <script>
                        function openModal(orderId) {
                            document.getElementById('modal-' + orderId).classList.remove('hidden');
                            document.body.style.overflow = 'hidden';
                        }

                        function closeModal(orderId) {
                            document.getElementById('modal-' + orderId).classList.add('hidden');
                            document.body.style.overflow = 'auto';
                        }

                        function openDeleteModal(orderId, documentName) {
                            const deleteModal = document.getElementById('deleteOrderModal');
                            const deleteForm = document.getElementById('deleteOrderForm');
                            const deleteTitle = document.getElementById('deleteOrderTitle');

                            // Set the form action to the delete route
                            deleteForm.action = '/document/' + orderId;

                            // Set the document name in the modal
                            deleteTitle.textContent = documentName;

                            // Show the modal
                            deleteModal.classList.remove('hidden');
                            deleteModal.classList.add('flex');
                            document.body.style.overflow = 'hidden';
                        }

                        function closeDeleteModal() {
                            const deleteModal = document.getElementById('deleteOrderModal');
                            deleteModal.classList.add('hidden');
                            deleteModal.classList.remove('flex');
                            document.body.style.overflow = 'auto';
                        }

                        // Close modal when clicking outside
                        document.addEventListener('click', function(event) {
                            if (event.target.classList.contains('bg-opacity-50')) {
                                const modals = document.querySelectorAll('[id^="modal-"]');
                                modals.forEach(modal => {
                                    modal.classList.add('hidden');
                                });
                                document.body.style.overflow = 'auto';
                            }

                            // Close delete modal when clicking outside
                            if (event.target.id === 'deleteOrderModal') {
                                closeDeleteModal();
                            }
                        });
                    </script>
                </section>
            </main>

        </body>

        </html>