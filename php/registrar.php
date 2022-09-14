<?php
    include 'conexion.php';

    if (isset($_REQUEST['guardar'])) {
        $cedula = $_REQUEST['cedula'];
        $nombre = $_REQUEST['nombre'];
        $direccion = $_REQUEST['direccion'];
        $ciudad = $_REQUEST['ciudad'];
    
        if (
            !empty($_REQUEST['cedula']) && !empty($_REQUEST['nombre']) && !empty($_REQUEST['direccion']) &&
            !empty($_REQUEST['ciudad'])
        ) {
            $guardar = "insert into clientes(cl_cedula, cl_nombre, cl_direccion, cl_ciudad) values('$cedula', 
                    '$nombre', '$direccion', '$ciudad') ";
            mysqli_query($link, $guardar) or die("<script languaje='javascript'>alert('El dato ya existe')</script>");
            echo "<script languaje='javascript'>alert('Datos guardados satisfactoriamente')</script>";
    
            $cedula = "";
            $nombre = "";
            $direccion = "";
            $ciudad = "";
        } else
            echo "Por favor llene sus datos";
    }
?>