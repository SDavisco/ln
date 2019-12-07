<?php
require ('conexion.php');
<!DOCTYPE html>
    //listar unidades didacticas
    $u_didactica = "SELECT nomb_unidad FROM unidad_didactica";
    $list_ud = $conn->query($u_didactica);
?>
<form name="unidades_d">
<label>
    unidad didactica
</label>
<input type="text" name="unidad">
<input class="" type="submit" name="submit" value="aceptar" id="reset">
</form>