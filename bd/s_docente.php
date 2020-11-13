<?php
    require_once('conexion.php');
    $docente = $_POST['docente'];
    $docentes="INSERT INTO docente (docente) VALUES ('$docente')";
    if (mysqli_query($conn, $docentes))
    {
        
    }
    else{
        echo "error". $docentes."<br>".mysqli_error($conn);
    }
    ?>
    <script language="javascript">
    window.location="../registro_docente.php";
    </script>