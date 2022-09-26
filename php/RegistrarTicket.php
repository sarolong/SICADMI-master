<?php
    include 'conexion.php';
    session_start();

   $Usuario=$_SESSION['Usuario'];
   $Servicio= $_POST['Servicio'];
   $FechaI=$_POST['FechaI'];
   $FechaF=$_POST['FechaF'];
   $Cliente= $_POST['Cliente'];
   $Observacion= $_POST['Observacion'];
   $Valor=$_POST['Valor'];

    $Query="INSERT INTO tbl_tickets VALUES(NULL,'$Servicio','$FechaI','$FechaF','1','$Cliente','$Observacion','$Usuario',$Valor)";
    $Consulta=mysqli_query($con,$Query);
    if($Consulta){
        echo "Exito";
        
    }
    

    
?>