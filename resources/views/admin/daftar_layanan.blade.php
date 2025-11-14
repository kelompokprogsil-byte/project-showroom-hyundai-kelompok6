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

    <title>Daftar Layanan</title>
</head>
<body>
    <x-sidebar-admin></x-sidebar-admin>

    {{-- ===== TABEL ===== --}}
    <div class="p-4 sm:ml-64 mt-18 sm:mt-8 mb-12">
        <div class="flex te mb-8 rounded-sm  dark:bg-gray-800">
            <h1 class="text-3xl font-bold">Daftar Layanan</h1>
        </div>

        {{-- === Search & Dropdown === --}}
        <div class="flex items-center justify-center gap-8 flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
            
            {{-- === Filter === --}}
            <div>
                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                    Action
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                {{-- <!-- Dropdown menu --> --}}
                <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ascending (A-Z)</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Descending (Z-A)</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Terbaru</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Terlama</a></li>
                    </ul>
                </div>
            </div>

            {{-- === Search === --}}
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Cari layanan...">
            </div>

            {{-- === Tambah Data === --}}
            <button type="button" data-modal-target="editLayananModal" data-modal-show="editLayananModal" class="text-sm font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white transition hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">+ Tambah Data</button>
        </div>

        {{-- === TABLE === --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                {{-- -- Table Head -- --}}
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">ID Layanan</th>
                        <th class="px-6 py-3">Nama Layanan</th>
                        <th class="px-6 py-3">Deskripsi</th>
                        <th class="px-6 py-3">Kebutuhan Alamat</th>
                        <th class="px-6 py-3">Kebutuhan Tanggal</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>

                {{-- -- Table Body -- --}}
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Servis Berkala</td>
                        <td class="px-6 py-4">Pemeriksaan rutin dan penggantian oli</td>
                        <td class="px-6 py-4">Ya</td>
                        <td class="px-6 py-4">Tidak</td>
                        <td class="px-6 py-4 flex flex-col gap-3">
                            <a href="#" type="button" data-modal-target="editLayananModal" data-modal-show="editLayananModal" class="font-medium border-2 border-white p-2 rounded-sm bg-[var(--bg-secondary)] text-white hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900">Edit Layanan</a>
                            <button type="button" class="font-medium border-2 border-white p-2 rounded-sm bg-red-500 text-white hover:text-red-500 hover:bg-transparent hover:border-red-500">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            {{-- == MODAL EDIT == --}}
            <div id="editLayananModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden items-center justify-center w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-3xl max-h-full">
                    <form class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Edit Layanan</h3>
                            <button type="button" class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editLayananModal">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>

                        <div class="p-6 space-y-6">
                            <div class="grid grid-cols-6 gap-6">

                                {{-- -- Nama Layanan --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Layanan</label>
                                    <input type="text" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:text-white" placeholder="Servis Berkala">
                                </div>

                                {{-- -- Deskripsi --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                    <input type="text" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:text-white" placeholder="Pemeriksaan rutin dan penggantian oli">
                                </div>

                            {{-- -- Kebutuhan Alamat -- --}}
                            <div class="justify- col-span-6 sm:col-span-3">
                                <label for="kebutuhan_alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kebutuhan Alamat</label>

                                {{-- Tombol Dropdown --}}
                                <button id="dropdownAlamatButton" data-dropdown-toggle="dropdownAlamat"
                                    class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 justify-between"
                                    type="button">
                                    <span class="sr-only">Pilih Kebutuhan Alamat</span>
                                    Pilih Kebutuhan Alamat
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                {{-- Menu Dropdown --}}
                                <div id="dropdownAlamat"
                                    class="w-xs z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 pb-4">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAlamatButton">
                                        <li class="border-b border-gray-400 mx-3">
                                            <a href="#" data-value="Ya"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Ya
                                            </a>
                                        </li>
                                        <li class="mx-3">
                                            <a href="#" data-value="Tidak"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Tidak
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                {{-- Hidden input untuk menyimpan nilai terpilih --}}
                                <input type="hidden" name="kebutuhan_alamat" id="kebutuhan_alamat_value">
                            </div>

                            {{-- -- Kebutuhan Tanggal -- --}}
                            <div class="justify- col-span-6 sm:col-span-3">
                                <label for="kebutuhan_tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kebutuhan Tanggal</label>

                                {{-- Tombol Dropdown --}}
                                <button id="dropdownTanggalButton" data-dropdown-toggle="dropdownTanggal"
                                    class="w-full inline-flex items-center text-gray-500 bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-sm text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 justify-between"
                                    type="button">
                                    <span class="sr-only">Pilih Kebutuhan Tanggal</span>
                                    Pilih Kebutuhan Tanggal
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                {{-- Menu Dropdown --}}
                                <div id="dropdownTanggal"
                                    class="w-xs z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 pb-4">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTanggalButton">
                                        <li class="border-b border-gray-400 mx-3">
                                            <a href="#" data-value="Ya"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Ya
                                            </a>
                                        </li>
                                        <li class="mx-3">
                                            <a href="#" data-value="Tidak"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Tidak
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                {{-- Hidden input untuk menyimpan nilai terpilih --}}
                                <input type="hidden" name="kebutuhan_tanggal" id="kebutuhan_tanggal_value">
                            </div>

                            </div>

                            {{-- -- Footer --}}
                            <div class="flex items-center p-6 space-x-3 border-t border-gray-200 dark:border-gray-600">
                                <button type="submit" class="text-white bg-[var(--bg-secondary)] border-2 border-white hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900 font-medium rounded-lg text-sm px-5 py-2.5">Save all</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
