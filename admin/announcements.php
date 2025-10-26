    <!-- Sidebar Section -->
    <?php include_once 'shared/header.php' ?>
    <!-- modal add announcement Section -->
    <div id="addModal" class="w-full fixed inset-0 overflow-y-auto p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
        <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
            <h3 class="font-bold text-[40px]">Create Announcement</h3>
            <div class="flex flex-col gap-[10px]">
                <div class="flex flex-col">
                    <Label class="font-medium text-[18px]">Title:</Label>
                    <input type="text" placeholder="Title" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                </div>
            </div>
            <div class="flex flex-col w-full">
                <Label class="font-medium text-[18px]">Body</Label>
                <textarea type="text" placeholder="Body" value="₱0.00" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]"></textarea>
            </div>
            <div class="flex flex-col w-full">
                <Label class="font-medium text-[18px]">Type:</Label>
                <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                    <option value="">Choose type</option>
                </Select>
            </div>
            <div class="flex flex-col w-full gap-[20px]">
                <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create Announcement</button>
                <div id="cancelAddBtn" class="flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
            </div>
        </form>
    </div>
    <!-- modal delete announcement Section -->
    <div id="deleteModal" class="w-full fixed inset-0 overflow-y-auto p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
        <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
            <h3 class="font-bold text-[40px]">Delete Announcement</h3>
            <div class="flex items-center justify-center w-full">
                <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete <span class="text-[#EF4444]"> Community Tax Certificate (Cedula) Renewal Deadline</span>? This action cannot be undone and the user’s order will be cancelled.</p>
            </div>
            <div class="flex flex-col w-full gap-[20px]">
                <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete Order</button>
                <div id="cancelDeleteBtn" class="flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
            </div>
        </form>
    </div>
    <!-- modal edit announcement Section -->
    <div id="editModal" class="w-full fixed inset-0 overflow-y-auto p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
       <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
            <h3 class="font-bold text-[40px]">Create Announcement</h3>
            <div class="flex flex-col gap-[10px]">
                <div class="flex flex-col">
                    <Label class="font-medium text-[18px]">Title:</Label>
                    <input type="text" value="Community Tax Certificate (Cedula) Renewal Deadline" placeholder="Title" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                </div>
            </div>
            <div class="flex flex-col w-full">
                <Label class="font-medium text-[18px]">Body</Label>
                <textarea type="text" placeholder="Body" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30</textarea>
            </div>
            <div class="flex flex-col w-full">
                <Label class="font-medium text-[18px]">Type:</Label>
                <Select class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                    <option value="">Choose type</option>
                    <option value="" selected>Notice</option>
                </Select>
            </div>
            <div class="flex flex-col w-full gap-[20px]">
                <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Create Announcement</button>
                <div id="cancelEditBtn" class="flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
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
                        <h1 class="font-serif font-medium text-[35px]">Manage Announcements</h1>
                        <p class="text-[16px] font-medium text-[#A1A1AA]">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut
                             labore et dolore </p>
                    </div>
                </div>
                <div class="flex gap-[20px]">
                    <div class="h-[50px] w-[50px] rounded-[50%] border-solid border-[2px] border-[#EA580C] overflow-hidden">
                        <img class="w-full h-full object-center object-cover" src="../assets/3d cartoon avatar of a man minimal 3d character _ Premium AI-generated image.jpg" alt="">
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

            <section class="w-full flex flex-col gap-[15px]">
                <div class="w-full items-center justify-between flex">
                    <div id="addBtn" class="rounded-[4px] group hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer hover:text-gray-50 bg-orange-500 px-[20px] py-[10px] text-[16px] font-medium text-white flex items-center gap-[12px]">
                        <svg class="h-[25px] group-hover:fill-gray-50 transition-all duration-300 w-[25px] fill-white" xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                            <path
                                d="M760-440h-80q-17 0-28.5-11.5T640-480q0-17 11.5-28.5T680-520h80q17 0 28.5 11.5T800-480q0 17-11.5 28.5T760-440ZM584-288q10-14 26-16t30 8l64 48q14 10 16 26t-8 30q-10 14-26 16t-30-8l-64-48q-14-10-16-26t8-30Zm120-424-64 48q-14 10-30 8t-26-16q-10-14-8-30t16-26l64-48q14-10 30-8t26 16q10 14 8 30t-16 26ZM280-360H160q-17 0-28.5-11.5T120-400v-160q0-17 11.5-28.5T160-600h120l132-132q19-19 43.5-8.5T480-703v446q0 27-24.5 37.5T412-228L280-360Z" />
                        </svg>
                        Add new announcement
                    </div>
                    <form class="flex items-center gap-[20px]">
                        <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] border-gray-400 text-[18px] font-normal text-gray-400 gap-[8px]">
                            <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                <path d="M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" />
                            </svg>
                            <select class="appearance-none focus:outline-none" name="" id="">
                                <option value="Filter">Filter</option>
                            </select>
                        </div>

                        <div class="flex items-center rounded-[4px] px-[8px] py-[10px] border-[1px] w-[308px] border-gray-400 text-[18px] font-normal text-gray-600 gap-[8px]">
                            <svg class="h-[25px] w-[25px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                            </svg>
                            <input class="w-full focus:outline-none" placeholder="Search" type="text">
                        </div>
                    </form>
                </div>

                <table class="w-full border-collapse text-left border-[1px] border-gray-300 rounded-[4px]">
                    <thead>
                        <tr class="border-b-[1px] border-gray-300 bg-[#FFF7ED]">
                            <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Title</th>
                            <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Body</th>
                            <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Type</th>
                            <th class="px-[20px] py-[10px] font-medium text-[16px] text-gray-600">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-[1px] border-gray-300 bg-white">
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Community Tax Certificate (Cedula) Renewal Deadline</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Notice</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                <div id="editBtn" class="hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                    Edit
                                </div>
                                <div id="deleteBtn" class="hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                    Delete
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-[1px] border-gray-300 bg-white">
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Community Tax Certificate (Cedula) Renewal Deadline</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Notice</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                <div id="editBtn" class="hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                    Edit
                                </div>
                                <div id="deleteBtn" class="hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                    Delete
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-[1px] border-gray-300 bg-white">
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Community Tax Certificate (Cedula) Renewal Deadline</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Notice</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                <div id="editBtn" class="hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                    Edit
                                </div>
                                <div id="deleteBtn" class="hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                    Delete
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-[1px] border-gray-300 bg-white">
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Community Tax Certificate (Cedula) Renewal Deadline</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Notice</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                <div id="editBtn" class="hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                    Edit
                                </div>
                                <div id="deleteBtn" class="hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                    Delete
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-[1px] border-gray-300 bg-white">
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Community Tax Certificate (Cedula) Renewal Deadline</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Notice</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                <div id="editBtn" class="hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                    Edit
                                </div>
                                <div id="deleteBtn" class="hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                    Delete
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-[1px] border-gray-300 bg-white">
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Community Tax Certificate (Cedula) Renewal Deadline</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Notice</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                <div id="editBtn" class="hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                    Edit
                                </div>
                                <div id="deleteBtn" class="hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                    Delete
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-[1px] border-gray-300 bg-white">
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-black">Community Tax Certificate (Cedula) Renewal Deadline</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Please be advised that the deadline for securing your annual Community Tax Certificate (Cedula) for the current year is on November 30.</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] text-gray-600">Notice</td>
                            <td class="px-[20px] py-[10px] font-regular text-[16px] w-fit text-gray-600 flex items-center gap-[10px]">
                                <div id="editBtn" class="hover:bg-green-100 hover:text-green-500 hover:border-green-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-green-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                    Edit
                                </div>
                                <div id="deleteBtn" class="hover:bg-red-100 hover:text-red-500 hover:border-red-500 group cursor-pointer transition-all duration-300 rounded-[4px] px-[10px] py-[3px] flex items-center gap-[8px] border-[1px] border-gray-400 font-medium text-[14px] text-gray-400">
                                    <svg class="h-[20px] transition-all duration-300 group-hover:fill-red-500 w-[20px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                    </svg>
                                    Delete
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </main>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const addBtn = document.getElementById('addBtn');
                const addModal = document.getElementById('addModal');
                const cancelAddBtn = document.getElementById('cancelAddBtn');

                // delete modal
                const deleteBtn = document.getElementById('deleteBtn');
                const deleteModal = document.getElementById('deleteModal');
                const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

                // delete modal
                const editBtn = document.getElementById('editBtn');
                const editModal = document.getElementById('editModal');
                const canceleditBtn = document.getElementById('cancelEditBtn');

                addBtn.addEventListener('click', function() {
                    addModal.classList.remove('hidden');
                    addModal.classList.add('flex');
                });
                cancelAddBtn.addEventListener('click', function() {
                    addModal.classList.remove('flex');
                    addModal.classList.add('hidden');
                })

                // delete modal
                deleteBtn.addEventListener('click', function() {
                    deleteModal.classList.remove('hidden');
                    deleteModal.classList.add('flex');
                });
                cancelDeleteBtn.addEventListener('click', function() {
                    deleteModal.classList.remove('flex');
                    deleteModal.classList.add('hidden');
                })


                // edit modal
                editBtn.addEventListener('click', function() {
                    editModal.classList.remove('hidden');
                    editModal.classList.add('flex');
                });
                cancelEditBtn.addEventListener('click', function() {
                    editModal.classList.remove('flex');
                    editModal.classList.add('hidden');
                })


            });
        </script>
    </body>

    </html>