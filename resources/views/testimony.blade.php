<x-layout-dasar :title="$title">
      <!-- BANNER -->
    <div class="relative w-full">
      <img
      class="h-auto max-w-full object-cover"
      src="img/Testimoni/Banner.png"
      alt="Banner Testimoni"
    />
    <x-banner-text bt1="Hyundai,"  bt2="Testimony" bt3="Where Every Experience Speaks for Itself"></x-banner-text>
    </div>
    <!-- BANNER -->

    <!-- SUB-HEAD [GRID] -->
    <div class="bg-[var(--bg-primary)]">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-24 py-10">
      <!-- Grid 1 -->
      <div class="flex flex-col items-center  mx-4">
        <div class="flex flex-col justify-center text-white">
          <div class="flex items-center">
            <h3 class="text-center text-5xl md:text-7xl font-black justify-start mb-4">500M</h3> <h3 class="text-center text-5xl font-black justify-center mb-4">+</h3>
          </div>
          <p class="text-center justify-center text-sm sm:text-md md:text-lg">Buyers Feel Satisfied</p>
        </div>
      </div>

      <!-- Grid 2 -->
      <div class="flex flex-col items-center  mx-4">
        <div class="flex flex-col justify-center text-white">
          <div class="flex items-center">
            <h3 class="text-center text-5xl md:text-7xl font-black justify-start mb-4">100M</h3> <h3 class="text-center text-5xl font-black justify-center mb-4">+</h3>
          </div>
          <p class="text-center justify-center text-sm sm:text-md md:text-lg">Drivers Are Served</p>
        </div>
      </div>

      <!-- Grid 3 -->
      <div class="flex flex-col items-center  mx-4">
        <div class="flex flex-col justify-center text-white">
          <div class="flex items-center">
            <h3 class="text-center text-5xl md:text-7xl font-black justify-start mb-4">50M</h3> <h3 class="text-center text-5xl font-black justify-center mb-4">+</h3>
          </div>
          <p class="text-center justify-center text-sm sm:text-md md:text-lg">Satisfactory Repair</p>
        </div>
      </div>
    </div>
    </div>

  <x-head-grid>
    <x-slot:hg_slot>Your Confidence, Our Priority</x-slot:hg_slot>
    <x-slot:slot_desc>
      Our commitment to quality ensures every customer enjoys a smooth and worry-free experience.
    </x-slot:slot_desc>
  </x-head-grid>

  <div class="grid grid-cols-1 gap-4 mb-18">
    {{-- Baris 1 --}}
    <div class="justify-center grid grid-cols-2 lg:grid-cols-4 gap-4 content-section md:py-6">
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Abdul Adidi" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Gejrot" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Bandung" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Walik" /> {{-- ==> Foto 1 --}}
    </div>

    {{-- Baris 2 --}}
    <div class="justify-center grid grid-cols-2 lg:grid-cols-4 gap-4 content-section md:py-6">
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Abdul Adidi" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Gejrot" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Bandung" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Walik" /> {{-- ==> Foto 1 --}}
    </div>

    {{-- Baris 3 --}}
    <div class="justify-center grid grid-cols-2 lg:grid-cols-4 gap-4 content-section md:py-6">
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Abdul Adidi" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Gejrot" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Bandung" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Walik" /> {{-- ==> Foto 1 --}}
    </div>

    {{-- Baris 4 --}}
    <div class="justify-center grid grid-cols-2 lg:grid-cols-4 gap-4 content-section md:py-6">
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Abdul Adidi" /> {{-- ==> Foto 1 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Gejrot" /> {{-- ==> Foto 2 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Bandung" /> {{-- ==> Foto 3 --}}
      <x-testimony-grid image_testi="img/Testimoni/dummy.jpg" nama_grid="Tahu Walik" /> {{-- ==> Foto 4 --}}
    </div>
  </div>

  <x-footer></x-footer>

</x-layout-dasar>