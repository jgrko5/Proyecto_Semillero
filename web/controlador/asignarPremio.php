<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");

$codigo = $_POST['premiosA'];
$documento = $_POST['codigo'];

$conexion = conectar();
$stid = oci_parse($conexion, 'INSERT  INTO PREMIOS_ESTUDIANTES(ESTUDIANTE_ID, PREMIOS_ID) values (:codigo,:premiosA)');

oci_bind_by_name($stid, ':codigo', $codigo);
oci_bind_by_name($stid, ':premiosA', $documentoS);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    // Para errores de oci_parse, pase el gestor de conexión
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

oci_free_statement($stid);

oci_close($conexion);


echo "<script type='text/javascript'>
    alert('Semillero registrado con exito'); 
    document.location.href='../vista/asignarEstudianteProyecto.php';
    </script>";

?>