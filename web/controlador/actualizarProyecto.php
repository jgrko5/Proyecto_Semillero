<?php
include_once ('oracle.php');

session_start();

$tituloP = $_POST['tituloProyecto'];
$gastoEP = $_POST['gastoEProyecto'];
$duracionP = $_POST['duracionProyecto'];
$fechaIP = $_POST['fechaIProyecto'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE PROYECTOS_INVESTIGACION SET (titulo = :tituloProyecto, gastoEfectivo = :gastoEProyecto, duracion = :duracionProyecto, 
																  fechaInicio = :fechaIProyecto)');

oci_bind_by_name($stid, ':tituloProyecto', $tituloP);
oci_bind_by_name($stid, ':gastoEProyecto', $gastoEP);
oci_bind_by_name($stid, ':duracionProyecto', $duracionP);
oci_bind_by_name($stid, ':fechaIProyecto', $fechaIP);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>