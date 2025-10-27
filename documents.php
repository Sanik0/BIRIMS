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
            <!-- mobile-sidebar Section -->
            <?php include_once 'shared/mobile-sidebar.php' ?>
            <section class="w-full items-center flex sm:hidden px-[15px] py-[10px] border-b-[1px] border-b-gray-300 justify-between">
                <div class="flex gap-[10px] items-center">
                    <svg id="openMenuBtn" class="h-[50px] w-[50px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg>
                    <div class="h-[50px] w-[50px] rounded-[50%] bg-orange-600"></div>
                </div>
                <div class="flex items-center gap-[20px]">
                    <div class="h-[40px] w-[40px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                        <img class="w-full h-full object-center object-cover" src="assets/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg" alt="">
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
                            <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Request Documents</h1>
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


                <section>
                    <div class="w-full flex flex-col px-[15px] sm:px-[0] gap-[15px]">
                        <div class="w-full flex justify-center sm:justify-between flex-wrap gap-[46px] mb-[30px]">
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="document.php"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="#"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="#"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="#"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="#"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="#"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="#"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                            <div
                                class="rounded-[4px] flex flex-col gap-[20px] border-solid w-full max-w-[266px] h-[324px] border-[1px] border-[#E4E4E7] p-[15px]">
                                <div class="h-full overflow-hidden w-full">
                                    <img class="h-full w-full object-cover object-center" src="assets/business-cert.png"
                                        alt="">
                                </div>
                                <h3 class="font-semibold text-[18px]">Barangay Certificate of Residency</h3>
                                <a href="#"
                                    class="rounded-[4px] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 w-full p-[8px] text-center border-[1px] border-[#FDBA74] text-[#FDBA74] text-[16px] font-medium">
                                    Get Certificate</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </body>

        </html>