<?php
	
	require ('conexion.php');

	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$contra = $_POST["pass"];
		$rs = mysqli_query($conn, "SELECT * FROM tbl_accesos WHERE FLD_COD = '$usuario' AND FLD_PAS = '$contra'");

		if($rs->num_rows>0){
			while($row = mysqli_fetch_array($rs)){
				//echo "Bienvenido ".$row['user_name'];
				@session_start();
				$_SESSION["FLD_COD"]=$row["FLD_COD"];
				$_SESSION["FLD_ID"]=$row["FLD_ID"];
				$_SESSION["FLD_COD_TIPO"]=$row["FLD_COD_TIPO"];
				header("Location: index.php");
			}

		}else{
			echo "Usuario o contraseña no son válidos";
		}
		
	}else{
		echo "Llene el formu6slario";
	}
?>