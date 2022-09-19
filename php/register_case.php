<?php
    include 'conexion.php';

    $Menu=$_POST["Menu"];
    $Fecha_i=$_POST["Fecha_i"];
    $Fecha_f=$_POST["Fecha_f"];
    $Menu_estado=$_POST["Menu_estado"];
    $Menu_cliente=$_POST["Menu_cliente"];
    $Observacion=$_POST["Observacion"];

    $Q="SELECT * FROM tbl_tickets";
    $C=mysqli_query($con,$Q);
    if($row=mysqli_fetch_row($C)>0){
        echo "Existente";
    }else{
        $Query="INSERT INTO tbl_tickets VALUES('$Menu','$Fecha_i','$Fecha_f','$Menu_estado','$Menu_cliente','$Observacion)";
        $Consulta=mysqli_query($con,$Query);
        if($Consulta){
            echo "Exito";
        }
    }

    
?>