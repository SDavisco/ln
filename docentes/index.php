<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('../bd/conexion.php');
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