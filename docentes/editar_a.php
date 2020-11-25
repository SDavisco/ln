<?php
@session_start();
    include ('conexion.php');
    if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('conexion.php');
    //traer el id de solicitud de cotizacion
    $id=$_GET['id'];
    //llamar a las incidencias de la SC
    $query = "SELECT id_sc, inc_num, vendedor, inc_fecha, proceso, obs 
    FROM INCIDENCIA WHERE id_sc=$id ORDER BY DATE_FORMAT(inc_fecha, '%d-%m-%Y')  ASC";
    $incidencia=$conn ->query($query);
    $query1 = "SELECT id_sc, vendedor, cli_nomb, cli_cont, cli_mail, emp_nomb, correo_fecha, 
    fin_fecha, canal_seguimiento, descripcion FROM S_COTIZACION  WHERE id_sc=$id";
    $s_cotizacion = $conn ->query($query1);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>INCIDENCIAS SC-<?php echo $id?>- Davisco Seguimiento </title>
		<meta charset="utf-8"/>
		<script language="javascript" src="js/jquery-3.3.1.min.js"></script>
		<script language="javascript" src="js/includes.js"></script>
		<script language="javascript" src="js/CleanForm.js"></script>
		<link rel="stylesheet" href="css/main.css"  type="text/css">
	</head>
	<body>
    <?php
    include 'include/layout/header.php';
    ?>
    <div class="IdCotizacion">
            <h1>Solicitud de Cotizacion #<?php echo $id?></h1>
            
    </div>
    <div class="DatosSolicitud">
      <?php $DatosSC= $s_cotizacion ->fetch_array(MYSQLI_BOTH)?>
            <ul>
                <li>
                    <h4>Cliente</h4>
                    <p><?php echo $DatosSC['cli_nomb']?></p>
                </li>
                <li>
                    <h4>Persona de Contacto</h4>
                    <p><?php echo $DatosSC['cli_cont']?></p>
                </li>
                <li>
                    <h4>Correo Electronico</h4>
                    <p><?php echo $DatosSC['cli_mail']?></p>
                </li>
                <li>
                    <h4>Fecha de Solicitud</h4>
                    <p><?php echo $DatosSC['correo_fecha']?></p>
                </li>
                <li>
                    <h4>Fecha Limite</h4>
                    <p><?php echo $DatosSC['fin_fecha']?></p>
                </li>
                <li>
                    <h4>Descripcion</h4>
                    <p><?php echo $DatosSC['descripcion']?></p>
                </li>
                
            </ul>
      
        
    </div>
  <?php  WHILE ($row =  $incidencia ->fetch_array(MYSQLI_BOTH)) { ?>
            <div class="ListIncidencias">
            <p><?php echo "proceso: ".$row['proceso']?></p>
            <p><?php echo "observacion: ".$row['obs']?></p>
            <p><?php echo "fecha y hora:  ". $row['inc_fecha']?></p>
            <p><?php echo "realizado por:  ". $row['vendedor']?></p>
            </div>
    <?php } ?>
    </body>
</html>