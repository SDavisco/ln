<?php
$listar = null;
$directorio = opendir("silabus/");
while ($elemento = readdir($directorio) )
{
     if ($elemento != '.' && $elemento != '..')
     {
         if (is_dir("silabus/".$elemento))
         {
             $listar .="<li><a href='silabus/$elemento target='_blank'>$elemento/</a></li>";

         }
         else 
         {
             $listar .="<li><a href='silabus/$elemento target='_blank'>$elemento/</a></li>";
         }
     }
}

echo $listar ;
?>