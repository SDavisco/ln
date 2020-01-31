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
                <li><a href="../cursos.php">Cotizaciones</a></li>
                <li><a href="../personal.php">Incidencias</a></li>
                <li><a href="../registrar_unidad.php">clientes</a></li>
                <li><a href="../registro_docente.php">reporte</a></li>
                <li><a href="../silabus.php">reporte</a></li>
                <li><a href="../subirDatos.php">reporte</a></li>
			</ul>
</div>
</body>
</html>
