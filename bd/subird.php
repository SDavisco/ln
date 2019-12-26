<?php
    require_once('conexion.php');
    $nomb_unidad = $_POST['unidad'];
    $unidad="INSERT INTO unidad_d (nomb_unidad) VALUES ('$nomb_unidad')";
    if (mysqli_query($conn, $unidad))
    {
        
    }
    else{
        echo "error". $unidad."<br>".mysqli_error($conn);
    }
    ?>
    <script language="javascript">
    window.location="../index.php";
    </script>
