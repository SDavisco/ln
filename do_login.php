<?php
	
	require ('bd/conexion.php');

	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$contra = $_POST["pass"];

		$rs = mysqli_query($conn, "SELECT * FROM acceso  WHERE user_name = '$usuario' AND user_pass = '$contra'");
		$ra = mysqli_query($conn, "SELECT * FROM alumno  WHERE correo = '$usuario' AND pass = '$contra' ");
		if($rs->num_rows>0 ){
		  $row = mysqli_fetch_array($rs);
		    if ($row[1]= 1){
			@session_start();
				$_SESSION["user_name"]=$row["user_name"];
				header("Location: docentes/index.php");
		   	}
		}
		elseif ($ra->num_rows>0) {
			$col = mysqli_fetch_array($ra);
			if ($col[1]= 2){
				@session_start();
					$_SESSION["user_name"]=$col["nombre"]." ".	$col["apellido"];
					$_SESSION["user_correo"]=$col["correo"];
					$_SESSION["user_carrera"]=$col["carrera"];
					$_SESSION["user_sem_ac"]=$col["semestre_academico"];
					$_SESSION["user_sem_l"]=$col["semestre_lectivo"];
					$_SESSION["user_turno"]=$col["turno"];
					header("Location: alumnos/index.php");
			   }
		}
		else
		{
			echo "Usuario o contraseña no son válidos";
		}
		
	}else{
		echo "Llene el formulario ";
	}
?>