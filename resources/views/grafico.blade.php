@extends('dashboard')


@section('content')
    
<div class="p-2 w-70  bg-white border-b border-gray-200">
    <h1>Ventas producto Z 2020-2021</h1>
    <canvas id="myChart"></canvas>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const datos = {
            label: "Ventas por mes - 2021",
            data: <?php echo json_encode($datos); ?>, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
            borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
            borderWidth: 1,// Ancho del borde
    };
        const datos2 = {
            label: "Ventas por mes - 2020",
            data: <?php echo json_encode($datos2); ?>, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1,// Ancho del borde
    };



        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($meses); ?> ,
                datasets : [        
                    datos,
                    datos2,
            
        ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }

            }
        });

    </script>

</div>





@endsection