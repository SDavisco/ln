<?php
    include "../../conexion.php";
    include "../../class/seguimiento/CrearSCotizacion.php";
    
    $sc_id = $_POST['sc_id'];
    $CrearCotizacion = new CrearCotizacion();
    $output = $CrearCotizacion->llenarDatosCotizacion($sc_id,$conn);
    echo $output;
?>