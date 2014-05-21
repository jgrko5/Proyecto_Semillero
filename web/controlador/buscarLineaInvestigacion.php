<?php
include_once ('oracle.php');

session_start();

$codigoLineaI = $_POST['codigoLI'];

$conexion = conectar();

$stid = oci_parse($conexion, 'SELECT (codigo, nombre, grupos) FROM LINEAS_INVESTIGACION WHERE ( codigoLineaI :codigoLI)');
oci_bind_by_name($tid, ':codigoLI', $codigoLineaI);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>
