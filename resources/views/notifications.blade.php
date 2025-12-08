    <!-- Sidebar Section -->
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
                        <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Account Notifications</h1>
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

            <section class="w-full justify-between flex px-[15px] sm:px-[0]">

                <main class="w-full min-h-screen flex items-start justify-center py-[0px] px-[20px] sm:px-[50px]">
                    <section class="container w-full flex flex-col gap-[20px]">


                        <div class="w-full">
                            @forelse($notifications as $notification)
                            <div class="group relative w-full justify-between flex items-center border-solid border-b-[1px] border-[#E4E4E7] py-[15px]" data-notification-id="{{ $notification->notification_id }}">
                                <div class="flex gap-[20px]">
                                    <!-- Blue dot for unread notifications -->
                                    <div class="h-[15px] min-w-[16px] w-[16px] mt-[10px] rounded-[50%] {{ $notification->read ? 'bg-gray-300' : 'bg-blue-600' }}"></div>
                                    <div class="flex flex-col gap-[0px]">
                                        <h1 class="font-medium text-[20px] sm:text-[25px] {{ $notification->read ? 'text-gray-600' : 'text-black' }}">
                                            {{ $notification->title }}
                                        </h1>
                                        <p class="text-[16px] sm:text-[18px] font-normal text-[#71717A]">
                                            {{ $notification->body }}
                                        </p>
                                        <small class="font-semibold text-[#D4D4D8] text-[12px]">
                                            {{ \Carbon\Carbon::parse($notification->created_at)->format('d M Y, h:i A') }}
                                        </small>
                                    </div>
                                </div>
                                <div class="margin-left-auto flex">
                                    <div class="toggle-btn cursor-pointer flex items-center justify-center border-solid border-[1px] border-[#E4E4E7] h-[40px] w-[40px] rounded-[50%]">
                                        <svg class="fill-[#A1A1AA]" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px">
                                            <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z" />
                                        </svg>
                                    </div>
                                    <!-- Action -->
                                    <div class="action-box absolute bottom-0 right-0 mb-[-40px] sm:mb-[-70px] z-[99] mr-[20px] sm:mr-[30px] hidden flex-col gap-[10px] rounded-[4px] border-[1px] bg-white border-[#D4D4D8] p-[15px] shadow-lg">
                                        @if(!$notification->read)
                                        <div class="mark-read-btn cursor-pointer flex items-center gap-[8px] hover:bg-gray-50 p-[5px] rounded">
                                            <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                                <path d="m382-354 339-339q12-12 28-12t28 12q12 12 12 28.5T777-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z" />
                                            </svg>
                                            <div class="text-[#71717A] font-semibold text-[18px]">Mark as Read</div>
                                        </div>
                                        @endif
                                        <div class="delete-btn cursor-pointer flex items-center gap-[8px] hover:bg-gray-50 p-[5px] rounded">
                                            <svg class="fill-[#71717A] h-[30px] w-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                                <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
                                            </svg>
                                            <div class="text-[#71717A] font-semibold text-[18px]">Delete Notification</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="w-full text-center py-[60px]">
                                <svg class="h-[80px] w-[80px] mx-auto mb-4 fill-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                    <path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z" />
                                </svg>
                                <p class="text-gray-500 text-[18px]">No notifications yet</p>
                            </div>
                            @endforelse
                        </div>
                    </section>
                </main>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Toggle action boxes
                        document.querySelectorAll('.toggle-btn').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.stopPropagation();
                                const actionBox = this.nextElementSibling;

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
                            });
                        });

                        // Close action boxes when clicking outside
                        document.addEventListener('click', function(e) {
                            if (!e.target.closest('.toggle-btn') && !e.target.closest('.action-box')) {
                                document.querySelectorAll('.action-box').forEach(box => {
                                    box.classList.add('hidden');
                                    box.classList.remove('flex');
                                });
                            }
                        });

                        // Mark as read
                        document.querySelectorAll('.mark-read-btn').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.stopPropagation();
                                const notificationElement = this.closest('[data-notification-id]');
                                const notificationId = notificationElement.dataset.notificationId;

                                fetch(`/notifications/${notificationId}/read`, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        }
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            location.reload();
                                        }
                                    })
                                    .catch(error => console.error('Error:', error));
                            });
                        });

                        // Delete notification
                        document.querySelectorAll('.delete-btn').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.stopPropagation();
                                const notificationElement = this.closest('[data-notification-id]');
                                const notificationId = notificationElement.dataset.notificationId;

                                if (confirm('Are you sure you want to delete this notification?')) {
                                    fetch(`/notifications/${notificationId}`, {
                                            method: 'DELETE',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                            }
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                notificationElement.remove();

                                                // Check if there are no more notifications
                                                const remainingNotifications = document.querySelectorAll('[data-notification-id]');
                                                if (remainingNotifications.length === 0) {
                                                    location.reload();
                                                }
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));
                                }
                            });
                        });
                    });
                </script>
            </section>
        </main>

    </body>

    </html>