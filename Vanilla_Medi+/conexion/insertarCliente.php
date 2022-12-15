<?php 
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="empresa";
    $con=mysqli_connect($host,$user,$pass,$bd);
  
  
    return $con;
  }
$con=conectar();

$user=$_GET['user'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$pass=$_GET['pass'];
$telefono=$_GET['telefono'];
$direccion=$_GET['direccion'];

$sql="INSERT INTO clientes VALUES('$user','$nombre','$apellido','$pass','$telefono','$direccion')";
$query=mysqli_query($con,$sql);

if($query){
    header("location:/index.html");
}
else{
echo("NO SE PUDO HACER EL INSERT");
}

?>