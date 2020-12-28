<?php
//registro de profesores//
    @session_start();
    if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('../bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
?>
<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- jQuery -->
      <script src="../plugins/jquery/jquery.min.js"></script>
      <script src="../dist/js/slider.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <title>ALUMNOS</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../dist/css/slider.css">

</head>    
    <body class="hold-transition sidebar-mini layout-fixed">
    <?php include 'layout/header.php';?>
    <header class="cont-slider">
    <section class="slider">
      <article class="slide uno"><span>Mira </span></article><!--
      --><article class="slide dos"><span>Como </span></article><!--
      --><article class="slide tres"><span>Funciona</span></article><!--
      --><article class="slide cuatro"><span>Este</span></article><!--
      --><article class="slide cinco"><span>Slider</span></article>
    </section>
</header>
</body>