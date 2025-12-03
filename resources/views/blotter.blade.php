    <!-- header section -->
    @include('shared.header')
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

    <body class="relative">
        <!-- sidebar section -->
        @include('shared.sidebar')
        <!-- mobile sidebar section -->
        @include('shared.mobile-sidebar')
        <section class="w-full items-center flex sm:hidden px-[15px] py-[10px] border-b-[1px] border-b-gray-300 justify-between">
            <div class="flex gap-[10px] items-center">
                <svg id="openMenuBtn" class="h-[50px] w-[50px] fill-gray-400" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EFEFEF">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg>
            </div>
            <div class="sm:hidden items-center flex gap-[20px]">
                <div class="rounded-[50%] h-[50px] w-[50px] min-w-[50px] bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                    <span class="text-white text-[20px] font-bold">
                        {{ strtoupper(substr(auth()->user()->firstname, 0, 1)) }}{{ strtoupper(substr(auth()->user()->lastname, 0, 1)) }}
                    </span>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="group rounded-[4px] py-[7px] px-[8px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center gap-[12px] w-full cursor-pointer">
                        <svg class="h-[25px] w-[25px] group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                        </svg>
                        <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
                    </button>
                </form>
            </div>
        </section>
        <main class="w-full h-[100vh] sm:pl-[290px] sm:pr-[20px] flex flex-col gap-[30px] transition-all duration-300">
            <div class="flex w-full items-start justify-between py-[25px] border-b-[1px] border-[#D4D4D8] px-[15px] sm:px-[0]">
                <div class="flex items-center gap-[10px] max-w-[579px]">
                    <div class="flex flex-col">
                        <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Blotter Reporting</h1>
                        <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]"> Easily file a complaint or incident report online. Your submission helps the barangay keep
                            the community safe and properly address concerns.</p>
                    </div>
                </div>
                <div class="sm:flex items-center hidden gap-[20px]">
                    <div class="rounded-[50%] h-[50px] w-[50px] min-w-[50px] bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                        <span class="text-white text-[20px] font-bold">
                            {{ strtoupper(substr(auth()->user()->firstname, 0, 1)) }}{{ strtoupper(substr(auth()->user()->lastname, 0, 1)) }}
                        </span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="group rounded-[4px] py-[7px] px-[8px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center gap-[12px] w-full cursor-pointer">
                            <svg class="h-[25px] w-[25px] group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                            </svg>
                            <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">Log Out</div>
                        </button>
                    </form>
                </div>
            </div>

            <section class="w-full items-center sm:px-[0] justify-center flex">
                <div class="rounded-[4px] w-full max-w-[990px] border-gray-300 border-[1px] px-[15px] sm:px-[35px] py-[20px] mb-[30px]">
                    <div class="border-b-[1px] pb-[10px] flex flex-col gap-[30px] relative">
                        <div class="rounded-[50%] hidden sm:block h-[100px] w-[100px] overflow-hidden absolute left-0">
                            <img src="{{asset('images/download (6).png')}}" class="w-full h-[full] object-center object-cover" alt="">
                        </div>
                        <div>
                            <p class="font-medium text-[16px] font-serif text-center">Republic Of the Philippines</p>
                            <p class="font-medium text-[16px] font-serif text-center">Nationlal Capital Region</p>
                            <p class="font-medium text-[16px] font-serif text-center">Municipality OF Lorem Ipsum</p>
                            <p class="font-medium text-[16px] font-serif text-center">Barangay San Bartolome</p>
                        </div>
                        <div class="font-bold text-[18px] font-serif text-center">OFFICE OF THE SANGGUNIANG BAYAN</div>
                    </div>
                    <form action="{{ route('blotter.store') }}" method="POST" class="w-full flex flex-col gap-[15px] mt-[30px]">
                        @csrf
                        <h3 class="font-bold text-[18px] font-serif text-center">BARANGAY BLOTTER FORM</h3>



                        <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                            <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="reporter_name">Name of Reporter/Complainant:</label>
                            <input name="reporter_name" id="reporter_name" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="text" value="{{ old('reporter_name', $user->firstname . ' ' . ($user->middlename ? $user->middlename . ' ' : '') . $user->lastname) }}" readonly>
                        </div>
                        @error('reporter_name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                            <label class="text-[16px] font-semibold font-serif" for="reporter_address">Address:</label>
                            <input name="reporter_address" id="reporter_address" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="text" value="{{ old('reporter_address', ($user->house_number ? $user->house_number . ' ' : '') . $user->street . ', Barangay San Bartolome, Quezon City, Metro Manila, Philippines') }}" readonly>
                        </div>
                        @error('reporter_address')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-[15px]">
                            <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="reporter_contact">Contact Number:</label>
                                <input name="reporter_contact" id="reporter_contact" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="text" value="{{ old('reporter_contact', $user->contact) }}" readonly>
                            </div>
                            <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif" for="reporter_age">Edad:</label>
                                <input name="reporter_age" id="reporter_age" class="border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="number" value="{{ old('reporter_age', \Carbon\Carbon::parse($user->birthdate)->age) }}" readonly>
                            </div>
                        </div>
                        @error('reporter_contact')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        @error('reporter_age')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                            <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="respondent_name">Name of Respondent:</label>
                            <input name="respondent_name" id="respondent_name" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="text" value="{{ old('respondent_name') }}">
                        </div>
                        @error('respondent_name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                            <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="respondent_address">Address:</label>
                            <input name="respondent_address" id="respondent_address" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="text" value="{{ old('respondent_address') }}">
                        </div>
                        @error('respondent_address')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-[15px]">
                            <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="respondent_contact">Contact Number:</label>
                                <input name="respondent_contact" id="respondent_contact" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="text" value="{{ old('respondent_contact') }}">
                            </div>
                            <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif" for="respondent_age">Edad:</label>
                                <input name="respondent_age" id="respondent_age" class="border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="number" value="{{ old('respondent_age') }}">
                            </div>
                        </div>
                        @error('respondent_contact')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        @error('respondent_age')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                            <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="complaint">Complaint:</label>
                            <input name="complaint" id="complaint" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="text" value="{{ old('complaint') }}">
                        </div>
                        @error('complaint')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex flex-col items-start gap-[10px] w-full">
                            <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="description">
                                Description of incident:
                            </label>
                            <textarea name="description" id="description"
                                class="w-full border-b text-[16px] h-[475px] resize-none focus:outline-none text-black font-serif leading-[27px] p-1"
                                style="background-image: repeating-linear-gradient(white, white 26px, #000000 27px); border-color: #000000;">{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <div class="flex flex-col sm:flex-row items-start mt-[20px] sm:items-center gap-[15px]">
                            <div class="flex items-start flex-col sm:flex-row gap-[10px] w-fit max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="date">Date:</label>
                                <input name="date" id="date" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="date" value="{{ old('date') }}">
                            </div>
                            <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif" for="time">Time:</label>
                                <input name="time" id="time" class="border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="time" value="{{ old('time') }}">
                            </div>
                        </div>
                        @error('date')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        @error('time')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <div class="w-full justify-end mt-[30px] flex gap-[50px]">
                            <a href="{{ url()->previous() }}" class="flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</a>
                            <button type="submit" class="flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Save</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

    </body>

    </html>