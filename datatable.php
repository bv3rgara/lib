<?php
include("index.php");
include("conexion.php");
?>
<html>
	<head>
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="css/datatable/dataTables.min.css" rel="stylesheet">	
	    <script src="js/jquery/jquery-3.1.1.min.js"></script>
	    <script src="js/datatable/dataTables.min.js"></script>
	 	<script type="text/javascript">
	 		$(document).ready(function(){
	    		$('#myTable').DataTable();
			});
	 	</script>
	</head>
	<body>
		<div class="container">
			<h1>DataTable</h1>
			<table id="myTable" class="table table-hover">
			    <thead>
			        <tr class="active">
			            <th a>ID</th>
			            <th a>Nombre</th>
			            <th a>Apellido</th>
			            <th a>Cantidad</th>
			            <th a>Sueldo</th>
			            <th a>Editar - Borrar</th>
			        </tr>
			    </thead>
			    <tbody>		
					<?php 
					$sql="SELECT * FROM empleado";
					$consulta = mysql_query($sql, $conexion) ;
					while ($fila = mysql_fetch_array($consulta)) {
						?>
						<tr>
							<td><?php echo $fila['id']; ?></td>
							<td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['apellido']; ?></td>
							<td><?php echo $fila['cantidad']; ?></td>
							<td><?php echo $fila['sueldo']; ?></td>
							<td>
								<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<?php echo $fila['id']; ?>">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</a>
		              			<a class="btn btn-danger btn-sm"  onclick="delete_prueba('<?php echo $fila['id']; ?>')" >
		              				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
		              			</a>
		              		</td>
						</tr>
		              	<?php
					}?>
				</tbody>
			</table>
		</div>
	</body>
</html>