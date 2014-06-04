<?php
include_once ('oracle.php');

session_start();

$nombre = $_POST['nombrePremio'];
$observaciones = $_POST['observacionesP'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE PREMIOS SET nombre = :nombrePremio, observaciones = :observacionesP');

oci_bind_by_name($stid, ':nombrePremios', $nombre);
oci_bind_by_name($stid, ':observacionesP', $observaciones);

$r = oci_execute($stid);

unset($_SESSION['nombreP'], $_SESSION['observacionesP']);

oci_free_statement($stid);

oci_close($conexion);
?>