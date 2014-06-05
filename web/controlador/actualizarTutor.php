<?php
include_once ('oracle.php');

session_start();

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$categoria = $_POST['categoria'];

$conexion = conectar();

$stid = oci_parse($conexion, "UPDATE TUTORES SET nombre = :nombre, apellido = :apellido, genero = :genero, categorias_id = :categoria WHERE documento = :cedula");

oci_bind_by_name($stid, ':nombre', $nombre);
oci_bind_by_name($stid, ':apellido', $apellido);
oci_bind_by_name($stid, ':genero', $genero);
oci_bind_by_name($stid, ':categoria', $categoria);
oci_bind_by_name($stid, ':cedula', $documento);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

unset($_SESSION['documentoT'], $_SESSION['nombreT'], $_SESSION['apellidoT'], $_SESSION['generoT']);

oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Tutor actualizado con exito'); 
    document.location.href='../vista/buscarTutor.php';
    </script>";
?>