<?php
    include 'conexion.php';

    
        $Identificacion = $_POST['Identificacion'];
        $consultar = "SELECT * FROM tbl_tickets WHERE PK_Id_Ticket=$Identificacion";
        $frespuesta = mysqli_query($con, $consultar);
        $row=mysqli_fetch_array($frespuesta);
        if($row['Estado']=='3'){
            $Estado="Finalizado";
        }
        if($row['Estado']=='2'){
            $Estado="Pendiente";
        }
        if($row['Estado']=='1'){
            $Estado="Abierto";
        }
        $Id=$row['PK_Id_Ticket'];
        $Des=$row['Descripcion'];
        $FechaI=$row['FechaInicio'];
        $FechaF=$row['FechaFinal'];
        $Estado=$Estado;
        $Cliente=$row['Cliente'];
        $Obs=$row['Observacion'];

        $Json=array();

        $Json[]=array(
            'Id' => $Id,
            'Des' => $Des, 
            'FI' => $FechaI, 
            'FF' => $FechaF,
            'Estado' => $Estado,
            'Cl' => $Cliente, 
            'Obs' => $Obs);

        $JsonString=json_encode($Json);

        echo $JsonString;
                    
           
    
?>