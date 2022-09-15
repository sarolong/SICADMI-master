<?php
    include 'conexion.php';

    $Identificacion=$_POST["Identificacion"];
    $Nombres=$_POST["Nombres"];
    $Apellidos=$_POST["Apellidos"];
    $Genero=$_POST["Genero"];
    $Correo=$_POST["Correo"];
    $Direccion=$_POST["Direccion"];
    $Telefono=$_POST["Telefono"];

    $Q="SELECT * FROM tbl_clientes WHERE PK_Id_Cliente = $Identificacion";
    $C=mysqli_query($con,$Q);
    if($row=mysqli_fetch_row($C)>0){
        echo "Existente";
    }else{
        $Query="INSERT INTO tbl_clientes VALUES($Identificacion,'$Nombres','$Apellidos','$Genero','$Correo','$Direccion',$Telefono)";
        $Consulta=mysqli_query($con,$Query);
        if($Consulta){
            echo "Exito";
        }
    }

    
?>