@props(['image_live', 'nama_live', 'live_desc'])

<div class="relative w-full hover:scale-101 active:scale-101 transition-all hover:drop-shadow-gray-950">
    <img class="h-auto max-w-full rounded-md object-cover" src="{{ $image_live }}" alt="{{ $nama_live }}">

    <div class="absolute inset-0 flex flex-col justify-end z-10 px-2 md:px-4 py-2 md:py-8 text-white">
        <div class="flex flex-row !text-sm sm:!text-lg md:!text-xl lg:!text-27xl mb-1 md:mb-2">
          <h3 class="font-semibold">{{ $nama_live }}</h3>
        </div>
        <p class="justify-start text-[10px] sm:text-xs md:text-sm lg:text-base">{{ $live_desc }}</p>
    </div>
</div>