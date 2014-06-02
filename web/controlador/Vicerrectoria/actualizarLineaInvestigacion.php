<?php
include_once ('oracle.php');

session_start();

$nombreL = $_POST['nombreLinea'];
$nombreGruposI = $_POST['gruposI'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE LINEAS_INVESTIGACION SET (nombreLineaI values :nombreLinea, gruposInvestiacion values :gruposI)');

oci_bind_by_name($tid, ':nombreLinea', $nombreL);
oci_bind_by_name($tid, ':gruposI', $nombreGruposI);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>