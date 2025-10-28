@props(['image_testi', 'nama_grid'])
      <div class="flex flex-col items-center py-6 px-4 md:px-8 rounded-sm bg-white drop-shadow-gray-5200 drop-shadow-xl">
        <div class="h-auto max-w-full rounded-lg mb-4">
          <img src="{{ $image_testi }}" alt="{{ $nama_grid }}">
        </div>
        <div class="flex flex-col">
          <h3 class="text-start text-xs md:text-xl font-semibold justify-start">{{ $nama_grid }}</h3>
        </div>
      </div>