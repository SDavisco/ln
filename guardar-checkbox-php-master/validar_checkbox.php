<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
$id=$_POST['identi'];
$nombre=$_POST['nombre'];

require_once('conexion.php');

$save=mysql_query("INSERT INTO usuario (identi, nombre) VALUES ('$id','$nombre')");

if($_POST['checkbox'] != "")
{
		 if(is_array($_POST['checkbox']))
         {
       		 // realizamos el ciclo
       		 while(list($key,$value) = each($_POST['checkbox'])) 
        	{
				$sql=mysql_query("INSERT INTO deporte (pertenece_a, deporte) VALUES ('$id','$value')");
       	 	}
   		 }
}

if($save and $sql)
echo '<h1>El proceso de guardado se realizó correctamente</h1><br><a href="checkbox.php">ir atrás</a>';
else
echo '<h1>El proceso de guardado no se realizó correctamente</h1><br><a href="checkbox.php">ir atrás</a>';
		
?>