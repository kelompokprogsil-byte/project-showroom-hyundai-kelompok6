<x-layout-dasar :title="$title">
  <!-- BANNER -->
    <div class="relative w-full">
      <img
      class="h-auto max-w-full object-cover"
      src="img/Services/Banner.png"
      alt="Banner Services"
    />
    <x-banner-text bt1="Hyundai,"  bt2="Services" bt3="Types of Hyundai Services"></x-banner-text>
  </div>
    <!-- BANNER -->

    <!-- SUB-HEAD -->
    <x-sub-head>
      <x-slot:slot1>We Care Beyond the Road</x-slot:slot1>
      <x-slot:slot2>
        More than just ensuring your comfort, our comprehensive range of services—from regular maintenance and genuine parts replacement to 24-hour roadside assistance and expert consultation—reflects our commitment to making every journey effortless. We strive to deliver care that extends far beyond the vehicle itself, ensuring lasting trust, safety, and satisfaction for every customer.
      </x-slot:slot2>
    </x-sub-head>

    {{-- === SERVICES-GRID LAYOUT 1 === --}}
    <div class="justify-center pb-8">
        <x-head-sect>
            <x-slot:hs_slot>Search Dealer</x-slot:hs_slot>
            <x-slot:slot_sect_desc>Find a Dealer Near You</x-slot:slot_sect_desc>
        </x-head-sect>
      {{-- Grid-Content --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 content-section py-6">
      <!-- Services 1 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-20 md:max-w-30 rounded-lg mb-4"
          src="img/Services/Sales.svg"
          alt="Icon Sales"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">Sales Product</h3>
          <p class="text-center justify-center">Sales cars, Spare Parts. Accessories</p>
        </div>
      </div>

      <!-- Services 2 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-20 md:max-w-30 rounded-lg mb-4"
          src="img/Services/Repair.svg"
          alt="Icon Repair"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">Vehicle Repair</h3>
          <p class="text-center justify-center">Repairing Damaged Vehicle</p>
        </div>
      </div>

      <!-- Services 3 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-20 md:max-w-30 rounded-lg mb-4"
          src="img/Services/Trade.svg"
          alt="Icon Trade"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">Trade-in</h3>
          <p class="text-center justify-center">Trade in your car for a new one</p>
        </div>
      </div>
    </div>
    </div>
    </div>

    {{-- === SERVICES-GRID LAYOUT 2 === --}}
    <!-- Sales Product -->
    <div class="items-center justify-center py-4 mb-28">
    <div class="flex flex-col gap-8 content-section py-6 ">
        <div class="relative w-full hover:scale-102 active:scale-102 transition-all hover:drop-shadow-gray-950" >
          {{-- --- desktop --- --}}
          <img
          class="hidden sm:block h-auto max-w-full object-cover"
          src="img/Services/sales-banner.png"
          alt="Sales Banner"
        />
        {{-- --- mobile --- --}}
          <img
          class="sm:hidden h-auto max-w-full object-cover"
          src="img/Services/sales-banner-mobile.svg"
          alt="Sales Banner Mobile"
        />

      <div class="absolute inset-0 flex flex-col justify-end z-10 !py-8 md:!py-16 text-white ">
        <div class=" flex flex-row text-2xl sm:text-3xl md:text-4xl lg:text-6xl xl:text-5xl  content-section sm:mb-2 md:mb-4">
          <h1 class="font-semibold">Sales Product</h1>
        </div>
        <p class="justify-start !text-xs sm:!text-sm md:!text-base content-section">Selling Cars, Spare Parts, Accessories</p>
      </div>
      </div>

    <!-- Vehicle Repair -->
      <div class="relative w-full hover:scale-102 active:scale-102 transition-all hover:drop-shadow-gray-950" >
          {{-- --- desktop --- --}}
          <img
          class="hidden sm:block h-auto max-w-full object-cover"
          src="img/Services/repair-banner.png"
          alt="Repair Banner"
        />
        {{-- --- mobile --- --}}
          <img
          class="sm:hidden h-auto max-w-full object-cover"
          src="img/Services/repair-banner-mobile.svg"
          alt="Repair Banner Mobile"
        />

      <div class="absolute inset-0 flex flex-col justify-end z-10 !py-8 md:!py-16 text-white ">
        <div class=" flex flex-row text-2xl sm:text-3xl md:text-4xl lg:text-6xl xl:text-5xl  content-section sm:mb-2 md:mb-4">
          <h1 class="font-semibold">Vehicle Repair</h1>
        </div>
        <p class="justify-start !text-xs sm:!text-sm md:!text-base content-section">Repairing Damaged Vehicle</p>
      </div>
      </div>

    <!-- Trade-in -->
      <div class="relative w-full hover:scale-102 active:scale-102 transition-all hover:drop-shadow-gray-950" >
          {{-- --- desktop --- --}}
          <img
          class="hidden sm:block h-auto max-w-full object-cover"
          src="img/Services/trade-banner.png"
          alt="Trade Banner"
        />
        {{-- --- mobile --- --}}
          <img
          class="sm:hidden h-auto max-w-full object-cover"
          src="img/Services/trade-banner-mobile.svg"
          alt="Trade Banner Mobile"
        />

      <div class="absolute inset-0 flex flex-col justify-end z-10 !py-8 md:!py-16 text-white ">
        <div class=" flex flex-row text-2xl sm:text-3xl md:text-4xl lg:text-6xl xl:text-5xl  content-section sm:mb-2 md:mb-4">
          <h1 class="font-semibold">Trade-in</h1>
        </div>
        <p class="justify-start !text-xs sm:!text-sm md:!text-base content-section">Trade in your car for a new one</p>
      </div>
      </div>
    </div>
    </div>

    <x-footer></x-footer>
</x-layout-dasar>