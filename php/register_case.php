<?php
    include 'conexion.php';

    $PK_Id_Ticket=$_POST['PK_Id_Ticket'];
    $Menu_servicio=$_POST["menu-servicio"];
    $Fecha_i=$_POST["FechaInicio"];
    $Fecha_f=$_POST["FechaFinal"];
    $Menu_estado=$_POST["menu-estado"];
    $Menu_cliente=$_POST["menu-cliente"];
    $Observacion=$_POST["Observacion"];

    $Q="SELECT * FROM tbl_tickets WHERE PK_Id_Ticket=$PK_Id_Ticket";
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