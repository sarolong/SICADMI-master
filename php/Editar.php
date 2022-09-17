<?php
    include 'conexion.php';

    $Identificacion=$_POST['Identificacion'];
    $Nombres=$_POST['Nombres'];
    $Apellidos=$_POST['Apellidos'];
    $Genero=$_POST['Genero'];
    $Correo=$_POST['Correo'];
    $Direccion=$_POST['Direccion'];
    $Telefono=$_POST['Telefono'];

    $Query="UPDATE tbl_clientes SET Nombres='$Nombres',Apellidos='$Apellidos',
                                Genero='$Genero',Direccion='$Direccion',Telefono='$Telefono' WHERE PK_Id_Cliente=$Identificacion";
    $consulta=mysqli_query($con,$Query);

    if($consulta){
        echo "Exito";
    }
?>