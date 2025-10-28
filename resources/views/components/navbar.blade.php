
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
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span> <!-- Email user -->
        </div>

        <ul class="py-2" aria-labelledby="user-menu-button">  <!-- Link -->
          <li>
            <a href="/profil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profil</a> <!-- Profil Page -->
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
        <x-nav-button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" :activeBut="request()->is('button')">Personalization <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></x-nav-button>

            <!-- Dropdown menu -->
             <div id="dropdownNavbar" class="border-1 border-white z-10 hidden font-normal bg-[#0A142F] text-white rounded-sm shadow-sm w-full lg:w-50 dark:bg-gray-700 dark:divide-gray-600 py-4 transition duration-200">
              <ul>
                  <li class="text-sm  border-b-1 border-gray-400 mx-3">
                    <a href="/about" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
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
             <div id="dropdownNavbar2" class="border-1 border-white z-10 hidden font-normal bg-[#0A142F] text-white rounded-sm shadow-sm w-full lg:w-50 dark:bg-gray-700 dark:divide-gray-600 py-4 transition duration-200">
              <ul>
                  <li class="border-b-1 border-gray-400 mx-3">
                    <a href="/warranty" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Warranty</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                    <a href="/testimony" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Testimony</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                    <a href="/services" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Services</a>
                  </li>
                  <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                    <a href="/customer-service" class="block px-4 py-4 lg:px-2 lg:py-2 hover:bg-[#202f57] hover:text-white  active:text-gray-100 active:bg-[#202f57] dark:hover:bg-gray-600 dark:hover:text-white">Customer Service</a>
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