<?php
include_once ('oracle.php');

session_start();

$codigoLineaI = $_POST['codigoLI'];

$conexion = conectar();

$stid = oci_parse($conexion, 'SELECT (codigo, nombre, grupos) FROM LINEAS_INVESTIGACION WHERE ( codigoLineaI :codigoLI)');
oci_bind_by_name($tid, ':codigoLI', $codigoLineaI);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

oci_close($conexion);
?>
