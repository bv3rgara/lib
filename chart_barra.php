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
						},{
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
					 	/*{
					 		label: "datos 2",
					 		backgroundColor: "rgba(151, 187, 205, 0.5)",
					 		data:[10,7,5,6,6]
					 	},*/
				 	]
				 };
				var canvas = document.getElementById('area-canvas').getContext('2d');
				window.bar = new Chart(canvas, {
					type: "bar",
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
							text: "Grafico Barra",
						},
						scales: {
	                        yAxes: [{
	                            ticks: {
	                                beginAtZero:true,
	                                min: 5,
	                                max: 55,
	                            }
	                        }]
	                    }
					}
				});
				/*setInterval(function(){
					var newData = [
						[getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
						[getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
						[getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
					];		
					$.each(datos.datasets, function(i , dataset){
						dataset.data = newData[i];
					});
					window.bar.update();
				}, 5000);

				function getRandom(){
					return Math.round(Math.random() * 100);
				}*/
			});
		</script>
	</head>
	<body>
	 	<div class="container">
		   	<h1>Chart Barra</h1>
			<div id="canvas-container" style="width: 100%;">
				<canvas id="area-canvas"></canvas>
			</div>
		</div>
	</body>
</html>