<x-layout-dasar :title="$title">
    <!-- BANNER -->
    <div class="relative w-full">
      <img
      class="h-auto max-w-full object-cover"
      src="img/Jaminan/Banner.png"
      alt="Banner Jaminan"
    />

    <x-banner-text bt1="Hyundai,"  bt2="Best Warranty" bt3="Engineered to Last, Guaranteed to Protect."></x-banner-text>
    </div>
    <!-- BANNER -->


    <!-- SUB-HEAD -->
    <x-sub-head>
      <x-slot:slot1>Standard on every new Hyundai</x-slot:slot1>
      <x-slot:slot2>
        Every guided tour is hosted by our product specialists who'll show you every detail, like checking out the interior, popping the trunk, using the touchscreen—even demonstrating the latest accessories. Ask them a question in real-time, or just sit back and watch. Tune in as we showcase three different vehicles each week.
      </x-slot:slot2>
    </x-sub-head>

    <!-- GRID LAYOUT #1 -->
    <div class="justify-center py-25">
    <h2 class="text-center text-3xl md:text-4xl font-bold mb-5">Our Services</h2>  

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 content-section py-6">
      <!-- Warranty 1 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/Jalanan Icon.svg"
          alt="Icon Jalanan"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">10-Year / 100,000-Mile</h3>
          <p class="text-center justify-center">Powertrain Limited Warranty</p>
        </div>
      </div>

      <!-- Warranty 2 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/mobil icon.svg"
          alt="Icon Mobil"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">5-Year / 60,000-Mile</h3>
          <p class="text-center justify-center">New Vehicle Limited Warranty</p>
        </div>
      </div>

      <!-- Warranty 3 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/bintang icon.svg"
          alt="Icon Bintang"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">7-Year / Unlimited Miles</h3>
          <p class="text-center justify-center">Anti-Perforation Warranty</p>
        </div>
      </div>

      <!-- Warranty 4 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/towing icon.svg"
          alt="Icon Towing"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">5-Year / Unlimited Miles</h3>
          <p class="text-center justify-center">24-Hour Roadside Assistance</p>
        </div>
      </div>
    </div>
    </div>

    <!-- ================================================================================================================= -->

    <!-- GRID LAYOUT #2 -->
    <div class="justify-center py-25 bg-[var(--bg-primary)] text-white">
    <h2 class="text-center text-3xl md:text-4xl font-bold mb-5">Parts, Accessories and Emissions Coverage</h2>  

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 content-section py-6">
      <!-- Warranty 1 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/12-month.svg"
          alt="Icon 12 Bulan"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">12-Month / 12,000-Mile</h3>
          <p class="text-center justify-center">Replacement Parts and Accessories Limited Warranty</p>
        </div>
      </div>

      <!-- Warranty 2 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/80.000mile.svg"
          alt="Icon 80K"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">8-Year / 80,000-Mile</h3>
          <p class="text-center justify-center">Federal Emission Defect and Performance Warranty</p>
        </div>
      </div>

      <!-- Warranty 3 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/70.000mile.svg"
          alt="Icon 70K"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">7-Year / 70,000-Mile</h3>
          <p class="text-center justify-center">California Emissions Control Systems Warranty</p>
        </div>
      </div>
    </div>
    </div>

  <!-- ================================================================================================================= -->

     <!-- GRID LAYOUT #3 -->
    <div class="justify-center py-25">
    <h2 class="text-center  font-bold text-3xl md:text-4xl mb-5">Electric and Hybrid Powertrain Coverage</h2>  

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 content-section py-6">
      <!-- Warranty 1 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/ev_battery.svg"
          alt="Icon Battery"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">10-Year / 100,000-Mile</h3>
          <p class="text-center justify-center">Hybrid/EV Battery Warranty</p>
        </div>
      </div>

      <!-- Warranty 2 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/Performance.svg"
          alt="Icon Performance"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">5-Year Motor Warranty</h3>
          <p class="text-center justify-center">Ensures lasting power and performance.</p>
        </div>
      </div>

      <!-- Warranty 3 -->
      <div class="flex flex-col items-center mx-4">
        <img
          class="h-auto max-w-40 rounded-lg mb-2"
          src="img/Jaminan/ELECTRIC.svg"
          alt="Icon Electric"
        />
        <div class="flex flex-col justify-center">
          <h3 class="text-center text-2xl font-semibold justify-center">3-Year Electronics Warranty</h3>
          <p class="text-center justify-center">Protects all key electrical components</p>
        </div>
      </div>
    </div>
    </div>

    <x-footer></x-footer>
</x-layout-dasar>