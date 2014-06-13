<?php
include_once ('oracle.php');

session_start();

$nombrem = $_POST['nombre'];
$codigoM = $_POST['codigo'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO MATERIAS(nombre, codigo) values (:nombreM, :codigoM)');

oci_bind_by_name($stid, ':nombreM', $nombreM);
oci_bind_by_name($stid, ':codigoM', $codigoM);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

oci_close($conexion);
echo "<script type='text/javascript'>
    alert('Registrado con exito'); 
    document.location.href='../vista/registrarMateria.php';
    </script>";
?>