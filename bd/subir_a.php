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
    
$nuevo_alum ="INSERT INTO alumno (dni, nombre, apellido, correo, carrera, semestre_academico,semestre_lectivo, turno) 
VALUES ('$dni', '$nombre', '$apellido', '$email', '$carrera', '$semestre', '$s_l', '$turno')";
{
    if (mysqli_query($conn, $acceso))
        {

        }
}
else{
    echo "error". $nuevo_alum."<br>".mysqli_error($conn);
}
?>
<script language="javascript">
window.location="../registrar_alumno.php";