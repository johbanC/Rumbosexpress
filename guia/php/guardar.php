<?php 

require_once '../../config/conexion.php';
$conexion=conexion();

$nro_guia = $_POST['nro_guia'];
$descripcion = $_POST['descripcion'];
$producto = $_POST['producto'];


$sql = "INSERT INTO guia (numero_guia, descripcion, id_productos )
		VALUES ('$nro_guia', '$descripcion', '$producto' )";
$result = mysqli_query($conexion,$sql);

if ($result) {
	header('Location: ../guia.php?sent=1');exit;
}else{
	header('Location: ../guia.php?sent=2');exit;
}




?>