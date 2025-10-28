@props(['bt1', 'bt2', 'bt3'])
    <div class="absolute inset-0 flex flex-col justify-end mb-10 md:mb-0 ms-8 md:ms-0 sm:justify-center z-10  text-white">
        <div class=" flex flex-row text-2xl sm:text-3xl md:text-4xl lg:text-6xl md:px-24 mb-4">
            <h1 class="font-medium">{{ $bt1 }}</h1> <h1 class="font-semibold">{{ $bt2 }}</h1>
        </div>
        <p class="justify-start text-sm md:text-lg md:px-24">{{ $bt3 }}</p>
    </div>