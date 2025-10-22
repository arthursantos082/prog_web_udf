<div>
    <canvas id="myChart" width="80px" height="37px"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Flamengo', 'Palmeiras', 'Brasiliense', 'Fortaleza', 'Bahia'],
            datasets: [{
                label: '# de votos',
                data: [213, 822, 234, 520, 120]
            }]
        },
        option: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>