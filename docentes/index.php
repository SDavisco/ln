<?php
//registro de profesores//
    @session_start();
    if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('../bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $docentes = "SELECT docente FROM docente";
    $list_d = $conn->query($docentes);
?>
<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <title>DOCENTES</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dist/css/slider.css">
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
</head>    
    <body class="hold-transition sidebar-mini layout-fixed">
    <?php include 'layout/header.php';?>

    <div id="slider-wrapper">
            <div class="inner-wrapper">
          <input checked type="radio" name="slide" class="control" id="Slide1" />
        <label for="Slide1" id="s1"></label>
        <input type="radio" name="slide" class="control" id="Slide2" />
        <label for="Slide2" id="s2"></label>
        <input type="radio" name="slide" class="control" id="Slide3" />
        <label for="Slide3" id="s3"></label>

         <div class="overflow-wrapper">
      <a class="slide" href=""><img src="../include/1.png" /></a>
      <a class="slide" href=""><img src="../include/2.jpg" /></a>
      <a class="slide" href=""><img src="../include/3.jpg" /></a>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</div>
  </body>