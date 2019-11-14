<?php
	@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
?>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<title>Perfil</title>

	</head>
	<link rel="stylesheet" href="css/main.css"  type="text/css">
	<body>
		<?php include 'include/layout/header.php';?>
	</body>
</html>