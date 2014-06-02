<?php
include_once ('oracle.php');

session_start();

$codigoLineaI = $_POST['codigoLI'];
$nombreL = $_POST['nombreLinea'];
$nombreGruposI = $_POST['gruposI'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO LINEAS_INVESTIGACION(codigo, nombre, grupos) values ( :codigoLI, :nombreLinea, :gruposI)');
oci_bind_by_name($tid, ':codigoLI', $codigoLineaI);
oci_bind_by_name($tid, ':nombreLinea', $nombreL);
oci_bind_by_name($tid, ':gruposI', $nombreGruposI);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>