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

$linea=$_GET['linea'];
$nombre=$_GET['nombre_prod'];
$compuesto=$_GET['nombre_comp'];
$precio_unitario=$_GET['precio_unitario'];
$precio_caja=$_GET['precio_caja'];
$imagen_referencia=$_GET['imagen_referencia'];

                        $sql = "UPDATE productos SET linea='$linea',nombre_prod='$nombre',nombre_comp='$compuesto',precio_unitario='$precio_unitario',precio_caja='$precio_caja',
    imagen_referencia='$imagen_referencia'  WHERE  nombre_prod='$nombre' ";
                        $query = mysqli_query($con, $sql);
                        if ($query) {
                            // header("location:/html/Dashboard/Actualizar.php");
                        } else {
                            echo ("NO SE HIZO LA ACTUALIZACION");
                        }
          