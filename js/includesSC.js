function funcionSC()
{
    sc_id = $("#cotizacion").val();
    url = "include/seguimiento/llenarDatosCotizacion.php";
    $.ajax(url,{
        type : "POST",
        data : "sc_id="+sc_id,
        success : function(output){
            $("#GetDatosCotizacion").html(output);
        } 
    });
}