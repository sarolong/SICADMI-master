<?php
  session_start();

  $Usuario=$_SESSION['Usuario'];
        $Letra=$_POST['ID'];
        include 'conexion.php';
        $Q="SELECT * FROM tbl_tickets WHERE Cliente LIKE '$Letra%' AND Estado != '3' AND Usuario ='$Usuario'";
        $consulta=mysqli_query($con, $Q);
    
        while ($row=mysqli_fetch_array($consulta)){
            if($row['Estado']=='3'){
                $Estado="Finalizado";
            }
            if($row['Estado']=='2'){
                $Estado="Pendiente";
                $color="FF8669";
            }
            if($row['Estado']=='1'){
                $Estado="Abierto";
                $color="86FF69";
            }
            echo '<tr>
                <th>'.$row['PK_Id_Ticket'].'</th>
                <td>'.$row['Descripcion'].'</td>
                <td>'.$row['FechaInicio'].'</td>
                <td>'.$row['FechaFinal'].'</td> 
                <td style="background-color:#'.$color.';"><b>'.$Estado.'</b></td> 
                <td>'.$row['Cliente'].'</td> 
                <td>'.$row['Observacion'].'</td> 
    
                <td>
                <div class="d-flex">

                <button class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#ModalTickets" type="button" onclick="Factura(',$row['PK_Id_Ticket'].');">
                <i class="bi bi-credit-card-fill"></i>
                </button>

                </div>
                </td>
    
                </tr>';
        }  
        
  

    

        
   
    
    
?>