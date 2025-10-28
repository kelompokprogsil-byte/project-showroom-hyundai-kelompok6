

<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 h-full w-full">
    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white mb-4">Pembelian</h5>

    <div class="py-6">
        <canvas id="pie-chart" style="max-height: 300px;"></canvas>
    </div>
</div>

<script>
    // 1. DEFINISI DATA
    const piedata = {
        labels: [
            'Direct',
            'Organic Search',
            'Referrals',
            'Social Media'
        ],
        datasets: [{
            label: 'Traffic Source',
            data: [300, 500, 150, 200],
            backgroundColor: [
                '#003082',   // Blue
                '#4C6EA7',   // Orange
                '#99ACCD',    // Green
                '#E5EAF2'     // Red
            ],
            hoverOffset: 4
        }]
    };

    // 2. DEFINISI CONFIG
    const pieconfig = {
        type: 'pie',
        data: piedata,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    };

    // 3. RENDER CHART
    const piectx = document.getElementById('pie-chart');
    if (piectx) {
        const pieChart = new Chart(piectx, pieconfig);
        console.log('Chart berhasil dibuat!');
    } else {
        console.error('Canvas tidak ditemukan!');
    }
</script>