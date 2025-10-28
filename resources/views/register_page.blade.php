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
  Register Page
</div>

<div class="py-24 md:py-0">
      {{-- <!-- Judul Halaman --> --}}
  <div class="text-center mb-8">
    <h1 class="text-3xl md:text-4xl text-white mb-2 drop-shadow-lg font-[Paperlogy]">
      <span class="font-normal">Hello,</span> <span class="font-semibold">Welcome!</span>
    </h1>
    <p class="text-gray-200 text-sm md:text-base">
      Welcome to the best experience ever
    </p>
  </div>

  {{-- <!-- Form Register --> --}}
  <form class="w-full px-6 md:px-20 text-center items-center justify-center" method="POST">
    <!-- IBaris 1 -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-6 ">
    <!-- Input Nama -->
      <div class="mb-5 text-left">
        <label for="nama" class="block mb-2 text-sm font-medium text-white">Nama</label>
        <input type="text" id="nama" placeholder="Masukkan Nama..."
               class="bg-white/90 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-sm py-2 ps-2.5" required />
      </div>

      <!-- Input Email -->
      <div class="mb-5 text-left">
        <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
        <input type="email" id="email" placeholder="you@example.com..."
               class="bg-white/90 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-sm py-2 ps-2.5" required />
      </div>
    </div>

    <!-- Baris 2-->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-6">
        <!-- Input Username -->
      <div class="mb-5 text-left">
        <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
        <input type="text" id="username" placeholder="Buat Username..."
               class="bg-white/90 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-sm py-2 ps-2.5" required />
      </div>

      <!-- Input Password -->
      <div class="mb-5 text-left">
        <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
        <input type="password" id="password" placeholder="Buat Password..."
               class="bg-white/90 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-sm  py-2 ps-2.5" required />
      </div>
    </div>

    <div class="text-center">
      <button type="submit"
              class="bg-[#003082]/80 border-2 border-white text-white hover:bg-white/80 active:bg-white/80 hover:text-[#003082] active:text-[#003082] font-bold text-sm rounded-sm px-8 py-2.5 transition mt-7">
        Daftar
      </button>
    </div>

    <p class="text-center text-white text-sm md:text-base mt-8">
      Sudah punya akun? <a href="/login_user" class="font-semibold hover:underline">Log In</a>
    </p>
  </form>
</div>
    
</body>
</html>