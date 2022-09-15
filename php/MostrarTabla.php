<?php
    
    include 'conexion.php';
    
    $Q="SELECT * FROM tbl_clientes";
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
            <button class="btn btn-primary mr-2" type="button" id="Editar" onclick="Editar(',$row['PK_Id_Cliente'].');">
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