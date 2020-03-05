<?php
	
	require ('../bd/conexion.php');

	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$contra = $_POST["pass"];
		$rs = mysqli_query($conn, "SELECT * FROM docente WHERE docente = '$usuario' AND dni = '$contra'");

		if($rs->num_rows>0){
		  $row = mysqli_fetch_array($rs);
		   if (in_array('2',$row, true)){
			@session_start();
				$_SESSION["user_name"]=$row["user_name"];
				$_SESSION["user_code"]=$row["user_cod"];
				header("Location: index.php");
		   	}	
		  if (in_array('2',$row, true)){
			@session_start();
				$_SESSION["user_name"]=$row["user_name"];
				$_SESSION["user_code"]=$row["user_cod"];
				header("Location: index.php");
			   }
		}else{
			echo "Usuario o contraseña no son válidos";
		}
		
	}else{
		echo "Llene el formulario";
	}
?>