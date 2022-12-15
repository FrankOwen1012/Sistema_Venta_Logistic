<?php 
$usuario=$_GET['user'];
$password=$_GET['pass'];

$conexion=mysqli_connect("localhost","root","","empresa");
$consulta="SELECT * FROM admin where user='$usuario' and pass='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:/html/Dashboard/Dashboard.php");
}
else{
    header("location:/html/NoAutenticado/NoAutenticadoAdmin.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>