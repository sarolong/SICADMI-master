<?php
include 'conexion.php';

$Id=$_POST['Id'];
$Q="UPDATE tbl_tickets SET Estado = '3' WHERE PK_Id_Ticket = '$Id'";
$Query=mysqli_query($con,$Q);

if($Query){
  echo "Exito";
}


?>