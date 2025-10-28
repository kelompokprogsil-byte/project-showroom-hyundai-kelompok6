<x-layout-dasar :title="$title">

    <!-- BANNER -->
    <div class="relative w-full">
      <img
      class="h-auto max-w-full object-cover"
      src="img/Dealer/Banner.png"
      alt="Banner Dealer"
    />
    {{-- Banner Text --}}
    <div class="absolute inset-0 flex flex-col items-center justify-end mb-10 md:mb-0 ms-8 md:ms-0 sm:justify-center z-10  text-white">
            <div class=" flex flex-row text-2xl sm:text-3xl md:text-4xl lg:text-6xl md:px-24 mb-2">
                <h1 class="font-medium">Hyundai,</h1> <h1 class="font-semibold">Dealer</h1>
            </div>
            <p class="justify-start text-xs sm:text-sm md:text-lg md:px-24 md:mb-8">Hyundai, your close relative</p>

            <x-search-dealer></x-search-dealer>
        </div>
        </div>
    <!-- BANNER -->

    {{-- SECTION MAP --}}
    <div class="flex flex-col justify-center">
        <x-head-sect>
            <x-slot:hs_slot>Search Dealer</x-slot:hs_slot>
            <x-slot:slot_sect_desc>Find a Dealer Near You</x-slot:slot_sect_desc>
        </x-head-sect>

        <x-map-section></x-map-section>

        {{-- === LIST DEALER === --}}
        <x-head-sect>
            <x-slot:hs_slot>Dealer List</x-slot:hs_slot>
            <x-slot:slot_sect_desc> List of major Hyundai dealers in Indonesia </x-slot:slot_sect_desc>
        </x-head-sect>

        <center>
        <div class="mx-12 md:mx-24 md:mt-12 mb-4 md:mb-12 flex flex-col gap-12 sm:gap-8">
            <img class="hidden sm:block drop-shadow" aria-busy=""src="img/Dealer/Jakarta.svg" alt="Dealer List JKT">
            <img class="hidden sm:block drop-shadow" src="img/Dealer/DeTaBek.svg" alt="Dealer List DeTaBek">
            <img class="hidden sm:block drop-shadow" src="img/Dealer/Jawa.svg" alt="Dealer List Jawa">
            <img class="hidden sm:block drop-shadow" src="img/Dealer/Luar Jawa.svg" alt="Dealer List Luar Jawa">

            {{-- --- Mobile --- --}}
            <img class="sm:hidden drop-shadow" aria-busy=""src="img/Dealer/Jakarta-mobile.svg" alt="Dealer List JKT-mobile">
            <img class="sm:hidden drop-shadow" src="img/Dealer/DeTaBek-mobile.svg" alt="Dealer List DeTaBek-mobile">
            <img class="sm:hidden drop-shadow" src="img/Dealer/Jawa-mobile.svg" alt="Dealer List Jawa-mobile">
            <img class="sm:hidden drop-shadow" src="img/Dealer/Luar Jawa-mobile.svg" alt="Dealer List Luar Jawa-mobile">
        </div>
        </center>
    </div>
    

    <x-footer></x-footer>
</x-layout-dasar>