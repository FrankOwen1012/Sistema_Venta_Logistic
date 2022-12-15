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

$linea=$_GET['linea'];
$nombre=$_GET['nombre_prod'];
$compuesto=$_GET['nombre_comp'];
$precio_unitario=$_GET['precio_unitario'];
$precio_caja=$_GET['precio_caja'];
$imagen_referencia=$_GET['imagen_referencia'];

$sql="INSERT INTO productos VALUES('$linea','$nombre','$compuesto','$precio_unitario','$precio_caja','sdasd')";
$query=mysqli_query($con,$sql);

if($query){
    header("location:/html/Dashboard/Dashboard.php");
}
else{
echo("NO SE PUDO HACER EL INSERT");
}

?>