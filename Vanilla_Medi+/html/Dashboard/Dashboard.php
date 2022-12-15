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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <!-- BOX ICONS -->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="/css/Dashboard.css" />
  <link rel="stylesheet" href="/css/FormularioProductos.css">
  <link rel="stylesheet" href="/css/tabla.css">
  <link rel="stylesheet" href="/css/styleMision.css">
  <!-- CUSTOM JS -->
  <script src="/js/Dashboard.js" defer></script>
</head>

<body style="background-color: #003053;">
  <div class="menu-dashboard">
    <!-- TOP MENU -->
    <div class="top-menu">
      <div class="logo">
    
        <span>Bienvenido:Admin</span>
      </div>
      <div class="toggle">
        <i class="bx bx-menu"></i>
      </div>
    </div>
    <!-- INPUT SEARCH -->
    <div class="input-search">
      <i class="bx bx-search"></i>
      <input type="text" class="input" placeholder="Buscar" />
    </div>
    <!-- MENU -->
    <div class="menu">
      <div class="enlace">
        <i class="bx bx-grid-alt"></i>
        <span>Dashboard</span>
      </div>

      <div class="enlace">
        <a id="MenuUno" href="#" onclick="show('Ejemplo1') "> <i class="bx bx-cart"></i> </a>
        <span>AgregarProductos</span>

      </div>
      
      <div class="enlace">
        <a id="MenuCuatro" href="#" onclick="show('Ejemplo4') "> <i class="bx bx-user"></i> </a>
        <span>ClientesActivos</span>

      </div>
    

      <div class="enlace">
        <i class="bx bx-grid-alt"></i>
        <span>Analíticas</span>
      </div>

      <div class="enlace">
        <i class="bx bx-message-square"></i>
        <span>Mensajes</span>
      </div>

  
      <div class="enlace" id="producto">
        <a id="MenuDos" href="#" onclick="show('Ejemplo2')"> <i class="bx bx-cart"></i></a>
        <span>Almacen</span>
      </div>

      <div class="enlace">
        <a id="MenuTres" href="#" onclick="show('Ejemplo3')"> <i class="bx bx-heart"></i></a>
        <span>Pedidos</span>
      </div>

      <div class="enlace">
        <i class="bx bx-cog"></i>
        <span>Configuración</span>
      </div>
    </div>
  </div>

  <!--CUERPO DEL DASHBOARD-->
  <div class="main__Dashboard">
    <div class="Ejemplo1" id="Ejemplo1">
      <section class="form-register">
        <center>
          <h4> Registro de  Productos </h4>
        </center>
        <form action="/conexion/insertar.php">
<label> Linea</label>
          <input class="controls" type="text" name="linea" id="nombres" placeholder="Ingrese Linea">
          <label> Linea</label>
          <input class="controls" type="text" name="nombre_prod" id="apellidos" placeholder="Ingrese Nombre Producto">
          <label> COMPUESTO QUIMICO </label>
          <input class="controls" type="text" name="nombre_comp" id="" placeholder="Ingrese su Compuesto">
          <label> PRECIO UNITARIO</label>
          <input class="controls" type="text" name="precio_unitario" id="correo" placeholder="Ingrese su Precio Unitario ">
          <label> PRECIO X CAJA </label>
          <input class="controls" type="text" name="precio_caja" id="correo" placeholder="Ingrese su Precio x Caja">
          <label>IMAGEN REFERENCIA</label>
          <input class="controls" type="text" name="imagen_referencia" id="correo" placeholder="Ingrese su Imagen Referencia ">
          
          <input class="botons" type="submit" value="Registrar Producto">

      </section>
      </form>
    </div>

    <!-- DIV 2 -->
    <div class="Ejemplo2" id="Ejemplo2">
      <div id="main-container">
        <!--ESLIDER PARA IMAGENES -->
      <div class="slider-frame">
      <ul>
          <li><img src="/assets/image/Distribuidora_Almacen.png" alt=""></li>
          <li><img src="/assets/image/Distribuidora_Almacen2.png" alt=""></li>
          <li><img src="/assets/image/Distribuidora_Almacen3.png" alt=""></li>
          <li><img src="/assets/image/Distribuidora_Almacen.png" alt=""></li>
      </ul>
  </div>
   <!--FIN ESLIDER PARA IMAGENES -->
        <table>
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
                <th><button> <a  href="/conexion/update.php?id=<?php echo $row['nombre_prod']?> "> Editar</a> </button></th>
                <th><button> <a  href="/conexion/delete.php?id=<?php echo $row['linea'] ?> "> Eliminar</a> </button></th>
              </tr>

            <?php
            }
            ?>

          </tbody>


          </tr>
        </table>
      </div>
    </div>



    <!--FIN DIV 2 -->

    <!-- DIV 2 -->
    <div class="Ejemplo3" id="Ejemplo3">
       <?php
        include('../Tienda/TablaPedidos.php');
       ?>
    </div>
    <!--FIN DIV 2 -->
    <!--DIV 4 -->
    <div   style="color:black; display:none;" class="Ejemplo4" id="Ejemplo4">
      <div>
        <?php  include('./TablaUsuariosActivos.php') ?>
         
      </div>
    </div>
  </div>

  <!--FIN DIV 4 -->



  </div>
  




</body>

</html>