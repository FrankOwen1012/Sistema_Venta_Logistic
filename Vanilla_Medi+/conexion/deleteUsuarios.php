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


$usuario= $_GET['id'];


$sql = "DELETE FROM clientes WHERE user='$usuario'";
$query = mysqli_query($con, $sql);


if ($query) {
      header("location:/html/Dashboard/Dashboard.php");
 
} else {
    echo ("NO SE PUEDO ELIMINAR DEL REGISTRO");
}
