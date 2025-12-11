<!-- Sidebar Section -->
@include('shared.header')
<!-- modal Section -->

<body class="min-h-screen max-w-full bg-[#F4F4F5]">
    <header class="fixed top-0 left-0 w-full z-[100] bg-white shadow-sm">
        <div class="flex items-center justify-between px-4 h-16 sm:px-10 md:h-20">

            <!-- Logo Section -->
            <div class="flex items-center gap-2.5">
                <div class="h-[50px] w-[50px] min-w-[50px] rounded-full flex items-center justify-center bg-orange-500 p-[10px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="#ffffff" d="M15 17a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm18 0a6 6 0 1 0 0-12a6 6 0 0 0 0 12ZM4 22.446A3.446 3.446 0 0 1 7.446 19h9.624A7.963 7.963 0 0 0 16 23a7.98 7.98 0 0 0 2.708 6h-2.262a5.444 5.444 0 0 0-4.707 2.705c-3.222-.632-5.18-2.203-6.32-3.968C4 25.54 4 23.27 4 22.877v-.43ZM31.554 29a5.444 5.444 0 0 1 4.707 2.705c3.222-.632 5.18-2.203 6.32-3.968C44 25.54 44 23.27 44 22.877v-.43A3.446 3.446 0 0 0 40.554 19H30.93A7.963 7.963 0 0 1 32 23a7.98 7.98 0 0 1-2.708 6h2.262ZM30 23a6 6 0 1 1-12 0a6 6 0 0 1 12 0ZM13 34.446A3.446 3.446 0 0 1 16.446 31h15.108A3.446 3.446 0 0 1 35 34.446v.431c0 .394 0 2.663-1.419 4.86C32.098 42.033 29.233 44 24 44s-8.098-1.967-9.581-4.263C13 37.54 13 35.27 13 34.877v-.43Z" />
                    </svg>
                </div>
                <h1 class="font-medium text-[24px] md:text-[30px] text-[#EA580C]">BIRIMS</h1>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <ul class="flex items-center gap-6 lg:gap-[40px]">
                    <li><a href="{{url('/')}}" class="header-nav {{request()->is('/') ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{url('about')}}" class="header-nav whitespace-nowrap {{request()->is('about') ? 'active' : ''}}">About Us</a></li>
                    <li><a href="{{url('contact')}}" class="header-nav {{request()->is('contact') ? 'active' : ''}}">Contact</a></li>
                    <li><a href="{{url('faq')}}" class="header-nav {{request()->is('faq') ? 'active' : ''}}">FAQs</a></li>
                </ul>
                <a href="{{ url('signin') }}" class="rounded-[5px] py-[8px] px-[15px] hover:text-white hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] text-[16px] text-white font-medium whitespace-nowrap">SIGN-IN</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden focus:outline-none p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200 shadow-lg">
            <nav class="px-4 py-4">
                <ul class="space-y-1">
                    <li>
                        <a href="{{url('/')}}" class="block px-4 py-3 rounded-lg hover:bg-orange-50 transition-colors {{request()->is('/') ? 'bg-orange-100 text-orange-600 font-medium' : 'text-gray-700'}}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{url('about')}}" class="block px-4 py-3 rounded-lg hover:bg-orange-50 transition-colors {{request()->is('about') ? 'bg-orange-100 text-orange-600 font-medium' : 'text-gray-700'}}">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{url('contact')}}" class="block px-4 py-3 rounded-lg hover:bg-orange-50 transition-colors {{request()->is('contact') ? 'bg-orange-100 text-orange-600 font-medium' : 'text-gray-700'}}">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{url('faq')}}" class="block px-4 py-3 rounded-lg hover:bg-orange-50 transition-colors {{request()->is('faq') ? 'bg-orange-100 text-orange-600 font-medium' : 'text-gray-700'}}">
                            FAQs
                        </a>
                    </li>
                </ul>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <a href="{{ url('signin') }}" class="block rounded-lg py-3 px-4 bg-[#EA580C] hover:bg-orange-700 transition-all duration-300 text-center text-white font-medium">
                        SIGN-IN
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main class="w-full min-h-screen flex-1 bg-[var(--gray)] relative md:pb-[40px] pb-[150px]">
        <svg viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 md:w-[250px] w-[130px]">
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
        <svg viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute md:top-20 z-0 top-10 md:h-[360px] h-[200px]">
            <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C" />
            <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5" />
            <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C" />
        </svg>

        <!-- Title Section -->
        <div class="flex flex-col items-center pt-[35px] gap-[10px]">
            <h1 style="font-family: 'IBM Plex Serif';" class="pt-[80px] relative z-10 md:text-[50px] text-[32px] font-medium">Terms and Conditions</h1>
            <p class="relative z-10 text-[var(--darkgray)] text-[14px] md:text-[16px]">Last Updated: October 24 2025</p>
        </div>
        <!--/ Title Section -->

        <div class="w-full mt-[50px] relative z-10 flex flex-col justify-center md:flex-row gap-[50px] px-[40px]">

            <!-- Sticky Nav -->
            <div class="lg:w-[350px] md:w-[600px] sm-w-full flex ">
                <div class="w-full  bg-[var(--gray)] h-fit border border-[#71717A] flex flex-col rounded-[4px] sticky top-[150px]">
                    <h1 style="font-family: 'IBM Plex Serif';" class="font-medium text-[16px] md:text-[18px] p-[10px] text-center md:text-left ">On this page</h1>
                    <a href="#acceptance-of-terms" class="font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] active-privacy-nav privacy-nav-links text-center md:text-left ">1. Acceptance of Terms</a>
                    <a href="#user-accounts-and-registrations" class="font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px]  duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] privacy-nav-links text-center md:text-left ">2. User Accounts and Registrations</a>
                    <a href="#use-of-services" class="font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] privacy-nav-links text-center md:text-left ">3. Use of Services</a>
                    <a href="#incident-reporting" class="font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] privacy-nav-links text-center md:text-left ">4. Incident Reporting</a>
                    <a href="#data-privacy-and-security" class="font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] privacy-nav-links text-center md:text-left ">5. Data Privacy and Security</a>
                    <a href="#users-conduct" class="font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] privacy-nav-links text-center md:text-left ">6. Users Conduct</a>
                    <a href="#contact-information" class="font-medium text-[16px] md:text-[18px] text-[var(--darkgray)] py-[10px] pl-[10px] duration-150 ease-out hover:bg-[var(--iconorange)] hover:text-[var(--gray100)] privacy-nav-links text-center md:text-left ">7. Contact Information</a>
                </div>
            </div>
            <!--/ Sticky Nav  -->

            <!-- Terms Data Section -->
            <div class="w-full lg:w-fit flex justify-center">
                <div class="w-full lg:max-w-[400px] h-fit flex flex-col gap-[10px] px-[20px] md:px-0">
                    <section id="acceptance-of-terms" class="section">
                        <h6 class="font-medium md:text-[18px] text-[16px]">1. Acceptance of Terms</h6>
                        <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8">By accessing and using the Barangay Integrated Record and Incident Management System (BIRIMS), you agree to comply with and be bound by these Terms and Conditions. If you do not agree, please discontinue using the system. The Barangay of San Bartolome, Quezon City reserves the right to modify or update these terms at any time without prior notice.</p>
                    </section>
                    <section id="user-accounts-and-registrations" class="section">
                        <h6 class="font-medium md:text-[18px] text-[16px]">2. User Accounts and Registrations</h6>
                        <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8">Users must register using accurate and complete information. Each account is personal and should not be shared with others. You are responsible for maintaining the confidentiality of your account credentials and all activities under your account. Any unauthorized access or misuse should be reported immediately to the barangay administration.</p>
                    </section>
                    <section id="use-of-services" class="section">
                        <h6 class="font-medium md:text-[18px] text-[16px]">3. Use of Services</h6>
                        <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8">BIRIMS is designed to streamline barangay operations, including resident record management, document requests, and incident reporting. The system should only be used for official and lawful purposes. Misuse, tampering, or unauthorized access to data is strictly prohibited and may result in account suspension or legal action.</p>
                    </section>
                    <section id="incident-reporting" class="section">
                        <h6 class="font-medium md:text-[18px] text-[16px]">4. Incident Reporting</h6>
                        <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8">Residents may submit incident reports such as complaints, accidents, or community concerns through the platform. All reports must be factual and submitted in good faith. False, misleading, or malicious reports will not be tolerated and may result in account restrictions or penalties under barangay ordinances.</p>
                    </section>
                    <section id="data-privacy-and-security" class="section">
                        <h6 class="font-medium md:text-[18px] text-[16px]">5. Data Privacy and Security</h6>
                        <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8">BIRIMS values your privacy and ensures that all collected personal information is handled in accordance with the Data Privacy Act of 2012 (Republic Act No. 10173). Data is used solely for barangay administrative purposes and is protected from unauthorized access, disclosure, or alteration through secure protocols and restricted system access.</p>
                    </section>
                    <section id="users-conduct" class="section">
                        <h6 class="font-medium md:text-[18px] text-[16px]">6. Users Conduct</h6>
                        <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8">All users are expected to behave responsibly and respectfully when using the system. Any form of cyberbullying, harassment, or spreading false information is prohibited. The barangay reserves the right to review, suspend, or remove users who violate these guidelines.</p>
                    </section>
                    <section id="contact-information" class="section">
                        <h6 class="font-medium md:text-[18px] text-[16px]">7. Contact Information</h6>
                        <p class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)] px-[15px] leading-8 mt-[6px] ">If you have questions or concerns about this Privacy Policy, you may contact:
                            <a href="https://maps.app.goo.gl/t9oBHUwfVVHSXJFs9" target="_blank" class="flex gap-[10px] text-[16px] text-[var(--darkgray)] font-medium mt-[10px] stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:underline hover:stroke-[var(--orange)] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-8 md:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <span class="text-[14px] md:text-[16px]">Barangay San Bartolome, Quezon City, Metro Manila</span>
                            </a>
                            <a href="https://www.facebook.com/brgysanbartolome2014" target="_blank" class="flex items-center gap-[10px] text-[16px] text-[var(--darkgray)] font-medium duration-150 ease-out hover:text-[var(--orange)] hover:underline fill-[var(--darkgray)] hover:fill-[var(--orange)]">
                                <svg class="size-5" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd" />
                                </svg>
                                <span class="text-[14px] md:text-[16px]">Barangay San Bartolome</span>
                            </a>
                            <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="flex gap-[10px] text-[16px] items-center text-[var(--darkgray)] font-medium stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:stroke-[var(--orange)] hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                <span class="text-[14px] md:text-[16px] w-fit truncate block">birim.sanbartolome@gmail.com</span>
                            </a>
                            <a href="#" class="flex gap-[10px] text-[16px] items-center text-[var(--darkgray)] font-medium stroke-[var(--darkgray)] duration-150 ease-out hover:text-[var(--orange)] hover:stroke-[var(--orange)] hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                <span class="text-[14px] md:text-[16px]">(02) 8123-4567</span>
                            </a>
                        </p>
                    </section>
                </div>
            </div>
            <!--/ Terms Data Section -->

        </div>
    </main>
    <!-- Footer Section -->
    <footer class="w-full bg-white border-t border-gray-200">
        <div class=" mx-auto px-5 lg:px-20 md:px-10 py-5">
            <div class="flex flex-col md:flex-row justify-between gap-12 md:gap-8">
                <!-- Brand & Contact Info -->
                <div class="w-full md:w-auto md:max-w-sm">
                    <!-- Logo -->
                    <div class="flex items-center gap-2.5 mb-6 justify-center md:justify-start">
                        <div class="h-8 w-8 min-w-[32px] rounded-full flex items-center justify-center bg-orange-600 p-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-full h-full">
                                <path fill="#ffffff" d="M15 17a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm18 0a6 6 0 1 0 0-12a6 6 0 0 0 0 12ZM4 22.446A3.446 3.446 0 0 1 7.446 19h9.624A7.963 7.963 0 0 0 16 23a7.98 7.98 0 0 0 2.708 6h-2.262a5.444 5.444 0 0 0-4.707 2.705c-3.222-.632-5.18-2.203-6.32-3.968C4 25.54 4 23.27 4 22.877v-.43ZM31.554 29a5.444 5.444 0 0 1 4.707 2.705c3.222-.632 5.18-2.203 6.32-3.968C44 25.54 44 23.27 44 22.877v-.43A3.446 3.446 0 0 0 40.554 19H30.93A7.963 7.963 0 0 1 32 23a7.98 7.98 0 0 1-2.708 6h2.262ZM30 23a6 6 0 1 1-12 0a6 6 0 0 1 12 0ZM13 34.446A3.446 3.446 0 0 1 16.446 31h15.108A3.446 3.446 0 0 1 35 34.446v.431c0 .394 0 2.663-1.419 4.86C32.098 42.033 29.233 44 24 44s-8.098-1.967-9.581-4.263C13 37.54 13 35.27 13 34.877v-.43Z" />
                            </svg>
                        </div>
                        <h1 class="font-semibold text-2xl md:text-3xl text-orange-600">BIRIMS</h1>
                    </div>

                    <!-- Contact Details -->
                    <div class="flex flex-col gap-3">
                        <a href="https://maps.app.goo.gl/t9oBHUwfVVHSXJFs9" target="_blank" class="flex items-start gap-3 group text-center md:text-left justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 mt-0.5 flex-shrink-0 stroke-gray-600 group-hover:stroke-orange-600 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p class="text-sm font-medium text-gray-600 group-hover:text-orange-600 transition-colors">
                                Quirino Hwy, Novaliches, Quezon City, Metro Manila, Philippines
                            </p>
                        </a>

                        <a href="https://www.facebook.com/brgysanbartolome2014" target="_blank" class="flex items-center gap-3 group justify-center md:justify-start">
                            <svg class="w-5 h-5 flex-shrink-0 fill-gray-600 group-hover:fill-orange-600 transition-colors" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd" />
                            </svg>
                            <p class="text-sm font-medium text-gray-600 group-hover:text-orange-600 transition-colors">
                                www.facebook.com/brgysanbartolome2014
                            </p>
                        </a>

                        <a href="mailto:birims.sanbartolome@gmail.com" class="flex items-center gap-3 group justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 flex-shrink-0 stroke-gray-600 group-hover:stroke-orange-600 transition-colors">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <p class="text-sm font-medium text-gray-600 group-hover:text-orange-600 transition-colors">
                                birims.sanbartolome@gmail.com
                            </p>
                        </a>
                    </div>
                </div>

                <!-- Navigation Sections -->
                <div class="w-full flex flex-col md:flex-row justify-center md:justify-end gap-12 md:gap-16 lg:gap-20 text-center md:text-left">
                    <!-- Services -->
                    <div class="flex flex-col gap-4">
                        <h2 class="font-semibold text-base md:text-lg text-gray-900">Services</h2>
                        <ul class="flex flex-col gap-2.5">
                            <li><a href="/signin" class="footer-nav">Blotter</a></li>
                            <li><a href="/signin" class="footer-nav">Documents</a></li>
                            <li><a href="/signin" class="footer-nav">Appointment</a></li>
                            <li><a href="/signin" class="footer-nav">Announcement</a></li>
                        </ul>
                    </div>

                    <!-- Navigation -->
                    <div class="flex flex-col gap-4">
                        <h2 class="font-semibold text-base md:text-lg text-gray-900">Navigation</h2>
                        <ul class="flex flex-col gap-2.5">
                            <li><a href="/" class="footer-nav active-footer">Home</a></li>
                            <li><a href="/about" class="footer-nav">About</a></li>
                            <li><a href="/contact" class="footer-nav">Contact</a></li>
                            <li><a href="/signin" class="footer-nav">Sign In</a></li>
                        </ul>
                    </div>

                    <!-- Resources -->
                    <div class="flex flex-col gap-4">
                        <h2 class="font-semibold text-base md:text-lg text-gray-900">Resources</h2>
                        <ul class="flex flex-col gap-2.5">
                            <li><a href="/faq" class="footer-nav">FAQs</a></li>
                            <li><a href="/terms" class="footer-nav">Terms</a></li>
                            <li><a href="/privacy" class="footer-nav">Privacy Policy</a></li>
                            <li><a href="/signup" class="footer-nav">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <p class="text-center text-sm text-gray-500">
                    © 2025 BIRIMS. All rights reserved. | Barangay San Bartolome, Quezon City
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            menuBtn.addEventListener('click', function() {
                // Toggle menu visibility
                mobileMenu.classList.toggle('hidden');

                // Toggle icons
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnButton = menuBtn.contains(event.target);

                if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close menu when window is resized to desktop size
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        });

        // Add this JavaScript at the end of your HTML body or in a separate file

        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');
            const navLinks = document.querySelectorAll('.privacy-nav-links');

            // Function to remove active class from all links
            function removeActiveClasses() {
                navLinks.forEach(link => {
                    link.classList.remove('active-privacy-nav');
                    link.style.backgroundColor = '';
                    link.style.color = '';
                });
            }

            // Function to add active class to current link
            function addActiveClass(id) {
                removeActiveClasses();
                const activeLink = document.querySelector(`a[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active-privacy-nav');
                    activeLink.style.backgroundColor = '#EA580C'; // var(--iconorange)
                    activeLink.style.color = '#F4F4F5'; // var(--gray100)
                }
            }

            // Intersection Observer for scroll detection
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -70% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        addActiveClass(entry.target.id);
                    }
                });
            }, observerOptions);

            // Observe all sections
            sections.forEach(section => {
                observer.observe(section);
            });

            // Handle click events for smooth scrolling
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);

                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Update active state immediately on click
                        setTimeout(() => {
                            addActiveClass(targetId);
                        }, 100);
                    }
                });
            });

            // Set initial active state
            if (sections.length > 0) {
                addActiveClass(sections[0].id);
            }
        });
    </script>

    <style>
        .header-nav {
            position: relative;
            color: #4B5563;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .header-nav:hover {
            color: #EA580C;
        }

        .header-nav.active {
            color: #EA580C;
        }

        .header-nav.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #EA580C;
            border-radius: 2px;
        }

        :root {
            --orange: #EA580C;
            --darkgray: #71717A;
        }

        .footer-nav {
            @apply text-sm text-gray-500 hover:text-orange-600 transition-colors duration-200 font-medium;
        }

        .active-footer {
            @apply text-orange-600;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --orange: #EA580C;
            --font-ibm-plex-serif: 'IBM Plex Serif', serif;
        }

        .faq-item input[type="radio"] {
            display: none;
        }

        .content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            padding: 0;
        }

        .faq-item input[type="radio"]:checked~.content {
            max-height: 500px;
            padding-top: 12px;
        }

        .faq-details {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
            font-size: 1rem;
            color: #18181B;
            transition: color 0.2s ease;
            position: relative;
            padding-right: 40px;
        }

        .faq-details:hover {
            color: var(--orange);
        }

        .faq-details::after {
            content: '';
            position: absolute;
            right: 0;
            width: 24px;
            height: 24px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%2371717A' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            transition: transform 0.3s ease;
        }

        .faq-item input[type="radio"]:checked~.faq-details::after {
            transform: rotate(180deg);
        }

        .faq-item input[type="radio"]:checked~.faq-details {
            color: var(--orange);
        }

        .faq-summary {
            color: #52525B;
            font-size: 0.95rem;
            line-height: 1.7;
        }
    </style>
</body>

</html>