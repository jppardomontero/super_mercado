$(".btnClientes").click(function () {
    var id_cliente = $(this).attr("id_cliente");
    
    //console.log("prueba", id_cliente);
    var data = new FormData();
    data.append("id_cliente", id_cliente);
    data.append("operacion", "Editar");
    $.ajax({
        url: "ajax/ajaxClientes.php",
        method: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success:function(respuesta){
            $("#id_clientes").val(respuesta["id_clientes"])
            $("#cedula_modificar").val(respuesta["cedula"])
            $("#nombre_modificar").val(respuesta["nombres"])
            $("#apellido_modificar").val(respuesta["apellidos"])
            $("#sexo_modificar").val(respuesta["sexo"])
            $("#f_nacimiento_modificar").val(respuesta["f_nacimiento"])
            $("#correo_modificar").val(respuesta["correo"])
            $("#telefono_modificar").val(respuesta["telefono"])
            $("#direccion_modificar").val(respuesta["direccion"])
        }
    });
});