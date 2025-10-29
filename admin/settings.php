        <!-- Sidebar Section -->
        <?php include_once 'shared/header.php' ?>
        <!-- modal Section -->
        <div id="modal" class="w-full px-[15px] sm:px-[0] h-[100%] fixed inset-0 bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
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
            <!-- Sidebar Section -->
            <?php include_once 'shared/sidebar.php' ?>
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
                        <img class="w-full h-full object-center object-cover" src="../assets/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg" alt="">
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
            <!-- mobile sidebar -->
            <?php include_once 'shared/mobile-sidebar.php' ?>
            <main class="w-full h-[100vh] sm:pl-[290px] sm:pr-[20px] flex flex-col gap-[30px] transition-all duration-300">
                <div class="flex w-full items-start justify-between py-[25px] border-b-[1px] border-[#D4D4D8] px-[15px] sm:px-[0]">
                    <div class="flex items-center gap-[10px] max-w-[579px]">
                        <div class="h-[90px] min-w-[90px] sm:flex hidden max-w-[90px] rounded-[50%] overflow-hidden">
                            <img class="h-full w-full object-center object-cover" src="assets/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg" alt="">
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Settings</h1>
                            <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore </p>
                        </div>
                    </div>
                    <div class="sm:flex hidden gap-[20px]">
                        <div class="h-[50px] w-[50px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                            <img class="w-full h-full object-center object-cover" src="assets/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg" alt="">
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

                <!--informations -->
                <section class="w-full flex px-[15px] sm:px-[0] items-center justify-center  z-[10]">
                    <div class="w-full max-w-[815px] flex flex-col gap-[50px] relative">
                        <!-- personal informations -->
                        <div class="flex flex-col gap-[15px] w-full">
                            <h2 class="font-bold text-[25px]">Personal Information</h2>
                            <div class="w-full rounded-[4px] border-solid border-[1px] py-[20px] border-[#D4D4D8]">
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="rounded-[50%] h-[98px] w-[98px] overflow-hidden">
                                            <img class="h-full w-full object-cover object-center" src="../assets/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Full Name</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">John K. Doe</p>
                                    </div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Email</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">johndoe@gmail.com</p>
                                    </div>
                                    <div id="modalBtn" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Address</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">123 Mabini Street,
                                            <br>
                                            Barangay San Isidro,
                                            <br>
                                            Quezon City, Metro Manila,
                                            <br>
                                            Philippines
                                        </p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Gender</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Male</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Place of birth:</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Quezon City</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Citizenship:</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Filipino</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Civil Status:</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Single</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Occupation:</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Professor</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Civil Status:</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Single</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class="px-[20px] py-[15px] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Birth Date</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">05 May 2011</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
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
                                    <a href="verify.php" class="font-bold text-[#EA580C] text-[20px]">Verify</a>
                                </div>
                                <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Change Password</div>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Edit</div>
                                </div>
                                <div class=" px-[20px] py-[15px] w-fill flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="font-semibold text-[16px]">Delete My Account</div>
                                        <p class="font-regular text-[16px] py-[10px] text-[#52525B]">This will Delete all your account’s information and cannot be undone</p>
                                    </div>
                                    <div class="font-bold text-[#EA580C] text-[20px]">Delete</div>
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

                    openModalBtn.addEventListener('click', function() {
                        modal.style.display = 'flex';
                    })

                })
            </script>
        </body>

        </html>