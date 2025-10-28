

<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 h-full w-full">
    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white mb-4">Website traffic</h5>

    <div class="py-6">
        <canvas id="line-chart" style="max-height: 300px;"></canvas>
    </div>
</div>

<script>
    // 1. DEFINISI DATA
    const lineLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul']; // Tambahkan 'const'

    const lineData = {
        labels: lineLabels,
        datasets: [
            {
            label: 'Desktop',
            data: [65, 59, 80, 81, 56, 55, 40],
            fill: false,
            borderColor: '#003082',
            backgroundColor: '#0A142F',
            tension: 0.1
        },

        {
            label: 'Mobile',
            data: [45, 70, 55, 65, 75, 80, 85],
            fill: false,
            borderColor: '#4C6EA7',
            backgroundColor: '#003082',
            tension: 0.1
        },

        {
                label: 'Tablet',
                data: [30, 40, 35, 50, 45, 42, 38],
                fill: false,
                borderColor: '#99ACCD',
                backgroundColor: '#4C6EA7',
                tension: 0.1
        },
    ]
    }; 

// Tutup kurung kurawal dengan benar
    // 2. DEFINISI CONFIG
    const lineConfig = {
        type: 'line',
        data: lineData,
    };

    // 3. RENDER CHART
    const linectx = document.getElementById('line-chart');
    if (linectx) {
        const lineChart = new Chart(linectx, lineConfig);
        console.log('Chart berhasil dibuat!');
    } else {
        console.error('Canvas tidak ditemukan!');
    }
</script>