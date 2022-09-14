<?php
include 'conexion.php';
session_start();
$usuario=$_POST['usuario'];
$pass=$_POST['password'];

$query="SELECT Nombre_Usuario, password_Usuario FROM tbl_usuarios AS A WHERE Nombre_Usuario='$usuario' AND password_Usuario='$pass'";
$q=mysqli_query($con,$query);
$array=mysqli_fetch_row($q);

if($array){
   header('Location: index.php');
   
   $_SESSION['Usuario'] = $usuario;

}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Usuario o Contraseña Incorrecta
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}


?>