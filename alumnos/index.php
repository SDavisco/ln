<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('../bd/conexion.php');
	//CONSULTAS PARA TRAER DATOS
	$u_didactica = "SELECT nomb_unidad FROM unidad_d";
	$list_ud = $conn->query($u_didactica);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Perfil</title>
		<link rel="stylesheet" href="css/main.css"  type="text/css">
	</head>
	
	<body>
	<?php include 'layout/header.php';?>

	</body>
</html>