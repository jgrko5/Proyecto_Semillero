<?php
include_once ('oracle.php');

session_start();

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$clasificacion = $_POST['clasificacion'];
$fecha = $_POST['fecha'];

$conexion = conectar();

$stid = oci_parse($conexion, "UPDATE GRUPOs_INVESTIGACION SET nombre = :nombre, clasificacioncolciencias = :clasificacion,fechaconformacion = TO_DATE('" . $fecha . "','yy-mm-dd') WHERE codigo = :codigo");

oci_bind_by_name($stid, ':codigo', $codigo);
oci_bind_by_name($stid, ':nombre', $nombre);
oci_bind_by_name($stid, ':clasificacion', $clasificacion);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
unset($_SESSION['actualCodG'], $_SESSION['actualNombreG'], $_SESSION['actualClasG'], $_SESSION['actualFeG']);

oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Grupo de investigacion actualizado con exito'); 
    document.location.href='../vista/buscarGrupoInvestigacion.php';
    </script>";
?>