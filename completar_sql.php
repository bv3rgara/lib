 <?php
//header('Content-Type: text/txt; charset=utf-8');
include("conexion.php");
//$id = 2;
$entrada = 1;
$id = $_POST['id'];
$consulta = "SELECT * FROM ejemplo WHERE id = '$id'";
$registros = mysql_query ($consulta,$conexion);
if ($entrada == 1) {
	$vec = new stdClass();
	while ($reg=mysql_fetch_array($registros)){
		$vec->apellido = $reg['apellido'];
	    $vec->nombre = $reg['nombre'];
	    $vec->cantidad = $reg['cantidad'];
	}
} elseif ($entrada == 2) {
	while ($reg=mysql_fetch_array($registros)){
		$vec[]=$reg["apellido"];
		$vec[]=$reg["nombre"];
		$vec[]=$reg["cantidad"];
	}
} elseif ($entrada == 3) {
	while ($reg=mysql_fetch_array($registros)){
		$vec[]=$reg;
	}
}
$cad=json_encode($vec);
echo $cad;
?>