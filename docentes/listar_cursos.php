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
		<form name="unidades_d" action="bd/subird.php" method="POST" id="formulario">
			<label>
				unidad didactica
			</label>
			<input type="text" name="unidad">
			<input class="" type="submit" name="submit" value="aceptar" id="reset">
		</form>
		<!-- mostrar datos-->
		<div class="SecDatos">
	    <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>LISTA DE CURSOS </br>
                    </tr>
                </thead>
                <tbody>
	    <?php
	    WHILE ($row =  $list_ud ->fetch_array(MYSQLI_BOTH)) { ?>
	               <tr>
                        <td><?php echo $row['nomb_unidad']; ?></td>
                                                                                    
                    </tr>
            	<?php } ?>
                </tbody>
             </table>
            </div>
	</div>
	</body>
</html>