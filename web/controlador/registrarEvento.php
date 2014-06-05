<?php
include_once ('oracle.php');

session_start();

$nombreEv = $_POST['nombreEv'];
$ciudadEv = $_POST['ciudadEv'];
$añoEv = $_POST['añoEv'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO (nombre, ciudad, año) values (:nombreEv, :ciudadEv, :añoEv)');

oci_bind_by_name($tid, ':nombreEv', $nombreEv);
oci_bind_by_name($tid, ':ciudadEv', $ciudadEv);
oci_bind_by_name($tid, ':añoEv', $añoEv);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

oci_close($conexion);
?>