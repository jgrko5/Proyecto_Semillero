<?php
include_once ('oracle.php');

session_start();

$nombre = $_POST[''];
$observaciones = $_POST[''];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE MATERIAS SET (nombre values :nombreMateria) ');

oci_bind_by_name($stid, ':nombreMateria', $nombreMateria);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);
?>