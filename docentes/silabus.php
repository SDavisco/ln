<?php
//subir silabus//
    @session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('../bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $docentes = "SELECT docente FROM docente";
    $list_d = $conn->query($docentes);
    $sem_ac = "SELECT semestre FROM semestre_academico";
    $list_sa = $conn->query($sem_ac);
    $sem_lec = "SELECT sem_lectivo FROM semestre_lectivo";
    $list_sl = $conn->query($sem_lec);
    $unidad = "SELECT nomb_unidad FROM unidad_d";
    $list_u = $conn->query($unidad);
    $turno = "SELECT turno FROM turno";
    $list_t = $conn->query($turno);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>SILABUS</title>
    <link rel="stylesheet" href="css/main.css"  type="text/css">
</head>    
    <body>
        <!--<?php include 'layout/header.php';?>-->
    <form name="unidades" action="bd/s_silabus.php" method="POST" enctype="multipart/form-data" id="formulario">
    <label> Archivo </label>
    <input type="file" name="silabus" accept="application/pdf">
    <input class="" type="submit" name="submit" value="aceptar" id="reset">
    </form>
<body>