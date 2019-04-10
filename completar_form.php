<?php
include("index.php");
?>
<html>
    <body onload="document.getElementById('id').focus();">
        <div class="container">
            <h1>AutoCompletar</h1>
            <table id="myTable" class="table table-hover">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="id">ID:</label>
                        <input type="text" id="id" name="id" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="cantidad">Cantidad:</label>
                        <input type="text" id="cantidad" name="cantidad" value="" class="form-control"/>
                    </div>
                </form>
            </table>
        </div>
        <script type="text/javascript" src="js/jquery/jquery-3.1.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#id").focusout(function(){
                    $.ajax({
                        url:'completar_sql.php',
                        type:'POST',
                        dataType:"json",
                        data:{id:$('#id').val()}
                    }).done(function(respuesta){
                        //alert(respuesta);
                        //$("#apellido").val('pepe');
                        var entrada = 1;
                        if (entrada == 1) {
                            $("#apellido").val(respuesta.apellido);
                            $("#nombre").val(respuesta.nombre);
                            $("#cantidad").val(respuesta.cantidad);
                        } else if (entrada == 2){
                            $("#apellido").val(respuesta[0]);
                            $("#nombre").val(respuesta[1]);
                            $("#cantidad").val(respuesta[2]);
                        } else if (entrada == 3){
                            $("#apellido").val(respuesta ["0"] ["apellido"]);
                            $("#nombre").val(respuesta ["0"] ["nombre"]);
                            $("#cantidad").val(respuesta ["0"] ["cantidad"]);
                        }
                    }).fail( function( jqXHR, textStatus, errorThrown){
                        //alert( 'Error!!' );
                    });
                });
            });
        </script>
    </body>
</html>