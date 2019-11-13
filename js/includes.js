function funcionCliente()
{
    cliente_id = $("#cliente").val();
    url = "include/seguimiento/llenarDatosCliente.php";
    $.ajax(url,{
        type : "POST",
        data : "cliente_id="+cliente_id,
        success : function(output){
            $("#GetDatosCliente").html(output);
        } 
    });
}