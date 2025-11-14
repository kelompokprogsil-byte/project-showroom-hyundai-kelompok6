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
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Daftar Dealer</title>
</head>
<body>
    <x-sidebar-admin></x-sidebar-admin>

    {{-- ===== TABEL ===== --}}
    <div class="p-4 sm:ml-64 mt-18 sm:mt-8 mb-12">
        <div class="flex te mb-8 rounded-sm  dark:bg-gray-800">
            <h1 class="text-3xl font-bold">Daftar Dealer</h1>
        </div>

            {{-- === Search & Dropdown === --}}
            <div class="flex items-center justify-center gap-8 flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                {{-- === Filter === --}}
                <div>
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        <span class="sr-only">Action button</span>
                        Action
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    {{-- <!-- Dropdown menu --> --}}
                    <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ascending (A-Z)</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Descending (Z-A)</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Terbaru</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Terlama</a>
                            </li>
                        </ul>
                    </div>
                </div>


                {{-- === Search === --}}
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                </div>

                {{-- === Tambah Data === --}}
                <button method="POST" type="button" data-modal-target="editDealerModal" data-modal-show="editDealerModal" class= "text-sm font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white transition hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">+ Tambah Data</button>
            </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            {{-- === Tabel=== --}}
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                {{-- -- Table Head -- --}}
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 ">
                            Id_Dealer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Dealer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No. Telp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Provinsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                {{-- -- Table Body -- --}}
                <tbody>
                    {{-- -- Baris 1 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        {{-- -- Id --}}
                        <td class="px-6 ">
                            1
                        </td>

                        {{-- -- Nama Dealer --}}
                        <td class="px-6 py-4">
                            Hyundai Tegal Rotan
                        </td>
                        
                        {{-- -- Email --}}
                        <td class="px-6 py-4">
                            dealerjakarta@gmail.com
                        </td>

                        {{-- -- No. Telp --}}
                        <td class="px-6 py-4">
                            085711241158
                        </td>

                        {{-- -- Alamat --}}
                        <td class="px-6 py-4">
                            Jl. Tegal rotan cendrawasih raya
                        </td>

                        {{-- -- Kota--}}
                        <td class="px-6 py-4">
                            Batam
                        </td>

                        {{-- -- Provinsi --}}
                        <td class="px-6 py-4">
                            Jambi
                        </td>

                        {{-- -- Action EDIT & REMOVE--}}
                        <td class="px-6 py-4 flex flex-col gap-3 items-start justify-center">
                            <!-- Edit Modal toggle -->
                            <a href="#" type="button" data-modal-target="editDealerrModal" data-modal-show="editDealerModal" class="font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white hover:underline hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">Edit User</a>
                            
                            <!-- Remove toggle -->
                            <button type="button" data-modal-target="editDealerModal" data-modal-show="editDealerModal" class="font-medium border-2 border-white p-2 rounded-sm bg-red-500 text-white hover:underline hover:text-red-500 hover:bg-transparent hover:border-red-500 hover:cursor-pointer">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>


            {{-- == MODAL EDIT == --}}
            <div id="editDealerModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-3xl max-h-full">
                    <!-- Modal content -->
                    <form class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Edit Dealer
                            </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editDealerModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div class="grid grid-cols-6 gap-6">
                                {{-- -- Nama Dealer --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dealer</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                                {{-- -- Email --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Email</label>
                                    <input type="text" name="last-name" id="last-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                                </div>

                                {{-- -- No Telp--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telpon</label>
                                    <input type="email" name="email" id="email" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambal Ban" required="">
                                </div>

                                {{-- -- Alamat--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambal ban 123" required="">
                                </div>

                                {{-- -- Kota--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tegal Rotan" required="">
                                </div>

                            {{-- -- Provinsi -- --}}
                            <div class="col-span-6 sm:col-span-3">
                                <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>

                                {{-- Tombol Dropdown --}}
                                <button id="dropdownProvinsiButton" data-dropdown-toggle="dropdownProvinsi" type="button"
                                    class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500 dark:hover:bg-gray-700 dark:hover:border-gray-500 dark:focus:ring-gray-700 justify-between">
                                    <span class="sr-only">Pilih Provinsi</span>
                                    Pilih Provinsi
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                {{-- Menu Dropdown dengan Scroll --}}
                                <div id="dropdownProvinsi"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 max-h-60 overflow-y-auto">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownProvinsiButton">
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Aceh"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Aceh</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sumatera Utara"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sumatera
                                                Utara</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sumatera Barat"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sumatera
                                                Barat</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Riau"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riau</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Kepulauan Riau"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kepulauan
                                                Riau</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Jambi"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jambi</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Bengkulu"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bengkulu</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sumatera Selatan"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sumatera
                                                Selatan</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Lampung"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lampung</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="DKI Jakarta"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DKI
                                                Jakarta</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Jawa Barat"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jawa
                                                Barat</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Jawa Tengah"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jawa
                                                Tengah</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="DI Yogyakarta"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DI
                                                Yogyakarta</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Jawa Timur"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jawa
                                                Timur</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Banten"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Banten</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Bali"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bali</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Nusa Tenggara Barat"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nusa Tenggara
                                                Barat</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Nusa Tenggara Timur"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nusa Tenggara
                                                Timur</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Kalimantan Barat"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kalimantan
                                                Barat</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Kalimantan Tengah"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kalimantan
                                                Tengah</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Kalimantan Selatan"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kalimantan
                                                Selatan</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Kalimantan Timur"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kalimantan
                                                Timur</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Kalimantan Utara"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kalimantan
                                                Utara</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sulawesi Utara"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sulawesi
                                                Utara</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sulawesi Tengah"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sulawesi
                                                Tengah</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sulawesi Selatan"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sulawesi
                                                Selatan</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sulawesi Tenggara"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sulawesi
                                                Tenggara</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Sulawesi Barat"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sulawesi
                                                Barat</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Gorontalo"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gorontalo</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Maluku"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Maluku</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Maluku Utara"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Maluku
                                                Utara</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Papua Barat"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Papua
                                                Barat</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Papua Barat Daya"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Papua Barat
                                                Daya</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Papua Tengah"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Papua Tengah</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Papua Pegunungan"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Papua Pegunungan</a></li>
                                        <li class="border-b border-gray-200 dark:border-gray-600 mx-3"><a href="#" data-value="Papua Selatan"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Papua Selatan</a></li>
                                        <li class="mx-3"><a href="#" data-value="Papua"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Papua</a></li>
                                    </ul>
                                </div>

                                {{-- Hidden input untuk menyimpan nilai terpilih --}}
                                <input type="hidden" name="provinsi" id="provinsi_value">
                            </div>


                            </div>

                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button type="submit" class="text-white bg-[var(--bg-secondary)] border-2 border-white hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:cursor-pointer">Save all</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>