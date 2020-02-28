<?php
//registro de profesores//
    @session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('../bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $docentes = "SELECT docente FROM docente";
    $list_d = $conn->query($docentes);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>DOCENTES</title>
    <link rel="stylesheet" href="css/main.css"  type="text/css">
</head>    
    <body>
        <!--<?php include 'layout/header.php';?>-->
        <form name="docente" action="bd/s_docente.php" method="POST" id="formulario">
            <label>
                docente
            </label>
            <input type="text" name="docente">
            <input class="" type="submit" name="submit" value="aceptar" id="reset">
        </form>
        <div class="SecDatos">
	    <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>LISTA DE DOCENTES </br>
                    </tr>
                </thead>
                <tbody>
	    <?php
	    WHILE ($row =  $list_d ->fetch_array(MYSQLI_BOTH)) { ?>
	               <tr>
                        <td><?php echo $row['docente']; ?></td>
                                                                                    
                    </tr>
            	<?php } ?>
                </tbody>
             </table>
            </div>
	</div>
	</body>
</html>