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
<body>
    <div class="flex min-h-screen"> 
    
        <!-- Bagian kiri -->
        <div class="w-1/2 relative bg-cover bg-center flex items-center justify-center"
            style="background-image: url('/img/image_darrel/Rectangle91.png');">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative text-white px-10">
                <h1 class="text-5xl font-light mb-2">Hello Admin,</h1>
                <h2 class="text-5xl font-semibold mb-3">Welcome!</h2>
                <p class="text-lg font-light">Welcome to Admin Page</p>
            </div>
        </div>

        <!-- Bagian kanan -->
        <div class="w-1/2 bg-white flex flex-col justify-center px-24">
            <form class="w-full px-6 md:px-20 mx-auto" method="GET">
                <div class="mb-5 text-left">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-700">
                        Nama
                    </label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama/Username..."
                            class="w-full border border-gray-300 text-[#003082] text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 p-2.5" required />
                </div>

                <div class="mb-6 text-left">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password..."
                            class="w-full border border-gray-300 text-[#003082] text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 p-2.5" required />
                </div>

                <button type="submit"
                        class=" bg-[var(--bg-secondary)] text-white hover:bg-white active:bg-white hover:text-[#0A142F] active:text-[#0A142F]  border-2 border-transparent hover:border-2 active:border-2 hover:border-[var(--bg-secondary)] active:border-[var(--bg-secondary)] font-medium text-sm px-8 py-2.5 mt-5 rounded-sm transition">
                    Masuk
                </button>
            </form>
        </div>
        
    </div> 

</body>
</html>