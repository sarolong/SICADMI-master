<?php

        $Letra=$_POST['ID'];
        include 'conexion.php';
        $Q="SELECT * FROM tbl_tickets WHERE Cliente LIKE '$Letra%'";
        $consulta=mysqli_query($con, $Q);
    
        while ($row=mysqli_fetch_array($consulta)){
            echo '<tr>
                <th>'.$row['PK_Id_Ticket'].'</th>
                <td>'.$row['Descripcion'].'</td>
                <td>'.$row['FechaInicio'].'</td>
                <td>'.$row['FechaFinal'].'</td> 
                <td>'.$row['Estado'].'</td> 
                <td>'.$row['Cliente'].'</td> 
                <td>'.$row['Observacion'].'</td> 
    
                <td>
                <div class="d-flex">

                <button class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#ModalTickets" type="button" onclick="Factura(',$row['PK_Id_Ticket'].');">
                    <i class="fa fa-pen"></i>
                </button>

                </div>
                </td>
    
                </tr>';
        }  
        
  

    

        
   
    
    
?>