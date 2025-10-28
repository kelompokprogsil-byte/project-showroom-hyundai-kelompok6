<x-layout-dasar :title="$title">
    <!-- BANNER -->
    <div class="relative w-full">
      <img
      class="h-auto max-w-full object-cover"
      src="img/Karir/Banner.png"
      alt="Banner Career"
    />
    <x-banner-text bt1="Hyundai,"  bt2="Career" bt3="Career development at Hyundai"></x-banner-text>
    </div>
    <!-- BANNER -->

    <!-- SUB-HEAD [GRID] -->
      <div class=" flex flex-col lg:flex-row items-center px-12 mt-8 md:mt-14 mb-18">
        <img class="px-8 h-auto max-w-lg" src="img/Karir/Gambar_1.png" alt="image description">

        <div class="justify-center flex flex-col gap-2 md:px-8 mt-4 lg:mt-0">
            <h1 class="text-3xl md:text-4xl mb-2 md:mb-4 font-bold text-start">Career</h1>
            <p class="text-sm md:text-base text-justify">Discover your future: a career at the fastest-growing car manufacturer in the world. At Hyundai, we are constantly expanding by creating imaginative designs, advanced technologies, and exciting new product lines. So whatever you want to do, you can try it and make an impact here. Lorem ipsum dolor si. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, dicta?</p>
        </div>
        </div>

        {{-- BARISAN CAREER --}}
        <div class="justify-center grid grid-cols-2 lg:grid-cols-4 gap-4 content-section py-0 md:py-6 mb-18">
            <x-career-card image_career="img/Karir/dummy.jpg" nama_career="Executive" desc_career="Responsible for manufacturing, in this case assembling four-wheeled vehicles, starting from vehicle body assembly, painting, interior and exterior installation, to vehicle testing" /> {{-- ==> Executive --}}

            <x-career-card image_career="img/Karir/dummy.jpg" nama_career="Production Department" desc_career="Responsible for manufacturing, in this case assembling four-wheeled vehicles, starting from vehicle body assembly, painting, interior and exterior installation, to vehicle testing" /> {{-- ==> Production Dept. --}}

            <x-career-card image_career="img/Karir/dummy.jpg" nama_career="Trim Shop Department" desc_career="Responsible for manufacturing, in this case assembling four-wheeled vehicles, starting from vehicle body assembly, painting, interior and exterior installation, to vehicle testing" /> {{-- ==> Trim Shop Dept. --}}

            <x-career-card image_career="img/Karir/dummy.jpg" nama_career="Quality Assurance Department" desc_career="Responsible for manufacturing, in this case assembling four-wheeled vehicles, starting from vehicle body assembly, painting, interior and exterior installation, to vehicle testing" /> {{-- ==> Quality Assurance Dept. --}}
        </div>


        <x-footer></x-footer>
</x-layout-dasar>