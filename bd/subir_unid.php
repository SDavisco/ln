<?php
    require_once('conexion.php');
    $unidad_d = $_POST['unidad'];
    $docente = $_POST['docente'];
    $sem_ac = $_POST['sem_ac'];
    $sem_lec = $_POST['sem_lectivo'];
    $turno = $_POST['turno'];
    $id_unidad= substr($unidad_d, 0,5);
//capturamos los datos del fichero subido    
$type=$_FILES['silabus']['type'];
$tmp_name = $_FILES['silabus']["tmp_name"];
$name = $_FILES['silabus']["name"];
//Creamos una nueva ruta (ruta)
//Así guardaremos nuestra imagen en la carpeta "images"
$ruta="../silabus/".$name;
//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
# $tmp_name: la ruta temporal del fichero
# $ruta: la nueva ruta que creamos
move_uploaded_file($tmp_name,$ruta);
//Extraer la extensión del archivo. P.e: jpg
# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
$array=explode('.',$ruta);
# Capturamos el último elemento del array anterior que vendría a ser la extensión
$ext= end($array);
//Imprimimos un texto de subida exitosa.
echo "<h3>La imagen se subio correctamente</h3>";
// Los posible valores que puedes obtener de la imagen son:
echo "<b>Info de la imagen subida:</b>";
echo "<br> Nombre: ".$_FILES['silabus']["name"];      //nombre del archivo
echo "<br> Tipo: ".$_FILES['silabus']["type"];      //tipo
echo "<br> Nombre Temporal: ".$_FILES['silabus']["tmp_name"];  //nombre del archivo de la imagen temporal
echo "<br> Tamanio: ".$_FILES['silabus']["size"]." bytes";      //tamaño
echo $ruta;
    $unidades="INSERT INTO unidad_docente (id_unidad, nomb_unidad, docente, semestre_academico, semestre_lectivo, turno, silabus) VALUES ('$id_unidad','$unidad_d','$docente','$sem_ac','$sem_lec','$turno' . '$silabus')";

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
            $sql=("INSERT INTO unidad_carrera (unidad, carrera) VALUES ('$id_unidad','$value')");
                    if(mysqli_query($conn, $sql)) {

                    }
                    else {
                        echo "error". $sql."<br>".mysqli_error($conn);
                    }
                }
           }
?>
