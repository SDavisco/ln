<?php
	
	require ('back/conexion.php');

	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$contra = $_POST["pass"];
		$rs = mysqli_query($conn, "SELECT * FROM tbl_accesos WHERE FLD_COD = '$usuario' AND FLD_PAS = '$contra'");

		if($rs->num_rows>0){
			while($row = mysqli_fetch_array($rs)){
				//echo "Bienvenido ".$row['user_name'];
				@session_start();
				$_SESSION["user_name"]=$row["FLD_COD"];
				$_SESSION["user_cod"]=$row["FLD_ID"];
				$_SESSION["user_type"]=$row["FLD_COD_TIPO"];
				header("Location: index.php");
			}

		}else{
			echo "Usuario o contraseña no son válidos";
		}
		
	}else{
		echo "Llene el formu6slario";
	}
?>