$("#btnRegistrar").on("click", function () {
    var Identificacion = document.getElementById("Identificacion").value;
    var Nombres = document.getElementById("Nombres").value;
    var Apellidos = document.getElementById("Apellidos").value;
    var Genero = document.getElementById("Genero").value;
    var Correo = document.getElementById("Correo").value;
    var Direccion = document.getElementById("Direccion").value;
    var Telefono = document.getElementById("Telefono").value;

    $.ajax({
        url: './php/registrar.php',
        type: 'POST',
        data: { Identificacion: Identificacion, Nombres: Nombres, Apellidos: Apellidos, Genero: Genero, Correo: Correo, Direccion: Direccion, Telefono: Telefono }
    }).done(function (data) {
        if (data == "Exito") {
            Exito("Cliente Registrado");
        } else if (data == "Existente") {
            Falla("Cliente ya Registrado");
        }
    })
    document.getElementById('ticket').reset();
});

function Mostrar(Letra) {
    var tabla = $.ajax({
        url: './php/MostrarTabla.php',
        type: 'POST',
        datatype: 'text',
        data:{Letra:Letra},
        async: false,
    }).responseText;
    document.getElementById('myTable').innerHTML = tabla;
}
setInterval(Mostrar(''),1000);

$('#BuscarID').keyup(function() {
    Mostrar(document.getElementById('BuscarID').value);
})

function Consultar(Identificacion) {

    $.ajax({
        url: './php/select.php',
        type: 'POST',
        data: { Identificacion: Identificacion }
    }).done(function (respuesta) {
        var Json = JSON.parse(respuesta);
        document.getElementById('MIdentificacion').value = Json[0].Id;
        document.getElementById('MNombres').value = Json[0].Nombres;
        document.getElementById('MApellidos').value = Json[0].Apellidos;
        document.getElementById('MGenero').value = Json[0].Genero;
        document.getElementById('MCorreo').value = Json[0].Correo;
        document.getElementById('MDireccion').value = Json[0].Direccion;
        document.getElementById('MTelefono').value = Json[0].Telefono;

    });
}

function Eliminar(Identificacion) {
    Swal.fire({
        title: 'Eliminar Items',
        text: "¿Estas Seguro?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
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
                    Mostrar(document.getElementById('BuscarID'));
                }
            });
        }
    })

}

$('#Editar').on("click", function () {
    var Identificacion = document.getElementById("MIdentificacion").value;
    var Nombres = document.getElementById("MNombres").value;
    var Apellidos = document.getElementById("MApellidos").value;
    var Genero = document.getElementById("MGenero").value;
    var Correo = document.getElementById("MCorreo").value;
    var Direccion = document.getElementById("MDireccion").value;
    var Telefono = document.getElementById("MTelefono").value;

    $.ajax({
        url: './php/Editar.php',
        type: 'POST',
        data: { Identificacion: Identificacion, Nombres: Nombres, Apellidos: Apellidos, Genero: Genero, Correo: Correo, Direccion: Direccion, Telefono: Telefono }
    }).done(function (respuesta) {
        if (respuesta == "Exito") {
            Exito("Actualizacion Exitosa");
            Mostrar(document.getElementById('BuscarID'));
        } else {
            Falla("Error");
        }

    });
})

 
