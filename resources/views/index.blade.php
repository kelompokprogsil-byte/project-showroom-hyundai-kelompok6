<x-layout-dasar :title="$title">
  {{-- === HERO SECTION === --}}
  <section class="relative w-full h-[500px] sm:h-[640px] md:h-[740px] overflow-hidden">
    <video 
    class="absolute top-0 left-0 w-full h-full object-cover object-center scale-150" 
    autoplay 
    muted 
    loop 
    playsinline
  >
    <source src="img/image_darrel/STARGAZER Cartenz si Paling Bikin Nyaman  Smart Cruise Control with Stop & Go - Hyundai Motors Indonesia (1080p, h264).mp4" type="video/mp4" />
    Browser kamu tidak mendukung video tag.
  </video>

  <div class="absolute inset-0 bg-black/60"></div>
    <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center text-center text-white animate-fadeIn">
      <h1 class="!text-4xl sm:!text-5xl md:!text-6xl lg:!text-7xl font-semibold mb-3">Future of Driving</h1>
      <p class="text-sm sm:text-base md:text-lg font-light">Redefining Innovation, Style, and Performance.</p>
    </div>
  </section>

  {{-- === CARD === --}}
  <section class="px-6 md:px-12 lg:px-20 py-8 mt-12 bg-white">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <div class="relative group overflow-hidden rounded-lg shadow-lg">
      <img src="img/image_darrel/car1.png" alt="IONIQ 5" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
      <div class="absolute bottom-[289px] left-6 text-white z-10">
        <h2 class="text-2xl font-bold mb-2">IONIQ 5</h2>
        <p class="text-sm mb-4 max-w-xs leading-snug">
          a standout electric vehicle (EV) that combines cutting-edge technology, impressive performance, and sleek design.
        </p>
        <button class="border border-white px-5 py-2 text-sm font-medium hover:bg-white/35 backdrop-blur-sm hover:text-black transition">
          Learn More
        </button>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="relative group overflow-hidden rounded-lg shadow-lg">
      <img src="img/image_darrel/car2.png" alt="Elantra" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
      <div class="absolute bottom-16 left-6 text-white z-10">
        <h2 class="text-2xl font-bold mb-2">Elantra</h2>
        <p class="text-sm mb-4 max-w-xs leading-snug">
          dynamic design themes, thinner LED daytime running lights. Made for drivers who want style, efficiency, and personality in one sleek sedan.
        </p>
        <button class="border border-white px-5 py-2 text-sm font-medium hover:bg-white/35 backdrop-blur-sm hover:text-black transition">
          Learn More
        </button>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="relative group overflow-hidden rounded-lg shadow-lg">
      <img src="img/image_darrel/car3.png" alt="IONIQ 6" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
      <div class="absolute bottom-[267px] left-6 text-white z-10">
        <h2 class="text-2xl font-bold mb-2">IONIQ 6</h2>
        <p class="text-sm mb-4 max-w-xs leading-snug">
          Built for drivers who live for speed and style. The refreshed IONIQ 6 combines a sport-tuned dual-motor system with aerodynamic design.
        </p>
        <button class="border border-white px-5 py-2 text-sm font-medium hover:bg-white/35 backdrop-blur-sm hover:text-black transition">
          Learn More
        </button>
      </div>
    </div>

  </div>
  </section>
  
  {{-- BROWSE BY TYPE --}}
  <section class="py-4  bg-transparent text-center">
        <x-head-sect>
            <x-slot:hs_slot>Browse by Type</x-slot:hs_slot>
            <<x-slot:slot_sect_desc>Search by type</x-slot:slot_sect_desc>
        </x-head-sect>
        
        {{-- <!-- GRID-DESKTOP --> --}}
        <div class="hidden md:block">
          <div class="flex flex-col justify-between items-center gap-6 px-6 md:px-20 mt-8 py-6">
          {{-- ----- Baris 1 ----- --}}
          <div class="flex flex-row gap-8 w-full items-center justify-center">
            <!-- CARD 1 -->
            <a href="/product" class="group rounded-2xl relative shadow-md hover:shadow-xl active:shadow-xl transition duration-300 overflow-hidden items-center justify-center">
              <img src="img/image_darrel/browse-type/type-electrified.svg" alt="Electrified" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105 rounded-2xl">
              <div class="absolute inset-0 flex flex-col justify-end mb-10 md:mb-0 ms-8 md:ms-0 sm:justify-center z-10 text-left text-white">
                <h3 class="text-2xl font-bold">Electrified</h3>
                <p class="text-sm font-medium opacity-90">Hyundai EV</p>
                <p class="text-sm opacity-80">Environmentally Friendly Electric Cars</p>
              </div>
            </a>

            <!-- CARD 2 -->
            <a href="/product" class="group rounded-2xl relative shadow-md hover:shadow-xl active:shadow-xl transition duration-300 overflow-hidden items-center justify-center">
              <img src="img/image_darrel/browse-type/type-suv.svg" alt="Electrified" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105 rounded-2xl">
              <div class="absolute inset-0 flex flex-col justify-end mb-10 md:mb-0 ms-8 md:ms-0 sm:justify-center z-10 text-left text-white">
                <h3 class="text-2xl font-bold">SUVs</h3>
                <p class="text-sm font-medium opacity-90">Hyundai Sport Utility Vehicle</p>
                <p class="text-sm opacity-80">All-Terrain Utility Vehicle</p>
              </div>
            </a>
        </div>

        {{-- ----- Baris 2 ----- --}}
          <div class="flex flex-row gap-8 w-full items-center justify-center">
            <!-- CARD 3 -->
            <a href="/product" class="group rounded-2xl relative shadow-md hover:shadow-xl active:shadow-xl transition duration-300 overflow-hidden items-center justify-center">
              <img src="img/image_darrel/browse-type/type-sedan.svg" alt="Electrified" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105 rounded-2xl">
              <div class="absolute inset-0 flex flex-col justify-end mb-10 md:mb-0 ms-8 md:ms-0 sm:justify-center z-10 text-left text-white">
                <h3 class="text-2xl font-bold">Sedan</h3>
                <p class="text-sm font-medium opacity-90">Hyundai Sedan</p>
                <p class="text-sm opacity-80">Standard performance elegant car</p>
              </div>
            </a>

            <!-- CARD 4 -->
            <a href="/product" class="group rounded-2xl relative shadow-md hover:shadow-xl active:shadow-xl transition duration-300 overflow-hidden items-center justify-center">
              <img src="img/image_darrel/browse-type/type-performance.svg" alt="Electrified" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105 rounded-2xl">
              <div class="absolute inset-0 flex flex-col justify-end mb-10 md:mb-0 ms-8 md:ms-0 sm:justify-center z-10 text-left text-white">
                <h3 class="text-2xl font-bold">SUVs</h3>
                <p class="text-sm font-medium opacity-90">Hyundai High-Performance Sedan</p>
                <p class="text-sm opacity-80">Mobil  Sedan Elegan dengan Performa Tinggi</p>
              </div>
            </a>
          </div>
        </div>
     </div>

      {{-- <!-- GRID-MOBILE --> --}}
      <div class="md:hidden">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6 md:px-20 mt-4 py-6">
          
          <!-- CARD 1 -->
          <a href="/product" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl active:shadow-xl transition duration-300">
            <img src="img/image_darrel/browse-type/type-electrified.svg" alt="Electrified" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105  rounded-2xl">
            <div class="absolute bottom-4 left-4 text-left text-white">
              <h3 class="text-xl font-bold">Electrified</h3>
              <p class="text-sm font-medium opacity-90">EV</p>
              <p class="text-sm opacity-80">Mobil Listrik Ramah Lingkungan</p>
            </div>
          </a>

          <!-- CARD 2 -->
          <a href="/product" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl active:shadow-xl transition duration-300">
            <img src="img/image_darrel/browse-type/type-suv.svg" alt="SUVs" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105  rounded-2xl">
            <div class="absolute bottom-4 left-4 text-left text-white">
              <h3 class="text-xl font-bold">SUVs</h3>
              <p class="text-sm font-medium opacity-90">Hyundai Sport Utility Vehicle</p>
              <p class="text-sm opacity-80">Mobil Serbaguna Segala Medan</p>
            </div>
          </a>

          <!-- CARD 3 -->
          <a href="/product" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl active:shadow-xl transition duration-300">
            <img src="img/image_darrel/browse-type/type-sedan.svg" alt="Sedan" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105  rounded-2xl">
            <div class="absolute bottom-4 left-4 text-left text-white">
              <h3 class="text-xl font-bold">Sedan</h3>
              <p class="text-sm font-medium opacity-90">Hyundai Sedan</p>
              <p class="text-sm opacity-80">Mobil Elegan performa standar</p>
            </div>
          </a>

          <!-- CARD 4 -->
          <a href="/product" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl active:shadow-xl transition duration-300">
            <img src="img/image_darrel/browse-type/type-performance.svg" alt="Performance" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105 group-active:scale-105  rounded-2xl">
            <div class="absolute bottom-4 left-4 text-left text-white">
              <h3 class="text-xl font-bold">Performance</h3>
              <p class="text-sm font-medium opacity-90">High-Performance Sedan</p>
              <p class="text-sm opacity-80">Mobil Elegan dengan Performa Tinggi</p>
            </div>
          </a>
        </div>
      </div>
</section>

  {{-- FIND DEALER --}}
        <x-head-sect>
            <x-slot:hs_slot>Search Dealer</x-slot:hs_slot>
            <x-slot:slot_sect_desc>Find a Dealer Near You</x-slot:slot_sect_desc>
        </x-head-sect>

        <x-map-section></x-map-section>

  {{-- SHOWROOM LIVE --}}
  <section class="relative w-full h-[400px] md:h-[600px] bg-white flex justify-center pt-20">
  <div class="relative w-[90%] md:w-[85%] h-full bg-black overflow-hidden">
    
    <!-- Background Image -->
    <img 
      src="img/image_darrel/Rectangle7.png" 
      alt="Hyundai Palisade" 
      class="absolute inset-0 w-full h-full object-cover"
    >

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Logo -->
    <div class="absolute top-0 left-0 p-6 z-20">
      <img src="img/image_darrel/Hsl.png" alt="Hyundai Showroom Live Logo" class="w-auto h-10 md:h-12">
    </div>
    
    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto h-full flex flex-col justify-center px-6 text-white">
      
      <!-- Headline -->
      <h1 class="text-xl sm:text-2xl md:text-4xl font-semibold mb-3 max-w-3.5xl leading-tight">
        See the latest Hyundai Models in our <br class="hidden md:block"> live Q&A show.
      </h1>

      <!-- Subheadline -->
      <p class="text-gray-200 mb-5 max-w-2.5xl text-xs sm:text-sm md:text-base">
        Watch Hyundai Showroom Live every Tuesday, Wednesday, and Thursday from 8am–12pm PT.
      </p>

      <!-- Button -->
      <a 
        href="/showroom_live"
        class="inline-block pl-[38px] py-1.5 border border-white text-white text-xs md:text-sm font-medium hover:bg-white/35 active:bg-white/35 backdrop-blur-sm hover:text-black active:text-black transition rounded-sm max-w-[178px]"
      >
        See vehicle <br> lineup
      </a>

    </div>
  </div>
</section>

  {{-- BLOG --}}
    <section class="py-5 bg-transparent text-center px-6 md:px-20 mb-20">
        <x-head-sect>
            <x-slot:hs_slot>Lastest Blog Post</x-slot:hs_slot>
            <x-slot:slot_sect_desc>Product Video Blog</x-slot:slot_sect_desc>
        </x-head-sect>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6 md:px-20 mt-8 py-6">
      <div class="bg-white shadow-md rounded-md overflow-hidden">
      <a href="#">
         <img src="img/image_darrel/Image (2).png" class="w-full h-52 object-cover hover:backdrop-blur-lg">
      </a>
        <div class="p-5 text-left">
          <p class="text-sm font-normal mb-2">2026 Hyundai Ioniq 9 First Drive: This Electric 3-Row SUV Does It All and really well</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-md overflow-hidden">
        <a href="#">
         <img src="img/image_darrel/Image (1).png" class="w-full h-52 object-cover">
        </a>
        <div class="p-5 text-left">
          <p class="text-sm font-normal mb-2">2025 Hyundai Elantra N DCT Test: The Most Fun for Under $40K?</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-md overflow-hidden">
         <a href="#">
          <img src="img/image_darrel/Image.png" class="w-full h-52 object-cover">
         </a>
        <div class="p-5 text-left">
          <p class="text-sm font-normal mb-2">2026 Hyundai Cars Changes and Updates: Hyper-Efficient Hybrids and a Rocketship EV</p>
        </div>
      </div>
    </div>
  </section>

  <x-footer></x-footer>
</x-layout-dasar>