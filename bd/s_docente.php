<?php
    require_once('conexion.php');
    $docente = $_POST['docente'];
    $telefono =$_POST['telefono'];
    $email =$_POST['email'];
    $docentes="INSERT INTO docente (docente, telefono, dni) VALUES ('$docente', '$telefono', '$dni')";
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