<?php

function conectar()
{
  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd = "empresa";
  $con = mysqli_connect($host, $user, $pass);
  mysqli_select_db($con, $bd);

  return $con;
}

$con = conectar();
$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);




?>



<div >

   
<table class="table table-hover table-condensed tabla-boton" id="iddatatable">
          <thead>
            <tr>
          
              <th>Linea</th>
              <th>Producto</th>
              <th>Compuestos</th>
              <th>Precio_Unitario</th>
              <th>Precio x Caja</th>
              <th>Editar</th>
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
                <th><button> <a class="ordenar" href="/conexion/insertarPedido.php?id=<?php echo $row['linea'] ?>"> ORDENAR</a> </button></th>
                <th><button> <a class="quitar"  href="/conexion/delete.php?id=<?php echo $row['linea'] ?> "> QUITAR</a> </button></th>
              </tr>

            <?php
            }
            ?>

          </tbody>

</table>

</div>