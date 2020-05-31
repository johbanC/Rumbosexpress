<?php 

require_once '../../config/conexion.php';
$conexion=conexion();


$id_usuarios = $_GET['id_usuarios'];


$sql = "DELETE FROM usuarios WHERE id_usuarios = '$id_usuarios' ";
$result = mysqli_query($conexion,$sql);


if ($result) {
	header('Location: ../usuarios.php?eli=1');exit;
}else{
	echo "no";
}




 ?>