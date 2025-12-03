<!-- Sidebar Section -->
@include('shared.header')
<!-- modal Section -->

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

<body class="h-screen max-h-screen w-full relative">
    <img src="{{asset('svg/login-svg.svg')}}" class="absolute h-full z-0 md:block hidden md:w-[470px] lg:w-fit">

    <header class="h-[60px] w-full z-10 relative flex items-center pl-5 gap-2 md:fill-white md:text-white md:bg-transparent bg-white fill-[var(--orange)] text-[var(--orange)]">
        <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
            <circle cx="15" cy="15" r="15" />
        </svg>
        <a href="{{url('/')}}" class="font-medium md:text-[20px] text-[26px]">BIRIMS</a>
    </header>
    <main class="flex-1 w-full relative z-30 md:pl-5 md:flex-row flex-col flex items-center md:gap-0 gap-[30px] md:justify-between" style="height: calc(100vh - 60px); ">

        <!-- Left Side Content -->
        <div class="w-full md:max-w-[350px] h-full relative flex flex-col md:justify-between gap-[10px] md:pt-0 pt-[30px] bg-img">
            <div class="w-full h-full flex flex-col justify-center gap-[10px] px-[30px] md:px-0 ">
                <h1 class="font-medium md:text-[40px] text-[32px] text-white z-[1]">Hey There, Welcome!</h1>
                <p class="text-white font-medium md:text-[15px] text-[12px] z-[1]">Access your account and manage everything with ease! Let’s get things done together and make today productive. </p>
            </div>
            <div class="flex gap-3 md:pb-[50px] pb-[30px] z-[1] px-[30px] md:px-0 ">
                <a href="https://maps.app.goo.gl/t9oBHUwfVVHSXJFs9" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="md:w-[25px] w-[20px]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                </a>
                <a href="https://www.facebook.com/brgysanbartolome2014" target="_blank">
                    <svg fill="white" class="md:w-[25px] w-[20px]" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd" />
                    </svg>
                </a>
                <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="md:w-[25px] w-[20px]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </a>
            </div>
        </div>
        <!--/ Left Side Content -->


        <div class="w-full flex justify-center">
            <form method="POST" action="{{ route('signup') }}" class="w-full max-w-[400px] h-full flex justify-center flex-col gap-[30px] md:pb-10 pb-[50px]">
                @csrf
                <!-- Personal Information Section -->
                <div id="page1" class="md:px-0 px-[30px] relative z-[31]">
                    <div class="leading-10 pb-[20px]">
                        <h4 class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)]">Welcome to BIRIMS</h4>
                        <h6 class="md:text-[50px] text-[46px] font-medium" style="font-family: 'IBM Plex Serif, serif;'">Create Account</h6>
                    </div>
                    <div class="flex flex-col gap-[20px]">
                        <div>
                            <h1 class="font-semibold text-[14px]">Personal Information</h1>
                            <p class="text-red-600 text-[12px] font-semibold">* Indicates required field</p>
                        </div>
                        <div class="flex flex-col gap-[25px]">
                            <div class="flex flex-col gap-7">
                                <div class="w-full flex justify-between gap-[30px] md:gap-0">
                                    <span class="flex flex-col relative w-full max-w-[190px]">
                                        <label class="font-semibold md:text-[13px] text-[12px]">First Name<span class="text-red-600 font-medium"> *</span></label>
                                        <input required id="firstname" value="{{ old('firstname') }}" name="firstname" type="text" placeholder="ex. Juan" class="peer md:text-[13px] text-[12px] w-full not-first-of-type:duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:md:text-[14px] placeholder:text-[13px] capitalize">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        @error('firstname')
                                        <small class="text-red-600 text-[11px] mt-1">{{ $message }}</small>
                                        @enderror
                                    </span>
                                    <span class="flex flex-col relative w-full max-w-[190px]">
                                        <label class="font-semibold md:text-[13px] text-[12px]">Last Name<span class="text-red-600 font-medium"> *</span></label>
                                        <input required id="lastname" value="{{ old('lastname') }}" name="lastname" type="text" placeholder="ex. Dela Cruz" class="peer md:text-[13px] text-[12px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:md:text-[14px] placeholder:text-[13px] capitalize">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        @error('lastname')
                                        <small class="text-red-600 text-[11px] mt-1">{{ $message }}</small>
                                        @enderror
                                    </span>
                                </div>
                                <div class="w-full flex justify-between gap-[30px] md:gap-0">
                                    <span class="flex flex-col relative w-full max-w-[190px]">
                                        <label class="font-semibold md:text-[13px] text-[12px]">Middle Name <span class="md:text-[12px] text-[10px]">(Optional)</span></label>
                                        <input id="middlename" value="{{ old('middlename') }}" name="middlename" type="text" placeholder="ex. Santos" class="peer md:text-[13px] text-[12px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:md:text-[14px] placeholder:text-[13px] capitalize">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[12px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                    </span>
                                    <span class="flex flex-col relative w-full max-w-[190px]">
                                        <label class="font-semibold md:text-[13px] text-[12px]">Birthdate<span class="text-red-600 font-medium"> *</span></label>
                                        <input required id="birthdate" value="{{ old('birthdate') }}" name="birthdate" type="date" class="peer md:text-[13px] text-[12px] text-[var(--darkgray)] w-full duration-150 ease-out h-[40px] border-b border-black focus:outline-none focus:border-b focus:border-[var(--orange)] cursor-pointer">
                                        @error('birthdate')
                                        <small class="text-red-600 text-[11px] mt-1">{{ $message }}</small>
                                        @enderror
                                    </span>
                                </div>
                                <div class="w-full flex justify-between gap-[30px] md:gap-0">
                                    <span class="flex flex-col relative w-full max-w-[190px]">
                                        <label class="font-semibold md:text-[13px] text-[12px]">Gender<span class="text-red-600 font-medium"> *</span></label>
                                        <div class="text-[var(--darkgray)] md:text-[14px] text-[13px]">
                                            <select required id="gender" name="gender" class="border-b border-black h-[40px] w-full focus:outline-0 cursor-pointer">
                                                <option value="" disabled selected hidden class="text-[12px] text-[gray]">Ex. Male</option>
                                                <option class="text-black md:text-[13px] text-[12px]" value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                                <option class="text-black md:text-[13px] text-[12px]" value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                                <option class="text-black md:text-[13px] text-[12px]" value="lgbt" {{ old('gender') == 'lgbt' ? 'selected' : '' }}>LGBTQA++</option>
                                                <option class="text-black md:text-[13px] text-[12px]" value="prefer not to say" {{ old('gender') == 'prefer not to say' ? 'selected' : '' }}>Prefer not to say</option>
                                            </select>
                                        </div>
                                        @error('gender')
                                        <small class="text-red-600 text-[11px] mt-1">{{ $message }}</small>
                                        @enderror
                                    </span>
                                    <span class="flex flex-col relative w-full max-w-[190px]">
                                        <label class="font-semibold md:text-[13px] text-[12px]">Phone Number<span class="text-red-600 font-medium"> *</span></label>
                                        <input required id="contact" value="{{ old('contact') }}" name="contact" type="tel" inputmode="numeric" maxlength="11" pattern="[0-9]{11}" placeholder="Ex. 09xxxxxxxxx" class="relative peer md:text-[13px] text-[12px] w-full duration-150 ease-out h-[40px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] overflow-hidden text-ellipsis placeholder:md:text-[14px] placeholder:text-[13px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[18px] absolute bottom-[13px] stroke-[var(--darkgray)] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                        </svg>
                                        @error('contact')
                                        <small class="text-red-600 text-[11px] mt-1">{{ $message }}</small>
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="flex gap-4 flex-col justify-between">
                                <button type="button" class="rounded-[5px] w-full p-[10px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[18px] text-[#ffffff] font-medium" id="nextBtn">Next</button>
                                <a href="{{url('signin')}}" class="rounded-[5px] w-full p-[10px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[18px] text-[#ffffff] font-medium">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Credentials Section -->
                <div id="page2" class="hidden md:px-0 px-[30px]">
                    <div class="leading-10 pb-[20px]">
                        <h4 class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)]">Welcome to BIRIMS</h4>
                        <h6 class="md:text-[50px] text-[46px] font-medium" style="font-family: 'IBM Plex Serif, serif;'">Create Account</h6>
                    </div>
                    <div class="flex flex-col gap-[25px]">
                        <div>
                            <h1 class="font-semibold text-[14px]">Account Credential</h1>
                            <p class="text-red-600 text-[12px] font-semibold">* Indicates required field</p>
                        </div>
                        <span class="flex flex-col relative leading-3">
                            <label class="font-semibold md:text-[13px] text-[12px]">Email<span class="text-red-600 font-medium"> *</span></label>
                            <input required value="{{ old('email') }}" name="email" type="email" placeholder="example@chakraui" class="peer md:text-[13px] text-[12px] w-full duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] placeholder:md:text-[14px] placeholder:text-[13px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute bottom-[11px] w-[20px] stroke-[var(--darkgray)] opacity-0 pointer-events-none peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            @error('email')
                            <small class="text-red-600 text-[11px] mt-1">{{ $message }}</small>
                            @enderror
                        </span>
                        <span class="flex flex-col relative leading-3">
                            <div class="flex justify-between">
                                <label class="font-semibold md:text-[13px] text-[12px]">Password<span class="text-red-600 font-medium"> *</span></label>
                            </div>
                            <input required name="password" type="password" placeholder="Password" class="peer w-full md:text-[13px] text-[12px] duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] pr-[25px] placeholder:md:text-[14px] placeholder:text-[13px]" id="passwordInput">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] absolute bottom-[15px] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0 stroke-[var(--darkgray)]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                            @error('password')
                            <small class="text-red-600 text-[11px] mt-1">{{ $message }}</small>
                            @enderror
                        </span>
                        <span class="flex flex-col relative leading-3">
                            <div class="flex justify-between">
                                <label class="font-semibold md:text-[13px] text-[12px]">Confirm Password<span class="text-red-600 font-medium"> *</span></label>
                            </div>
                            <input required name="password_confirmation" type="password" placeholder="Password" class="peer w-full md:text-[13px] text-[12px] duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] pr-[25px] placeholder:md:text-[14px] placeholder:text-[13px]" id="confirmPasswordInput">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] absolute bottom-[15px] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0 stroke-[var(--darkgray)]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </span>
                        <div class="flex gap-[8px]">
                            <input required type="checkbox" name="terms" class="cursor-pointer accent-[var(--orange)]"><label class="md:text-[13px] text-[12px] font-semibold">I agree to the <a href="#" class="text-[var(--orange)] duration-150 ease-in hover:underline">Terms and Conditions</a> and <a href="#" class="text-[var(--orange)] duration-150 ease-in hover:underline">Privacy Policy</a></label>
                        </div>
                        <div class="flex flex-col gap-4">
                            <button type="submit" class="rounded-[5px] w-full p-[10px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[18px] text-[#ffffff] font-medium">Create Account</button>
                            <button type="button" class="rounded-[5px] w-full p-[10px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[18px] text-[#ffffff] font-medium" id="backBtn">Previous</button>
                        </div>
                    </div>
                </div>
                <!--/ Account Credentials Section -->
            </form>
        </div>
    </main>
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
    <script>
        const nextBtn = document.getElementById("nextBtn");
        const backBtn = document.getElementById("backBtn");
        const page1 = document.getElementById("page1");
        const page2 = document.getElementById("page2");

        // Validate Page 1 before going to Page 2
        nextBtn.addEventListener("click", () => {
            const firstname = document.getElementById("firstname").value.trim();
            const lastname = document.getElementById("lastname").value.trim();
            const birthdate = document.getElementById("birthdate").value;
            const gender = document.getElementById("gender").value;
            const contact = document.getElementById("contact").value.trim();

            // Check if all required fields are filled
            if (!firstname || !lastname || !birthdate || !gender || !contact) {
                alert("Please fill in all required fields before proceeding.");
                return;
            }

            // Validate phone number (must be 11 digits)
            if (contact.length !== 11 || !/^[0-9]+$/.test(contact)) {
                alert("Please enter a valid 11-digit phone number.");
                return;
            }

            // All validations passed, go to Page 2
            page1.classList.add("hidden");
            page2.classList.remove("hidden");
        });

        // Go back to Page 1
        backBtn.addEventListener("click", () => {
            page2.classList.add("hidden");
            page1.classList.remove("hidden");
        });
    </script>

</body>