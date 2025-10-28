<x-layout-dasar :title="$title">
    <!-- BANNER -->
    <div class="relative w-full">
      <img
      class="h-auto max-w-full object-cover"
      src="img/Showroom_Live/Banner Showroom Live.png"
      alt="Banner Jaminan"
    />

        <!-- SUB-HEAD -->
  <div class="bg-[var(--bg-primary)] py-16">
    <div class="max-w-6xl items-center grid grid-cols-1 sm:grid-cols-2 md:grid-cols-[1fr_2fr] gap-8 sm:gap-4 mx-auto px-10">
  
    <div class="flex items-start justify-start md:justify-center md:items-center">
        <h1 class="text-left text-white bg-[var(--bg-primary)]  font-bold text-4xl">Virtual showroom. <br> Real-time answers.</h1> 
    </div>
    <div class="flex items-start justify-center md:justify-center md:items-center">
        <p class="text-justify text-white bg-[var(--bg-primary)] text-sm">Every guided tour is hosted by our product specialists who'll show you every detail, like checking out the interior, popping the trunk, using the touchscreen—even demonstrating the latest accessories. Ask them a question in real-time, or just sit back and watch. Tune in as we showcase three different vehicles each week.</p> 
    </div>
</div>
</div>


  <x-head-grid>
    <x-slot:hg_slot>Contoh</x-slot:hg_slot>
    <x-slot:slot_desc>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, aliquam.
    </x-slot:slot_desc>
  </x-head-grid>


  {{-- #GRID LAYOUT --}}
  <div class="pt-8 md:pt-14 content-section mb-16">
  <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
    <x-showroom-live-card image_live="img/Showroom_Live/Stargazer.svg" nama_live="2025 STARGAZER" live_desc="2025 Stargazer Live Review" />
    <x-showroom-live-card image_live="img/Showroom_Live/SantaCruz.svg" nama_live="2025 SANTA CRUZ" live_desc="2025 Santa Cruz Live Review" />
    <x-showroom-live-card image_live="img/Showroom_Live/Ioniq.svg" nama_live="MY25 IONIQ 5" live_desc="MY25 Ioniq 5 Live Review" />
    {{-- ------ --}}
    <x-showroom-live-card image_live="img/Showroom_Live/Stargazer.svg" nama_live="2025 STARGAZER" live_desc="2025 Stargazer Live Review" />
    <x-showroom-live-card image_live="img/Showroom_Live/SantaCruz.svg" nama_live="2025 SANTA CRUZ" live_desc="2025 Santa Cruz Live Review" />
    <x-showroom-live-card image_live="img/Showroom_Live/Ioniq.svg" nama_live="MY25 IONIQ 5" live_desc="MY25 Ioniq 5 Live Review" />
  </div>
  </div>

  <x-footer></x-footer>
  
</x-layout-dasar>