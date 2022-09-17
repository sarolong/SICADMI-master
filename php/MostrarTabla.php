<?php

        $Letra=$_POST['Letra'];
        include 'conexion.php';
        $Q="SELECT * FROM tbl_clientes WHERE PK_Id_Cliente LIKE '$Letra%'";
        $consulta=mysqli_query($con, $Q);
    
        while ($row=mysqli_fetch_array($consulta)){
            echo '<tr>
                <th>'.$row['PK_Id_Cliente'].'</th>
                <td>'.$row['Nombres'].'</td>
                <td>'.$row['Apellidos'].'</td>
                <td>'.$row['Genero'].'</td> 
                <td>'.$row['Correo'].'</td> 
                <td>'.$row['Direccion'].'</td> 
                <td>'.$row['Telefono'].'</td> 
    
                <td>
                <div class="d-flex">
                <button class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" onclick="Consultar(',$row['PK_Id_Cliente'].');">
                    <i class="fa fa-pen"></i>
                </button>
                <button class="btn btn-danger" type="button" onclick="Eliminar(',$row['PK_Id_Cliente'].');">
                    <i class="fa fa-trash"></i>
                </button>
                </div>
                </td>
    
                </tr>';
        }  
        
  

    

        
   
    
    
?>