<?php
include("index.php");
include("conexion.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/chosen/chosen.min.css" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h1>Chosen</h1>
            <table class="table table-hover">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <select name="miselect" class="chosen form-control" data-placeholder="Seleccione un empleado">
                                <option value="Seleccione empleados">
                                <?php
                                $sql="SELECT * FROM empleado";
                                $consulta = mysql_query($sql, $conexion);
                                while ($array = mysql_fetch_array($consulta)){?>
                                    <option value="<?php echo $array['id']?>">
                                        <?php echo $array['apellido']?>, <?php echo $array['nombre']?> - <?php echo $array['sueldo']?>
                                    </option><?php
                                }?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <select name="miselect[]" class="chosen form-control" data-placeholder="Seleccione muchos empleados" multiple>
                                <?php
                                $sql="SELECT * FROM empleado";
                                $consulta = mysql_query($sql, $conexion) ;
                                while ($array = mysql_fetch_array($consulta)) {?>
                                    <option value="<?php echo $array['id']?>">
                                        <?php echo $array['apellido']?>, <?php echo $array['nombre']?> - <?php echo $array['sueldo']?>
                                    </option><?php
                                }?>
                            </select>
                        </div>
                    </div>
                </form>
            </table>
        </div>
        <script type="text/javascript" src="js/jquery/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/chosen/chosen.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".chosen").chosen({no_results_text:'No hay resultados para '});
            });
            $(".chosen").chosen({allow_single_deselect: true});
            $(".chosen").chosen({allow_single_deselect: true, disable_search: true});
            $(".chosen").chosen({disable_search_threshold: 5});
        </script>
    </body>
</html>