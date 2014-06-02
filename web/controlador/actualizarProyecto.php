<?php
include_once ('oracle.php');

session_start();

$tituloP = $_POST['tituloProyecto'];
$gastoEP = $_POST['gastoEProyecto'];
$duracionP = $_POST['duracionProyecto'];
$fechaIP = $_POST['fechaIProyecto'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE PROYECTOS_INVESTIGACION SET (titulo values :tituloProyecto, gastoEfectivo values :gastoEProyecto, duracion values :duracionProyecto, 
																  fechaInicio values :fechaIProyecto)');

oci_bind_by_name($tid, ':tituloProyecto', $tituloP);
oci_bind_by_name($tid, ':gastoEProyecto', $gastoEP);
oci_bind_by_name($tid, ':duracionProyecto', $duracionP);
oci_bind_by_name($tid, ':fechaIProyecto', $fechaIP);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>