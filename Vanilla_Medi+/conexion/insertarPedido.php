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

/*$linea=$_GET['linea'];
$nombre=$_GET['nombre_prod'];
$compuesto=$_GET['nombre_comp'];
$precio_unitario=$_GET['precio_unitario'];
$precio_caja=$_GET['precio_caja'];
*/
if (isset($_GET['linea'])) {
    if (isset($_GET['nombre_prod'])) {
        if (isset($_GET['nombre_comp'])) {
            if (isset($_GET['precio_unitario'])) {
                if (isset($_GET['precio_caja'])) {
                    $linea = $_GET['id'];
                    $nombre = $_GET['nombre_prod'];
                    $compuesto = $_GET['nombre_comp'];
                    $precio_unitario = $_GET['precio_unitario'];
                    $precio_caja = $_GET['precio_caja'];
                    $sql = "INSERT INTO pedidos VALUES('$linea','$nombre','$compuesto','$precio_unitario','$precio_caja' ) WHERE id='$linea' ";
                    $query = mysqli_query($con, $sql);

                    header("location:/html/Tienda/Tienda.php");
                    /*if ($query) {
                        header("location:/html/Tienda/Tienda.php");
                    } else {
                        header("location:/html/Tienda/Tienda.php");
                    }*/
                }
            }
        }
    }
}
