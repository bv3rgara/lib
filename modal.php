<?php
include("index.php");
?>
<html>
	<head>
		<script src="js/jquery/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<style>
			/* estilos de la cabecera login "boton login" */
			.modal-header, h4, .close {
				background-color: #5cb85c;
				color:white !important;
				text-align: center;
				font-size: 30px;
			}
			.modal-footer {
				background-color: #f9f9f9;
			}
			/* estilos del modal "ver informacion" */
			#popup {
				visibility: hidden;
				opacity: 0;
				margin-top: -300px;
			}             
			#popup:target {
				visibility:visible;
				opacity: 1;
				background-color: rgba(0,0,0,0.8);
				position: fixed;
				top:0;
				left:0;
				right:0;
				bottom:0;
				margin:0;
				z-index: 999;
				-webkit-transition:all 1s;
				-moz-transition:all 1s;
				transition:all 1s;
			}
			.popup-contenedor {
				position: relative;
				margin:7% auto;
				padding:30px 50px;
				background-color: #fafafa;
				color:#333;
				border-radius: 3px;
				width:50%;
			}
			a.popup-cerrar {
				position: absolute;
				top:3px;
				right:3px;
				background-color: #333;
				padding:7px 10px;
				font-size: 20px;
				text-decoration: none;
				line-height: 1;
				color:#fff;
			}
		</style>  
	</head>
	<body>
		<div class="container">
			<h1>Modal</h1>
			<button type="button" class="btn btn-success btn-lg" id="myBtn">Login</button>
			<a href="#popup">Ver mas información</a>
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="padding:35px 50px;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
						</div>
						<div class="modal-body" style="padding:40px 50px;">
							<form role="form">
								<div class="form-group">
									<label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
									<input type="text" class="form-control" id="usuario" placeholder="Ingresar email">
								</div>
								<div class="form-group">
									<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
									<input type="text" class="form-control" id="psw" placeholder="Ingresar contraseña">
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="" checked>Recordar</label>
								</div>
								<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
							<p>No es miembro? <a href="#">Registrarse</a></p>
							<p>Olvido la <a href="#">Contraseña?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="popup">
			<div class="popup-contenedor">
				<h2>Titulo de la Modal</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor deleniti in porro, officia velit quaerat modi doloribus similique aspernatur impedit quod, laudantium reiciendis! Similique nihil eius esse, illum assumenda soluta!. </p>
				<a class="popup-cerrar" href="#">X</a>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				$("#myBtn").click(function(){
					$("#myModal").modal();
				});
			});
		</script>
</body>
</html>