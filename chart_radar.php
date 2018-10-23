<?php
include ("index.php");
include("conexion.php"); 
?>
<html>
	<head>
		<script type="text/javascript" src="js/jquery/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/chart/Chart.bundle.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				 var datos = {
				 	labels: [
				 		<?php
				 			$sql = "SELECT * FROM empleado";
				 			$res = mysql_query($sql,$conexion);
				 			while ($array = mysql_fetch_array($res)){
				 				?>'<?php echo $array["nombre"]." ".$array["apellido"] ?>',<?php
				 			}
				 		?>
				 	],
				 	datasets: [
				 		{
				 			label: "Cantidades",
				 			backgroundColor: "rgba(49,164,101, 0.5)",
				 			data: [
						 		<?php 
						 			$sql = "SELECT * FROM empleado";
						 			$res = mysql_query($sql,$conexion);
						 			while ($array = mysql_fetch_array($res)){
							 			echo $array["cantidad"] ?>,<?php
									}
								?>
					 		]
						 },	{
						 		label: "Sueldo",
						 		backgroundColor: "rgba(151, 187, 205, 0.5)",
						 		data:[
							 		<?php 
							 			$sql = "SELECT * FROM empleado";
							 			$res = mysql_query($sql,$conexion);
							 			while ($array = mysql_fetch_array($res)){
								 			echo $array["sueldo"] ?>,<?php
										}
									?>
						 		]
						 },
				 	]
				 };
				var canvas = document.getElementById('area-canvas').getContext('2d');
				window.bar = new Chart(canvas, {
					type: "radar",
					data: datos,
					options:{
						elements:{
							rectangle:{
								borderWidth: 1,
								borderColor: "rgb(0,255,0)",
								borderSkipped: "bottom",
							}
						},
						responsive: true,
						title:{
							display: true,
							text: "Grafico Radar",
						}
					}
				});
			});
		</script>
	</head>
	<body>
	 	<div class="container">
		   	<h1>Chart Radar</h1>
            <div id="canvas-container" class="center-block" style="width: 55%;">
				<canvas id="area-canvas"></canvas>
			</div>
		</div>
	</body>
</html>