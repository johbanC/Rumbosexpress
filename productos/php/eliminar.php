<?php 

require_once '../../config/conexion.php';
$conexion=conexion();


$id_productos = $_GET['id_productos'];


$sql = "DELETE FROM productos WHERE id_productos = '$id_productos' ";
$result = mysqli_query($conexion,$sql);


if ($result) {
	header('Location: ../productos.php?eli=1');exit;
}else{
	header('Location: ../productos.php?eli=2');exit;
}




 ?>