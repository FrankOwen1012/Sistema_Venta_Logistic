<?php
$sql = "SELECT * FROM  clientes";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


?>
<div >

   
<table class="table table-hover table-condensed" id="iddatatable">
          <thead>
            <tr>
          
              <th>user</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Telefono</th>
              <th>Direccion</th>
       
              <th>Eliminar</th>

            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($query)) {

            ?>
              <tr>
                
                <th><?php echo $row['user'] ?></th>
                <th><?php echo $row['nombre'] ?></th>
                <th><?php echo $row['apellido'] ?></th>
                <th><?php echo $row['telefono'] ?></th>
                <th><?php echo $row['direccion'] ?></th>
             
                <th><button> <a  href="/conexion/deleteUsuarios.php?id=<?php echo $row['user'] ?> "> QUITAR</a> </button></th>
              </tr>

            <?php
            }
            ?>

          </tbody>

</table>

</div>