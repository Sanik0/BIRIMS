        <!-- Sidebar Section -->
        <?php include_once 'shared/header.php' ?>
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
            <!-- Sidebar Section -->
            <?php include_once 'shared/sidebar.php' ?>
            <!-- Main Section -->
            <main class="w-full h-[100vh] pl-[290px] pr-[20px] flex flex-col gap-[30px] transition-all duration-300">
                <div class="flex w-full items-start justify-between py-[25px] border-b-[1px] border-[#D4D4D8]">
                    <div class="flex items-center gap-[10px] max-w-[579px]">
                        <div class="flex flex-col">
                            <h1 class="font-serif font-medium text-[35px]">My Orders</h1>
                            <p class="text-[16px] font-medium text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore </p>
                        </div>
                    </div>
                    <div class="flex gap-[20px]">
                        <div class="h-[50px] w-[50px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                            <img class="h-full w-full object-center object-cover" src="assets/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg" alt="">
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
                    <div class="flex items-center justify-between w-full py-[30px] border-b-gray-200 border-b-[1px]">
                        <div class="flex gap-[15px]">
                            <div class="overflow-hidden border-[1px] border-gray-200 rounded-[4px]">
                                <img class="object-center object-cover h-[138px] w-[96px]" src="assets/indegency.png" alt="">
                            </div>
                            <div class="flex flex-col py-[10px] max-w-[225px]">
                                <h3 class="text-[20px] font-semibold">Barangay Certificate of Residency</h3>
                                <p class="mt-auto text-[16px] font-medium text-gray-400">Amount: <span class="text-[#85BB65]">P150</span></p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Status</p>
                            <h3 class="text-orange-500 font-bold text-[20px]">Processing</h3>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Delivery Expected On</p>
                            <h3 class="text-gray-600 font-bold text-[20px]">09 September 2025</h3>
                        </div>
                        <a class="rounded-[4px] bg-orange-500 text-[20px] font-medium text-white px-[20px] py-[8px] hover:bg-orange-700 transition-all duration-300 " href="">View Details</a>
                    </div>
                    <div class="flex items-center justify-between w-full py-[30px] border-b-gray-200 border-b-[1px]">
                        <div class="flex gap-[15px]">
                            <div class="overflow-hidden border-[1px] border-gray-200 rounded-[4px]">
                                <img class="object-center object-cover h-[138px] w-[96px]" src="assets/indegency.png" alt="">
                            </div>
                            <div class="flex flex-col py-[10px] max-w-[225px]">
                                <h3 class="text-[20px] font-semibold">Barangay Certificate of Residency</h3>
                                <p class="mt-auto text-[16px] font-medium text-gray-400">Amount: <span class="text-[#85BB65]">P150</span></p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Status</p>
                            <h3 class="text-orange-500 font-bold text-[20px]">Processing</h3>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Delivery Expected On</p>
                            <h3 class="text-gray-600 font-bold text-[20px]">09 September 2025</h3>
                        </div>
                        <a class="rounded-[4px] bg-orange-500 text-[20px] font-medium text-white px-[20px] py-[8px] hover:bg-orange-700 transition-all duration-300 " href="">View Details</a>
                    </div>
                    <div class="flex items-center justify-between w-full py-[30px] border-b-gray-200 border-b-[1px]">
                        <div class="flex gap-[15px]">
                            <div class="overflow-hidden border-[1px] border-gray-200 rounded-[4px]">
                                <img class="object-center object-cover h-[138px] w-[96px]" src="assets/indegency.png" alt="">
                            </div>
                            <div class="flex flex-col py-[10px] max-w-[225px]">
                                <h3 class="text-[20px] font-semibold">Barangay Certificate of Residency</h3>
                                <p class="mt-auto text-[16px] font-medium text-gray-400">Amount: <span class="text-[#85BB65]">P150</span></p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Status</p>
                            <h3 class="text-orange-500 font-bold text-[20px]">Processing</h3>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Delivery Expected On</p>
                            <h3 class="text-gray-600 font-bold text-[20px]">09 September 2025</h3>
                        </div>
                        <a class="rounded-[4px] bg-orange-500 text-[20px] font-medium text-white px-[20px] py-[8px] hover:bg-orange-700 transition-all duration-300 " href="">View Details</a>
                    </div>
                    <div class="flex items-center justify-between w-full py-[30px] border-b-gray-200 border-b-[1px]">
                        <div class="flex gap-[15px]">
                            <div class="overflow-hidden border-[1px] border-gray-200 rounded-[4px]">
                                <img class="object-center object-cover h-[138px] w-[96px]" src="assets/indegency.png" alt="">
                            </div>
                            <div class="flex flex-col py-[10px] max-w-[225px]">
                                <h3 class="text-[20px] font-semibold">Barangay Certificate of Residency</h3>
                                <p class="mt-auto text-[16px] font-medium text-gray-400">Amount: <span class="text-[#85BB65]">P150</span></p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Status</p>
                            <h3 class="text-orange-500 font-bold text-[20px]">Processing</h3>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <p class="text-gray-400 font-semibold text-[16px]">Delivery Expected On</p>
                            <h3 class="text-gray-600 font-bold text-[20px]">09 September 2025</h3>
                        </div>
                        <a class="rounded-[4px] bg-orange-500 text-[20px] font-medium text-white px-[20px] py-[8px] hover:bg-orange-700 transition-all duration-300 " href="">View Details</a>
                    </div>
                </section>
            </main>
        </body>

        </html>