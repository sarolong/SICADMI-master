<?php
include 'conexion.php';
session_start();
$usuario=$_POST['usuario'];
$pass=$_POST['password'];

$query="SELECT A.* FROM tbl_admin AS A WHERE A.Usuario='$usuario' AND A.Password='$pass'";
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