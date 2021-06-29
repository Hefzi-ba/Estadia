<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.0/chart.js"></script>
    <script src="./node_modules/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <canvas id="densityChart" width="600" height="400"></canvas>
    <script >
        var densityCanvas = document.getElementById("densityChart");

            Chart.defaults.global.defaultFontFamily = "Lato";
            Chart.defaults.global.defaultFontSize = 18;

            var densityData = {
            label: 'Density of Planets (kg/m3)',
            data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
            backgroundColor: [
                'rgba(0, 99, 132, 0.6)',
                'rgba(30, 99, 132, 0.6)',
                'rgba(60, 99, 132, 0.6)',
                'rgba(90, 99, 132, 0.6)',
                'rgba(120, 99, 132, 0.6)',
                'rgba(150, 99, 132, 0.6)',
                'rgba(180, 99, 132, 0.6)',
                'rgba(210, 99, 132, 0.6)',
                'rgba(240, 99, 132, 0.6)'
            ],
            borderColor: [
                'rgba(0, 99, 132, 1)',
                'rgba(30, 99, 132, 1)',
                'rgba(60, 99, 132, 1)',
                'rgba(90, 99, 132, 1)',
                'rgba(120, 99, 132, 1)',
                'rgba(150, 99, 132, 1)',
                'rgba(180, 99, 132, 1)',
                'rgba(210, 99, 132, 1)',
                'rgba(240, 99, 132, 1)'
            ],
            borderWidth: 2,
            hoverBorderWidth: 0
            };

            var chartOptions = {
            scales: {
                yAxes: [{
                barPercentage: 0.5
                }]
            },
            elements: {
                rectangle: {
                borderSkipped: 'left',
                }
            }
            };

            var barChart = new Chart(densityCanvas, {
            type: 'horizontalBar',
            data: {
                labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
                datasets: [densityData],
            },
            options: chartOptions
            });
    </script>
</body>
</html>