@props(['image_career', 'nama_career', 'desc_career'])
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg " src="{{ $image_career }}" alt="{{ $nama_career }}" />
            </a>
            <div class="p-5">
                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $nama_career }}</h5>
                <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">{{ $desc_career }}</p>
            </div>
        </div>