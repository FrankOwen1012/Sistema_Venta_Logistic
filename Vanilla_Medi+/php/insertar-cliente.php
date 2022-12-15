<?php

require_once '../conexion/Conexion.php';

$usuario = $_POST['user'] ;
$nombre = $_POST['nombre']; //el unico que llega como arreglo 
$apellido = $_POST['apellido'] ;
$pass = $_POST['pass'] ;
$telefono = $_POST['telefono'] ;
$direccion = $_POST['direccion'] ;

$conexion = new Conexion();
$db = $conexion->conectar();



$stmt = $db->prepare('INSERT INTO clientes(user,nombre,apellido,pass,telefono,direccion) VALUES (?,?,?,?,?,?)');
$stmt->bind_param('ssssss', $usuario, $nombre, $apellido, $pass, $telefono, $direccion);
$stmt->execute();


