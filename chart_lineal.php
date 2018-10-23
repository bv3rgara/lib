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
			var customTooltips = function (tooltip) {
				$(this._chart.canvas).css("cursor", "pointer");
				$(".chartjs-tooltip").css({
					opacity: 0,
				});
				if (!tooltip || !tooltip.opacity) {
					return;
				}
				if (tooltip.dataPoints.length > 0) {
					tooltip.dataPoints.forEach(function (dataPoint) {
						var content = [dataPoint.xLabel, dataPoint.yLabel].join(": ");
						var $tooltip = $("#tooltip-" + dataPoint.datasetIndex);

						$tooltip.html(content);
						$tooltip.css({
							opacity: 1,
							top: dataPoint.y + "px",
							left: dataPoint.x + "px",
						});
					});
				}
			};
			var color = Chart.helpers.color;
			var lineChartData = {
				labels: [
			 		<?php
			 			$sql = "SELECT * FROM ejemplo";
			 			$res = mysql_query($sql,$conexion);
			 			while ($array = mysql_fetch_array($res)){
			 				?>'<?php echo $array["nombre"]." ".$array["apellido"] ?>',<?php
			 			}
			 		?>				
				],
				datasets: [
					{
						label: "Cantidades",
						backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
						borderColor: window.chartColors.red,
						pointBackgroundColor: window.chartColors.red,
						data: [
					 		<?php 
					 			$sql = "SELECT * FROM ejemplo";
					 			$res = mysql_query($sql,$conexion);
					 			while ($array = mysql_fetch_array($res)){
						 			echo $array["cantidad"] ?>,<?php
								}
							?>
						]
					},{
						label: "Sueldo",
						backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
						borderColor: window.chartColors.blue,
						pointBackgroundColor: window.chartColors.blue,
						data: [
					 		<?php 
					 			$sql = "SELECT * FROM ejemplo";
					 			$res = mysql_query($sql,$conexion);
					 			while ($array = mysql_fetch_array($res)){
						 			echo $array["sueldo"] ?>,<?php
								}
							?>
						]
					}
				]
			};
			window.onload = function() {
				var chartEl = document.getElementById("area-canvas");
				var chart = new Chart(chartEl, {
					type: "line",
					data: lineChartData,
					options: {
						responsive: true,
						title:{
							display: true,
							text: "Grafico Lineal"
						},
						tooltips: {
							enabled: false,
							mode: 'index',
							intersect: false,
							custom: customTooltips
						}
					}
				});
			};
		</script>
		<style>
			canvas{
				-moz-user-select: none;
				-webkit-user-select: none;
				-ms-user-select: none;
			}
			.chartjs-tooltip {
				opacity: 1;
				position: absolute;
				background: rgba(0, 0, 0, .7);
				color: white;
				border-radius: 3px;
				-webkit-transition: all .1s ease;
				transition: all .1s ease;
				pointer-events: none;
				-webkit-transform: translate(-50%, 0);
				transform: translate(-50%, 0);
				padding: 4px;
			}
			.chartjs-tooltip-key {
				display: inline-block;
				width: 10px;
				height: 10px;
			}
		</style>
	</head>
	<body>
	 	<div class="container">
		   	<h1>Chart Lineal</h1>
			<div id="canvas-container" style="width: 100%;">
				<canvas id="area-canvas"></canvas>
		</div>
		<div class="chartjs-tooltip" id="tooltip-0"></div>
		<div class="chartjs-tooltip" id="tooltip-1"></div>
	</body>
</html>
