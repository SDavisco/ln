<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $silabus = "SELECT silabus FROM unidad_docente";
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
    <?php WHILE($row = $list_s->fetch_assoc()){?>
    <div>
    <label>hola</label>
    <iframe src="silabus/<?php echo $row['silabus']; ?>" alt="">
    </div>
    <?php }?>
	</body>
</html>