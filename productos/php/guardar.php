<?php 

require_once '../../config/conexion.php';
$conexion=conexion();

$nombre_producto =$_POST['nombre_producto'];
$total_producto =$_POST['total_producto'];

$sql = "INSERT INTO productos (nombre_producto, total_producto)
		VALUES ('$nombre_producto', '$total_producto' )";
$result = mysqli_query($conexion,$sql);

if ($result) {
	header('Location: ../productos.php?sent=1');exit;
}else{
	header('Location: ../productos.php?sent=2');exit;
}

?>