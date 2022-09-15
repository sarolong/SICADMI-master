
function Exito(mensaje) {

    Swal.fire(
         mensaje,
        'Presione OK!',
        'success'
      )
  }

  function mensajeClave() {

    swal({
        position: 'top-end',
        icon: 'success',
        title: 'Se restauro su contraseña',
        showConfirmButton: false,
    });
  }

  function reset(){
      document.getElementsById("user").reset();
      document.getElementsById("ticket").reset();
  }

  function Falla(mensaje){
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: mensaje,
        
      })
  }

 