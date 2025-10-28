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
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Dashboard Admin</title>
</head>
<body>
    <x-sidebar-admin></x-sidebar-admin>

    <div class="p-4 sm:ml-64 mt-18 sm:mt-0 mb-12">
    <div class="p-4">
        <div class="flex te mb-8 rounded-sm  dark:bg-gray-800">
            <h1 class="text-3xl font-bold">Dashboard Admin</h1>
        </div>

        <div class="flex items-center justify-center mb-4 rounded-sm dark:bg-gray-800">
            <div class="stats shadow w-full">
            <div class="stat">
                <div class="stat-figure text-secondary">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block h-8 w-8 stroke-current text-[var(--bg-primary)]"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                    ></path>
                </svg>
                </div>
                <div class="stat-title">Users</div>
                <div class="stat-value">31K</div>
            </div>

            <div class="stat bg-[var(--bg-primary)]">
                <div class="stat-figure text-secondary">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block h-8 w-8 stroke-current text-white"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                    ></path>
                </svg>
                </div>
                <div class="stat-title text-white">Visitors</div>
                <div class="stat-value text-white">4,200</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block h-8 w-8 stroke-current text-[var(--bg-primary)
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
                    ></path>
                </svg>
                </div>
                <div class="stat-title">Transactions</div>
                <div class="stat-value">1,200</div>
            </div>
            </div>
        </div>
    
        <div class="flex items-center justify-center mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <x-line-chart></x-line-chart>
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center justify-center rounded-sm bg-gray-50  dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                <x-pie-diagram></x-pie-diagram>
                </p>
            </div>

            <div class="flex items-center justify-center rounded-sm bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                <x-polar-chart></x-polar-chart>
                </p>
            </div>
        </div>
    </div>
    </div>


</body>
</html>