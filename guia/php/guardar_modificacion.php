<?php 

require_once '../../config/conexion.php';
$conexion=conexion();

$id_guia = $_REQUEST['id_guia'];


$descripcion = $_POST['descripcion'];
$producto = $_POST['producto'];



		$sql = "UPDATE `guia` SET 
		`descripcion`='$descripcion', 
		`id_productos`= '$producto' 
		WHERE `guia`.`id_guia` = '$id_guia' " ;
		$result = mysqli_query($conexion,$sql);

if ($result) {
	header('Location: ../guia.php?mod=1');exit;
}else{
	header('Location: ../guia.php?mod=2');exit;
}



?>