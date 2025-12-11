<!-- header section -->
@include('shared.header')

<body class="h-full w-full">
    <!-- Navbar Section -->
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