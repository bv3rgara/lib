<?php
include("index.php");
include("conexion.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>TableSorter</h1>
            <table id="myTable" class="table table-hover">
                <thead>
                    <tr class="active">
                        <th a>ID</th>
                        <th a>Nombre</th>
                        <th a>Apellido</th>
                        <th a>Cantidad</th>
                        <th a>Sueldo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql="SELECT * FROM empleado";
                    $consulta = mysql_query($sql, $conexion);
                    while ($fila = mysql_fetch_array($consulta)){?>
                        <tr>
                            <td><?php echo $fila['id'];?></td>
                            <td><?php echo $fila['nombre'];?></td>
                            <td><?php echo $fila['apellido'];?></td>
                            <td><?php echo $fila['cantidad'];?></td>
                            <td><?php echo $fila['sueldo'];?></td>
                        </tr>
                        <?php
                    }?>
                </tbody>
            </table>
        </div>
        <script src="js/jquery/jquery-3.1.1.min.js"></script>
        <script src="js/tablesorter/tablesorter.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $("#myTable").tablesorter();
                }
            );
        </script>
    </body>
</html>