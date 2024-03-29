<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");

$codigo = $_POST['eventosA'];
$documento = $_POST['codigo'];

$conexion = conectar();
$stid = oci_parse($conexion, 'INSERT  INTO EVENTO_ESTUDIANTES(ESTUDIANTE_ID, EVENTO_ID) values (:codigo,:eventosA)');

oci_bind_by_name($stid, ':eventosA', $codigo);
oci_bind_by_name($stid, ':codigo', $documento);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    // Para errores de oci_parse, pase el gestor de conexión
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('evento asignado con exito'); 
    document.location.href='../vista/asignarEvento.php';
    </script>";
?>