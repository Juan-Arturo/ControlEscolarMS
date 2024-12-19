<x-master-layout title="Dashboard de Gráficas">
    <div class="min-h-screen bg-gray-100 px-4 lg:px-8 py-6 background   ">
        <!-- Título de la página -->
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Dashboard de Gráficas</h2>

        <!-- Contenedor principal de gráficas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Gráfica de barras -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Grafica estudiantes A</h3>
                <canvas id="barChart"></canvas>
            </div>

            <!-- Gráfica de líneas -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Grafica estudiantes B</h3>
                <canvas id="lineChart"></canvas>
            </div>

            <!-- Gráfica de pastel -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Grafica estudiantes C</h3>
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

   
</x-master-layout>

  <!-- Script para gráficos -->
  <script>
    // Configuración de la gráfica de barras
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            datasets: [{
                label: 'Ventas',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: '#621132',
                borderColor: '#4E232E',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: true },
                tooltip: { enabled: true }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Configuración de la gráfica de líneas
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            datasets: [{
                label: 'Usuarios Activos',
                data: [10, 15, 9, 14, 20, 18],
                backgroundColor: '#285C4D',
                borderColor: '#13322B',
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: true },
                tooltip: { enabled: true }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Configuración de la gráfica de pastel
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Producto A', 'Producto B', 'Producto C'],
            datasets: [{
                data: [55, 25, 20],
                backgroundColor: ['#621132', '#902449', '#B38E5D']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' },
                tooltip: { enabled: true }
            }
        }
    });
</script>