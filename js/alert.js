
function mensaje() {

    swal({
        position: 'top-end',
        icon: 'success',
        title: 'Registro Exitoso',
        showConfirmButton: false,
    });
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