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

<!-- Error Alert -->
@if ($errors->any())
<div id="errorAlert" class="fixed top-0 left-0 w-full py-[20px] flex items-center justify-center z-50 opacity-0 -translate-y-full transition-all duration-500 ease-out">
    <div class="flex items-start sm:items-center bg-[#ffe1e1] p-4 mb-4 text-sm text-medium rounded-[8px] border border-[rgb(194,40,40)] shadow-lg" role="alert">
        <svg class="w-4 h-4 me-2 shrink-0 mt-0.5 sm:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path class="stroke-[rgb(194,40,40)]" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <div class="text-[rgb(194,40,40)]">
            <span class="font-medium me-1">Error!</span>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.getElementById('errorAlert');

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
            }, 5000);
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
        <div class="w-full lg:max-w-[350px] h-full relative flex flex-col md:justify-between gap-[10px] md:pt-0 pt-[30px] bg-img">
            <div class="w-full h-full flex flex-col justify-center gap-[10px] px-[30px] md:px-0 ">
                <h1 class="font-medium md:text-[40px] text-[32px] text-white z-[1]">Hey There, Welcome!</h1>
                <p class="text-white font-medium md:text-[15px] text-[12px] z-[1]">Access your account and manage everything with ease! Let's get things done together and make today productive. </p>
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

        <!-- Login Form  -->
        <div class="w-full flex justify-center">
            <form method="POST" action="{{ route('signin.post') }}" class="w-full max-w-[400px] h-full justify-center flex flex-col gap-[30px] md:pb-20 pb-[50px] px-[30px] md:px-0 ">
                @csrf
                
                <div class="leading-10">
                    <h4 class="font-medium md:text-[18px] text-[16px] text-[var(--darkgray)]">Welcome to BIRIMS</h4>
                    <h6 class="md:text-[50px] text-[46px] font-medium" style="font-family: 'IBM Plex Serif, serif;'">Sign In</h6>
                </div>
                
                <div class="flex flex-col gap-[25px]">
                    <!-- Email Field -->
                    <span class="flex flex-col relative leading-3">
                        <label class="font-semibold md:text-[13px] text-[12px]">Email</label>
                        <input type="email" 
                               name="email" 
                               value="{{ old('email') }}"
                               placeholder="example@chakraui" 
                               required
                               class="peer md:text-[13px] text-[12px] w-full duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] placeholder:md:text-[14px] placeholder:text-[12px] @error('email') border-red-500 @enderror">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute bottom-[12px] w-[20px] stroke-[var(--darkgray)] opacity-0 pointer-events-none peer-placeholder-shown:opacity-100 peer-focus:opacity-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </span>
                    
                    <!-- Password Field -->
                    <span class="flex flex-col relative leading-3">
                        <div class="flex justify-between">
                            <label class="font-semibold md:text-[13px] text-[12px]">Password</label>
                            {{-- <a href="{{ route('password.request') }}" class="font-semibold md:text-[13px] text-[12px] text-[var(--orange)] duration-150 ease-out hover:underline">Forgot Password?</a> --}}
                        </div>
                        <input type="password" 
                               name="password" 
                               placeholder="Password" 
                               required
                               class="peer w-full md:text-[13px] text-[12px] duration-150 ease-out h-[45px] border-b focus:outline-none focus:border-b focus:border-[var(--orange)] placeholder:pl-[25px] placeholder-shown:placeholder:opacity-100 focus:placeholder-shown:placeholder:opacity-0 placeholder:text-[var(--darkgray)] pr-[25px] placeholder:md:text-[14px] placeholder:text-[12px] @error('password') border-red-500 @enderror" 
                               id="passwordInput">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px] absolute bottom-[15px] opacity-0 peer-placeholder-shown:opacity-100 peer-focus:opacity-0 stroke-[var(--darkgray)]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute right-0 bottom-[11px] stroke-black w-[20px] cursor-pointer select-none peer-placeholder-shown:hidden" id="showPasswordIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute right-0 bottom-[11px] stroke-black w-[20px] peer-placeholder-shown:hidden cursor-pointer select-none hidden" id="hidePasswordIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </span>
                    
                    <!-- Terms Checkbox -->
                    <div class="flex gap-[8px]">
                        <input type="checkbox" 
                               name="terms" 
                               value="1" 
                               required
                               class="cursor-pointer accent-[var(--orange)] @error('terms') border-red-500 @enderror">
                        <label class="md:text-[13px] text-[12px] font-semibold">I agree to the <a href="{{url('terms')}}" target="_blank" class="text-[var(--orange)] duration-150 ease-in hover:underline ">Terms and Conditions</a> and <a href="{{url('privacy')}}" target="_blank" class="text-[var(--orange)] duration-150 ease-in hover:underline">Privacy Policy</a></label>
                    </div>
                    
                    <!-- Remember Me -->
                    <div class="flex gap-[8px]">
                        <input type="checkbox" 
                               name="remember" 
                               value="1"
                               class="cursor-pointer accent-[var(--orange)]">
                        <label class="md:text-[13px] text-[12px] font-semibold">Remember Me</label>
                    </div>
                    
                    <!-- Buttons -->
                    <div class="flex flex-col gap-4">
                        <button type="submit" class="rounded-[5px] w-full p-[10px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[18px] text-[#ffffff] font-medium">Sign In</button>
                        <a href="{{route('signup')}}" class="rounded-[5px] w-full p-[10px] hover:text-green-50 hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center justify-center text-[18px] text-[#ffffff] font-medium">Create Account</a>
                    </div>
                </div>
            </form>
        </div>
        <!--/ Login Form -->
    </main>
    
    <!-- Password Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('passwordInput');
            const showPasswordIcon = document.getElementById('showPasswordIcon');
            const hidePasswordIcon = document.getElementById('hidePasswordIcon');

            if (showPasswordIcon && hidePasswordIcon && passwordInput) {
                showPasswordIcon.addEventListener('click', function() {
                    passwordInput.type = 'text';
                    showPasswordIcon.classList.add('hidden');
                    hidePasswordIcon.classList.remove('hidden');
                });

                hidePasswordIcon.addEventListener('click', function() {
                    passwordInput.type = 'password';
                    hidePasswordIcon.classList.add('hidden');
                    showPasswordIcon.classList.remove('hidden');
                });
            }
        });
    </script>
</body>
</html>