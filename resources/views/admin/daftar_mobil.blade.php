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

    <title>Daftar Id_Produk</title>
</head>
<body>
    <x-sidebar-admin></x-sidebar-admin>
    
    {{-- ===== TABEL ===== --}}
    <div class="p-4 sm:ml-64 mt-18 sm:mt-8 mb-12">
        <div class="flex te mb-8 rounded-sm  dark:bg-gray-800">
            <h1 class="text-3xl font-bold">Daftar Produk</h1>
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
                <button method="POST" type="button" data-modal-target="editMobilModal" data-modal-show="editMobilModal" class= "text-sm font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white transition hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">+ Tambah Data</button>
            </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            {{-- === Tabel=== --}}
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                {{-- -- Table Head -- --}}
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 ">
                            Id_Produk
                        </th>
                        <th scope="col" class="px-6 ">
                            Id_Kategori
                        </th>
                        <th scope="col" class="px-6 ">
                            Id_Admin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Model
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Produksi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transmisi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kapasitas Mesin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tenaga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kursi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fitur
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Input
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
                        <td class="px-6 ">
                            2
                        </td>
                        <td class="px-6 ">
                            3
                        </td>

                        {{-- -- Gambar --}}
                        <th scope="row" class=" py-4 text-gray-900 whitespace-nowrap dark:text-white align-middle">
                            <img src="/img/produk 1.png" alt="">
                        </th>

                        {{-- -- Nama --}}
                        <td class="px-6 py-4">
                            Stargazer
                        </td>
                        
                        {{-- -- Jenis --}}
                        <td class="px-6 py-4">
                            Keluarga
                        </td>

                        {{-- -- Model --}}
                        <td class="px-6 py-4">
                            Aerodinamis
                        </td>

                        {{-- -- Warna --}}
                        <td class="px-6 py-4">
                            Merah
                        </td>

                        {{-- -- Kategori --}}
                        <td class="px-6 py-4">
                            SUV
                        </td>

                        {{-- -- Tipe --}}
                        <td class="px-6 py-4">
                            Terbaru
                        </td>

                        {{-- -- Tahun Produksi --}}
                        <td class="px-6 py-4">
                            2020
                        </td>

                        {{-- -- TRansmisi --}}
                        <td class="px-6 py-4">
                            Automatic
                        </td>

                        {{-- -- Kapasitas Mesin --}}
                        <td class="px-6 py-4">
                            5000 CC  
                        </td>

                        {{-- -- Tenaga --}}
                        <td class="px-6 py-4">
                            1000 HP
                        </td>

                        {{-- -- Kursi --}}
                        <td class="px-6 py-4">
                            4
                        </td>

                        {{-- -- Fitur --}}
                        <td class="px-6 py-4">
                            Keyless
                        </td>

                        {{-- -- Harga --}}
                        <td class="px-6 py-4">
                            $30,000
                        </td>

                        {{-- -- Deskripsi --}}
                        <td class="px-6 py-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, culpa.
                        </td>

                        {{-- -- Tanggal Input --}}
                        <td class="px-6 py-4">
                            2025-10-28

                        </td>

                        {{-- -- Action EDIT & REMOVE--}}
                        <td class="px-6 py-4 flex flex-col gap-3 items-start justify-center">
                            <!-- Edit Modal toggle -->
                            <a href="#" type="button" data-modal-target="editMobilModal" data-modal-show="editMobilModal" class="font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white hover:underline hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">Edit Data</a>
                            
                            <!-- Remove toggle -->
                            <button type="button" class="font-medium border-2 border-white p-2 rounded-sm bg-red-500 text-white hover:underline hover:text-red-500 hover:bg-transparent hover:border-red-500 hover:cursor-pointer">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            
            {{-- == MODAL EDIT == --}}
            <div id="editMobilModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-3xl max-h-full">
                    <!-- Modal content -->
                    <form class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Edit Produk
                            </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div class="grid grid-cols-6 gap-6">

                                {{-- -- Nama Produk --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                                {{-- -- == Dropdown Jenis --}}
                                <div class="justify- col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
                                    <button id="dropdownJenisButton" data-dropdown-toggle="dropdownJenis" class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 justify-between" type="button">
                                        <span class="sr-only">Action button</span>
                                        Jenis
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                    {{-- <!-- Dropdown menu --> --}}
                                    <div id="dropdownJenis" class="w-xs z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 pb-4">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluarga</a>
                                            </li>
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jelajah</a>
                                            </li>
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jarak Dekat</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- -- Model--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model</label>
                                    <input type="email" name="email" id="email" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambal Ban" required="">
                                </div>

                                {{-- -- Warna--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                                {{-- -- == Dropdown Kategori--}}
                                <div class="justify- col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                    <button id="dropdownKategoriButton" data-dropdown-toggle="dropdownKategori" class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 justify-between" type="button">
                                        <span class="sr-only">Action button</span>
                                        Kategori
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                    {{-- <!-- Dropdown menu --> --}}
                                    <div id="dropdownKategori" class="w-xs z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 pb-4">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SUVs</a>
                                            </li>
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sedan</a>
                                            </li>
                                            <li class="\border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Performance</a>
                                            </li>
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Electerified</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                             {{-- -- == Dropdown Tipe--}}
                                <div class="justify- col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
                                    <button id="dropdownTipeButton" data-dropdown-toggle="dropdownTipe" class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 justify-between" type="button">
                                        <span class="sr-only">Action button</span>
                                        Tipe
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                    {{-- <!-- Dropdown menu --> --}}
                                    <div id="dropdownTipe" class="w-xs z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 pb-4">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Terbaru</a>
                                            </li>
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lama</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                             {{-- -- Tahun Produksi--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Produksi</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                             {{-- -- == Dropdown Transmisi--}}
                                <div class="justify- col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transmisi</label>
                                    <button id="dropdownTransmisiButton" data-dropdown-toggle="dropdownTransmisi" class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 justify-between" type="button">
                                        <span class="sr-only">Action button</span>
                                        Transmisi
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                    {{-- <!-- Dropdown menu --> --}}
                                    <div id="dropdownTransmisi" class="w-xs z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 pb-4">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manual</a>
                                            </li>
                                            <li class="border-b-1 border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Automatic</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                             {{-- -- Kapasitas mesin--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas Mesin</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                             {{-- -- Tenaga--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tenaga</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                            {{-- Dropdown Kursi --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kursi</label>
                                    
                                    <button 
                                    id="dropdownKursiButton" 
                                    data-dropdown-toggle="dropdownKursi" 
                                    data-dropdown-placement="bottom"
                                    class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 justify-between" 
                                    type="button"
                                    >
                                        <span class="sr-only">Action button</span>
                                        Kursi
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>

                                    {{-- Dropdown menu --}}
                                    <div id="dropdownKursi" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownKursiButton">
                                            <li class="border-b border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2</a>
                                            </li>
                                            <li class="border-b border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">4</a>
                                            </li>
                                            <li class="border-b border-gray-400 mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">8</a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">14</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                             {{-- -- Fitur--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fitur</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                             {{-- -- Deskripsi--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                </div>

                             {{-- -- Harga--}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                    <input type="number" name="phone-number" id="phone-number" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambalban123" required="">
                                </div>
                            </div>


                             {{-- -- Foto Produk--}} 
                                <div class="flex items-center justify-center w-full">
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