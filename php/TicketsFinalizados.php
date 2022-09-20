<?php
include 'conexion.php';
$Q="SELECT COUNT(*) AS CONTEO FROM tbl_tickets WHERE Estado = 3";
$query=mysqli_query($con,$Q);

$row=mysqli_fetch_array($query);
echo $row['CONTEO'];
?>