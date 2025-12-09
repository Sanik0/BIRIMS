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
       <!-- modal Section -->
       <div id="modal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center">
           <form method="POST" action="{{ route('profile.update') }}" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
               @csrf
               @method('PUT')
               <h3 class="font-bold text-[40px]">Update Information</h3>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">First Name:</Label>
                       <input required name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}" type="text" placeholder="Ex. Juan" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('firstname')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Last Name:</Label>
                       <input required name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}" type="text" placeholder="Ex. Dela Cruz" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('lastname')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Middle Name:</Label>
                       <input name="middlename" value="{{ old('middlename', auth()->user()->middlename) }}" type="text" placeholder="(Optional)" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Birthdate:</Label>
                       <input required name="birthdate" value="{{ old('birthdate', auth()->user()->birthdate) }}" type="date" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('birthdate')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Gender:</Label>
                       <Select required name="gender" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                           <option value="">Choose Gender</option>
                           <option value="male" {{ old('gender', auth()->user()->gender) == 'male' ? 'selected' : '' }}>Male</option>
                           <option value="female" {{ old('gender', auth()->user()->gender) == 'female' ? 'selected' : '' }}>Female</option>
                           <option value="lgbt" {{ old('gender', auth()->user()->gender) == 'lgbt' ? 'selected' : '' }}>LGBTQ+</option>
                           <option value="prefer not to say" {{ old('gender', auth()->user()->gender) == 'prefer not to say' ? 'selected' : '' }}>Prefer not to say</option>
                       </Select>
                       @error('gender')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Place of Birth:</Label>
                       <input name="place_of_birth" value="{{ old('place_of_birth', auth()->user()->place_of_birth) }}" type="text" placeholder="Ex. Quezon City" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Citizenship</Label>
                       <input name="citizenship" value="{{ old('citizenship', auth()->user()->citizenship) }}" type="text" placeholder="Ex. Filipino" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Civil Status:</Label>
                       <Select name="civil_status" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                           <option value="">Choose Status</option>
                           <option value="single" {{ old('civil_status', auth()->user()->civil_status) == 'single' ? 'selected' : '' }}>Single</option>
                           <option value="married" {{ old('civil_status', auth()->user()->civil_status) == 'married' ? 'selected' : '' }}>Married</option>
                           <option value="widowed" {{ old('civil_status', auth()->user()->civil_status) == 'widdowed' ? 'selected' : '' }}>Widowed</option>
                           <option value="seperated" {{ old('civil_status', auth()->user()->civil_status) == 'seperated' ? 'selected' : '' }}>Separated</option>
                       </Select>
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Occupation:</Label>
                       <input name="occupation" value="{{ old('occupation', auth()->user()->occupation) }}" type="text" placeholder="Ex. Teacher" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col sm:flex-row items-center gap-[30px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">House #:</Label>
                       <input name="house_number" value="{{ old('house_number', auth()->user()->house_number) }}" type="number" placeholder="Ex. 123" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
                   <div class="flex flex-col w-full">
                       <label class="font-medium text-[18px]" for="street">Street:</label>

                       <select name="street" id="street"
                           class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                           <option value="">Choose Street</option>

                           {{-- A --}}
                           <option value="A. Ramirez Street" {{ old('street', auth()->user()->street) == 'A. Ramirez Street' ? 'selected' : '' }}>A. Ramirez Street</option>
                           <option value="Abraham Street" {{ old('street', auth()->user()->street) == 'Abraham Street' ? 'selected' : '' }}>Abraham Street</option>
                           <option value="Acacia Street" {{ old('street', auth()->user()->street) == 'Acacia Street' ? 'selected' : '' }}>Acacia Street</option>
                           <option value="Acme Road" {{ old('street', auth()->user()->street) == 'Acme Road' ? 'selected' : '' }}>Acme Road</option>
                           <option value="Aguirre Compound" {{ old('street', auth()->user()->street) == 'Aguirre Compound' ? 'selected' : '' }}>Aguirre Compound</option>
                           <option value="Akasya Street" {{ old('street', auth()->user()->street) == 'Akasya Street' ? 'selected' : '' }}>Akasya Street</option>
                           <option value="Alley 1" {{ old('street', auth()->user()->street) == 'Alley 1' ? 'selected' : '' }}>Alley 1</option>
                           <option value="Alley 2" {{ old('street', auth()->user()->street) == 'Alley 2' ? 'selected' : '' }}>Alley 2</option>
                           <option value="Alley 3" {{ old('street', auth()->user()->street) == 'Alley 3' ? 'selected' : '' }}>Alley 3</option>
                           <option value="Amethyst Street" {{ old('street', auth()->user()->street) == 'Amethyst Street' ? 'selected' : '' }}>Amethyst Street</option>
                           <option value="Amity Street" {{ old('street', auth()->user()->street) == 'Amity Street' ? 'selected' : '' }}>Amity Street</option>
                           <option value="Angela Avenue" {{ old('street', auth()->user()->street) == 'Angela Avenue' ? 'selected' : '' }}>Angela Avenue</option>
                           <option value="Apitong Street" {{ old('street', auth()->user()->street) == 'Apitong Street' ? 'selected' : '' }}>Apitong Street</option>
                           <option value="Apollo Street" {{ old('street', auth()->user()->street) == 'Apollo Street' ? 'selected' : '' }}>Apollo Street</option>
                           <option value="Aquarius Street" {{ old('street', auth()->user()->street) == 'Aquarius Street' ? 'selected' : '' }}>Aquarius Street</option>
                           <option value="Aries Street" {{ old('street', auth()->user()->street) == 'Aries Street' ? 'selected' : '' }}>Aries Street</option>
                           <option value="Armando Street" {{ old('street', auth()->user()->street) == 'Armando Street' ? 'selected' : '' }}>Armando Street</option>
                           <option value="Artemio Street" {{ old('street', auth()->user()->street) == 'Artemio Street' ? 'selected' : '' }}>Artemio Street</option>

                           {{-- B --}}
                           <option value="B. Evangelista Drive" {{ old('street', auth()->user()->street) == 'B. Evangelista Drive' ? 'selected' : '' }}>B. Evangelista Drive</option>
                           <option value="Balete Perimeter" {{ old('street', auth()->user()->street) == 'Balete Perimeter' ? 'selected' : '' }}>Balete Perimeter</option>
                           <option value="Balete Street" {{ old('street', auth()->user()->street) == 'Balete Street' ? 'selected' : '' }}>Balete Street</option>
                           <option value="Bayani" {{ old('street', auth()->user()->street) == 'Bayani' ? 'selected' : '' }}>Bayani</option>
                           <option value="Begonia Street" {{ old('street', auth()->user()->street) == 'Begonia Street' ? 'selected' : '' }}>Begonia Street</option>
                           <option value="Benedicta Street" {{ old('street', auth()->user()->street) == 'Benedicta Street' ? 'selected' : '' }}>Benedicta Street</option>
                           <option value="Benevolence Street" {{ old('street', auth()->user()->street) == 'Benevolence Street' ? 'selected' : '' }}>Benevolence Street</option>
                           <option value="Beta Street" {{ old('street', auth()->user()->street) == 'Beta Street' ? 'selected' : '' }}>Beta Street</option>
                           <option value="Biglang Awa Street" {{ old('street', auth()->user()->street) == 'Biglang Awa Street' ? 'selected' : '' }}>Biglang Awa Street</option>
                           <option value="Blue Bird Street" {{ old('street', auth()->user()->street) == 'Blue Bird Street' ? 'selected' : '' }}>Blue Bird Street</option>
                           <option value="Blue Jay" {{ old('street', auth()->user()->street) == 'Blue Jay' ? 'selected' : '' }}>Blue Jay</option>
                           <option value="Blue Street" {{ old('street', auth()->user()->street) == 'Blue Street' ? 'selected' : '' }}>Blue Street</option>
                           <option value="Bougainvilla Street" {{ old('street', auth()->user()->street) == 'Bougainvilla Street' ? 'selected' : '' }}>Bougainvilla Street</option>

                           {{-- C --}}
                           <option value="Calugas Street" {{ old('street', auth()->user()->street) == 'Calugas Street' ? 'selected' : '' }}>Calugas Street</option>
                           <option value="Camia Street" {{ old('street', auth()->user()->street) == 'Camia Street' ? 'selected' : '' }}>Camia Street</option>
                           <option value="Carlos Street" {{ old('street', auth()->user()->street) == 'Carlos Street' ? 'selected' : '' }}>Carlos Street</option>
                           <option value="Carlos Extension" {{ old('street', auth()->user()->street) == 'Carlos Extension' ? 'selected' : '' }}>Carlos Extension</option>
                           <option value="Celina Drive" {{ old('street', auth()->user()->street) == 'Celina Drive' ? 'selected' : '' }}>Celina Drive</option>
                           <option value="Champaca Street" {{ old('street', auth()->user()->street) == 'Champaca Street' ? 'selected' : '' }}>Champaca Street</option>
                           <option value="Church Perimeter" {{ old('street', auth()->user()->street) == 'Church Perimeter' ? 'selected' : '' }}>Church Perimeter</option>
                           <option value="Crystal Street" {{ old('street', auth()->user()->street) == 'Crystal Street' ? 'selected' : '' }}>Crystal Street</option>

                           {{-- D --}}
                           <option value="Dahlia Street" {{ old('street', auth()->user()->street) == 'Dahlia Street' ? 'selected' : '' }}>Dahlia Street</option>
                           <option value="Daniel Street" {{ old('street', auth()->user()->street) == 'Daniel Street' ? 'selected' : '' }}>Daniel Street</option>
                           <option value="David Street" {{ old('street', auth()->user()->street) == 'David Street' ? 'selected' : '' }}>David Street</option>
                           <option value="Diamond Avenue" {{ old('street', auth()->user()->street) == 'Diamond Avenue' ? 'selected' : '' }}>Diamond Avenue</option>
                           <option value="Dizon Street" {{ old('street', auth()->user()->street) == 'Dizon Street' ? 'selected' : '' }}>Dizon Street</option>

                           {{-- E --}}
                           <option value="Emerald Street" {{ old('street', auth()->user()->street) == 'Emerald Street' ? 'selected' : '' }}>Emerald Street</option>
                           <option value="Enoch Street" {{ old('street', auth()->user()->street) == 'Enoch Street' ? 'selected' : '' }}>Enoch Street</option>
                           <option value="Esperanza Street" {{ old('street', auth()->user()->street) == 'Esperanza Street' ? 'selected' : '' }}>Esperanza Street</option>
                           <option value="Evangelista Street" {{ old('street', auth()->user()->street) == 'Evangelista Street' ? 'selected' : '' }}>Evangelista Street</option>

                           {{-- F --}}
                           <option value="F. Ibarra Street" {{ old('street', auth()->user()->street) == 'F. Ibarra Street' ? 'selected' : '' }}>F. Ibarra Street</option>
                           <option value="Felix Street" {{ old('street', auth()->user()->street) == 'Felix Street' ? 'selected' : '' }}>Felix Street</option>
                           <option value="Fern Street" {{ old('street', auth()->user()->street) == 'Fern Street' ? 'selected' : '' }}>Fern Street</option>
                           <option value="First Street" {{ old('street', auth()->user()->street) == 'First Street' ? 'selected' : '' }}>First Street</option>
                           <option value="Franciscan Street" {{ old('street', auth()->user()->street) == 'Franciscan Street' ? 'selected' : '' }}>Franciscan Street</option>

                           {{-- G --}}
                           <option value="G. de Leon Street" {{ old('street', auth()->user()->street) == 'G. de Leon Street' ? 'selected' : '' }}>G. de Leon Street</option>
                           <option value="Gamma Street" {{ old('street', auth()->user()->street) == 'Gamma Street' ? 'selected' : '' }}>Gamma Street</option>
                           <option value="Gemini Street" {{ old('street', auth()->user()->street) == 'Gemini Street' ? 'selected' : '' }}>Gemini Street</option>
                           <option value="Gemini Alley" {{ old('street', auth()->user()->street) == 'Gemini Alley' ? 'selected' : '' }}>Gemini Alley</option>
                           <option value="Gerry Street" {{ old('street', auth()->user()->street) == 'Gerry Street' ? 'selected' : '' }}>Gerry Street</option>
                           <option value="Gold Street" {{ old('street', auth()->user()->street) == 'Gold Street' ? 'selected' : '' }}>Gold Street</option>
                           <option value="Golden Peacock Street" {{ old('street', auth()->user()->street) == 'Golden Peacock Street' ? 'selected' : '' }}>Golden Peacock Street</option>
                           <option value="Goodwill Avenue" {{ old('street', auth()->user()->street) == 'Goodwill Avenue' ? 'selected' : '' }}>Goodwill Avenue</option>
                           <option value="Gozum Street" {{ old('street', auth()->user()->street) == 'Gozum Street' ? 'selected' : '' }}>Gozum Street</option>
                           <option value="Green Avenue" {{ old('street', auth()->user()->street) == 'Green Avenue' ? 'selected' : '' }}>Green Avenue</option>
                           <option value="Green Street" {{ old('street', auth()->user()->street) == 'Green Street' ? 'selected' : '' }}>Green Street</option>

                           {{-- H --}}
                           <option value="Hermes Street" {{ old('street', auth()->user()->street) == 'Hermes Street' ? 'selected' : '' }}>Hermes Street</option>
                           <option value="Herrera Drive" {{ old('street', auth()->user()->street) == 'Herrera Drive' ? 'selected' : '' }}>Herrera Drive</option>
                           <option value="Holy Cross Road" {{ old('street', auth()->user()->street) == 'Holy Cross Road' ? 'selected' : '' }}>Holy Cross Road</option>

                           {{-- I --}}
                           <option value="Isaac Carreon Street" {{ old('street', auth()->user()->street) == 'Isaac Carreon Street' ? 'selected' : '' }}>Isaac Carreon Street</option>
                           <option value="Isaiah Street" {{ old('street', auth()->user()->street) == 'Isaiah Street' ? 'selected' : '' }}>Isaiah Street</option>
                           <option value="Ivory Street" {{ old('street', auth()->user()->street) == 'Ivory Street' ? 'selected' : '' }}>Ivory Street</option>

                           {{-- J --}}
                           <option value="Jade Street" {{ old('street', auth()->user()->street) == 'Jade Street' ? 'selected' : '' }}>Jade Street</option>
                           <option value="James Street" {{ old('street', auth()->user()->street) == 'James Street' ? 'selected' : '' }}>James Street</option>
                           <option value="Jasmin Street" {{ old('street', auth()->user()->street) == 'Jasmin Street' ? 'selected' : '' }}>Jasmin Street</option>
                           <option value="Jeremiah Street" {{ old('street', auth()->user()->street) == 'Jeremiah Street' ? 'selected' : '' }}>Jeremiah Street</option>
                           <option value="Joel Street" {{ old('street', auth()->user()->street) == 'Joel Street' ? 'selected' : '' }}>Joel Street</option>
                           <option value="John Street" {{ old('street', auth()->user()->street) == 'John Street' ? 'selected' : '' }}>John Street</option>
                           <option value="Jose P. Laurel Street" {{ old('street', auth()->user()->street) == 'Jose P. Laurel Street' ? 'selected' : '' }}>Jose P. Laurel Street</option>

                           {{-- K --}}
                           <option value="Kalayaan Avenue" {{ old('street', auth()->user()->street) == 'Kalayaan Avenue' ? 'selected' : '' }}>Kalayaan Avenue</option>
                           <option value="Kappa Street" {{ old('street', auth()->user()->street) == 'Kappa Street' ? 'selected' : '' }}>Kappa Street</option>
                           <option value="Katipunan Avenue" {{ old('street', auth()->user()->street) == 'Katipunan Avenue' ? 'selected' : '' }}>Katipunan Avenue</option>

                           {{-- L --}}
                           <option value="L. Figueroa Compound" {{ old('street', auth()->user()->street) == 'L. Figueroa Compound' ? 'selected' : '' }}>L. Figueroa Compound</option>
                           <option value="Lapu-lapu Street" {{ old('street', auth()->user()->street) == 'Lapu-lapu Street' ? 'selected' : '' }}>Lapu-lapu Street</option>
                           <option value="Le Carreon Street" {{ old('street', auth()->user()->street) == 'Le Carreon Street' ? 'selected' : '' }}>Le Carreon Street</option>
                           <option value="Leon Cleofas Street" {{ old('street', auth()->user()->street) == 'Leon Cleofas Street' ? 'selected' : '' }}>Leon Cleofas Street</option>
                           <option value="Libra Street" {{ old('street', auth()->user()->street) == 'Libra Street' ? 'selected' : '' }}>Libra Street</option>
                           <option value="Lime Street" {{ old('street', auth()->user()->street) == 'Lime Street' ? 'selected' : '' }}>Lime Street</option>

                           {{-- M --}}
                           <option value="Magno Street" {{ old('street', auth()->user()->street) == 'Magno Street' ? 'selected' : '' }}>Magno Street</option>
                           <option value="Magnolia" {{ old('street', auth()->user()->street) == 'Magnolia' ? 'selected' : '' }}>Magnolia</option>
                           <option value="Magsaysay Avenue" {{ old('street', auth()->user()->street) == 'Magsaysay Avenue' ? 'selected' : '' }}>Magsaysay Avenue</option>
                           <option value="Mahogany Street" {{ old('street', auth()->user()->street) == 'Mahogany Street' ? 'selected' : '' }}>Mahogany Street</option>
                           <option value="Marigold" {{ old('street', auth()->user()->street) == 'Marigold' ? 'selected' : '' }}>Marigold</option>
                           <option value="Mark Street" {{ old('street', auth()->user()->street) == 'Mark Street' ? 'selected' : '' }}>Mark Street</option>
                           <option value="Matthew Street" {{ old('street', auth()->user()->street) == 'Matthew Street' ? 'selected' : '' }}>Matthew Street</option>
                           <option value="Metro Avenue" {{ old('street', auth()->user()->street) == 'Metro Avenue' ? 'selected' : '' }}>Metro Avenue</option>
                           <option value="Mint Street" {{ old('street', auth()->user()->street) == 'Mint Street' ? 'selected' : '' }}>Mint Street</option>
                           <option value="Mocking Bird Street" {{ old('street', auth()->user()->street) == 'Mocking Bird Street' ? 'selected' : '' }}>Mocking Bird Street</option>
                           <option value="Molave Street" {{ old('street', auth()->user()->street) == 'Molave Street' ? 'selected' : '' }}>Molave Street</option>

                           {{-- N --}}
                           <option value="Narra Street" {{ old('street', auth()->user()->street) == 'Narra Street' ? 'selected' : '' }}>Narra Street</option>
                           <option value="New Jersey Village" {{ old('street', auth()->user()->street) == 'New Jersey Village' ? 'selected' : '' }}>New Jersey Village</option>
                           <option value="Noemi Street" {{ old('street', auth()->user()->street) == 'Noemi Street' ? 'selected' : '' }}>Noemi Street</option>
                           <option value="Noguera Street" {{ old('street', auth()->user()->street) == 'Noguera Street' ? 'selected' : '' }}>Noguera Street</option>
                           <option value="North Point Street" {{ old('street', auth()->user()->street) == 'North Point Street' ? 'selected' : '' }}>North Point Street</option>

                           {{-- O --}}
                           <option value="Office Perimeter" {{ old('street', auth()->user()->street) == 'Office Perimeter' ? 'selected' : '' }}>Office Perimeter</option>
                           <option value="Olive Street" {{ old('street', auth()->user()->street) == 'Olive Street' ? 'selected' : '' }}>Olive Street</option>
                           <option value="Omicron Street" {{ old('street', auth()->user()->street) == 'Omicron Street' ? 'selected' : '' }}>Omicron Street</option>
                           <option value="Onyx Street" {{ old('street', auth()->user()->street) == 'Onyx Street' ? 'selected' : '' }}>Onyx Street</option>
                           <option value="Opal Street" {{ old('street', auth()->user()->street) == 'Opal Street' ? 'selected' : '' }}>Opal Street</option>
                           <option value="Orange Street" {{ old('street', auth()->user()->street) == 'Orange Street' ? 'selected' : '' }}>Orange Street</option>

                           {{-- P --}}
                           <option value="Pablo dela Cruz Street" {{ old('street', auth()->user()->street) == 'Pablo dela Cruz Street' ? 'selected' : '' }}>Pablo dela Cruz Street</option>
                           <option value="Pagkabuhay Road" {{ old('street', auth()->user()->street) == 'Pagkabuhay Road' ? 'selected' : '' }}>Pagkabuhay Road</option>
                           <option value="Pascual Avenue" {{ old('street', auth()->user()->street) == 'Pascual Avenue' ? 'selected' : '' }}>Pascual Avenue</option>
                           <option value="Pearl Street" {{ old('street', auth()->user()->street) == 'Pearl Street' ? 'selected' : '' }}>Pearl Street</option>
                           <option value="Peter Street" {{ old('street', auth()->user()->street) == 'Peter Street' ? 'selected' : '' }}>Peter Street</option>
                           <option value="Pink Street" {{ old('street', auth()->user()->street) == 'Pink Street' ? 'selected' : '' }}>Pink Street</option>
                           <option value="Pisces Street" {{ old('street', auth()->user()->street) == 'Pisces Street' ? 'selected' : '' }}>Pisces Street</option>
                           <option value="Platinum Street" {{ old('street', auth()->user()->street) == 'Platinum Street' ? 'selected' : '' }}>Platinum Street</option>

                           {{-- Q --}}
                           <option value="Quirino Highway" {{ old('street', auth()->user()->street) == 'Quirino Highway' ? 'selected' : '' }}>Quirino Highway</option>

                           {{-- R --}}
                           <option value="Rainbow Street" {{ old('street', auth()->user()->street) == 'Rainbow Street' ? 'selected' : '' }}>Rainbow Street</option>
                           <option value="Ramirez Street" {{ old('street', auth()->user()->street) == 'Ramirez Street' ? 'selected' : '' }}>Ramirez Street</option>
                           <option value="Ramos Street" {{ old('street', auth()->user()->street) == 'Ramos Street' ? 'selected' : '' }}>Ramos Street</option>
                           <option value="Red Macau Street" {{ old('street', auth()->user()->street) == 'Red Macau Street' ? 'selected' : '' }}>Red Macau Street</option>
                           <option value="Remarville Avenue" {{ old('street', auth()->user()->street) == 'Remarville Avenue' ? 'selected' : '' }}>Remarville Avenue</option>
                           <option value="Rockville Avenue" {{ old('street', auth()->user()->street) == 'Rockville Avenue' ? 'selected' : '' }}>Rockville Avenue</option>

                           {{-- S --}}
                           <option value="Saint Andrew Street" {{ old('street', auth()->user()->street) == 'Saint Andrew Street' ? 'selected' : '' }}>Saint Andrew Street</option>
                           <option value="Saint Anthony Street" {{ old('street', auth()->user()->street) == 'Saint Anthony Street' ? 'selected' : '' }}>Saint Anthony Street</option>
                           <option value="Saint James Street" {{ old('street', auth()->user()->street) == 'Saint James Street' ? 'selected' : '' }}>Saint James Street</option>
                           <option value="Saint Jude Street" {{ old('street', auth()->user()->street) == 'Saint Jude Street' ? 'selected' : '' }}>Saint Jude Street</option>
                           <option value="Sampaguita Street" {{ old('street', auth()->user()->street) == 'Sampaguita Street' ? 'selected' : '' }}>Sampaguita Street</option>
                           <option value="Santan Street" {{ old('street', auth()->user()->street) == 'Santan Street' ? 'selected' : '' }}>Santan Street</option>
                           <option value="Seminary Road" {{ old('street', auth()->user()->street) == 'Seminary Road' ? 'selected' : '' }}>Seminary Road</option>
                           <option value="Sikatuna Street" {{ old('street', auth()->user()->street) == 'Sikatuna Street' ? 'selected' : '' }}>Sikatuna Street</option>

                           {{-- T --}}
                           <option value="T. Carreon Street" {{ old('street', auth()->user()->street) == 'T. Carreon Street' ? 'selected' : '' }}>T. Carreon Street</option>
                           <option value="Talisay Street" {{ old('street', auth()->user()->street) == 'Talisay Street' ? 'selected' : '' }}>Talisay Street</option>
                           <option value="Tamarind Street" {{ old('street', auth()->user()->street) == 'Tamarind Street' ? 'selected' : '' }}>Tamarind Street</option>
                           <option value="Tenorio Urbano Street" {{ old('street', auth()->user()->street) == 'Tenorio Urbano Street' ? 'selected' : '' }}>Tenorio Urbano Street</option>
                           <option value="Topaz Street" {{ old('street', auth()->user()->street) == 'Topaz Street' ? 'selected' : '' }}>Topaz Street</option>

                           {{-- U --}}
                           <option value="Upper Garcia Extension" {{ old('street', auth()->user()->street) == 'Upper Garcia Extension' ? 'selected' : '' }}>Upper Garcia Extension</option>
                           <option value="Urbano Perimeter" {{ old('street', auth()->user()->street) == 'Urbano Perimeter' ? 'selected' : '' }}>Urbano Perimeter</option>
                           <option value="Urcia Street" {{ old('street', auth()->user()->street) == 'Urcia Street' ? 'selected' : '' }}>Urcia Street</option>

                           {{-- V --}}
                           <option value="V. Bernardino Road" {{ old('street', auth()->user()->street) == 'V. Bernardino Road' ? 'selected' : '' }}>V. Bernardino Road</option>
                           <option value="Venus Street" {{ old('street', auth()->user()->street) == 'Venus Street' ? 'selected' : '' }}>Venus Street</option>
                           <option value="Versace Street" {{ old('street', auth()->user()->street) == 'Versace Street' ? 'selected' : '' }}>Versace Street</option>
                           <option value="Violet Street" {{ old('street', auth()->user()->street) == 'Violet Street' ? 'selected' : '' }}>Violet Street</option>
                           <option value="Virgo Street" {{ old('street', auth()->user()->street) == 'Virgo Street' ? 'selected' : '' }}>Virgo Street</option>

                           {{-- W/Y/Z --}}
                           <option value="Waling Waling Street" {{ old('street', auth()->user()->street) == 'Waling Waling Street' ? 'selected' : '' }}>Waling Waling Street</option>
                           <option value="White Duck" {{ old('street', auth()->user()->street) == 'White Duck' ? 'selected' : '' }}>White Duck</option>
                           <option value="Yakal Street" {{ old('street', auth()->user()->street) == 'Yakal Street' ? 'selected' : '' }}>Yakal Street</option>
                           <option value="Yellow Bird Street" {{ old('street', auth()->user()->street) == 'Yellow Bird Street' ? 'selected' : '' }}>Yellow Bird Street</option>
                           <option value="Zircon Street" {{ old('street', auth()->user()->street) == 'Zircon Street' ? 'selected' : '' }}>Zircon Street</option>
                           <option value="Zodiac Street" {{ old('street', auth()->user()->street) == 'Zodiac Street' ? 'selected' : '' }}>Zodiac Street</option>
                       </select>
                   </div>

               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Email:</Label>
                       <input required name="email" value="{{ old('email', auth()->user()->email) }}" type="email" placeholder="Ex. juandelacruz@gmail.com" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('email')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>

               <div class="flex flex-col gap-[10px]">
                   <div class="flex flex-col">
                       <Label class="font-medium text-[18px]">Contact Number:</Label>
                       <input required name="contact" value="{{ old('contact', auth()->user()->contact) }}" type="tel" maxlength="11" placeholder="Ex. 09xxxxxxxxx" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('contact')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>
               </div>
               <div class="flex flex-col w-full gap-[20px]">
                   <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Save Changes</button>
                   <div id="cancelBtn" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
               </div>
           </form>
       </div>
       <!-- password modal Section -->
       <div id="pwdModal" class="w-full modal fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden items-center justify-center">
           <form method="POST" action="{{ route('password.update') }}" class="rounded-[4px] h-fit bg-white p-[15px] sm:p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
               @csrf
               @method('PUT')
               <h3 class="font-bold text-[40px]">Update Password</h3>

               <div class="flex flex-col gap-[20px] w-full">
                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Current Password:</Label>
                       <input required name="current_password" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('current_password')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>

                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">New Password:</Label>
                       <input required name="password" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                       @error('password')
                       <small class="text-red-600 text-sm mt-1">{{ $message }}</small>
                       @enderror
                   </div>

                   <div class="flex flex-col w-full">
                       <Label class="font-medium text-[18px]">Confirm Password:</Label>
                       <input required name="password_confirmation" type="password" placeholder="" class="py-[10px] border-b-[1px] border-b-gray-700 focus:outline-none font-regular text-gray-600 text-[18px]">
                   </div>
               </div>

               <div class="flex flex-col w-full gap-[20px]">
                   <button type="submit" class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Save</button>
                   <div id="pwdCancelBtn" class="cancelBtn flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
               </div>
           </form>
       </div>
       <!--  delete account modal -->
       <div id="deleteAccModal" class="modal w-full fixed inset-0 overflow-y-auto p-[15px] sm:p-[50px] bg-black/50 backdrop-blur-[5px] z-[999] hidden justify-center items-center">
           <form class="rounded-[4px] h-fit bg-white p-[30px] flex flex-col w-full max-w-[540px] gap-[30px]">
               <h3 class="font-bold text-[40px]">Delete Account</h3>
               <div class="flex items-center justify-center w-full">
                   <p class="font-regular text-[20px] text-gray-500">Are you sure you want to delete <span class="text-[#EF4444]">Your Account</span>? This action cannot be undone and all your information will be lost.</p>
               </div>
               <div class="flex flex-col w-full gap-[20px]">
                   <button class="w-full flex items-center justify-center px-[20px] py-[10px] text-[20px] bg-[#EA580C] text-[#ffffff] font-medium rounded-[4px] border-[1px] border-[#EA580C] hover:bg-orange-700 transition-all duration-300 hover:cursor-pointer">Yes, Delete Account</button>
                   <div id="cancelDeleteBtn" class="cancelBtn  flex items-center justify-center px-[20px] py-[10px] text-[20px] text-[#FDBA74] font-medium rounded-[4px] border-[1px] border-[#FDBA74] hover:bg-orange-100 hover:text-orange-700 transition-all duration-300 hover:cursor-pointer">Cancel</div>
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
               <div class="flex items-center gap-[20px]">
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
                           <h1 class="font-serif font-medium sm:text-[35px] text-[25px]">Settings</h1>
                           <p class="sm:text-[16px] text-[14px] font-medium text-[#A1A1AA]">Manage your account. Update your credentials, edit your personal details, and customize your profile settings</p>
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

               <!--informations -->
               <section class="w-full flex items-center justify-center px-[15px] sm:px-[0] z-[10]">
                   <div class="w-full max-w-[815px] flex flex-col gap-[50px] relative">
                       <!-- personal informations -->
                       <div class="flex flex-col gap-[15px] w-full">
                           <div class="flex items-center justify-between">
                               <h2 class="font-bold text-[25px]">Personal Information</h2>
                               <div id="modalBtn" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[25px]">Edit</div>
                           </div>
                           <div class="w-full rounded-[4px] border-solid border-[1px] py-[20px] border-[#D4D4D8]">
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="rounded-[50%] h-[98px] w-[98px] bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                                           <span class="text-white text-[40px] font-bold">
                                               {{ strtoupper(substr(auth()->user()->firstname, 0, 1)) }}{{ strtoupper(substr(auth()->user()->lastname, 0, 1)) }}
                                           </span>
                                       </div>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Full Name</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">
                                           {{ auth()->user()->firstname }} {{ auth()->user()->middlename }} {{ auth()->user()->lastname }}
                                       </p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Email</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->email }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Contact Number</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->contact }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Address</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">
                                           {{ auth()->user()->house_number }} {{ auth()->user()->street }} Street,
                                           <br>
                                           Barangay San Bartolome,
                                           <br>
                                           Quezon City, Metro Manila,
                                           <br>
                                           Philippines
                                       </p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Gender</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ ucfirst(auth()->user()->gender) }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Place of Birth:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->place_of_birth ?? 'N/A' }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Citizenship:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->citizenship ?? 'N/A' }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Civil Status:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ ucfirst(auth()->user()->civil_status ?? 'N/A') }}</p>
                                   </div>
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Occupation:</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">{{ auth()->user()->occupation ?? 'N/A' }}</p>
                                   </div>
                               </div>
                               <div class="px-[20px] py-[15px] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Birth Date</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">
                                           {{ \Carbon\Carbon::parse(auth()->user()->birthdate)->format('d F Y') }}
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- account and privacy -->
                       <div class="flex flex-col gap-[15px] w-full mb-[30px]">
                           <h2 class="font-bold text-[25px]">Account & Privacy</h2>
                           <div class="w-full rounded-[4px] border-solid border-[1px] py-[20px] border-[#D4D4D8]">
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Verify Account</div>
                                       @php
                                       $verification = Auth::user()->verification;
                                       $isVerified = $verification && $verification->status === 'verified';
                                       $isPending = $verification && $verification->status === 'pending';
                                       @endphp

                                       @if($isVerified)
                                       <p class="font-regular text-[16px] py-[10px] text-green-600">Verified</p>
                                       @elseif($isPending)
                                       <p class="font-regular text-[16px] py-[10px] text-yellow-600">Pending Verification</p>
                                       @else
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">Not Verified</p>
                                       @endif
                                   </div>

                                   @if(!$isVerified && !$isPending)
                                   <a href="{{url('/verify')}}" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[20px]">Verify</a>
                                   @endif
                               </div>
                               <div class="border-b-[1px] px-[20px] py-[15px] border-b-[#D4D4D8] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Change Password</div>
                                   </div>
                                   <div id="pwdBtn" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[20px]">Edit</div>
                               </div>
                               <div class=" px-[20px] py-[15px] w-fill flex items-center justify-between">
                                   <div class="flex flex-col">
                                       <div class="font-semibold text-[16px]">Delete My Account</div>
                                       <p class="font-regular text-[16px] py-[10px] text-[#52525B]">This will Delete all your account's information and cannot be undone</p>
                                   </div>
                                   <div id="deleteAccBtn" class="hover:cursor-pointer hover:text-orange-700 transition-text duration-300 font-bold text-[#EA580C] text-[20px]">Delete</div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

           </main>
           <script>
               document.addEventListener('DOMContentLoaded', function() {
                   const modal = document.getElementById('modal');
                   const openModalBtn = document.getElementById('modalBtn');
                   const cancelBtn = document.getElementById('cancelBtn');
                   // change password modal
                   const pwdModal = document.getElementById('pwdModal');
                   const openPwdBtn = document.getElementById('pwdBtn');
                   const pwdCancelBtn = document.getElementById('pwdCancelBtn')
                   // delete account modal
                   const deleteAccModal = document.getElementById('deleteAccModal');
                   const deleteAccBtn = document.getElementById('deleteAccBtn');
                   const cancelDeleteBtn = document.getElementById('cancelDeleteBtn')

                   openModalBtn.addEventListener('click', function() {
                       modal.style.display = 'flex';
                   })

                   cancelBtn.addEventListener('click', function() {
                       modal.style.display = 'none';
                   })

                   // change password function

                   openPwdBtn.addEventListener('click', function() {
                       pwdModal.style.display = 'flex';
                   })

                   pwdCancelBtn.addEventListener('click', function() {
                       pwdModal.style.display = 'none';
                   })

                   // delete account function

                   deleteAccBtn.addEventListener('click', function() {
                       deleteAccModal.style.display = 'flex';
                   })

                   cancelDeleteBtn.addEventListener('click', function() {
                       deleteAccModal.style.display = 'none';
                   })


               })
           </script>
           @if ($errors->has('firstname') || $errors->has('lastname') || $errors->has('email') || $errors->has('contact'))
           <script>
               document.addEventListener('DOMContentLoaded', function() {
                   const modal = document.getElementById('modal');
                   if (modal) {
                       modal.classList.remove('hidden');
                       modal.classList.add('flex');
                   }
               });
           </script>
           @endif
           @if ($errors->has('current_password') || $errors->has('password'))
           <script>
               document.addEventListener('DOMContentLoaded', function() {
                   const passwordModal = document.getElementById('pwdModal');
                   if (passwordModal) {
                       passwordModal.classList.remove('hidden');
                       passwordModal.classList.add('flex');
                   }
               });
           </script>
           @endif
       </body>

       </html>