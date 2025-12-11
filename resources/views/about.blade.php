<!-- header section -->
@include('shared.header')

<body class="h-full w-full">
    <!-- Navbar Section -->
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
    <!-- Navbar Section -->
    <!-- Niiga -->
    <main class="flex-1 min-h-screen bg-[var(--gray)] flex flex-col items-center justify-center">

        <!-- Hero Section -->
        <section class="w-full h-screen relative flex justify-center items-center">
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
            <svg viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-0 absolute md:top-20 z-0 top-10 md:h-[360px] h-[200px]">
                <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C" />
                <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5" />
                <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C" />
            </svg>
            <div class="w-full md:max-w-[450px] max-w-[400px] flex flex-col justify-center text-center px-[40px] md:px-0">
                <h1 class="md:text-[64px] text-[48px] font-medium" style="font-family: 'IBM Plex Serif';">About Us</h1>
                <p class="text-[var(--darkgray)] mt-[10px] md:text-[18px] text-[16px]">BIRIMS is the unified digital platform for our barangay to manage resident records, business permits, and incident reporting — helping our community stay safe, informed, and connected.</p>
                <a href="#our-story" class="py-[8px] bg-[var(--orange)] w-[140px] text-white border border-[var(--orange)] self-center mt-[20px] duration-150 ease-out hover:bg-[var(--gray)] hover:text-[var(--orange)] rounded-[4px] md:text-[20px] text-[18px]">See More</a>
            </div>
        </section>
        <!--/ Hero Section  -->

        <!-- Our Story Section -->
        <section id="our-story" class="md:h-screen min-h-screen w-full bg-white flex flex-col md:gap-0 gap-[20px]">
            <h1 style="font-family: 'IBM Plex Serif';" class="font-medium md:text-[50px] text-[32px] text-center pt-[40px]">Our Story</h1>
            <div class="flex px-[40px] items-center justify-center md:pb-[80px] pb-[60px] gap-[30px] flex-col-reverse md:flex-row" style="height: calc(100% - 80px);">
                <p class="w-full md:max-w-[600px] text-[var(--darkgray)] text-[14px] md:text-[16px]">Barangay San Bartolome, Quezon City, has long faced challenges in managing resident records, incident reports, and manual request forms. Most processes were done on paper, making it time-consuming for both residents and barangay staff to access and organize important information. Through a series of observations and interviews with barangay officials and residents, our team discovered the need for a more efficient and accessible way to handle these records. The Barangay Integrated Record and Incident Management System (BIRIMS) was developed — a digital platform designed to simplify record management, improve data accuracy, and speed up the delivery of public services. BIRIMS aims to bridge the gap between technology and community service, helping San Bartolome embrace a smarter and more transparent system for the benefit of every resident.</p>
                <img src="{{asset('img/san-bartolome-pic.png')}}" class="lg:w-[600px] md:w-[350px] w-[500px]" alt="San Bartolome Image" />
            </div>
        </section>
        <!--/ Our Story Section -->

        <!-- Our Mission Section -->
        <section class="w-full min-h-screen md:pb-[30px] pb-[60px] px-[40px] lg:px-0">
            <div class="pt-[40px] md:pt-[60px] flex flex-col items-center gap-[10px] text-center">
                <h1 style="font-family: 'IBM Plex Serif';" class="font-medium md:text-[50px] text-[40px]">Our Mission</h1>
                <p class="text-[var(--darkgray)] md:text-[16px] text-[14px]">Our System provides assitance to the residents of San Bartolome, Quezon City with having a Mission, Vision and Values inside our organization.</p>
            </div>
            <div class="flex md:flex-row flex-col justify-center items-start gap-[30px] pt-[50px]">
                <div class="md:w-[350px] flex flex-col items-center gap-[10px]">
                    <img src="{{asset('svg/about/rocket.svg')}}" class="md:w-[150px] w-[120px]">
                    <h3 style="font-family: 'IBM Plex Serif';" class="md:text-[25px] text-[20px] font-semibold">Our <span class="text-[var(--orange)]">MISSION</span></h3>
                    <p class="font-medium md:text-[16px] text-[14px] text-[var(--darkgray)] text-center">To provide an efficient and reliable digital platform that simplifies barangay record management, incident reporting, and documentation.</p>
                </div>
                <hr class="md:rotate-180 border md:h-[360px] md:w-0 w-full border-[var(--darkgray)]" />

                <div class="md:w-[350px] flex flex-col items-center gap-[10px]">
                    <img src="{{asset('svg/about/vision.svg')}}" class="md:w-[150px] w-[120px]">
                    <h3 style="font-family: 'IBM Plex Serif';" class="md:text-[25px] text-[20px] font-semibold">Our <span class="text-[var(--orange)]">VISION</span></h3>
                    <p class="font-medium md:text-[16px] text-[14px] text-[var(--darkgray)] text-center">To build a transparent and technology-driven community where data management and public service work hand in hand.</p>
                </div>
                <hr class="md:rotate-180 border md:h-[360px] md:w-0 w-full border-[var(--darkgray)]" />
                <div class="md:w-[350px] flex flex-col items-center gap-[10px]">
                    <img src="{{asset('svg/about/heart.svg')}}" class="md:w-[150px] w-[120px]">
                    <h3 style="font-family: 'IBM Plex Serif';" class="md:text-[25px] text-[20px] font-semibold">Our <span class="text-[var(--orange)]">VALUES</span></h3>
                    <ul class="text-[var(--darkgray)] font-medium md:text-[16px] text-[14px] text-center">
                        <li><span class="text-[var(--iconorange)]">Transparency</span> - open and honest service.</li>
                        <li><span class="text-[var(--iconorange)]">Efficiency</span> - saves time and effort.</li>
                        <li><span class="text-[var(--iconorange)]">Integrity</span> - accuracy and accountability.</li>
                        <li><span class="text-[var(--iconorange)]">Community Empowerment</span> - strengthen the bond between technology and local governance.</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--/ Our Mission Section -->
        <!-- sadds -->
        <!-- Our Vicinity Section -->
        <section class="w-full min-h-screen bg-white flex flex-col ">
            <div class="flex justify-around pt-[40px] md:px-[40px] flex-col md:flex-row px-[40px] items-center lg:items-start text-center md:text-left gap-[20px]">
                <div class="flex flex-col w-full md:max-w-[600px] gap-[10px] md:gap-0">
                    <h1 style="font-family: 'IBM Plex Serif';" class="font-medium md:text-[50px] text-[32px]">San Bartolome Vicinity</h1>
                    <p style="font-family: 'IBM Plex Serif';" class="font-medium md:text-[20px] text-[18px]"> Hwy, Novaliches, Quezon City, Metro Manila</p>
                </div>
                <p class="w-full max-w-[500px] text-[var(--darkgray)] md:text-[16px] text-[14px] font-medium">
                    Located along Quirino Highway, Novaliches, Quezon City, Barangay San Bartolome is one of the most active and progressive barangays in Metro Manila. The area serves as a vital community hub, surrounded by schools, residential areas, and local businesses.
                </p>
            </div>
            <iframe class="mt-[20px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.2102367772827!2d121.03219277408235!3d14.70069967462017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0d8b7291c03%3A0xfebb36d4bd498470!2sSan%20Bartolome%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1761190349134!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!-- Our Vicinity Section -->
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
    </style>
</body>

</html>