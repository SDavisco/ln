<?php
	require ('conexion.php');
    //traer el id de solicitud de cotizacion
    $id=$_GET['id'];

$delete = "DELETE FROM unidad_docente WHERE id_unidad='$id'";
    if (mysqli_query($conn, $delete))
        {

        }
else{
    echo "error". $delete."<br>".mysqli_error($conn);
}
?>
<script language="javascript">
window.location="../docentes/silabus.php";
</script>