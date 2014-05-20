<?php
include_once ('oracle.php');

session_start();

$codigoProyecto = $_POST['codigoP'];

$conexion = conectar();

$stid = oci_parse($conexion, 'SELECT (codigo, titulo, gastoEfectivo, duracion, fechaInicio) FROM PROYECTOS_INVESTIGACION  WHERE (codigoP = :codigoProyecto');

oci_bind_by_name($tid, ':codigoP', $codigoProyecto);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>
