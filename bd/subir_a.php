<?php
    require_once('conexion.php');
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $carrera = $_POST['carrera'];
    $turno = $_POST['turno']
    $lectivo = $_POST['lectivo']
    
    $nuevo_alum ="INSERT INTO alumno"