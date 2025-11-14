<!-- === SIDEBAR === -->
    <aside id="default-sidebar" class=" fixed left-0 z-[40] w-64 h-screen md:h-[calc(100vh-5rem)] transition-transform -translate-x-full sm:translate-x-0 bg-gray-50 dark:bg-gray-800" aria-label="Sidebar">
      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
         <img src="/img/Logo Hyundai-gelap.png" class="h-auto w-48  me-3 ps-2.5" alt="Hyundai Logo" />
      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
         <li>
            <a href="dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/dashboard.svg" alt="spare-part icon" class="shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="daftar_user" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/user-list.svg" alt="spare-part icon" class="shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="ms-3">User List</span>
            </a>
         </li>
         <li>
            <a href="daftar_mobil" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/car.svg" alt="spare-part icon" class="shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="flex-1 ms-3 whitespace-nowrap">Product List</span>
            </a>
         </li>

         <li>
            <a href="daftar_dealer" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/dealer.svg" alt="spare-part icon" class="shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="flex-1 ms-3 whitespace-nowrap">Dealer List</span>
            </a>
         </li>
         <li>
            <a href="daftar_transaksi" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/transaction.svg" alt="spare-part icon" class="shrink-0 w-7 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="flex-1 ms-3 whitespace-nowrap">Transaction List</span>
            </a>
         </li>

         <li>
            <a href="daftar_layanan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/services.svg" alt="spare-part icon" class="shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="flex-1 ms-3 whitespace-nowrap">Services List</span>
            </a>
         </li>

         <li>
            <a href="daftar_kategori" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/kategori.svg" alt="spare-part icon" class="shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="flex-1 ms-3 whitespace-nowrap">Category List</span>
            </a>
         </li>

         <li>
            <a href="daftar_stok" class="flex items-center py-2 px-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/stok.svg" alt="spare-part icon" class="shrink-0 w-10 h-10 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="flex-1 ms-3 whitespace-nowrap">Stock List</span>
            </a>
         </li>

         <li>
            <a href="login_admin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="/img/Admin/icon/sign-out.svg" alt="spare-part icon" class="shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
               <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
         </ul>
      </div>
    </aside>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="fixed top-0 z-[20] inline-flex items-center p-2 pe- mt-6 ms-4 text-sm text-gray-500 rounded-lg sm:hidden border-2 border-gray-300 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
      </svg>
    </button>
  <!-- === SIDEBAR === -->

