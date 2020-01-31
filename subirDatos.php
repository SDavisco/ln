<?php
//registro de unidad didactica//
require ('conexion.php');
<!DOCTYPE html>
    //listar unidades didacticas
    $u_didactica = "SELECT nomb_unidad FROM unidad_didactica";
    $list_ud = $conn->query($u_didactica);
?>
<!DOCTYPE html>
<head>


</head>
<body>
    <?php include 'include/layout/header.php';?>
<form name="unidades_d" action="subird.php" method="POST" id="formulario">
<label>
    unidad didactica
</label>
<input type="text" name="unidad">
<input class="" type="submit" name="submit" value="aceptar" id="reset">
</form>
</body>