<?php
    require_once('conexion.php');
    $dni = $_POST['dni'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = $_POST['email'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $s_l = $_POST['sem_lectivo'];
    $turno = $_POST['turno'];
    $pass = $_POST['pass'];
    
$nuevo_alum ="INSERT INTO alumno (dni, nombre, apellido, correo, carrera, semestre_academico,semestre_lectivo, turno, pass) 
VALUES ('$dni', '$nombre', '$apellido', '$email', '$carrera', '$semestre', '$s_l', '$turno', '$pass' )";

    if (mysqli_query($conn, $nuevo_alum))
        {

        }

else{
    echo "error". $nuevo_alum."<br>".mysqli_error($conn);
}
?>
<script language="javascript">
window.location="../docentes/registrar_alumno.php";
</script>