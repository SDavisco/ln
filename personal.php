    <?php
//registro de personal//
@session_start();
	if(!isset($_SESSION["user_name"])) header("Location: login.php");
    require ('BD/conexion.php');
    $query_tp = "SELECT * FROM tbl_tipo";
    $p_tipo = $conn->query($query_tp);
    $query_turnos= "SELECT * FROM tbl_turnos";
    $turnos = $conn->query($query_turnos);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Personal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <meta charset="utf-8">
</head>
<body>
<?php include 'include/layout/header.php';?>
    
    <div class="titulo">
	<h1>Registro de Personal </h1>
	</div>
    <div class="SecForm">
     <form name="form" action="bd/vcliente.php" method="POST" id="formulario">
     <div class="form-group">
        <label>
            Nombre Completo     
            </label>
        <input type="text" name="fld_nom">
     </div>
     <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="fld_desc">
     </div>
     <div class="form-group">
        <label>D.N.I</label>
        <input type="text" name="fld_dni">
     </div>
     <div class="form-group">
        <label>Nombre de usuario</label>
        <input type="text" name="fld_user">
     </div>
     <div class="form-group">
        <label>Sexo</label>
        <input type="email" name="fld_sex">
     </div>
     <div class="form-group">
			<label>Fecha Nacimiento</label>
			<input class="input" type="date" name="fld_fec_nac" id="date">
	 <div class="form-group">
        <label>Correo Electronico</label>
        <input type="email" name="fld_mail">
     </div>
    </div>
    <div class="form-group">
        <label>Tipo de Personal</label>
        <select name="fld_tipo">
            <option value="0">tipo de cliente</option>
            <?php WHILE($row = $p_tipo->fetch_assoc()){?>
		    <option value="<?php echo $row['FLD_ID'];?>"><?php echo $row['FLD_NOM'];?>
            </option>
            <?php }?>
        </select>
    </div>
    <input type="submit" name="submit" value="Registrar">
    </form>
    </div>
 
 
    <div class="SecDatos">
	    <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>R.U.C</th>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
	    <?php
	    WHILE ($row =  $query_c ->fetch_array(MYSQLI_BOTH)) { ?>
	               <tr>
                        <td><?php echo $row['cli_ruc']; ?></td>                        
                        <td><?php echo $row['cli_nomb']; ?></td>
                        <td><?php echo $row['cli_cont']; ?></td>
                        <td><?php echo $row['cli_phone']; ?></td>
                        <td><?php echo $row['cli_mail'];?></td>
                    </tr>
            <?php } ?>
                </tbody>
             </table>
            </div>
	</div>
</body>
</html>