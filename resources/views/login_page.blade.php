<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Login User</title>
</head>
<body class="min-h-screen bg-cover bg-center flex flex-col items-center justify-center relative px-4"
      style="background-image: url('img/image_darrel/Rectangle9.png');">
      
{{-- <!-- Logo Hyundai --> --}}
<div class="absolute top-6 left-10 flex items-center">
  <img src="img/image_darrel/left.png" alt="Hyundai Logo" class="w-[200px] h-[50.1px] object-contain">
</div>

<div class="absolute top-9 right-10 text-white text-sm font-light">
  Log In Page
</div>

  {{-- <!-- Judul Halaman --> --}}
  <div class="text-center mb-8">
    <h1 class="text-3xl md:text-4xl text-white mb-2 drop-shadow-lg font-[Paperlogy]">
      <span class="font-normal">Hello,</span> <span class="font-semibold">Welcome!</span>
    </h1>
    <p class="text-gray-200 text-sm md:text-base">
      Welcome to the best experience ever
    </p>
  </div>

  {{-- <!-- Form Login --> --}}
  <form class="w-full max-w-sm " method="POST">
    <!-- Input Email -->
    <div class="mb-5 text-left">
      <label for="email" class=" block mb-2 text-sm font-medium text-white">
        Email
      </label>
      <input type="email" id="email" placeholder="you@example.com..."
             class="bg-white/90 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 ps-2.5"
             required />
    </div>

    <!-- Input Password -->
    <div class="mb-8 text-left">
      <label for="password" class="block mb-2 text-sm font-medium text-white">
        Password
      </label>
      <input type="password" id="password" placeholder="Masukan password..."
             class="bg-white/90 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 ps-2.5"
             required />
    </div>

    {{-- <!-- Button --> --}}
    <div class="text-center">
      <button type="submit"
              class="bg-[#003082]/80 border-2 border-white text-white hover:bg-white/80 active:bg-white/80 hover:text-[#003082] active:text-[#003082] font-bold text-sm rounded-sm px-8 py-2.5 transition mt-7">
        Log In
      </button>
    </div>

    <div class="text-center mt-9">
      <p class="text-gray-200 text-sm md:text-base">
        Don't have an account yet?
        <a href="/register_user" class="font-semibold text-white hover:underline active:underline">Register</a>
      </p>
    </div>

    <div class="text-center mt-9">
         <a href="/" class="text-gray-300 text-sm md:text-base mt-3 inline-block hover:underline active:underline">Back</a>
    </div>
  </form>
    
</body>
</html>