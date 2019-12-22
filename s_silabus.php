<?php
    require_once('bd/conexion.php');
   
    if($_FILES["silabus"]["error"]>0){
        echo "eror al cargar archivo";
     } else {
        $permitidos = array("application/pdf");
        $limite_kb = 3000;

     if(in_array($_FILES["silabus"]["type"], $permitidos) && $_FILES["silabus"]["size"]<= $limite_kb * 1024){
         $ruta = 'silabus/';
         $silabus = $ruta.$_FILES["silabus"]["name"];
         if(!file_exists($ruta)){
             mkdir($ruta);
         }
     if (!file_exists($silabus)){
         $resultado = @move_uploaded_file($_FILES["silabus"]["tmp_name"], $silabus);
				
         if($resultado){
            echo "Archivo Guardado";
            } else {
            echo "Error al guardar archivo";
        }
        
        } else {
        echo "Archivo ya existe";
    }
    
    } else {
    echo "Archivo no permitido o excede el tamaño";
}

}

/*$silabus = $_POST['silabus'];;
    $s_silabus="INSERT INTO silabus VALUES ('$docente')";
    if (mysqli_query($conn, $docentes))
    {
        
    }
    else{
        echo "error". $docentes."<br>".mysqli_error($conn);
    }
    ?>
    <script language="javascript">
    window.location="docentes.php";
    </script>*/
?>
<html lang="es">
	<head>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="silabus.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
