<?php
//registro de unidad//
    @session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('bd/conexion.php');
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
    <title>REGISTAR-UNIDADES</title>
    <link rel="stylesheet" href="css/main.css"  type="text/css">
</head>    
    <body>
       <?php include 'include/layout/header.php';?>
    <form  enctype="multipart/form-data" name="unidades" action="bd/subir_unid.php" method="POST" id="formulario">
    <label>UNIDAD</label>
    <select class="input" name="unidad">
        <option value="0">unidad</option>
            <?php WHILE($row1 = $list_u->fetch_assoc()){?>
        <option value="<?php echo $row1['nomb_unidad'];?>"><?php echo $row1['nomb_unidad'];?>
        </option>
        <?php }?>
    </select>
    <label>DOCENTE</label>
    <select class="input" name="docente">
        <option value="0">docente</option>
            <?php WHILE($row2 = $list_d->fetch_assoc()){?>
        <option value="<?php echo $row2['docente'];?>"><?php echo $row2['docente'];?>
        </option>
        <?php }?>
    </select>
    <label>SEMESTRE ACADEMICO</label>
    <select class="input" name="sem_ac">
        <option value="0">sem-academico</option>
            <?php WHILE($row3 = $list_sa->fetch_assoc()){?>
        <option value="<?php echo $row3['semestre'];?>"><?php echo $row3['semestre'];?>
        </option>
        <?php }?>
    </select>
        <label>TURNO</label>
    <select class="input" name="turno">
        <option value="0">turno</option>
            <?php WHILE($row5 = $list_t->fetch_assoc()){?>
        <option value="<?php echo $row5['turno'];?>"><?php echo $row5['turno'];?>
        </option>
        <?php }?>
    </select>
    <label>SEMESTRE LECTIVO</label>
    <select class="input" name="sem_lectivo">
        <option value="0">sem-lectivo</option>
            <?php WHILE($row4 = $list_sl->fetch_assoc()){?>
        <option value="<?php echo $row4['sem_lectivo'];?>"><?php echo $row4['sem_lectivo'];?>
        </option>
        <?php }?>
    </select>

    <input type="checkbox" name="checkbox[]" value="EECTRONICA"> ELECTRONICA<br>
	<input type="checkbox" name="checkbox[]" value="CONTABILIDAD">CONTABILIDAD<br>
	<input type="checkbox" name="checkbox[]" value="ELECTRONICA">INFORMATICA<br>

    <input type="file" name="silabus" accept="application/pdf">    
    
    <input class="" type="submit" name="submit" value="aceptar" id="reset">
    
    </form>
<body>