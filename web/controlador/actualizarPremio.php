<?php
include_once ('oracle.php');
error_reporting("E_ERROR && E_WARNING");
session_start();

$nombre = $_POST['nombrePremio'];
$observaciones = $_POST['observacionesP'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE PREMIOS SET nombre = :nombrePremio, observaciones = :observacionesP WHERE id = :id');

oci_bind_by_name($stid, ':id', $_SESSION['codP']);
oci_bind_by_name($stid, ':nombrePremio', $nombre);
oci_bind_by_name($stid, ':observacionesP', $observaciones);

$r = oci_execute($stid);

unset($_SESSION['nombreP'], $_SESSION['observacionesP'], $_SESSION['codP'] );

oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Premio actualizado con exito'); 
    document.location.href='../vista/buscarPremios.php';
    </script>";
?>