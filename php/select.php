<?php
    include 'conexion.php';

    if (isset($_REQUEST['consultar'])) {
        $cedula = $_REQUEST['Identificacion'];
    
        if (!empty($_REQUEST['Identificacion'])) {
            $consultar = "SELECT * from tbl_clientes where Identificacion=$Identificacion";
            $frespuesta = mysqli_query($link, $consultar);
            $frow = mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
        }
        if (empty($frow)) {
            echo "<script languaje='javascript'>alert('El cliente no existe! ')</script>";
        } else
        $Identificacion=$frow["Identificacion"];
        $Nombres=$frow["Nombres"];
        $Apellidos=$frow["Apellidos"];
        $Genero=$frow["Genero"];
        $Correo=$frow["Correo"];
        $Direccion=$frow["Direccion"];
        $Telefono=$frow["Telefono"];
    }
    
?>