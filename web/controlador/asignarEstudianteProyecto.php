<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

$codigo = $_POST['proEstudiante'];
$documento = $_POST['codigo'];

$conexion = conectar();
$stid = oci_parse($conexion, 'UPDATE estudiantes SET PROYECTOS_INVESTIGACION_CODIGO = :codigo WHERE cedula=:codigoDoc or tarjetaidentidad=:tarjeta');

oci_bind_by_name($stid, ':codigo', $codigo);
oci_bind_by_name($stid, ':codigoDoc', $documento);
oci_bind_by_name($stid, ':tarjeta', $documento);

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
    document.location.href='../vista/asignarProyectoEstudiante.php';
    </script>";
?>