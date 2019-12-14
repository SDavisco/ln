<?php
    require_once('bd/conexion.php');
    $unidad_d = $_POST['unidad'];
    $docente = $_POST['docente'];
    $sem_ac = $_POST['sem_ac'];
    $sem_lec = $_POST['sem_lectivo'];
    $turno = $_POST['turno'];
    $unidades="INSERT INTO UNIDAD_DOCENTE (nomb_unidad, docente, semestre_academico, semestre_lectivo, turno)
    VALUES ('$unidad_d','$docente','$sem_ac','$sem_lec','$turno')";
    if (mysqli_query($conn, $unidades))
    {
        
    }
    else{
        echo "error". $unidades."<br>".mysqli_error($conn);
    }
    ?>
        <script language="javascript">
    window.location="docentes.php";
    </script>