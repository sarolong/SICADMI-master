<?php
    include 'conexion.php';

    
        $Identificacion = $_POST['Identificacion'];
        $consultar = "SELECT * FROM tbl_clientes WHERE PK_Id_Cliente=$Identificacion";
        $frespuesta = mysqli_query($con, $consultar);
        $row=mysqli_fetch_array($frespuesta);
        
        $Id=$row['PK_Id_Cliente'];
        $Nombres=$row['Nombres'];
        $Apellidos=$row['Apellidos'];
        $Genero=$row['Genero'];
        $Correo=$row['Correo'];
        $Direccion=$row['Direccion'];
        $Telefono=$row['Telefono'];

        $Json=array();

        $Json[]=array(
            'Id' => $Id,
            'Nombres' => $Nombres, 
            'Apellidos' => $Apellidos, 
            'Genero' => $Genero,
            'Correo' => $Correo,
            'Direccion' => $Direccion, 
            'Telefono' => $Telefono);

        $JsonString=json_encode($Json);

        echo $JsonString;
                    
           
    
?>
