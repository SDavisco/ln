<?php
	
	require ('bd/conexion.php');

	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$contra = $_POST["pass"];
		$rs = mysqli_query($conn, "SELECT * FROM acceso  WHERE user_name = '$usuario' AND user_pass = '$contra'");

		if($rs->num_rows>0){
			while($row = mysqli_fetch_array($rs)){
				//echo "Bienvenido ".$row['user_name'];
				@session_start();
				$_SESSION["user_name"]=$row["user_name"];
				$_SESSION["user_code"]=$row["user_code"];
				$_SESSION["user_type"]=$row["user_type"];
				header("Location: index.php");
			}

		}else{
			echo "Usuario o contraseña no son válidos";
		}
		
	}else{
		echo "Llene el formulario";
	}
?>