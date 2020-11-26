<?php
	
	require ('bd/conexion.php');

	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$contra = $_POST["pass"];

		$rs = mysqli_query($conn, "SELECT * FROM acceso  WHERE user_name = '$usuario' AND user_pass = '$contra'");
		$ra = mysqli_query($conn, "SELECT * FROM alumno  WHERE pass = '$contra' AND correo = '$usuario' ");
		if($rs->num_rows>0 ){
		  $row = mysqli_fetch_array($rs);
		    if (in_array('1',$row, true)){
			@session_start();
				$_SESSION["user_name"]=$row["user_name"];
				header("Location: docentes/index.php");
		   	}
		}
		if($ra->num_rows>0 ){
			$col = mysqli_fetch_array($ra);
			if (in_array('2',$col, true)){
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
		echo "Llene el formulario gg";
	}
?>