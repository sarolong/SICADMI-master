$("#btnRegistrar").on("click",function() {
    var Identificacion= document.getElementById("Identificacion").value;
    var Nombres= document.getElementById("Nombres").value;
    var Apellidos= document.getElementById("Apellidos").value;
    var Genero= document.getElementById("Genero").value;
    var Correo= document.getElementById("Correo").value;
    var Direccion= document.getElementById("Direccion").value;
    var Telefono= document.getElementById("Telefono").value;

    $.ajax({
        url: './php/registrar.php',
        type: 'POST',
        data: {Identificacion: Identificacion, Nombres: Nombres, Apellidos: Apellidos, Genero: Genero, Correo: Correo, Direccion: Direccion, Telefono: Telefono}
    }).done(function(data){
        if(data=="Exito"){
            Exito("Cliente Registrado");
        }else if(data=="Existente"){
            Falla("Cliente ya Registrado");
        }
    })
    document.getElementById('ticket').reset();
});

function Mostrar() {
    var tabla = $.ajax({
        url: './php/MostrarTabla.php',
        datatype: 'text',
        async: false,
    }).responseText;
    document.getElementById('myTable').innerHTML = tabla;
}
setInterval(Mostrar, 1000);

function Consultar(Identificacion) {
    $.ajax({
        url: './php/select.php',
        type: 'POST',
        data: { Identificacion: Identificacion }
    }).done(function (respuesta) {
        var Json = JSON.parse(respuesta);
        document.getElementById('Identificacion').value = Json[0].Identificacion;
        document.getElementById('Nombres').value = Json[0].Nombres;
        document.getElementById('Apellidos').value = Json[0].Apellidos;
        document.getElementById('Genero').value = Json[0].Genero;
        document.getElementById('Correo').value = Json[0].Correo;
        document.getElementById('Direccion').value = Json[0].Direccion;
        document.getElementById('Telefono').value = Json[0].Telefono;

    });
}

function Eliminar(Identificacion) {
    $.ajax({
        url: './php/Eliminar.php',
        type: "POST",
        data: { Identificacion: Identificacion }
    }).done(function (respuesta) {
        if (respuesta == "Exitoso") {
            Swal.fire(
                'Eliminado',
                'Item Eliminado',
                'success'
            )
        }
    });
}

$('#Editar').on("click",function () {
    var Identificacion= document.getElementById("Identificacion").value;
    var Nombres= document.getElementById("Nombres").value;
    var Apellidos= document.getElementById("Apellidos").value;
    var Genero= document.getElementById("Genero").value;
    var Correo= document.getElementById("Correo").value;
    var Direccion= document.getElementById("Direccion").value;
    var Telefono= document.getElementById("Telefono").value;
    $.ajax({
        url: './php/Editar.php',
        type: 'POST',
        data: { Identificacion: Identificacion, Nombres: Nombres, Apellidos: Apellidos, Genero: Genero, Correo: Correo, Direccion: Direccion, Telefono: Telefono }
    }).done(function (respuesta) {
        if (respuesta == "Exitoso") {
            Exitoso("Actualizacion Exitosa");
        } else {
            Falla("Error");
        }

    });
})