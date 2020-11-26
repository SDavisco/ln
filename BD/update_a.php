<?php
    require_once('conexion.php');
    $id=$_POST['id_al'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $s_l = $_POST['sem_lectivo'];
    $turno = $_POST['turno'];
    $pass = $_POST['pass'];
    
$update_alum ="UPDATE alumno SET dni='$dni', nombre='$nombre', apellido='$apellido', correo='$email', carrera='$carrera', semestre_academico='$semestre', semestre_lectivo='$s_l', turno='$turno', pass='$pass' WHERE id_al='$id'";

if (mysqli_query($conn, $update_alum))
{
}
else{
    echo "error". $update_alum."<br>".mysqli_error($conn);
}
?>
<script language="javascript">
window.location="../docentes/registrar_alumno.php";
</script>
