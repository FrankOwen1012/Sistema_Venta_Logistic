<?php
$sql = "SELECT * FROM pedidos";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


?>
<div >

   
<table style="color:black;" class="table table-hover table-condensed" id="iddatatable">
          <thead>
            <tr>
          
              <th>Linea</th>
              <th>Producto</th>
              <th>Compuestos</th>
              <th>Precio_Unitario</th>
              <th>Precio x Caja</th>
       
              <th>Eliminar</th>

            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($query)) {

            ?>
              <tr>
                
                <th><?php echo $row['linea'] ?></th>
                <th><?php echo $row['nombre_prod'] ?></th>
                <th><?php echo $row['nombre_comp'] ?></th>
                <th><?php echo $row['precio_unitario'] ?></th>
                <th><?php echo $row['precio_caja'] ?></th>
             
                <th><button> <a  href="/conexion/deletePedido.php?id=<?php echo $row['linea'] ?> "> QUITAR</a> </button></th>
              </tr>

            <?php
            }
            ?>

          </tbody>

</table>

</div>