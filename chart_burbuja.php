<?php
include ("index.php");
include("conexion.php"); 
?>
<html>
    <head>
        <script src="js/chart/Chart.bundle.js"></script>
        <script src="js/chart/utils.js"></script>
        <script type="text/javascript" src="js/jquery/jquery-3.1.1.min.js"></script>
        <script>
            var DEFAULT_DATASET_SIZE = 7;
            var addedCount = 0;
            var color = Chart.helpers.color;
            var bubbleChartData = {
                animation: {
                    duration: 10000
                },
                datasets: [{
                    label: "Cantidades",
                    backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                    borderColor: window.chartColors.red,
                    borderWidth: 1,
                    data: [{
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }]
                }, {
                    label: "Sueldo",
                    backgroundColor: color(window.chartColors.orange).alpha(0.5).rgbString(),
                    borderColor: window.chartColors.orange,
                    borderWidth: 1,
                    data: [{
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                        r: Math.abs(randomScalingFactor()) / 5,
                    }]
                }]
            };
            window.onload = function() {
                var ctx = document.getElementById("area-canvas").getContext("2d");
                window.myChart = new Chart(ctx, {
                    type: 'bubble',
                    data: bubbleChartData,
                    options: {
                        responsive: true,
                        title:{
                            display:true,
                            text:'Grafico Burbuja'
                        },
                        tooltips: {
                            mode: 'point'
                        }
                    }
                });
            };
            var colorNames = Object.keys(window.chartColors);
        </script>    
        <style type="text/css">
            canvas{
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
            }
        </style>
    </head>
    <body>
        <div id="container" style="width: 50%;">
            <canvas id="area-canvas"></canvas>
        </div>
    </body>
</html>