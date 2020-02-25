<?php
    require_once('conexion.php');
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $carrera = $_POST['carrera'];
    $turno = $_POST['turno']
    $lectivo = $_POST['lectivo']
    
$nuevo_alum ="INSERT INTO alumno (dni, nombre, apellido, correo, carrera, semestre_academico,semestre_lectivo, turno) 
VALUES ('$dni', '$nombres', '$apellidos', '$email', '$carrera', 'I', '$lectivo', '$turno')";
if (mysqli_query($conn, $nuevo_alum))
{
    
}
else{
    echo "error". $docentes."<br>".mysqli_error($conn);
}
?>
<script language="javascript">
window.location="registrar_alumno.php";