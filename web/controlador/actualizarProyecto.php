<?php
include_once ('oracle.php');

session_start();
$codigo = $_POST['codigo'];
$tituloP = $_POST['tituloProyecto'];
$gastoEP = $_POST['gastoEProyecto'];
$duracionP = $_POST['duracionProyecto'];
$fechaP = $_POST['fechaIProyecto'];

$conexion = conectar();

$stid = oci_parse($conexion, "UPDATE PROYECTOS_INVESTIGACION SET (titulo = :tituloProyecto, gastoEfectivo = :gastoEProyecto, duracion = :duracionProyecto, fechaInicio = TO_DATE('" . $fechaP . "','yy-mm-dd'))");

oci_bind_by_name($stid, ':tituloProyecto', $tituloP);
oci_bind_by_name($stid, ':gastoEProyecto', $gastoEP);
oci_bind_by_name($stid, ':duracionProyecto', $duracionP);
oci_bind_by_name($stid, ':fechaIProyecto', $fechaP);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

oci_free_statement($stid);

oci_close($conexion);

unset($conexion, $stid, $codigo, $tituloP, $gastoEP, $duracionP, $fechaP);
?>