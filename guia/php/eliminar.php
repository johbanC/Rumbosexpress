<?php 

require_once '../../config/conexion.php';
$conexion=conexion();


$id_guia = $_GET['id_guia'];


$sql = "DELETE FROM guia WHERE id_guia = '$id_guia' ";
$result = mysqli_query($conexion,$sql);


if ($result) {
	header('Location: ../guia.php?eli=1');exit;
}else{
	echo "no";
}




 ?>