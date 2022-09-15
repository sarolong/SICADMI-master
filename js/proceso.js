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

