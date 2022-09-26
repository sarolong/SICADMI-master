<?php

$Q="SELECT COUNT(*) AS CONTEO FROM tbl_tickets WHERE Estado = 3 AND Usuario= '$usuario'";
$query=mysqli_query($con,$Q);

$row=mysqli_fetch_array($query);
echo $row['CONTEO'];
?>