<?php
    require_once('conexion.php');
    $unidad_d = $_POST['unidad'];
    $docente = $_POST['docente'];
    $sem_ac = $_POST['sem_ac'];
    $sem_lec = $_POST['sem_lectivo'];
    $turno = $_POST['turno'];
    $id_unidad= substr($unidad_d, 0,5);
    $unidades="INSERT INTO UNIDAD_DOCENTE (id_unidad,nomb_unidad, docente, semestre_academico, semestre_lectivo, turno)
    VALUES ('$id_unidad','$unidad_d','$docente','$sem_ac','$sem_lec','$turno')";

    if (mysqli_query($conn, $unidades))
    {
        
    }
    else{
        echo "error". $unidades."<br>".mysqli_error($conn);
    }
    if(is_array($_POST['checkbox']))
        {
            // realizamos el ciclo
               while(list($key,$value) = each($_POST['checkbox'])) 
                {
            $sql=("INSERT INTO unidad_carrera (id_unidad, carrera) VALUES ('$id_unidad','$value')");
                    if(mysqli_query($conn, $sql)) {

                    }
                    else {
                        echo "error". $sql."<br>".mysqli_error($conn);
                    }
                }
           }
?>
<script language="javascript">
window.location="../registrar_unidad.php";
</script>