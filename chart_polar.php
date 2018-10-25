<?php
include("index.php");
include("conexion.php"); 
?>
<html>
    <head>
        <script src="js/chart/Chart.bundle.js"></script>
        <script src="js/chart/utils.js"></script>
        <script type="text/javascript" src="js/jquery/jquery-3.1.1.min.js"></script>
        <style>
            canvas {
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
            }
        </style>
        <script>
            var randomScalingFactor = function() {
                return Math.round(Math.random() * 100);
            };
            var chartColors = window.chartColors;
            var color = Chart.helpers.color;
            var config = {
                data: {
                    datasets: [{
                        data: [
                            <?php 
                            $sql = "SELECT * FROM empleado";
                            $res = mysql_query($sql,$conexion);
                            while ($array = mysql_fetch_array($res)){
                                echo $array["cantidad"] ?>,<?php
                            }
                            ?>
                        ],
                        backgroundColor: [
                            color(chartColors.red).alpha(0.5).rgbString(),
                            color(chartColors.orange).alpha(0.5).rgbString(),
                            color(chartColors.yellow).alpha(0.5).rgbString(),
                            color(chartColors.green).alpha(0.5).rgbString(),
                            color(chartColors.blue).alpha(0.5).rgbString(),
                        ],
                        label: 'My dataset'
                    }],
                    labels: [
                        <?php
                        $sql = "SELECT * FROM empleado";
                        $res = mysql_query($sql,$conexion);
                        while ($array = mysql_fetch_array($res)){
                            ?>'<?php echo $array["nombre"]." ".$array["apellido"] ?>',<?php
                        }
                        ?>
                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Grafico Polar'
                    },
                    scale: {
                      ticks: {
                        beginAtZero: true
                      },
                      reverse: false
                    },
                    animation: {
                        animateRotate: false,
                        animateScale: true
                    }
                }
            };
            window.onload = function() {
                var ctx = document.getElementById("area-canvas");
                window.myPolarArea = Chart.PolarArea(ctx, config);
            };
            var colorNames = Object.keys(window.chartColors);
        </script>    
    </head>
    <body>
        <div class="container">
            <h1>Chart Polar</h1>
            <div id="canvas-container" class="center-block" style="width: 55%;">
                <canvas id="area-canvas"></canvas>
            </div>
        </div>
    </body>
</html>
