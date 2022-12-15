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

$nombre = $_GET['nombre_prod'];


$sql = "SELECT * FROM productos WHERE nombre_prod='$nombre'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/FormularioProductos.css">
    <title>Actualizar Producto</title>
</head>

<body>

    <section class="form-register">
        <center>
            <h4>Formulario Actualizar Productos </h4>
        </center>
        <form action="/conexion/insertar.php">

            <input class="controls" type="text" name="linea" id="nombres" placeholder="Ingrese Linea" value="<?php echo $row['linea'] ?>">

            <input class="controls" type="text" name="nombre_prod" id="apellidos" placeholder="Ingrese Nombre Producto" value="<?php echo $row['nombre_prod'] ?>">
            <input class="controls" type="text" name="nombre_comp" id="" placeholder="Ingrese su Compuesto" value="<?php echo $row['nombre_comp'] ?>">
            <input class="controls" type="text" name="precio_unitario" id="correo" placeholder="Ingrese su Precio Unitario " value="<?php echo $row['precio_unitario'] ?>">
            <input class="controls" type="text" name="precio_caja" id="correo" placeholder="Ingrese su Precio x Caja" value="<?php echo $row['precio_caja'] ?>">

            <input class="controls" type="text" name="imagen_referencia" id="correo" placeholder="Ingrese su Imagen Referencia " value="<?php echo $row['imagen_referencia'] ?>">
            <input class="botons" type="submit" value="Actualizar Producto">

    </section>


</body>

</html>