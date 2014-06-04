<?php
include_once ('oracle.php');

session_start();

$nombre = $_POST['nombreEvento'];
$ciudad = $_POST['ciudadEvento'];
$anio = $_POST['aniEvento'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE EVENTOS SET nombre = :nombreE, ciudad = :ciudadE, año = :anioE WHERE id = :id');

oci_bind_by_name($stid, ':id', $_SESSION['codE']);
oci_bind_by_name($stid, ':nombreE', $nombre);
oci_bind_by_name($stid, ':ciudadE', $ciudad);
oci_bind_by_name($stid, ':anioE', $anio);

$r = oci_execute($stid);

unset($_SESSION['nombreE'], $_SESSION['ciudadE'], $_SESSION['aniE'],$_SESSION['codE'] );

oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Premio actualizado con exito'); 
    document.location.href='../vista/buscarPremios.php';
    </script>";
?>