<?php
include 'conexion.php';
session_start();

$Usuario=$_SESSION['Usuario'];
$dato=$_POST['Enviando'];
$fechaActual = date('Y-m-d');

$Q="SELECT * FROM tbl_tickets WHERE FechaFinal < '$fechaActual' AND Estado != 3 ";
$query=mysqli_query($con,$Q);


while($row=mysqli_fetch_array($query)){
  $ID=$row['PK_Id_Ticket'];
  $Qdos="UPDATE tbl_tickets SET Estado =2 WHERE PK_Id_Ticket = $ID";
  $QueryDos=mysqli_query($con,$Qdos);
}
$Q3="SELECT COUNT(*) AS CONTEO FROM tbl_tickets WHERE Estado = 2 AND Usuario= '$Usuario'";
$query3=mysqli_query($con,$Q3);

$row3=mysqli_fetch_array($query3);
echo $row3['CONTEO'];

?>