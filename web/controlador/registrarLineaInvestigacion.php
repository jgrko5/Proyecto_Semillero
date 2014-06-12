<?php
include_once ('oracle.php');

session_start();

$nombreL = $_POST['nombreLinea'];
$nombreGruposI = $_POST['gruposI'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO LINEAS_INVESTIGACION(nombre, GRUPOS_INVESTIGACION_ID) values ( :nombreLinea, :gruposI )');
oci_bind_by_name($stid, ':nombreLinea', $nombreL);
oci_bind_by_name($stid, ':gruposI', $nombreGruposI);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

oci_close($conexion);
echo "<script type='text/javascript'>
    alert('Linea de investigacion registrada con exito'); 
    document.location.href='../vista/registrarLineaInvestigacion.php';
    </script>";
?>