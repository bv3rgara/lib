<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="css/animate/animate.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
        <link rel="shortcut icon" href="images/favicon.png"/>
        <title>LIB</title>
        <style type="text/css">
            .efecto{
                color: #fff;
                background: #31a465;
                padding: 5px 7px;
                box-shadow: 0px 5px 10px #000;
                -moz-box-shadow: 0px 5px 10px #000;
                -webkit-box-shadow: 0px 5px 10px #000;
                border-radius: 3px;
                -moz-   border-radius: 3px;
                -webkit-border-radius: 3px;
            }
            .efecto:hover{
                background: #2cca6b;
                color: #fff;
                box-shadow: 0px 0px 15px #000;
                -moz-box-shadow: 0px 0px 15px #000;
                -webkit-box-shadow: 0px 0px 15px #000;
            }
            a{
                text-decoration: none;
            }
            a:hover{
                text-decoration: underline;
            }   
            header{
                width: 100%;
                float: left;
                box-shadow: 0px 5px 15px #000;
                -moz-box-shadow: 0px 5px 15px #000;
                -webkit-box-shadow: 0px 5px 15px #000;
            }
            #subheader{
                width: 960px;
                max-width: 1000px;
                margin:auto;
            }
            #logotipo a{
                font-weight: bold;
                color: #31a465;
                font-family: exo;
                font-size: 60px;
                transition: 400ms linear;
                -webkit-transition: 400ms ease;
                -o-transition: 400ms ease;
            }
            #logotipo a:hover{
                text-decoration: none;
            }
            #logotipo{
                float:left;
                width: 300px;
                padding: 20px 0px;
            }
            .header2{
                position: fixed;
            }
            .header2 #logotipo a{
                font-size: 30px;
                transition: 400ms ease;
                -webkit-transition: 400ms ease;
                -o-transition: sms ease;
            }
            /*///////////////////////////////////////////////////////////////////////////////////////////////////*/
            * {
                margin: 0px;
                padding: 0px;
            }
            #xxx > ul {
                padding: 1px 0;
                margin: 0px;
                list-style: none;
                width: 100%;
                height: 21px;
                border-top: 1px solid #FFFFFF;
                border-bottom: 1px solid #FFFFFF;
                font: normal 8pt verdana, arial, helvetica;
            }
            li{
                list-style: none;
            }
            .navi li a{
                font: normal 8pt verdana, arial, helvetica;
                background: #31a465;
                color: #fff;
                text-decoration: none;
                padding: 5px 2px;
                display: block;
                width: 132px;
                text-align: center;
                border: 1px solid #1e8b4a;
            }
            .navi li a:hover{
                background: #2cca6b;
            }
            .navi > li{
                float: left;
            }
            .navi li ul{
                display: none;
                position: absolute;
                min-width: 132px;
            }
            .navi li:hover > ul{
                display: block;
            }
            .navi li ul li {
                position: relative;
            }
            .navi li ul li ul {
                right: -131px;
                top: 0px;
            }
        </style>
    </head>
    <body>
        <div id="xxx" class="option animated flipInY">
            <header>
                <div id="subheader">
                    <div id="logotipo">
                        <p><a href="">Lib JS</a></p>
                    </div>
                    <nav>
                        <ul class="navi">
                            <li><a href="/lib/index.php">INICIO</a></li>
                            <li><a href="#">LIBRERIAS</a>
                                <ul>
                                    <li><a href='/lib/chosen.php'>Chosen</a></li>
                                    <li><a href="/lib/datatable.php">DataTable</a></li>
                                    <li><a href="/lib/tablesorter.php">TableSorter</a></li>
                                    <li><a href="/lib/pace.php">Pace</a></li>
                                    <li><a href="/lib/alertify.php">Alertify</a></li>
                                    <li><a href="#">Chart<img src="images/flecha.png" style="margin-left: -9px" width="10px" height="10px" align="right"></a>
                                        <ul>
                                            <li><a href="/lib/chart_barra.php">Barra</a></li>
                                            <li><a href="/lib/chart_lineal.php">Lineal</a></li>
                                            <li><a href="/lib/chart_radar.php">Radar</a></li>
                                            <li><a href="/lib/chart_polar.php">Polar</a></li>
                                            <li><a href="/lib/chart_burbuja.php">Burbuja</a></li>
                                            <li><a href="#">Circular<img src="images/flecha.png" style="margin-left: -9px" width="10px" height="10px" align="right"></a>
                                                <ul>
                                                    <li><a href="/lib/chart_circular1.php">Circular Pie</a></li>
                                                    <li><a href="/lib/chart_circular2.php">Circular Doughnut</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">UTILIDADES</a>
                                <ul>
                                    <li><a href="/lib/modal.php">Modal</a></li>
                                    <li><a href="/lib/completar_form.php">Autocompletar</a></li>
                                    <li><a href="/lib/botones.php">Botones</a></li>
                                    <li><a href="#">Fondos<img src="images/flecha.png" style="margin-left: -9px" width="10px" height="10px" align="right"></a>
                                        <ul>
                                            <li><a href="/lib/fondo1.php">Fondo 1</a></li>
                                            <li><a href="/lib/fondo2.php">Fondo 2</a></li>
                                            <li><a href="/lib/fondo3.php">Fondo 3<img src="images/flecha.png" style="margin-left: -9px" width="10px" height="10px" align="right"></a>
                                                <ul>
                                                    <li><a href="">Sub-Submenu 1</a></li>
                                                    <li><a href="">Sub-Submenu 2</a></li>
                                                    <li><a href="">Sub-Submenu 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/lib/logout.php">SALIR</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;<br>
        <input type="button" id="accion" class="efecto" value="Ver efecto" onclick="cambiarClase()">
        <script type="text/javascript">
            var contador = 1;
            function cambiarClase(){
                if (contador == 1) {
                    document.getElementById('xxx').className = 'animated bounceInUp';
                    contador = 2;
                } else {
                    document.getElementById('xxx').className = '';
                    contador = 1;
                }
            }
            $(document).ready(function() {
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 0) {
                        $('header').addClass('header2');
                    }else{
                        $('header').removeClass('header2');
                    }
                });
            });     
        </script>
    </body>
</html>