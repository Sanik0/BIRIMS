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
    <!-- Modal Delete Blotter Section -->
    <div id="deleteBlotterModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
        <form id="deleteBlotterForm" method="POST" action="" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-[40px]">Delete Blotter Report</h3>
            <div class="flex items-center justify-center w-full">
                <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete <span id="deleteBlotterTitle" class="text-[#EF4444]">this blotter report</span>? This action cannot be undone.</p>
            </div>
            <div class="flex flex-col w-full gap-[20px]">
                <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete Report</button>
                <div class="cancelBlotterBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
            </div>
        </form>
    </div>

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
                        <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">Easily file a complaint or incident report online. Your submission helps the barangay keep the community safe and properly address concerns.</p>
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

            <section class="w-full flex flex-col sm:flex-row sm:px-[0] px-[15px] gap-[20px]">
                <!-- Blotter Form -->
                <div class="w-full flex justify-center lg:justify-start">
                    <div class="rounded-[4px] w-full max-w-[800px] border-gray-300 border-[1px] px-[15px] sm:px-[35px] py-[20px] mb-[30px]">
                        <div class="border-b-[1px] pb-[10px] flex flex-col gap-[30px] relative">
                            <div class="rounded-[50%] hidden sm:block h-[100px] w-[100px] overflow-hidden absolute left-0">
                                <img src="{{asset('images/download (6).png')}}" class="w-full h-[full] object-center object-cover" alt="">
                            </div>
                            <div>
                                <p class="font-medium text-[16px] font-serif text-center">Republic of the Philippines</p>
                                <p class="font-medium text-[16px] font-serif text-center">National Capital Region</p>
                                <p class="font-medium text-[16px] font-serif text-center">Quezon City</p>
                                <p class="font-medium text-[16px] font-serif text-center">Barangay San Bartolome</p>
                            </div>
                            <div class="font-bold text-[18px] font-serif text-center">OFFICE OF THE SANGGUNIANG BAYAN</div>
                        </div>
                        <form action="{{ route('blotter.store') }}" method="POST" class="w-full flex flex-col gap-[15px] mt-[30px]">
                            @csrf
                            <h3 class="font-bold text-[18px] font-serif text-center">BARANGAY BLOTTER FORM</h3>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                            <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="reporter_name">Name of Reporter/Complainant:</label>
                                <input name="reporter_name" id="reporter_name" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="text" value="{{ old('reporter_name', auth()->user()->firstname . ' ' . (auth()->user()->middlename ? auth()->user()->middlename . ' ' : '') . auth()->user()->lastname) }}" readonly>
                            </div>
                            @error('reporter_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif" for="reporter_address">Address:</label>
                                <input name="reporter_address" id="reporter_address" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="text" value="{{ old('reporter_address', (auth()->user()->house_number ? auth()->user()->house_number . ' ' : '') . auth()->user()->street . ', Barangay San Bartolome, Quezon City, Philippines') }}" readonly>
                            </div>
                            @error('reporter_address')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-[15px]">
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="reporter_contact">Contact Number:</label>
                                    <input name="reporter_contact" id="reporter_contact" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="number" value="{{ old('reporter_contact', auth()->user()->contact) }}" readonly>
                                </div>
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif" for="reporter_age">Edad:</label>
                                    <input name="reporter_age" id="reporter_age" class="border-b-[1px] text-[16px] focus:outline-none text-regular font-serif bg-gray-50" type="number" value="{{ old('reporter_age', \Carbon\Carbon::parse(auth()->user()->birthdate)->age) }}" readonly>
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
                                <input placeholder="(If Applicable)" name="respondent_name" id="respondent_name" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="text" value="{{ old('respondent_name') }}">
                            </div>
                            @error('respondent_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex items-start sm:items-center flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="respondent_address">Address:</label>
                                <input placeholder="(If Applicable)" name="respondent_address" id="respondent_address" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="text" value="{{ old('respondent_address') }}">
                            </div>
                            @error('respondent_address')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-[15px]">
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="respondent_contact">Contact Number:</label>
                                    <input placeholder="(If Applicable)" name="respondent_contact" id="respondent_contact" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="number" value="{{ old('respondent_contact') }}">
                                </div>
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif" for="respondent_age">Edad:</label>
                                    <input placeholder="(If Applicable)" name="respondent_age" id="respondent_age" class="border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="number" value="{{ old('respondent_age') }}">
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
                                <input required name="complaint" id="complaint" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="text" value="{{ old('complaint') }}">
                            </div>
                            @error('complaint')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-[15px]">
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-fit max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="date">Date of Incident:</label>
                                    <input required name="incident_date" id="date" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="date" value="{{ old('incident_date') }}">
                                </div>
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif" for="time">Time of Incident:</label>
                                    <input required name="incident_time" id="time" class="border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="time" value="{{ old('incident_time') }}">
                                </div>
                            </div>
                            @error('incident_date')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            @error('incident_time')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex flex-col items-start gap-[10px] w-full">
                                <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="description">
                                    Description of incident:
                                </label>
                                <textarea required name="description" id="description"
                                    class="w-full border-b text-[16px] h-[475px] resize-none focus:outline-none text-black font-serif leading-[27px] p-1"
                                    style="background-image: repeating-linear-gradient(white, white 26px, #000000 27px); border-color: #000000;">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex flex-col sm:flex-row items-start mt-[20px] sm:items-center gap-[15px]">
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-fit max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif whitespace-nowrap" for="date">Date:</label>
                                    <input required name="date" id="date" class="w-full border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="date" value="{{ old('date') }}">
                                </div>
                                <div class="flex items-start flex-col sm:flex-row gap-[10px] w-full max-w-[700px]">
                                    <label class="text-[16px] font-semibold font-serif" for="time">Time:</label>
                                    <input required name="time" id="time" class="border-b-[1px] text-[16px] focus:outline-none text-regular font-serif" type="time" value="{{ old('time') }}">
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
                                <button type="submit" class="flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Submit Report</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Blotter History Sidebar -->
                <div class="block w-full max-w-[350px] h-fit mb-[20px] mb-[0px] sm:sticky top-[25px]">
                    <div class="bg-white rounded-[4px] border border-gray-300 overflow-hidden">
                        <div class="bg-orange-500 text-white px-[20px] py-[15px]">
                            <h3 class="font-bold text-[20px]">Blotter History</h3>
                            <p class="text-sm">Your submitted reports</p>
                        </div>

                        <div class="max-h-[600px] overflow-y-auto">
                            @forelse($blotters as $blotter)
                            <div class="border-b border-gray-200 p-[15px] hover:bg-gray-50 transition-all">
                                <div class="flex justify-between items-start mb-[8px]">
                                    <h4 class="font-semibold text-[14px] text-gray-900 flex-1 mr-2">{{ $blotter->complaint }}</h4>
                                    <div class="flex items-center gap-2">
                                        <span class="px-[8px] py-[2px] text-[11px] rounded-full 
                            {{ $blotter->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                            {{ $blotter->status == 'resolved' ? 'bg-green-100 text-green-800' : '' }}
                            {{ $blotter->status == 'rejected' ? 'bg-red-100 text-red-800' : '' }}
                        ">
                                            {{ ucfirst($blotter->status ?? 'pending') }}
                                        </span>
                                        <button type="button"
                                            data-blotter-id="{{ $blotter->id }}"
                                            data-complaint="{{ $blotter->complaint }}"
                                            class="delete-blotter-btn text-red-500 hover:text-red-700 transition-colors p-1"
                                            title="Delete report">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-[12px] text-gray-600 mb-[5px]">Respondent: {{ $blotter->respondent_name }}</p>
                                <p class="text-[11px] text-gray-500">
                                    {{ \Carbon\Carbon::parse($blotter->date)->format('M d, Y') }} at {{ \Carbon\Carbon::parse($blotter->time)->format('h:i A') }}
                                </p>
                                <p class="text-[12px] text-gray-600 mt-[8px] line-clamp-2">{{ $blotter->description }}</p>
                            </div>
                            @empty
                            <div class="p-[30px] text-center">
                                <svg class="w-[60px] h-[60px] mx-auto mb-[15px] text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <p class="text-gray-500 text-[14px]">No blotter reports yet</p>
                                <p class="text-gray-400 text-[12px] mt-[5px]">Your submitted reports will appear here</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script>
            // Open delete modal for blotter
            function openDeleteModal(blotterId, complaintTitle) {
                const modal = document.getElementById('deleteBlotterModal');
                const form = document.getElementById('deleteBlotterForm');
                const titleSpan = document.getElementById('deleteBlotterTitle');

                // Set the form action with the blotter ID
                form.action = "{{ route('blotter.destroy', ':id') }}".replace(':id', blotterId);

                // Set the complaint title in the modal
                titleSpan.textContent = complaintTitle;

                // Show modal
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            // Close delete modal and handle button clicks
            document.addEventListener('DOMContentLoaded', function() {
                const cancelBtn = document.querySelector('.cancelBlotterBtn');
                const modal = document.getElementById('deleteBlotterModal');

                // Handle delete button clicks using data attributes
                document.querySelectorAll('.delete-blotter-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const blotterId = this.dataset.blotterId;
                        const complaint = this.dataset.complaint;
                        openDeleteModal(blotterId, complaint);
                    });
                });

                if (cancelBtn) {
                    cancelBtn.addEventListener('click', function() {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                    });
                }

                // Close modal when clicking outside
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                    }
                });
            });
        </script>
    </body>

    </html>