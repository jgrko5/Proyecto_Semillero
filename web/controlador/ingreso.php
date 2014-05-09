<?php

include ("conexion.php");

function conectar() {
	$conn = ocilogon($user, $pass, $db);

	if (!$conn) {
		echo "conexion invalida",  var_dump(ocierror());
		die();
	}

}
?>