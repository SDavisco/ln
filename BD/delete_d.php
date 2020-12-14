<?php
	require ('conexion.php');
    //traer el id de solicitud de cotizacion
    $id=$_GET['id'];

$delete = "DELETE FROM docente WHERE id_docente='$id'";
    if (mysqli_query($conn, $delete))
        {

        }
else{
    echo "error". $delete."<br>".mysqli_error($conn);
}
?>
<script language="javascript">
window.location="../docentes/docentes.php";
</script>