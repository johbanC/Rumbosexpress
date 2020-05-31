<?php 

require_once '../../config/conexion.php';
$conexion=conexion();

$id_usuarios = $_REQUEST['id_usuarios'];
$tipo_documento =$_POST['tipo_documento'];
$documento =$_POST['documento'];
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];


		$sql = "UPDATE `usuarios` SET
				`id_tipo_documento`='$tipo_documento',
				`documento`='$documento',
				`nombre`='$nombre',
				`apellido`='$apellido' 
				WHERE `usuarios`.`id_usuarios` = '$id_usuarios'" ;
		$result = mysqli_query($conexion,$sql);






if ($result) {
	header('Location: ../usuarios.php?mod=1');exit;
}else{
	header('Location: ../usuarios.php?mod=2');exit;
}



?>