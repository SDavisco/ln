<?php
//listado//
	require_once('conexion.php');
    date_default_timezone_set('America/Lima');
    $user_name = $_POST['vendedor'];
    $cli_nomb=$_POST['cliente'];
    $cli_cont = $_POST['cli_cont']; 
    $cli_mail=$_POST['cliente_mail'];
    $cli_type=$_POST['cli_type'];
    $emp_nomb= "DAVISCO S.A";
    $fecha1 = $_POST['inc_fecha'];
    $fecha2 = $_POST['end_fecha'];
    $type_sg = $_POST['type_sg'];
    $fecha_i = date("Y-m-d", strtotime($fecha1));
    $fecha_e = date("Y-m-d", strtotime($fecha2));
    $inc_proc=$_POST['proceso'];
    $descripcion= $_POST['descripcion'];
	$sql="INSERT INTO S_COTIZACION (vendedor, cli_nomb, cli_cont, cli_mail, cli_type, emp_nomb, correo_fecha, fin_fecha, canal_seguimiento, descripcion ) VALUES ('$user_name', '$cli_nomb', '$cli_cont', '$cli_mail','$cli_type', '$emp_nomb', '$fecha_i', '$fecha_e', '$type_sg', '$descripcion')"; 
if (mysqli_query($conn, $sql))
{
    
}
else{
    echo "error". $sql."<br>".mysqli_error($conn);
}
?>
<script language="javascript">
window.location="cotizaciones.php";
</script> 