<?php 

require_once '../../config/conexion.php';
$conexion=conexion();

$tipo_documento =$_POST['tipo_documento'];
$documento =$_POST['documento'];
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];

$sql="SELECT documento FROM usuarios WHERE documento = $documento";
$result = mysqli_query($conexion,$sql);


//verificamos si el numero de documento ya exite
if( mysqli_num_rows($result) == 0){

	$sql = "INSERT INTO usuarios (id_tipo_documento, documento, nombre, apellido)
			VALUES ('$tipo_documento', '$documento', '$nombre', '$apellido' )";
	$result = mysqli_query($conexion,$sql);
	if ($result) {
		header('Location: ../usuarios.php?sent=1');exit;
	}
}
else{
	header('Location: ../usuarios.php?exi=1');exit; 
}




?>