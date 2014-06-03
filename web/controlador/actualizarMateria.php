<?php
include_once('oracle.php');

session_start();

$codigoMateria = $_POST['codigo'];
$nombreMateria = $_POST['nombre'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE MATERIAS SET nombre = :nombreMateria where codigo = :codigo ');

oci_bind_by_name($stid, ':codigo', $codigoMateria);
oci_bind_by_name($stid, ':nombreMateria', $nombreMateria);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

unset($_SESSION['codMateria'], $_SESSION['nomMateria']);

echo "<script type='text/javascript'>
    alert('Materia actualizada con exito'); 
    document.location.href='../vista/buscarEspacioAcademico.php';
    </script>";
?>
