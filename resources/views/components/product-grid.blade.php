@props(['image_product', 'nama_product', 'category', 'year', 'type', 'price'])
<!-- GRID LAYOUT #1 -->
      <!-- Product -->
      <div class="w-full h-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="w-full p-4 rounded-t-lg" src="{{ $image_product }}" alt="{{ $nama_product }}" />
        </a>
            <div class="px-5 pb-5">
                <div class="flex flex-col h-full">
                    <div class="relative flex-col">
                        <a href="#">
                            <h5 class="!text-base sm:!text-xl md:!text-3xl md:mt-2 font-bold tracking-tight text-gray-900 dark:text-white">{{ $nama_product }}</h5>
                        </a>
                        <p class="text-[10px] sm:hidden font-normal mb-2 mt-3 ps-2"> {{ $category }}</p>
                        <p class="hidden sm:block text-xs md:text-sm font-normal mb-6 mt-3 ps-2">{{ $category }} <br> - {{ $year }} <br> - {{ $type }}</p>

                        <div class="bottom-0 mt-4 flex flex-col lg:flex-row gap-4 lg:items-center justify-between">
                            <span class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white">{{ $price }}</span>
                            <a href="#" class="text-white flex flex-shrink-0 items-center justify-center bg-[#003082] hover:bg-[#00173e] active:bg-[#00173e] focus:ring-4 focus:outline-none min-w-fit focus:ring-blue-300 font-medium rounded-sm text-[9px] sm:text-xs  px-2 py-1.5 md:px-4 md:py-2 text-center dark:bg-white dark:hover:bg-gray-400 dark:focus:ring-blue-800">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>