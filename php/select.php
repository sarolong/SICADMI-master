<?php
    include 'conexion.php';

    
        $Identificacion = $_REQUEST['Identificacion'];
        $consultar = "SELECT * from tbl_clientes where Identificacion=$Identificacion";
        $frespuesta = mysqli_query($con, $consultar);
        $row=mysqli_fetch_array($frespuesta);
        
        $Identificacion=$row['Identificacion'];
        $Nombres=$row['Nombres'];
        $Apellidos=$row['Apellidos'];
        $Genero=$row['Genero'];
        $Correo=$row['Correo'];
        $Direccion=$row['Direccion'];
        $Telefono=$row['Telefono'];
            
            $Json=array();

            $Json[]=array(
                'Identificacion' => $Identificacion,
                'Nombres' => $Nombres,
                'Apellidos' => $Apellidos,
                'Genero' => $Apellidos,
                'Correo' => $Apellidos,
                'Direccion' => $Apellidos,
                'Telefono' => $Apellidos);
        
            $JsonString=json_encode($Json);
        
            echo $JsonString;
    
?>
