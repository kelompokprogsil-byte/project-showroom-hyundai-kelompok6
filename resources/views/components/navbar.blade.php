
  <!-- === NAVBAR === -->
<nav class="z-50 fixed top-0 left-0 w-full bg-[var(--bg-primary)]/87 backdrop-blur-md border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-4.5 lg:py-0 md:px-6">
    <!-- Image -->
      <img src="img/Logo Hyundai.png" class="h-10 ms-4" alt="Hyundai Logo" />
      
  <div class="flex items-center lg:order-2 space-x-3 lg:space-x-0 rtl:space-x-reverse">
      <button type="button" class="hover:cursor-pointer flex text-sm bg-gray-800 rounded-full me-3 lg:me-5 focus:ring-2 focus:ring-gray-300 dark:focus:ring-white" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <div class="relative">
          <img class="w-10 h-auto rounded-full" src="img/foto_profil.jpg" alt="foto_profil"> <!-- Foto Profil -->
          <span class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
</div>
      </button>
      {{-- <!-- Dropdown menu --> --}}
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white">Diana Barry</span>  <!-- Nama User -->
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">dianabarry@flowbite.com</span> <!-- Email user -->
        </div>

        <ul class="py-2" aria-labelledby="user-menu-button">  <!-- Link -->
          <li>
            <button data-modal-target="profil-modal" data-modal-toggle="profil-modal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" type="button">Profile</button> <!-- Profil Page -->
          </li>
          <li>
            <a href="/login_user" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log In</a> <!-- Log In (Kalau belum) -->
          </li>
          <li>
            <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a> <!-- Log Out -->
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>

  {{-- === LINK & BUTTON === --}}
  <div class=" items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 lg:p-0 border z-50 bg-white lg:bg-transparent text-base list-none border-gray-100 rounded-lg lg:space-x-0 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0  dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">

      <!-- Home -->
      <li class="border-b-1 lg:border-0 border-gray-400">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
      </li>

      <!-- Product -->
      <li class="border-b-1 lg:border-0 border-gray-400"> 
        <x-nav-link href="/product" :active="request()->is('product')">Product</x-nav-link>
      </li>

      <!-- --- Dropdown 1--- -->
      <li class="relative border-b-1 lg:border-0 border-gray-400">
        <!-- Button -->
        <x-nav-button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" :activeBut="request()->is('button')">Personalization <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-200" :class="{ 'rotate-180': open }"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></x-nav-button>

            <!-- Dropdown menu -->
             <div id="dropdownNavbar" class="border-1 border-white z-10 hidden font-normal bg-[#0A142F] text-white rounded-sm shadow-sm w-full lg:w-50 dark:bg-gray-700 dark:divide-gray-600 py-4 transition duration-200">
              <ul>
                  <li class="text-sm  border-b-1 border-gray-400 mx-3">
                    <a href="/company_page" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 mx-3">
                    <a href="/career" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Career</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 mx-3">
                    <a href="/dealer" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Dealer</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                    <a href="/showroom_live" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Showroom Live</a>
                  </li>
              </ul>
             </div>  
      </li>
    
      <!-- --- Dropdown 2--- -->
      <li class="relative border-b-1 lg:border-0 border-gray-400">
        <!-- Button -->
        <x-nav-button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2" :activeBut="request()->is('button2')">Experience<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></x-nav-button>

            <!-- Dropdown menu -->
             <div id="dropdownNavbar2" class="border-1 border-white z-10 hidden font-normal bg-[#0A142F] text-white rounded-sm shadow-sm w-full lg:w-50 dark:bg-gray-700 dark:divide-gray-600 py-4 transition duration-200" >
              <ul>
                  <li class="text-sm border-b-1 border-gray-400 mx-3">
                    <a href="/warranty" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Warranty</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                    <a href="/testimony" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Testimony</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                    <a href="/services" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Services</a>
                  </li>
              </ul>
             </div>  
      </li>

      <!-- Reparation -->
      <li class="border-b-1 lg:border-0 border-gray-400">
        <x-nav-link href="/reparation" :active="request()->is('reparation')">Reparation</x-nav-link>
      </li>
    </ul>
  </div>
  </div>

</nav>
    <!-- === NAVBAR === -->


    {{-- ============================= --}}
      {{-- ==== PROFIL MODAL ==== --}}
<div id="profil-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
          {{-- -- Button X --}}
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="profil-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="pt-6 pb-4 ps-12 text-start font-semibold text-2xl border-b border-gray-200">
              <h3 class="">Profile</h3>
            </div>
            
            <div class="p-4 py-12 md:p-5 flex flex-row gap-8">
              <!-- Bagian Foto Profil -->
              <div class="flex flex-col gap-6 px-4">
                <img class="w-32 h-auto rounded-full" src="img/foto_profil.jpg" alt="foto_profil">
                <button data-modal-target="image-modal" data-modal-toggle="image-modal"  type="button" class="text-white bg-[var(--bg-secondary)] hover:bg-[var(--bg-primary)] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm inline-flex items-center px-5 py-2.5 text-center hover:cursor-pointer">Change</button>
              </div> 
              
              <!-- Bagian Form -->
              <div class="flex-1 px-4">
                <div class="space-y-6">
                  <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" readonly class="shadow-xs border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 block w-full p-2.5 dark:bg-gray-600 dark:text-gray-400" placeholder="Diana Barry">
                  </div>

                  <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="text" readonly class="shadow-xs border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 block w-full p-2.5 dark:bg-gray-600 dark:text-gray-400" placeholder="dianabarry@flowbite.com">
                  </div>

                  <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" class="shadow-xs border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 block w-full p-2.5 dark:bg-gray-600 dark:text-gray-400" placeholder="DianaBry">
                  </div>

                  <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="text" class="shadow-xs border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 block w-full p-2.5 dark:bg-gray-600 dark:text-gray-400" placeholder="Password">
                  </div>

                  <div class="flex justify-between">
                    <button data-modal-hide="profil-modal" type="button" class="text-white bg-[var(--bg-secondary)] hover:bg-[var(--bg-primary)] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm inline-flex items-center px-12 py-2.5 text-center hover:cursor-pointer">Save</button>

                    <button data-modal-hide="profil-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


      {{-- ==== IMAGE MODAL ==== --}}
<div id="image-modal" tabindex="-1" class="bg-black/40 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-60 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 pb-4">
                {{-- -- Button X --}}
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="image-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="pt-6 pb-4 ps-12 text-start font-semibold text-2xl border-b border-gray-200">
              <h3 class="">Change Profile Image</h3>
            </div>

            <div class="p-4 md:p-5 text-center">
              {{-- -- Foto Produk--}} 
              <div class="flex items-center justify-center w-full border-b border-gray-200 pb-4">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 >
                  <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop Foto Produk</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden" />
                </label>
              </div> 

              <div class="flex justify-center">
                <button data-modal-hide="profil-modal" type="button" class="text-white bg-[var(--bg-secondary)] hover:bg-[var(--bg-primary)] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm inline-flex items-center px-8 py-2.5 text-center hover:cursor-pointer">Save</button>

                <button data-modal-hide="profil-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
              </div>
            </div>
        </div>
    </div>
</div>
