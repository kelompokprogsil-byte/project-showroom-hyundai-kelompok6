<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>{{ $title }}</title>
</head>
<body>
  

  <x-navbar></x-navbar>

<!-- === SIDEBAR === -->
    <aside id="default-sidebar" class=" fixed top-20 left-0 z-[50] w-64 h-screen md:h-[calc(100vh-5rem)] transition-transform -translate-x-full sm:translate-x-0 mt-19 bg-gray-50 dark:bg-gray-800" aria-label="Sidebar">
      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
          <ul class="space-y-2 font-medium">
            <li>
                <!-- Search Input-->
                <form class="max-w-md mx-auto mb-8">   
                  <div class="flex gap-3">
                      <input type="search" id="default-search" class="block w-44 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                      <button type="submit" class="text-white bottom-2.5 bg-[var(--bg-primary)] hover:bg-[#253256] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                      </button>
                  </div>
                </form>
            </li>
            <li>
                <!-- Link 1 -->
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1" class="justify-between w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <div class="flex items-center">
            <img src="img/Product/Icon/Category.svg" class="shrink-0 w-8 h-auto" > 
            
            <span class="flex-1 ms-3 whitespace-nowrap">Category</span>
            </div>

            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
      </button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar1" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-50 dark:bg-gray-700 dark:divide-gray-600 py-4">
                  <ul>
                      <li class="text-sm  border-b-1 border-gray-400 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dealer</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Showroom Live</a>
                      </li>
                  </ul>
                </div>
            </li>
            <li>
            <!-- Link 2 -->
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2" class="mb-4 justify-between w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <div class="flex items-center">
            <img src="img/Product/Icon/Year.svg" class="shrink-0 w-8 h-auto" > 
            
            <span class="flex-1 ms-3 whitespace-nowrap">Year</span>
            </div>

            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
      </button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar2" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-50 dark:bg-gray-700 dark:divide-gray-600 py-4">
                  <ul>
                      <li class="text-sm  border-b-1 border-gray-400 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dealer</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Showroom Live</a>
                      </li>
                  </ul>
                </div>  
            </li>
            <li>
                <!-- Link 3 -->
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar3" class="mb-4 justify-between w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <div class="flex items-center">
            <img src="img/Product/Icon/Type.svg" class="shrink-0 w-8 h-auto" > 
            
            <span class="flex-1 ms-3 whitespace-nowrap">Type</span>
            </div>

            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
      </button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar3" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-50 dark:bg-gray-700 dark:divide-gray-600 py-4">
                  <ul>
                      <li class="text-sm  border-b-1 border-gray-400 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dealer</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Showroom Live</a>
                      </li>
                  </ul>
                </div>
            </li>
            <li>
                <!-- Link 4 -->
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar4" class="justify-between w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <div class="flex items-center">
            <img src="img/Product/Icon/Model.svg" class="shrink-0 w-8 h-auto" > 
            
            <span class="flex-1 ms-3 whitespace-nowrap">Model</span>
            </div>

            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
      </button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar4" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-50 dark:bg-gray-700 dark:divide-gray-600 py-4">
                  <ul>
                      <li class="text-sm  border-b-1 border-gray-400 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dealer</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Showroom Live</a>
                      </li>
                  </ul>
                </div>
            </li>
            <li>
                <!-- Link 5 -->
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar5" class="justify-between w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <div class="flex items-center">
            <img src="img/Product/Icon/Color.svg" class="shrink-0 w-8 h-auto" > 
            
            <span class="flex-1 ms-3 whitespace-nowrap">Color</span>
            </div>

            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
      </button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar5" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-50 dark:bg-gray-700 dark:divide-gray-600 py-4">
                  <ul>
                      <li class="text-sm  border-b-1 border-gray-400 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dealer</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Showroom Live</a>
                      </li>
                  </ul>
                </div>
            </li>
            <li>
                <!-- Link 6 -->
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar6" class="justify-between w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <div class="flex items-center">
            <img src="img/Product/Icon/Price.svg" class="shrink-0 w-8 h-auto" > 
            
            <span class="flex-1 ms-3 whitespace-nowrap">Price</span>
            </div>

            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
      </button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar6" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-50 dark:bg-gray-700 dark:divide-gray-600 py-4">
                  <ul>
                      <li class="text-sm  border-b-1 border-gray-400 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Company</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dealer</a>
                      </li>
                      <li class="text-sm  border-b-1 border-gray-400 hover:bg-gray-100 mx-3">
                        <a href="#" class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Showroom Live</a>
                      </li>
                  </ul>
                </div>
            </li>
          </ul>
      </div>
    </aside>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="fixed top-20 z-[20] inline-flex items-center p-2 pe- mt-2 ms-8 text-sm text-gray-500 rounded-lg sm:hidden bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
      </svg>
    </button>
  <!-- === SIDEBAR === -->

  <!-- GRID LAYOUT -->
  <div class=" p-4 sm:ms-64 mt-34 sm:mt-20 sm:me-3 mb-18">
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 items-stretch">
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="STARGAZER 2025" category="Tambal Ban" year="2025" type="SUV" price="$32,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="IONIQ 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="AVANZA 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>

        <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="STARGAZER 2025" category="Tambal Ban" year="2025" type="SUV" price="$32,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="IONIQ 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="AVANZA 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>

        <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="STARGAZER 2025" category="Tambal Ban" year="2025" type="SUV" price="$32,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="IONIQ 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="AVANZA 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>

        <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="STARGAZER 2025" category="Tambal Ban" year="2025" type="SUV" price="$32,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="IONIQ 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>
    <x-product-grid image_product="img/Product/Product_dummy.png" nama_product="AVANZA 2025" category="Tambal Ban" year="2025" type="SUV" price="$26,000"></x-product-grid>
    </div>
  </div>

  <x-footer></x-footer>
    
</body>
</html>