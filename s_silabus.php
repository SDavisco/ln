<<?php
    require_once('bd/conexion.php');
    if($_FILES["silabus"]["error"]>0;{
        echo "eror al cargar archivo";
     }, else {
         $permitidos = array("application/pdf")
     }

     $limite_kb = 200;

     if(in_array($_FILES["silabus"], $permitidos) && $_FILES["silabus"]["size"]<- $limite_kb * 1024) 

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