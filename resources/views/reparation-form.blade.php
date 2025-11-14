<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Booking Form</title>
</head>
<body class="flex flex-col min-h-screen">

    <!-- container -->
    <div class="max-w-7xl mx-auto pl-6 pr-8 pt-8 mb-12"> 
    <!-- Tombol Back -->
    <a href="/reparation" id="prevBtn"
      class="flex items-center mb-4">
      <img src="img/Form/weui_back-filled.png" class="h-8 w-auto mr-2" alt="Prev">
    </a>

    <!-- Title -->
    <h1 class="text-3xl font-bold mb-2">Reparation Form</h1>
    <h2 class="text-lg text-gray-500 mb-8">Get repairs for damaged cars even at home</h2>

    <!-- Form -->
    <form class="space-y-6 text-sm w-full md:w-[60%]">
      <!-- Name -->
      <div>
        <label class="block mb-1 font-medium text-gray-700">Name</label>
        <input 
          type="text" 
          placeholder="Input Name..." 
          class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-[#001E3C] focus:outline-none"
        >
      </div>

      <!-- Reparation Type -->
      <div>
        <label class="block mb-1 font-medium text-gray-700">Reparation Type</label>
        <select 
          class="w-full border border-gray-300 rounded-md p-3 bg-white focus:ring-2 focus:ring-[#001E3C] focus:outline-none"
        >
          <option>At Dealer</option>
          <option>Home Service</option>
        </select>
      </div>

      <!-- Dealer -->
      <div>
        <label class="block mb-1 font-medium text-gray-700">Dealer</label>
        <select 
          class="w-full border border-gray-300 rounded-md p-3 bg-white focus:ring-2 focus:ring-[#001E3C] focus:outline-none"
        >
          <option>Dealer</option>
          <option>Jakarta Hyundai</option>
          <option>Surabaya Hyundai</option>
          <option>Bandung Hyundai</option>
        </select>
      </div>

      <!-- Address -->
      <div>
        <label class="block mb-1 font-medium text-gray-700">Address</label>
        <textarea 
          placeholder="Input Address (If repairs at home)"
          class="w-full border border-gray-300 rounded-md p-3 h-24 resize-none focus:ring-2 focus:ring-[#001E3C] focus:outline-none"
        ></textarea>
      </div>

      <!-- Meeting Date -->
      <div>
        <label class="block mb-1 font-medium text-gray-700">Meeting Date</label>
        <input 
          type="date" 
          class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-[#001E3C] focus:outline-none"
        >
      </div>

      <!-- Checkbox -->
      <div class="space-y-2">
        <label class="flex items-center text-gray-600">
          <input type="checkbox" class="mr-2 rounded border-gray-300 focus:ring-[#001E3C] hover:cursor-pointer">
          New comments so you always know what’s happening.
        </label>
        <label class="flex items-center text-gray-600">
          <input type="checkbox" class="mr-2 rounded border-gray-300 focus:ring-[#001E3C] hover:cursor-pointer">
          New candidates who apply for any open postings.
        </label>
      </div>

      <!-- Submit -->
      <button 
        type="submit" 
        class="text-white bg-[var(--bg-secondary)] border-2 border-white hover:text-[var(--bg-secondary)] hover:bg-transparent hover:border-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:cursor-pointer transition">
        Kirim
      </button>
    </form>
  </div>

  <!-- === FOOTER === -->
  <footer class="bg-[#0b1630] text-white py-5">
    <div class="container mx-auto flex flex-col items-center justify-center space-y-3">
      <div class="flex space-x-4 text-base">
        <a href="#" class="text-gray-400 hover:text-white transition">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="text-gray-400 hover:text-white transition">
          <i class="fab fa-x-twitter"></i>
        </a>
        <a href="#" class="text-gray-400 hover:text-white transition">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="text-gray-400 hover:text-white transition">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="text-gray-400 hover:text-white transition">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#" class="text-gray-400 hover:text-white transition">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <div class="text-center text-gray-400 text-xs">
        © 2023 Copyright:
        <a href="#" class="hover:underline text-gray-300">MDBootstrap.com</a>
      </div>
    </div>
  </footer>

</body>
</html>
