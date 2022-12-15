<?php


$usuario = $_GET['user'];
$password = $_GET['pass'];

$conexion = mysqli_connect("localhost", "root", "", "empresa");
$consulta = "SELECT * FROM clientes where user='$usuario' and pass='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    header("location:/html/Tienda/Tienda.php");
} else {
     header("location:/html/NoAutenticado/NoAutenticado.html");


 
}
mysqli_free_result($resultado);
mysqli_close($conexion);
