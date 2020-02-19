<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $silabus = "SELECT * FROM unidad_docente";
    $list_s = $conn->query($silabus);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Perfil</title>
		<link rel="stylesheet" href="css/main.css"  type="text/css">
    </head>	
	<body>
    $query = "SELECT id_sc, cli_nomb, descripcion, correo_fecha, fin_fecha
                    FROM S_COTIZACION ORDER BY DATE_FORMAT(correo_fecha, '%d-%m-%Y')  ASC";
                    $reporte = $conn->query($query);
    <?php WHILE($row = $list_s->fetch_assoc()){?>
    <div>
    <label>UNIDAD DIDACTICA: <?php echo $row ['nomb_unidad']; ?></label><br>
    <label>DOCENTE: <?php echo $row ['docente']; ?></label><br>
    <label>DOCENTE: <?php echo $row ['semestre_academico']; ?></label><br>
    <embed src="silabus/<?php echo $row['silabus']; ?>" alt="">
    </div>
    <?php }?>
	</body>
</html>