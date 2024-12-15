@extends('layouts.user')

@section('content')
<h1 class="text-center" style="color: #333; font-family: 'Arial', sans-serif; font-size: 2.5rem;">Resultados de Votos</h1>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <canvas id="votosChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Datos enviados desde el controlador
    const data = @json($data);

    // Obtener etiquetas y valores
    const labels = Object.keys(data); // ['Votos Válidos', 'Votos en Blanco', 'Votos Nulos']
    const values = Object.values(data); // [85, 5, 10] (ejemplo de porcentajes)

    // Configurar la gráfica
    const ctx = document.getElementById('votosChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie', // Tipo de gráfico: torta
        data: {
            labels: labels,
            datasets: [{
                label: 'Porcentaje de Votos',
                data: values,
                backgroundColor: [
                    'rgba(75, 192, 192, 1)', // Color 1
                    'rgba(255, 99, 132, 1)', // Color 2
                    'rgba(54, 162, 235, 1)', // Color 3
                    'rgba(255, 159, 64, 1)', // Color 4
                    'rgba(153, 102, 255, 1)', // Color 5
                    'rgba(255, 205, 86, 1)', // Color 6
                    'rgba(75, 192, 192, 0.7)', // Color 7 (con opacidad)
                    'rgba(255, 99, 71, 1)', // Color 8
                    'rgba(0, 128, 0, 1)' // Color 9
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)', // Color 1
                    'rgba(255, 99, 132, 1)', // Color 2
                    'rgba(54, 162, 235, 1)', // Color 3
                    'rgba(255, 159, 64, 1)', // Color 4
                    'rgba(153, 102, 255, 1)', // Color 5
                    'rgba(255, 205, 86, 1)', // Color 6
                    'rgba(75, 192, 177, 1)', // Color 7 (con opacidad)
                    'rgba(255, 99, 71, 1)', // Color 8
                    'rgba(0, 128, 0, 1)' // Color 9
                ],
                borderWidth: 2,
                hoverOffset: 4 // Aumenta la separación al pasar el mouse
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top', // Posición de la leyenda
                    labels: {
                        font: {
                            size: 14, // Tamaño de la fuente
                            weight: 'bold', // Negrita
                            family: "'Arial', sans-serif" // Fuente de la leyenda
                        },
                        color: '#555' // Color de la leyenda
                    }
                },
                tooltip: {
                    bodyFont: {
                        size: 14, // Tamaño de la fuente de los tooltips
                        weight: 'bold',
                        family: "'Arial', sans-serif"
                    },
                    backgroundColor: 'rgba(0, 0, 0, 0.7)', // Fondo de los tooltips
                    titleFont: {
                        weight: 'bold',
                    },
                    bodyColor: '#fff', // Color del texto de los tooltips
                }
            }
        }
    });
</script>

@endsection