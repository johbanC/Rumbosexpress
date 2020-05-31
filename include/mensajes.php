

<?php 



if (!empty($_GET['sent'])) {
	if ($_GET['sent'] == '1' ) {
		echo '<script type="text/javascript">
		swal("Guardado Con Exito", 
		"",
		"success");
		</script>';
	}if ($_GET['sent'] == '2' ) {
		echo '<script type="text/javascript">
		swal("Error al Guardar", 
		"",
		"error");
		</script>';
	}
}

if (!empty($_GET['eli'])) {
	if ($_GET['eli'] == '1' ) {
		echo '<script type="text/javascript">
		swal("Eliminado Con Exito", 
		"",
		"success");
		</script>';
	}if ($_GET['eli'] == '2' ) {
		echo '<script type="text/javascript">
		swal("Error al Eliminar", 
		"",
		"error");
		</script>';
	}
}

if (!empty($_GET['mod'])) {
	if ($_GET['mod'] == '1' ) {
		echo '<script type="text/javascript">
		swal("Modificado Con Exito", 
		"",
		"success");
		</script>';
	}if ($_GET['mod'] == '2') {
		echo '<script type="text/javascript">
		swal("Error al Modificar", 
		"",
		"error");
		</script>';
	}
}

if (!empty($_GET['exi'])) {
	if ($_GET['exi'] == '1' ) {
		echo '<script type="text/javascript">
		swal("Error al Guardar", 
		"El Numero de documento ya se encuentra registrado...!!!",
		"error");
		</script>';
	}
}



 ?>