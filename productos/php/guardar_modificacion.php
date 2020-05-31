<?php 

require_once '../../config/conexion.php';
$conexion=conexion();

$id_productos = $_REQUEST['id_productos'];
$nombre_producto =$_POST['nombre_producto'];
$total_producto =$_POST['total_producto'];


		$sql = "UPDATE `productos` SET
				`nombre_producto`='$nombre_producto',
				`total_producto`='$total_producto' 
				WHERE `productos`.`id_productos` = '$id_productos'" ;
		$result = mysqli_query($conexion,$sql);






if ($result) {
	header('Location: ../productos.php?mod=1');exit;
}else{
	header('Location: ../productos.php?mod=2');exit;
}



?>