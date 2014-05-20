<?php
include_once('oracle.php'); 

session_start();

$nombreEv = $_POST['nombreEv'];

$conexion = conectar();

$stid = oci_parse($conexion, 'SELECT (nombre, ciudad, año) FROM EVENTOS WHERE (nombreEv = :nombreEv)');

oci_bind_by_name($tid, ':nombreEv', $nombreEv);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>