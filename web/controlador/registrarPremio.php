<?php
include_once('oracle.php'); 

session_start();

$nombreP = $_POST['nombrePremio'];
$observacionesP = $_POST['observaciones'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO PREMIOS (nombre, observaciones) VALUES (:nombrePremio, :observaciones)');

oci_bind_by_name($tid, ':nombrePremio', $nombreP);
oci_bind_by_name($tid, ':observaciones', $observacionesP);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>