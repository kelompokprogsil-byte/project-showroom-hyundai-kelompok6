

<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 h-full w-full">
    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white mb-4">Website traffic</h5>

    <div class="py-6">
        <canvas id="polar-chart" style="max-height: 300px;"></canvas>
    </div>
</div>

<script>
    // 1. DEFINISI DATA
    const polardata = {
    labels: [
        'Red',
        'Green',
        'Yellow',
        'Grey',
        'Blue'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [11, 16, 7, 3, 14],
        backgroundColor: [
        '#003082',
        '#4C6EA7',
        '#99ACCD',
        '#AAAAAA',
        '#E5EAF2'
        ]
    }]
    };

// Tutup kurung kurawal dengan benar
    // 2. DEFINISI CONFIG
    const polarconfig = {
        type: 'polarArea',
        data: polardata,
        options: {}
        };

    // 3. RENDER CHART
    const polarctx = document.getElementById('polar-chart');
    if (polarctx) {
        const lineChart = new Chart(polarctx, polarconfig);
        console.log('Chart berhasil dibuat!');
    } else {
        console.error('Canvas tidak ditemukan!');
    }
</script>