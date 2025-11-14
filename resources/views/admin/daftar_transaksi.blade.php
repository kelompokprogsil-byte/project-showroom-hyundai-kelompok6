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

    <title>Daftar Transaksi</title>
</head>
<body>
    <x-sidebar-admin></x-sidebar-admin>

    {{-- ===== TABEL ===== --}}
    <div class="p-4 sm:ml-64 mt-18 sm:mt-8 mb-12">
        <div class="flex te mb-8 rounded-sm  dark:bg-gray-800">
            <h1 class="text-3xl font-bold">Daftar Transaksi</h1>
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
                <button method="POST" type="button" data-modal-target="editTransaksiModal" data-modal-show="editTransaksiModal" class= "text-sm font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white transition hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">+ Tambah Data</button>
            </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

{{-- === Tabel === --}}
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    {{-- -- Table Head -- --}}
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 ">
                Id_Transaksi
            </th>
            <th scope="col" class="px-6 py-3">
                Id_User
            </th>
            <th scope="col" class="px-6 py-3">
                Id_Layanan
            </th>
            <th scope="col" class="px-6 py-3">
                Id_Kategori
            </th>
            <th scope="col" class="px-6 py-3">
                Id_Dealer
            </th>
            <th scope="col" class="px-6 py-3">
                Id_Produk
            </th>
            <th scope="col" class="px-6 py-3">
                Metode_Pembayaran
            </th>
            <th scope="col" class="px-6 py-3">
                Jenis_Service
            </th>
            <th scope="col" class="px-6 py-3">
                Alamat_Rumah
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Tanggal_Transaksi
            </th>
            <th scope="col" class="px-6 py-3">
                Tanggal_Janji
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>

    {{-- -- Table Body -- --}}
    <tbody>
        {{-- -- Baris 1 -- --}}
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
            {{-- -- Id_Transaksi -- --}}
            <td class="px-6 ">
                TRX001
            </td>

            {{-- -- Id_User -- --}}
            <td class="px-6 py-4">
                USR101
            </td>

            {{-- -- Id_Layanan -- --}}
            <td class="px-6 py-4">
                LYN002
            </td>

            {{-- -- Id_Kategori -- --}}
            <td class="px-6 py-4">
                KTG01
            </td>

            {{-- -- Id_Dealer -- --}}
            <td class="px-6 py-4">
                DLR09
            </td>

            {{-- -- Id_Produk -- --}}
            <td class="px-6 py-4">
                PRD88
            </td>

            {{-- -- Metode_Pembayaran -- --}}
            <td class="px-6 py-4">
                Transfer Bank
            </td>

            {{-- -- Jenis_Service -- --}}
            <td class="px-6 py-4">
                Service Berkala
            </td>

            {{-- -- Alamat_Rumah -- --}}
            <td class="px-6 py-4">
                Jl. Melati No. 45, Jakarta Selatan
            </td>

            {{-- -- Status -- --}}
            <td class="px-6 py-4">
                Selesai
            </td>

            {{-- -- Tanggal_Transaksi -- --}}
            <td class="px-6 py-4">
                2025-10-20
            </td>

            {{-- -- Tanggal_Janji -- --}}
            <td class="px-6 py-4">
                2025-10-25
            </td>

            {{-- -- Action EDIT & REMOVE -- --}}
            <td class="px-6 py-4 flex flex-col gap-3 items-start justify-center">
                <!-- Edit Modal toggle -->
                <a href="#" type="button" data-modal-target="editTransaksiModal" data-modal-show="editTransaksiModal" class="font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white hover:underline hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">Edit Transaksi</a>
                
                <!-- Remove toggle -->
                <button type="button" data-modal-target="editTransaksiModal" data-modal-show="editTransaksiModal" class="font-medium border-2 border-white p-2 rounded-sm bg-red-500 text-white hover:underline hover:text-red-500 hover:bg-transparent hover:border-red-500 hover:cursor-pointer">Remove</button>
            </td>
        </tr>
    </tbody>
</table>


{{-- == MODAL EDIT == --}}
<div id="editTransaksiModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <form class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Transaksi
                </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editTransaksiModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            </div>

            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-6 gap-6">
                    {{-- -- Id User -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="id_user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_User</label>
                        <input type="text" name="id_user" id="id_user" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="USR101" readonly required="">
                    </div>

                    {{-- -- Id Layanan -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="id_layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Layanan</label>
                        <input type="text" name="id_layanan" id="id_layanan" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="LYN002" readonly required="">
                    </div>

                    {{-- -- Id Kategori -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="id_kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Kategori</label>
                        <input type="text" name="id_kategori" id="id_kategori" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="KTG01" readonly required="">
                    </div>

                    {{-- -- Id Dealer -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="id_dealer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Dealer</label>
                        <input type="text" name="id_dealer" id="id_dealer" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="DLR09" readonly required="">
                    </div>

                    {{-- -- Id Produk -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="id_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Produk</label>
                        <input type="text" name="id_produk" id="id_produk" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="PRD88" readonly required="">
                    </div>

                    {{-- -- Metode Pembayaran -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="metode_pembayaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode Pembayaran</label>

                        {{-- Tombol Dropdown --}}
                        <button id="dropdownMetodePembayaranButton" data-dropdown-toggle="dropdownMetodePembayaran" type="button"
                            class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500 dark:hover:bg-gray-700 dark:hover:border-gray-500 dark:focus:ring-gray-700 justify-between">
                            <span class="sr-only">Pilih Metode Pembayaran</span>
                            Pilih Metode Pembayaran
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        {{-- Menu Dropdown --}}
                        <div id="dropdownMetodePembayaran"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMetodePembayaranButton">
                                <li class="border-b border-gray-200 dark:border-gray-600 mx-3">
                                    <a href="#" data-value="Transfer Bank"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Transfer Bank</a>
                                </li>
                                <li class="border-b border-gray-200 dark:border-gray-600 mx-3">
                                    <a href="#" data-value="Cash"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cash</a>
                                </li>
                                <li class="mx-3">
                                    <a href="#" data-value="E-Wallet"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">E-Wallet</a>
                                </li>
                            </ul>
                        </div>

                        {{-- Hidden input untuk menyimpan nilai terpilih --}}
                        <input type="hidden" name="metode_pembayaran" id="metode_pembayaran_value">
                    </div>

                    {{-- -- Jenis Service -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="jenis_service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Service</label>

                        {{-- Tombol Dropdown --}}
                        <button id="dropdownJenisServiceButton" data-dropdown-toggle="dropdownJenisService" type="button"
                            class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500 dark:hover:bg-gray-700 dark:hover:border-gray-500 dark:focus:ring-gray-700 justify-between">
                            <span class="sr-only">Pilih Jenis Service</span>
                            Pilih Jenis Service
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        {{-- Menu Dropdown --}}
                        <div id="dropdownJenisService"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownJenisServiceButton">
                                <li class="border-b border-gray-200 dark:border-gray-600 mx-3">
                                    <a href="#" data-value="Service Berkala"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Service
                                        Berkala</a>
                                </li>
                                <li class="border-b border-gray-200 dark:border-gray-600 mx-3">
                                    <a href="#" data-value="Perbaikan Umum"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Perbaikan
                                        Umum</a>
                                </li>
                                <li class="border-b border-gray-200 dark:border-gray-600 mx-3">
                                    <a href="#" data-value="Klaim Garansi"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Klaim
                                        Garansi</a>
                                </li>
                                <li class="mx-3">
                                    <a href="#" data-value="Layanan Darurat"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                        Darurat</a>
                                </li>
                            </ul>
                        </div>

                        {{-- Hidden input untuk menyimpan nilai terpilih --}}
                        <input type="hidden" name="jenis_service" id="jenis_service_value">
                    </div>

                    {{-- -- Alamat Rumah -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="alamat_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah</label>
                        <input type="text" name="alamat_rumah" id="alamat_rumah" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Jl. Melati No. 45" required="">
                    </div>

                    {{-- -- Status -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>

                        {{-- Tombol Dropdown --}}
                        <button id="dropdownStatusButton" data-dropdown-toggle="dropdownStatus" type="button"
                            class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500 dark:hover:bg-gray-700 dark:hover:border-gray-500 dark:focus:ring-gray-700 justify-between">
                            <span class="sr-only">Pilih Status</span>
                            Pilih Status
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        {{-- Menu Dropdown --}}
                        <div id="dropdownStatus"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownStatusButton">
                                <li class="border-b border-gray-200 dark:border-gray-600 mx-3">
                                    <a href="#" data-value="Selesai"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Selesai</a>
                                </li>
                                <li class="border-b border-gray-200 dark:border-gray-600 mx-3">
                                    <a href="#" data-value="Proses"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Proses</a>
                                </li>
                                <li class="mx-3">
                                    <a href="#" data-value="Batal"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Batal</a>
                                </li>
                            </ul>
                        </div>

                        {{-- Hidden input untuk menyimpan nilai terpilih --}}
                        <input type="hidden" name="status" id="status_value" required>
                    </div>


                    {{-- -- Tanggal Transaksi -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="tanggal_transaksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Transaksi</label>
                        <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" required="">
                    </div>

                    {{-- -- Tanggal Janji -- --}}
                    <div class="col-span-6 sm:col-span-3">
                        <label for="tanggal_janji" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Janji</label>
                        <input type="date" name="tanggal_janji" id="tanggal_janji" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white" required="">
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