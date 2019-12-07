<?php
@session_start();
if(!isset($_SESSION["user_name"])) header("Location: login.php");
	require ('conexion.php');
	//llamar para lista de clientes
	$query      = "SELECT * FROM CLIENTES ORDER BY cli_id ASC";
	$query1     = "SELECT canal_seguimiento FROM CANAL_SEGUIMIENTO";
	$resultado  = $conn->query($query);
	$resultado1 = $conn->query($query1);
	//mostrar cotizaciones
	$cotizacion = "SELECT * FROM S_COTIZACION ORDER BY id_sc DESC";
	$query_c    = $conn ->query($cotizacion);
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>SEGUIMIENTO  - Davisco Seguimiento </title>
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
	<div class="titulo">
	<h1>Nueva Solicitud de Cotizacion </h1>
	</div>
	<div class="SecForm">
	<form name="form" action="vsc.php" method="POST" id="formulario">
		<div class="form-group">
			<label>
				Empresa-Cliente
			</label>
			<select class="input" name="cliente" id="cliente" onchange="funcionCliente()">
				<option value="0">seleccionar cliente</option>
				<?php WHILE($row = $resultado->fetch_assoc()){?>
				<option value="<?php echo $row['cli_nomb'];?>"><?php echo $row['cli_nomb'];?>
				</option>
            	<?php }?>
			</select>
		</div>
        <div id="GetDatosCliente">
            <div class="form-group">
    			<label>
    				Cliente-Contacto
    			</label>
    			<input class="input" name="cli_cont" id="cli_cont">
    		</div>
    		<div class="form-group">
    			<label>
    				Correo de Cliente
    			</label>
    			<input class="input" type="email" name="cliente_mail" id="cliente_email">
    		</div>
    		<div class="form-group">
    		   <label>
    			   Tipo de Cliente
    		   </label>
    		   <input class="input" type="text" name="cli_type" id="cli_type">
    		</div>  
		</div>       
		<div class="form-group">
			<label>
				Fecha de Correo
			</label>
			<input class="input" type="date" name="inc_fecha" id="date">
		</div>
		<div class="form-group">
			<label>
				Fecha Limite
			</label>
			<input class="input" type="date" name="end_fecha" id="date">
		</div>
		<div class="form-group">
			<label>
				Canal de Seguimiento
			</label>
			<select class="input" name="type_sg" id="type_sg">
				<option value="0">seleccionar seguimiento</option>
					<?php WHILE($row1 = $resultado1->fetch_assoc()){?>
				<option value="<?php echo $row1['canal_seguimiento'];?>"><?php echo $row1['canal_seguimiento'];?>
				</option>
            	<?php }?>
			</select>
		</div>
	    <div class="form-group">
	        <label>
	            Usuario
	        </label>
	        <input class="input" type="text" name="vendedor" id ="user" value="<?php echo $_SESSION["user_name"];?>" readonly="readonly">
	    </div>
        	<br>
	    <div class="form-group">
    		<label>
    		    Descripcion
    		</label>
    		<textarea class="input textarea" name="descripcion" id="descripcion"></textarea>
    	</div>
    	<br>
		<input class="" type="submit" name="submit" value="aceptar" id="reset">
	    </form>
	</div>
	<div class="SecDatos">
	    <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Solicitud </br>
                    Cotizacion</th>
                    <th>Vendedor</th>
                    <th>Cliente</th>
                    <th>Contacto</th>
                    <th>Correo</th>
                    <th>Fecha de Solicitud</th>
                    <th>Fecha Limite</th>
                    <th>Canal de Seguimiento</th>
                    <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
	    <?php
	    WHILE ($row =  $query_c ->fetch_array(MYSQLI_BOTH)) { ?>
	               <tr>
                        <td><?php echo 'SC-'. $row['id_sc']; ?></td>
                        <td><?php echo $row['vendedor']; ?></td>                        
                        <td><?php echo $row['cli_nomb']; ?></td>
                        <td><?php echo $row['cli_cont']; ?></td>
                        <td><?php echo $row['cli_mail']; ?></td>
                        <td><?php echo $row['correo_fecha'];?></td>
                        <td><?php echo $row['fin_fecha']; ?></td>
                        <td><?php echo $row['canal_seguimiento']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                                                                                    
                    </tr>
            <?php } ?>
                </tbody>
             </table>
            </div>
	</div>
	</body>
</html>
