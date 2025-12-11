<!-- Sidebar Section -->
@include('shared.header')
<!-- modal Section -->

<body class="min-h-screen max-w-full bg-[#F4F4F5]">
    <header class="fixed top-0 left-0 w-full z-[100] flex bg-white items-center px-4 h-16 sm:px-10 md:h-20 justify-between">

        <!-- Hamburger Button (shows only on mobile) -->
        <button id="menu-btn" class="block md:hidden focus:outline-none cursor-pointer">
            <!-- 3-line hamburger icon -->
            <svg class="w-10" fill="none" stroke="var(--darkgray)" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div class="md:flex items-center gap-2.5 bg ">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="md:w-[50px] w-[35px] md:block hidden">
                <circle cx="25" cy="25" r="25" fill="#EA580C" />
            </svg>
            <h1 class="font-medium font text-[30px] md:text-[30px] text-[#EA580C] ">BIRIMS</h1>
        </div>

        <div class="flex items-center">
            <!-- Off-canvas left panel on mobile; static/inline on md+ -->
            <div id="menu" class="fixed md:static left-0 top-16 md:top-auto md:left-auto z-40 md:flex md:justify-end md:items-center md:pr-10 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out w-64 md:w-auto h-[calc(100vh-4rem)] md:h-auto bg-white md:bg-transparent p-4 md:p-0">
                <!-- Column on mobile, row on md+ -->
                <ul class="flex flex-col md:flex-row gap-6 lg:gap-[40px]">
                    <!-- The request()->is() function checks if the current URL matches and adds active automatically.
            So when you move between pages, the correct menu stays highlighted -->
                    <li><a href="{{url('/')}}" class="header-nav {{request()-> is('/') ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{url('about')}}" class="header-nav whitespace-nowrap {{request()-> is('about') ? 'active' : ''}}">About Us</a></li>
                    <li><a href="{{url('contact')}}" class="header-nav {{request()-> is('contact') ? 'active' : ''}}">Contact</a></li>
                    <li><a href="{{url('faq')}}" class="header-nav {{request()-> is('faq') ? 'active' : ''}}">FAQs</a></li>
                </ul>
            </div>
            <a href="{{ url('signin') }}" class="rounded-[5px] w-full py-[8px] px-[15px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[16px] text-[#ffffff] font-medium">SIGN-IN</a>
        </div>

    </header>

    <main class="min-h-screen w-full bg-[#F4F4F5] flex-1 flex flex-col">

        <!-- Hero Section -->
        <section class="min-h-screen w-full flex md:flex-row justify-between items-center lg:px-[120px] md:px-[40px] px-[40px] md:pt-[60px] flex-col pt-[90px] text-center md:text-left md:gap-0 gap-[30px] pb-[60px] md:pb-0">
            <div class="w-full md:max-w-[550px] flex flex-col gap-[20px] items-center md:items-start">
                <h1 class="md:text-[50px] font-medium md:leading-[65px] text-[32px]" style="font-family: 'IBM Plex Serif', serif;">Barangay Integrated Record and Incident Management System</h1>
                <p class="md:text-[18px] text-[16px] font-medium text-[#A1A1AA] leading-[27px]">A digital platform designed to simplify and secure the management of barangay resident records, incidents, clearances, and certifications. </p>
                <a href="#step-section" class="rounded-[5px] w-fit flex gap-5 py-[13px] px-[25px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[20px] text-[#ffffff] font-medium">
                    <p class="md:text-[20px] font-medium">Get Started</p>
                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                    </svg>
                </a>
            </div>
            <div class="w-full md:max-w-[550px] max-w-[220px] flex justify-end">
                <img src="{{asset('svg/hero-svg.svg')}}" alt="Hero Image">
            </div>
        </section>
        <!-- Hero Section -->

        <!-- Steps Section -->
        <section class="min-h-screen w-full bg-white flex flex-col items-center justify-center gap-[30px] lg:pb-[30px] pb-[50px] px-[40px] lg:px-0 text-center lg:pt-0 pt-[30px]" id="step-section">
            <div class="flex flex-col gap-2 justify-center items-center">
                <h1 style="font-family: 'IBM Plex Serif', serif;" class="md:text-[50px] text-[32px] font-medium">Get Your Documents In Just 3 Easy Steps!</h1>
                <p class="font-medium md:text-[18px] text-[16px] text-[#A1A1AA]">Access barangay clearances, residency, indigency, and business permits online - fast, convenient, and secure.</p>
            </div>
            <div class="w-full lg:px-35 flex md:flex-row flex-col items-center justify-between gap-[50px] lg:gap-0">
                <div class="flex w-fit flex-col justify-center items-center ">
                    <img src="{{asset('svg/fill-up.svg')}}" alt="Fill-up Form Photo" class="md:w-[200px] w-[150px]">
                    <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Fill Up The Form</h2>
                    <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px] text-center">Complete the digital application form after you logged in - anytime, anywhere.</p>
                </div>
                <div class="flex flex-col justify-center items-center rotate-90 md:rotate-0">
                    <svg class="lg:h-[4px] md:h-[2px] h-[1.5px]" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('svg/payment.svg')}}" alt="Payment Photo" class="md:w-[200px] w-[150px]">
                    <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Payment</h2>
                    <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px] text-center">Pay securely online or at the barangay office. Your request will be processed once payment is confirmed.</p>
                </div>
                <div class="flex flex-col justify-center items-center rotate-90 md:rotate-0">
                    <svg class="lg:h-[4px] md:h-[2px] h-[1.5px]" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src="{{asset('svg/delivery.svg')}}" alt="Delivery Photo" class="md:w-[200px] w-[150px]">
                    <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Delivery</h2>
                    <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px]  text-center">Get notified once your document is ready for pickup or deliver - simple, fast and reliable,</p>
                </div>
            </div>
        </section>
        <!-- Steps Section -->

        <!-- Barangay Certificates Section -->
        <section class="min-h-screen w-full flex flex-col items-center justify-center gap-[50px] lg:px-[40px] md:px-[40px] px-[40px] py-8 pb-[80px] md:pt-[60px] lg:pt-[30px] pt-[30px]" id="cards-certificates">
            <div class="flex flex-col gap-2 items-center justify-center">
                <h1 style="font-family: 'IBM Plex Serif', serif;" class="font-medium md:text-[50px] text-[32px] text-center">Request Your Barangay Certificates Online</h1>
                <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] md:pl-[200px] md:pr-[200px] text-center 
                        ">Easily apply for your barangay documents - no more long lines! Choose the certificate you need and submit your request in minutes.</p>
            </div>
            <div class="flex w-full flex-col sm:flex-row gap-[50px] sm:gap-[0] items-center max-w-[1128px] justify-between">
                <div class="flex flex-col shadow-[7px_0_0_#fdba74,0_7px_0_#fdba74] rounded-[5px] overflow-hidden w-full max-w-[308px] gap-[20px] bg-white">
                    <img class="object-center object-cover" src="{{asset('svg/certificates/residency.svg')}}" alt="Barangay Certificate for Business Photo">
                    <div class=" px-[20px] pb-[20px] flex flex-col gap-[15px] mt-4">
                        <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Residency</h1>
                        <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Issued to certify that a resident officially lives within the Barangay and is recognized by local authorities.</p>
                        <a href="{{url('signin')}}"  class="rounded-[5px] w-full flex gap-5 py-[10px] px-[15px] hover:text-orange-700 hover:bg-orange-50 transition-all duration-300 bg-white border border-orange-500 flex items-center justify-center text-[18px] text-orange-500 font-medium">Get Certificate</a>
                    </div>
                </div>
                <div class="flex flex-col shadow-[7px_0_0_#fdba74,0_7px_0_#fdba74] rounded-[5px] overflow-hidden w-full max-w-[308px] gap-[20px] bg-white">
                    <img class="object-center object-cover" src="{{asset('svg/certificates/no-objection.svg')}}" alt="Barangay Certificate for Business Photo">
                    <div class=" px-[20px] pb-[20px] flex flex-col gap-[15px] mt-4">
                        <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Clearance</h1>
                        <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Issued to verify that an individual has no pending cases and maintains good standing within the Barangay community.</p>
                        <a href="{{url('signin')}}"  class="rounded-[5px] w-full flex gap-5 py-[10px] px-[15px] hover:text-orange-700 hover:bg-orange-50 transition-all duration-300 bg-white border border-orange-500 flex items-center justify-center text-[18px] text-orange-500 font-medium">Get Certificate</a>
                    </div>
                </div>
                <div class="flex flex-col shadow-[7px_0_0_#fdba74,0_7px_0_#fdba74] rounded-[5px] overflow-hidden w-full max-w-[308px] gap-[20px] bg-white">
                    <img class="object-center object-cover" src="{{asset('svg/certificates/indigency.svg')}}" alt="Barangay Certificate for indigency Photo">
                    <div class=" px-[20px] pb-[20px] flex flex-col gap-[15px] mt-4">
                        <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Indigency</h1>
                        <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Issued to certify that an individual has no complaints and meets all Barangay requirements for clearance.</p>
                        <a href="{{url('signin')}}"  class="rounded-[5px] w-full flex gap-5 py-[10px] px-[15px] hover:text-orange-700 hover:bg-orange-50 transition-all duration-300 bg-white border border-orange-500 flex items-center justify-center text-[18px] text-orange-500 font-medium">Get Certificate</a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Barangay Certificates Section -->

        <!-- Blotter Section -->
        <section class="md:min-h-screen h-fit pb-[60px] lg:pb-0 w-full bg-white flex lg:flex-row flex-col-reverse lg:items-center lg:justify-center md:justify-center justify-end pt-[30px] md:pt-0 lg:px-[150px] md:pb-[40px] 
            px-[40px] lg:gap-0 md:gap-[70px] gap-[50px]" id="blotter">
            <div class="w-full flex justify-center">
                <img src="{{asset('svg/blotter-svg.svg')}}" class="lg:w-[510px] md:w-[400px] w-[350px]" alt="Blotter">

            </div>
            <div class="flex flex-col gap-6 lg:pl-20 lg:max-w-[550px] w-full items-center lg:items-start">
                <h1 style="font-family: var(--font-ibm-plex-serif);" class="font-medium md:text-[50px] text-[32px] md:leading-[65px] text-center lg:text-left ">Need To File For a Blotter</h1>
                <p class="font-medium md:text-[18px] text-[16px] text-[#A1A1AA] text-center lg:text-left">Report incidents, disputes, or complaints directly to Barangay San Bartolome. Submit your blotter details online and let our team assist you promptly. </p>
                <a href="#" class="rounded-[5px] w-fit flex gap-5 py-[13px] px-[25px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[20px] text-[#ffffff] font-medium">
                    <p class="md:text-[18px] text-[16px] font-medium">Report Now</p>
                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                    </svg>
                </a>
            </div>
        </section>
        <!-- Blotter Section -->

        <!-- FAQ Section -->
        <section class="lg:h-screen min-h-screen w-full flex md:flex-row pt-[30px] md:pt-0 flex-col items-center justify-center pb-[80px] md:gap-0 gap-[30px] px-[40px] lg:px-0" id="contact-us">
            <div class="w-full lg:max-w-[600px] flex flex-col md:gap-6 gap-3 justify-center items-center lg:items-start lg:px-20">
                <h1 class="font-medium md:text-[50px] text-[32px] md:leading-[65px] text-center md:text-left" style="font-family: var(--font-ibm-plex-serif);">Frequently Asked Questions</h1>
                <div class="w-full ">
                    <p class="font-medium md:text-[18px] text-[16px] text-center md:text-left text-[#A1A1AA] ">If you have any question or concern, you can contact us in <a href="" class="w-full text-[var(--orange)] duration-150 ease-in hover:underline md:text-[18px] text-[16px] block truncate">birims.sanbartolome@gmail.com</a> and we will quickly response at you! You can also contact us in different platforms just by clicking Contact Us below.</p>
                </div>
                <div class="w-full flex justify-center md:justify-start">
                    <a href="{{url('contact')}}" class="rounded-[5px] w-fit flex gap-5 py-[13px] px-[25px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[20px] text-[#ffffff] font-medium">
                        <p class="md:text-[18px] text-[16px] font-medium">Contact Us</p>
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                            <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full lg:max-w-[600px] flex flex-col gap-6 justify-center items-center lg:px-10">
                <ul class="w-full lg:max-w-[600px] h-full md:mt-[100px]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="first" class="faq-details">How do i request for my barangay documents?</label>
                        <input type="radio" name="accordion" id="first" class="hidden" checked class="bg-amber-300">
                        <div class="content">
                            <p class="faq-summary">You can request barangay documents by visiting the Barangay Hall or through our online portal. Fill out the request form, provide valid identification, and indicate the document type you need.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="second" class="faq-details">What are the requirements to request for my documents?</label>
                        <input type="radio" name="accordion" id="second" class="hidden">
                        <div class="content">
                            <p class="faq-summary">You’ll need a valid government-issued ID, proof of residency, and in some cases, supporting documents depending on the type of clearance or certificate you’re requesting.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="third" class="faq-details">What are the types of documents i can request for?</label>
                        <input type="radio" name="accordion" id="third" class="hidden">
                        <div class="content">
                            <p class="faq-summary">The types of documents that you can request are: Barangay Clearance, Business Clearance, Cedula, Oath Taking Certificate and Certificate of Residence, Indigency or Good Moral Character.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="fourth" class="faq-details">Do i need to pay for a fee to deliver my documents?</label>
                        <input type="radio" name="accordion" id="fourth" class="hidden">
                        <div class="content">
                            <p class="faq-summary">Yes, minimal processing or delivery fees may apply depending on your document type and delivery option.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                    <li class="md:p-[16px] py-[16px]">
                        <label for="fifth" class="faq-details">Does (company name) support delivery services?</label>
                        <input type="radio" name="accordion" id="fifth" class="hidden">
                        <div class="content">
                            <p class="faq-summary">Yes. We offer door-to-door document delivery through our barangay’s partnered courier service for added convenience.</p>
                        </div>
                    </li>
                    <hr class="text-[#E4E4E7]">
                </ul>
            </div>
        </section>
        <!-- FAQ Section -->

        <!-- Create Account Section -->
        <section class="min-h-screen md:h-full w-full bg-white relative px-[40px] pb-[100px]" style="height: calc(100vh - 80px);" id="create-account">
            <svg viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-0 absolute md:top-0 z-0 top-0 md:h-[300px] h-[200px]">
                <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C" />
                <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5" />
                <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C" />
            </svg>
            <svg viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 md:w-[230px] w-[150px] z-[0]">
                <g clip-path="url(#clip0_58_1146)">
                    <path d="M185 65.366H65.3661V185H185V65.366Z" fill="#FDBA74" />
                    <path d="M125.184 5.55005H5.55005V125.184H125.184V5.55005Z" stroke="#111111" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_58_1146">
                        <rect width="185" height="185" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <div class="w-full h-full flex flex-col gap-[10px] justify-center items-center md:px-[150px] text-center">
                <div class="w-full flex flex-col items-center">
                    <h1 class="z-10 relative md:text-[54px] text-[40px] font-medium w-full underline decoration-orange-500 decoration-9 underline-offset-[1px]" style="font-family: --font-ibm-plex-serif;">Create Your Account Now</h1>
                </div>
                <p class="md:text-[18px] text-[14px] text-[#A1A1AA] font-medium">So what are you waiting for? Request now your first online barangay document by signing in or creating your account!</p>
                <div class="flex md:gap-12 gap-6 mt-4 md:flex-row flex-col">
                    <a href="{{ url('signup')}}" class="rounded-[5px] w-fit flex gap-5 py-[13px] px-[25px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[20px] text-[#ffffff] font-medium">Create Account</a>
                    <a href="{{ url('signin')}}" class="rounded-[5px] w-fit flex gap-5 py-[13px] px-[25px] hover:text-orange-700 hover:bg-orange-50 transition-all duration-300 bg-white border border-orange-500 flex items-center justify-center text-[20px] text-orange-500 font-medium">Sign in To Account</a>
                </div>
            </div>
        </section>
        <!-- Create Account Section -->

    </main>

    <!-- Footer Section -->
    <footer class="md:max-h-[230px] h-[200px] w-full flex-col md:flex-row flex justify-between items-center px-[20px] lg:px-20 md:px-[20px] pt-[30px] md:py-0 text-center md:text-left">
        <div class="pb-[10px] md:pb-0 w-full md:block md:truncate">
            <div class="flex items-center gap-2.5 mb-4 justify-center md:justify-start">
                <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="md:h-[50px] h-[40px]">
                    <circle cx="25" cy="25" r="25" fill="#EA580C" />
                </svg>
                <h1 class="font-medium font md:text-[30px] text-[24px] text-[#EA580C]">BIRIMS</h1>
            </div>
            <div class="w-full flex flex-col gap-[10px]">
                <div class="w-full flex stroke-[var(--darkgray)] items-center gap-[10px] justify-center md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-8 md:size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <p class="w-fit block truncate font-medium text-[#A1A1AA] text-[12px]">Quirino Hwy, Novaliches, Quezon City, Metro Manila, Philippines</p>
                </div>
                <div class="w-full flex stroke-[var(--darkgray)] items-center gap-[10px] justify-center md:justify-start">
                    <svg fill="var(--darkgray)" class="size-5" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd" />
                    </svg>
                    <p class="w-fit block truncate font-medium text-[#A1A1AA] text-[12px]">www.facebook.com/brgysanbartolome2014</p>
                </div>
                <div class="w-full flex stroke-[var(--darkgray)] items-center gap-[10px] justify-center md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <p class="w-fit block truncate font-medium text-[#A1A1AA] text-[12px]">birim.sanbartolome@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col md:flex-row justify-end lg:gap-[70px] md:gap-[30px] gap-[20px] pb-[20px] md:pb-0">
            <div class="flex flex-col gap-[5px]">
                <h2 class="font-medium md:text-[18px] text-[16px]">Services</h2>
                <ul class="flex flex-col gap-[5px]">
                    <li><a href="{{url('signin')}}" class="footer-nav">Blotter</a></li>
                    <li><a href="{{url('signin')}}" class="footer-nav">Documents</a></li>
                    <li><a href="{{url('signin')}}" class="footer-nav">Appointment</a></li>
                    <li><a href="{{url('signin')}}" class="footer-nav">Announcement</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-[5px]">
                <h2 class="font-mediummd:text-[18px] text-[16px]">Navigation</h2>
                <ul class="flex flex-col gap-[5px]">
                    <li><a href="{{url('/')}}" class="footer-nav {{request()-> is('/') ? 'active-footer' : ''}}">Home</a></li>
                    <li><a href="{{url('about')}}" class="footer-nav {{request()-> is('about') ? 'active-footer' : ''}}">About</a></li>
                    <li><a href="{{url('contact')}}" class="footer-nav {{request()-> is('contact') ? 'active-footer' : ''}}">Contact</a></li>
                    <li><a href="{{url('signin')}}" class="footer-nav">Sign In</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-[5px]">
                <h2 class="font-medium md:text-[18px] text-[16px]">Resources</h2>
                <ul class="flex flex-col gap-[5px]">
                    <li><a href="{{url('faq')}}" class="footer-nav {{request()-> is('faq') ? 'active-footer' : ''}}">FAQs</a></li>
                    <li><a href="{{url('terms')}}" class="footer-nav {{request()-> is('terms') ? 'active-footer' : ''}}">Terms</a></li>
                    <li><a href="{{url('privacy')}}" class="footer-nav {{request()-> is('privacy') ? 'active-footer' : ''}}">Privacy Policy</a></li>
                    <li><a href="{{url('signup')}}" class="footer-nav">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer Section -->

</body>

</html>