<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Catalogue Product</title>
</head>
<body class="flex flex-col min-h-screen bg-white text-gray-800">

<x-navbar></x-navbar>

<!-- Navbar End -->

<!-- Carousel Section -->
<section class="mt-24 relative overflow-hidden">
  <div class="relative w-full max-w-6xl mx-auto overflow-hidden rounded-lg">
    <!-- Wrapper -->
    <div id="carouselWrapper" class="flex transition-transform duration-700 ease-in-out">
      <img src="img/company/carct3.png" class="w-full flex-shrink-0 object-contain md:h-[600px] h-[400px]" alt="Tucson 1">
      <img src="img/company/carct3.png" class="w-full flex-shrink-0 object-contain md:h-[600px] h-[400px]" alt="Tucson 2">
      <img src="img/company/carct3.png" class="w-full flex-shrink-0 object-contain md:h-[600px] h-[400px]" alt="Tucson 3">
    </div>

    <!-- Tombol panah -->
    <button id="prevBtn"
      class="absolute top-1/2 left-5 -translate-y-1/2 hover:scale-105 transition">
      <img src="img/company/arrl.png" class="h-10 w-auto" alt="Prev">
    </button>

    <button id="nextBtn"
      class="absolute top-1/2 right-5 -translate-y-1/2 hover:scale-105 transition">
      <img src="img/company/arrr.png" class="h-10 w-auto" alt="Next">
    </button>

    <!-- Indikator -->
    <div class="absolute bottom-6 inset-x-0 flex items-center justify-center gap-2">
        <div id="dot0" class="w-8 h-[6px] bg-[#0A142F] transition-all duration-300"></div>
        <div id="dot1" class="w-8 h-[6px] bg-[#0A142F]/50 transition-all duration-300"></div>
        <div id="dot2" class="w-8 h-[6px] bg-[#0A142F]/50 transition-all duration-300"></div>
    </div>
  </div>
</section>

<!-- Content -->
<section class="text-center py-16">
  <div class="max-w-7xl mx-auto">
    <div class="bg-[#003082] text-white py-8 px-32 shadow-md w-full flex flex-col md:flex-row items-center justify-between text-left md:text-center">
      <h2 class="text-4xl font-bold tracking-tight uppercase">2025 TUCSON SE</h2>
      <div class="mt-4 md:mt-0">
        <p class="text-xl font-semibold">Est. Price</p>
        <p class="text-4xl font-bold">$37,000</p>
      </div>
    </div>

    <div class="mt-12">
      <h3 class="text-3xl font-semibold mb-6 border-b-4 border-[#003082] inline-block pb-2">
        Vehicle Overview
      </h3>
    </div>

    <div class="bg-white shadow-lg rounded-xl p-10 mt-6 mb-16 max-w-7xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-left text-lg leading-relaxed">
        <div class="space-y-2">
          <p><strong>Type:</strong> SUV</p>
          <p><strong>Model:</strong> TUCSON SE 2025</p>
          <p><strong>Variant:</strong> TUCSON SE</p>
          <p><strong>Production Year:</strong> 2025</p>
          <p><strong>Transmission:</strong> Automatic CVT</p>
          <p><strong>Engine Capacity:</strong> 1498 cc</p>
          <p><strong>Power:</strong> 176 HP</p>
        </div>
        <div class="space-y-2">
          <p><strong>Seats:</strong> 5</p>
          <p><strong>Color:</strong> White</p>
          <p><strong>Features:</strong> Keyless entry, Sensing, 6 Airbags</p>
          <p><strong>Description:</strong> Sedan sport premium dengan mesin 1.5L turbo dan fitur keselamatan canggih.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION: Designed for Family -->
  <section class="w-full bg-[#001b47] text-white py-14">
    <div class="max-w-6xl mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center justify-center gap-8 text-left md:text-left">
        <!-- Gambar lokal ganti icon -->
        <img src="img/company/icon-park-outline_family.png" alt="Family Icon" class="w-20 h-20 object-contain" />
        
        <div>
          <h3 class="text-4xl md:text-5xl font-bold">Designed For Family</h3>
          <p class="text-lg md:text-xl text-gray-300 mt-2">Designed for long-distance travel with family</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: Services -->
  <section class="w-full bg-white py-24">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h3 class="text-4xl font-bold mb-10">Services</h3>
      <div class="flex flex-wrap justify-center gap-8">

        <!-- Tombol Booking -->
        <a href="/booking" class="bg-[#001b47] hover:bg-[#002b75] text-white font-medium px-8 py-4 rounded-md flex items-center gap-3 text-lg hover:cursor-pointer">
          <img src="img/company/clarity_note-solid.png".png" alt="Booking Icon" class="w-6 h-6 object-contain" />
          Booking
        </button>

        <!-- Tombol Trade-In -->
        <a href="/trade" class="bg-[#003082] hover:bg-[#0048b4] text-white font-medium px-8 py-4 rounded-md flex items-center gap-3 text-lg hover:cursor-pointer">
          <img src="img/company/garden_arrow-reverse-fill-12.png" alt="Trade-In Icon" class="w-6 h-6 object-contain" />
          Trade-In
        </a>

        <!-- Tombol Test Drive -->
        <a href="/test-drive" class="bg-[#dce3f3] hover:bg-[#c4cce3] text-[#001b47] font-medium px-8 py-4 rounded-md flex items-center gap-3 text-lg hover:cursor-pointer">
          <img src="img/company/mingcute_steering-wheel-fill.png" alt="Test Drive Icon" class="w-6 h-6 object-contain" />
          Test Drive
        </a>

      </div>
    </div>
  </section>
</section>




<!-- Animasi Mobil Bos -->
<script>
  const wrapper = document.getElementById("carouselWrapper");
  const totalSlides = wrapper.children.length;
  let index = 0;

  const dots = [document.getElementById("dot0"), document.getElementById("dot1"), document.getElementById("dot2")];
  function updateCarousel() {
    wrapper.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((dot, i) => {
      dot.classList.toggle("bg-[#0A142F]", i === index);
      dot.classList.toggle("bg-[#0A142F]/50", i !== index);
    });
  }

  document.getElementById("nextBtn").addEventListener("click", () => {
    index = (index + 1) % totalSlides;
    updateCarousel();
  });
  document.getElementById("prevBtn").addEventListener("click", () => {
    index = (index - 1 + totalSlides) % totalSlides;
    updateCarousel();
  });
</script>

<x-footer></x-footer>
</body>
</html>
