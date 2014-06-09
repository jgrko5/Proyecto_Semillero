<?php
include_once ('oracle.php');
session_start();
error_reporting("E_ERROR && E_WARNING");
$conexion = conectar();

$id = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$stid = oci_parse($conexion, 'update sesiones set contrasena = :contra where usuario =:usuario');
oci_bind_by_name($stid, ':usuario', $id);
oci_bind_by_name($stid, ':contra', $contrasena);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    
    trigger_error(htmlentities($e['message']), E_USER_ERROR);

}

oci_free_statement($stid);
oci_close($stid);

echo "<script type='text/javascript'>
    alert('Cambio realizado con exito'); 
    document.location.href='../vista/gestionUsuarios.php';
    </script>";


?>