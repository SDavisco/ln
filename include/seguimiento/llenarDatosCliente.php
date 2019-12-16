<?php
    include "../../conexion.php";
    include "../../class/seguimiento/CrearSeguimiento.php";
    
    $cliente_id = $_POST['cliente_id'];
    $CrearSeguimiento = new CrearSeguimiento();
    $output = $CrearSeguimiento->llenarDatosCliente($cliente_id,$conn);
    echo $output;
    
?>