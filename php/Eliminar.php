<?php
    include 'conexion.php';

    $Identificacion=$_POST['Identificacion'];
    $Q="DELETE FROM tbl_clientes WHERE PK_Id_Cliente=$Identificacion";
    $C=mysqli_query($con,$Q);
    if($C){
        echo "Exitoso";
    }
?>