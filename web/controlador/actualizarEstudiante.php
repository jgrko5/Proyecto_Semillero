<?php
include_once ('oracle.php');

session_start();

$tarjeta = $_POST['tarjeta'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

if ($direccion == "No registra") {
    $direccion = "";
}
if ($correo == "No registra") {
    $correo = "";
}
if ($telefono == "No registra") {
    $telefono = "";
}
if ($cedula == "No registra") {
    $cedula = "";
}
if ($tarjeta == "No registra") {
    $tarjeta = "";
}

$conexion = conectar();

$stid = oci_parse($conexion, "UPDATE ESTUDIANTES SET direccion = :direccion, telefono = :telefono, correo = :correo WHERE cedula = :cedula OR tarjetaidentidad = :tarjeta");

oci_bind_by_name($stid, ':cedula', $cedula);
oci_bind_by_name($stid, ':tarjeta', $tarjeta);
oci_bind_by_name($stid, ':direccion', $direccion);
oci_bind_by_name($stid, ':telefono', $telefono);
oci_bind_by_name($stid, ':correo', $correo);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

unset($_SESSION['tarjeta'], $_SESSION['cedula'], $_SESSION['nombre'], $_SESSION['direccion'], $_SESSION['telefono'], $_SESSION['correo']);

oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Estudiante actualizado con exito'); 
    document.location.href='../vista/buscarEstudiante.php';
    </script>";
?>