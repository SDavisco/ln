<?php
//registro de unidad//
    @session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('bd/conexion.php');
    //CONSULTAS PARA TRAER DATOS
    $carrera = "SELECT nomb_carrera FROM carrera";
    $list_c = $conn->query($carrera);
    $sem_ac = "SELECT semestre FROM semestre_academico";
    $list_sa = $conn->query($sem_ac);
    $turno = "SELECT turno FROM turno WHERE id_turno = 1 or id_turno = 2 ";
    $list_t = $conn->query($turno);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar Alumno||||</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <title>REGISTAR-Alumnos</title>
</head>    
    <body>
       <?php include 'include/layout/header1.php';?>
    <form  enctype="multipart/form-data" name="unidades" action="bd/subir_a.php" method="POST" id="formulario">
    <label>NOMBRES</label>
    <input class="input" type="text" name="nombres" id="nombres">
    <label>APELLIDOS</label>
    <input class="input" type="text" name="apellidos" id="apellidos">
    <label>D.N.I</label>
    <input class="input" type="text" name="dni" id="dni">
    <label>CORREO</label>
    <input class="input" type="email" name="email" id="email">
    <label>CARRERA</label>
        <select name="carrera">
            <option value="0">turno</option>
            <?php WHILE($row = $list_c->fetch_assoc()){?>
		    <option value="<?php echo $row['nomb_carrera'];?>"><?php echo $row['nomb_carrera'];?>
            </option>
            <?php }?>
        </select>
    <label>TURNO</label>
        <select name="turno">
            <option value="0">--turno--</option>    
            <?php WHILE($row = $list_t->fetch_assoc()){?>
		    <option value="<?php echo $row['turno'];?>"><?php echo $row['turno'];?>
            </option>
            <?php }?>
        </select>
    <label>SEMESTRE LECTIVO</label>    
    <?php
    $cont = date('Y');
    ?>
    <select id="sel1" name="cont">
    <?php while ($cont >= 1990) { ?>
    <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
    <?php $cont = ($cont-1); } ?>
    </select>
    <select name="sem">
        <option value="I">I</option>
        <option value="II">II</option>
    </select>
    <input class="" type="submit" name="submit" value="aceptar" id="reset">
    </form>
<body>