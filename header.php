<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/maingg.css">

</head>
<body>
<div id="nav">
			<span style="float:right" class="item" id="nombre_usuario"><a href="logout.php">Cerrar sesion</a></span>
			<span class="item" style="float:right"><?php echo $_SESSION["user_name"]; ?></span>
			<ul>
                <li><a href="registrar_unidad.php">Registro de Unidad</a></li>
                <li><a href="incidencias.php">Incidencias</a></li>
                <li><a href="clientes.php">clientes</a></li>
                <li><a href="getdatos2.php">reporte</a></li>
			</ul>
</div>
</body>
</html>
