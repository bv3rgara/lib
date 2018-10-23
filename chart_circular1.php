<?php
include("index.php");
include("conexion.php"); 
?>
<html>
	<head>
		<script type="text/javascript" src="js/jquery/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/chart/Chart.bundle.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var datos = {
					type: "pie",
					data: {
						datasets: [{
							data:
						 		[
						 		<?php 
						 			$sql = "SELECT * FROM ejemplo";
						 			$res = mysql_query($sql,$conexion);
						 			while ($array = mysql_fetch_array($res)){
							 			echo $array["cantidad"] ?>,<?php
									}
								?>
								],
							backgroundColor: [
								"#f7464a",
								"#31a465",
								"#fdb45c",
								"#949fb1",
								"#200fb1",
								"#fd9fb1",
							],
						}],
						labels: [
					 		<?php
					 			$sql = "SELECT * FROM ejemplo";
					 			$res = mysql_query($sql,$conexion);
					 			while ($array = mysql_fetch_array($res)){
					 				?>'<?php echo $array["nombre"]." ".$array["apellido"] ?>',<?php
					 			}
					 		?>
						]
					},
					options: {
						responsive: true,
						title:{
							display: true,
							text: "Grafico Circular",
						}
					}
				};
				var canvas = document.getElementById('area-canvas').getContext('2d');
				window.pie = new Chart(canvas, datos);
			});
		</script>
	</head>
	<body>
		<div id="canvas-container" style="width: 50%;">
			<canvas id="area-canvas" width="500" height="350"></canvas>
		</div>
	</body>
</html>