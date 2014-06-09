<?php
include_once ('oracle.php');

session_start();

$nombreEv = $_POST['nombreEv'];
$ciudadEv = $_POST['ciudadEv'];
$añoEv = $_POST['añoEv'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO EVENTOS(nombre, ciudad, anio) values (:nombreEv, :ciudadEv, :anioEv)');

oci_bind_by_name($stid, ':nombreEv', $nombreEv);
oci_bind_by_name($stid, ':ciudadEv', $ciudadEv);
oci_bind_by_name($stid, ':anioEv', $añoEv);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

oci_close($conexion);
echo "<script type='text/javascript'>
    alert('Registrado con exito'); 
    document.location.href='../vista/registrarEvento.php';
    </script>";
?>