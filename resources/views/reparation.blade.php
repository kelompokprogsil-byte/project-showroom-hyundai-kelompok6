<x-layout-dasar :title="$title">
    <!-- BANNER -->
    <div class="relative w-full">
      <img
      class="h-auto max-w-full object-cover"
      src="img/Services/Banner.png"
      alt="Banner Services"
    />
    <x-banner-text bt1="Hyundai,"  bt2="Reparation" bt3="Types of Hyundai Services"></x-banner-text>
  </div>
    <!-- BANNER -->

        <!-- SUB-HEAD -->
    <x-sub-head>
      <x-slot:slot1>We care your vehicle</x-slot:slot1>
      <x-slot:slot2>
        More than just ensuring your comfort, our comprehensive range of services—from regular maintenance and genuine parts replacement to 24-hour roadside assistance and expert consultation—reflects our commitment to making every journey effortless. We strive to deliver care that extends far beyond the vehicle itself, ensuring lasting trust, safety, and satisfaction for every customer.
      </x-slot:slot2>
    </x-sub-head>

    <!-- GRID LAYOUT #3 -->
    <div class="justify-center py-25">
    <h2 class="text-center  font-bold text-3xl md:text-4xl mb-5">Reparation Services</h2>  

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 content-section py-6">
      <!-- Warranty 1 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Reparation/jam.svg"
          alt="Icon Battery"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">24 Hours</h3>
          <p class="text-center justify-center">24 Hours Services</p>
        </div>
      </div>

      <!-- Warranty 2 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Reparation/part.svg"
          alt="Icon Performance"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">Official Parts</h3>
          <p class="text-center justify-center">Official Spare Parts</p>
        </div>
      </div>

      <!-- Warranty 3 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Reparation/pro.svg"
          alt="Icon Electric"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">Professional</h3>
          <p class="text-center justify-center">Professional Teenagers</p>
        </div>
      </div>
    </div>
    </div>

    <div class="justify-center pb-25">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <center>
          <a href="/reparation-form" class="bg-[#001b47] hover:bg-[#002b75] text-white font-medium px-8 py-4 rounded-md flex items-center gap-3 text-lg hover:cursor-pointer">
            <img src="img/company/clarity_note-solid.png".png" alt="Booking Icon" class="w-6 h-6 object-contain" />
            Reparation
          </button>
          </center>
    </div>
    </div>

    <x-footer></x-footer>
</x-layout-dasar>