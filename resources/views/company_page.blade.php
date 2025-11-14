<x-layout-dasar :title="$title">

<!-- =============== HERO SECTION =============== -->
<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
  <img src="img/company/hycom.png" alt="Hyundai Hero" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0 bg-black/50"></div>
  <div class="relative z-10 fade-in px-6">
    <h1 class="text-4xl md:text-6xl font-bold uppercase tracking-wide">Hyundai, Our Company</h1>
    <p class="mt-4 text-lg md:text-xl text-gray-200">Innovation and passion drive everything we do</p>
  </div>
</section>

<!-- Section: We’re all in at Hyundai (final with right-side box trim) -->
<section class="bg-white py-16 px-4 md:px-10 mt-[53px]">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">

    <!-- Left -->
    <div class="-ml-4 md:-ml-10">
      <img 
        src="img/company/hyhy.png" 
        alt="Hyundai Team" 
        class="w-full h-[386px] shadow-md object-cover">
    </div>

    <!-- Right -->
    <div class="flex flex-col gap-4 pr-2">
      <!-- Judul -->
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#001b47] leading-tight relative">
        <span class="bg-[#e6e8eb] px-3 py-2 inline-block relative after:content-[''] after:absolute after:top-0 after:right-0 after:w-[25px] after:h-full after:bg-white">
          We’re all in at Hyundai.
        </span>
      </h2>

      <!-- Paragraf -->
      <p class="text-gray-800 leading-relaxed text-lg md:text-xl p-6 rounded-sm shadow-sm">
        To create and keep a world-class organization like Hyundai at the forefront, we happily strive
        to include everyone. Wonderfully talented people make Hyundai what it is today. We continue to attract,
        recruit, and hire the most talented people in the industry — people with different backgrounds,
        beliefs, interests, and inspiration. We partner with like-minded suppliers to help us grow.
        And we support more than 820 dealers across the country in giving every customer a positive Hyundai experience.
      </p>
    </div>
  </div>
</section>



<!-- Section: Our History -->
<section class="bg-white py-20 px-4 md:px-10 text-center">
  <div class="max-w-7xl mx-auto flex flex-col items-center">
    <!-- Judul -->
    <h2 class="text-4xl md:text-5xl font-extrabold text-[#001b47] mb-3">Our History</h2>
    <p class="text-gray-600 mb-10 text-lg md:text-xl">Sejarah</p>

    <!-- Img -->
    <div class="w-full mb-12">
      <img 
        src="img/company/mobcop.png" 
        alt="Hyundai History" 
        class="w-full max-h-[580px] object-contain rounded-sm shadow-md mx-auto"
      >
    </div>

    <!-- Txt-->
    <div class="bg-gray-100 p-8 md:p-10 rounded-md text-left w-full max-w-7xl mx-auto shadow-sm">
      <p class="text-gray-700 text-lg md:text-xl mb-6 leading-relaxed">
        In 1968, Hyundai built its first car — the Hyundai Cortina — in collaboration with Ford Motor Company.
        Encouraged by its success, Hyundai developed its first independently designed car, the Hyundai Pony, in 1975,
        marking the birth of Korea’s first domestically produced vehicle.
      </p>

      <p class="text-gray-700 text-lg md:text-xl mb-6 leading-relaxed">
        By 1986, Hyundai entered the U.S. market with the Hyundai Excel, which gained popularity for its affordability.
        Since then, Hyundai has expanded across Europe, Asia, and other global markets.
      </p>

      <p class="text-gray-700 text-lg md:text-xl leading-relaxed">
        Today, Hyundai stands among the top five largest automakers in the world, driven by its vision
        “New Thinking. New Possibilities.”, and continues to shape the future of mobility with smart design,
        performance, and sustainability.
      </p>
    </div>
  </div>
</section>




<!-- =============== Vision & Mission =============== -->
<section class="py-20 bg-white fade-in">
  <div class="max-w-6xl mx-auto text-center px-6">
    <h2 class="text-4xl font-bold text-[#001b47]">Our Vision & Mission</h2>
    <p class="text-gray-600 mb-10 text-lg">Visi dan Misi</p>
    <div class="grid md:grid-cols-2 gap-8 justify-center">
      
      <!-- Vision -->
      <div class="relative overflow-hidden shadow-lg mx-auto w-[85%]">
        <img src="img/company/visii.png" alt="Vision" class="w-full h-[300px] object-cover object-center">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white px-8">
          <h3 class="text-4xl font-semibold">Vision</h3>
          <p class="max-w-sm text-xs md:text-sm leading-relaxed mb-[69px] mt-[87px] text-left text-gray-200">
            To create exceptional automotive value for our customers by harmoniously blending safety,
            quality and efficiency. With our diverse team, we will provide responsible stewardship to our
            community and environment while achieving stability and security now and for future generations.
          </p>
        </div>
      </div>

      <!-- Mission -->
      <div class="relative overflow-hidden shadow-lg mx-auto w-[85%]">
        <img src="img/company/misii.png" alt="Mission" class="w-full h-[300px] object-cover object-center">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white px-8">
          <h3 class="text-4xl font-semibold mb-4">Mission</h3>
          <p class="max-w-sm text-xs md:text-sm leading-relaxed mb-[69px] mt-[87px] text-left text-gray-200">
            Our dedication to moving humanity forward flows throughout everything we do – inspiring us
            to conceive, create, and craft vehicles that open new chapters in mobility and help redefine
            our journey as a global community.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- =============== Affiliates =============== -->
<section class="py-20 bg-white fade-in">
  <div class="max-w-7xl mx-auto text-center px-8">
    <h2 class="text-4xl font-bold text-[#001b47]">Our Affiliates</h2>
    <p class="text-gray-600 mb-12 text-lg">Kerjasama</p>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-white overflow-hidden shadow-md hover:shadow-lg transition">
        <img src="img/company/ci.png" alt="California Design" class="w-full h-52 object-cover">
        <div class="p-6 text-left">
          <p class="text-gray-500 text-sm">Irvine, CA</p>
          <h3 class="text-[#001b47] font-semibold mb-2">California Design & Research Center</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Our $30 million design facility is fitted with the world’s most advanced visualization and modeling technologies, keeping Hyundai at the forefront of automotive design.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white overflow-hidden shadow-md hover:shadow-lg transition">
        <img src="img/company/ci1.png" alt="Michigan Facility" class="w-full h-52 object-cover">
        <div class="p-6 text-left">
          <p class="text-gray-500 text-sm">Detroit, MI</p>
          <h3 class="text-[#001b47] font-semibold mb-2">Michigan Engineering Facility</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            A state-of-the-art center home to hundreds of America’s brightest engineers, driving innovation with cutting-edge technology and safety research.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white overflow-hidden shadow-md hover:shadow-lg transition">
        <img src="img/company/ci2.png" alt="Proving Grounds" class="w-full h-52 object-cover">
        <div class="p-6 text-left">
          <p class="text-gray-500 text-sm">California City, CA</p>
          <h3 class="text-[#001b47] font-semibold mb-2">California Proving Grounds</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Covering 4,300 acres with eight different driving courses, including winding roads, durability loops, and varied surfaces for extensive vehicle testing.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


        <x-footer></x-footer>
</x-layout-dasar>