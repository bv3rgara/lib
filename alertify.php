<?php
include("index.php");
?>
<html>
	<head>
		<script type="text/javascript" src="js/alertify/alertify.js"></script>
		<link rel="stylesheet" href="css/alertify/themes/alertify.core.css"/>
		<link rel="stylesheet" href="css/alertify/themes/alertify.default.css"/>
		<script type="text/javascript">
			function xxx() {
				alertify.confirm("<B>ALERTA !!!</B><br><br><br><br>", 
				function (e) {
					if (e) {
						alertify.success("A c e p t a r . . .");
					} else { 
						alertify.error("C a n c e l a r . . .");
					}
				}); 
			}
		</script>
	</head>
	<body language=JavaScript onLoad="xxx()">
	</body>
</html>