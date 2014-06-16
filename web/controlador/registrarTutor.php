<?php

include_once ('oracle.php');

session_start();

$documentoTut = $_POST['docTutor'];
$nombreTut = $_POST['nombTutor'];
$apellidoTut = $_POST['apeTutor'];
$generoTut = $_POST['genTutor'];
$categoriaTut = $_POST['catTutor'];
$grupoInTut = $_POST['giTutor'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO tutores(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');

oci_bind_by_name($stid, ':docTutor', $docTutor);
oci_bind_by_name($stid, ':nombreTutor', $nombreTutor);
oci_bind_by_name($stid, ':apeTutor', $apeTutor);
oci_bind_by_name($stid, ':genTutor', $genTutor);
oci_bind_by_name($stid, ':catTutor', $catTutor);
oci_bind_by_name($stid, ':giTutor', $giTutor);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Tutor registrado con exito'); 
    document.location.href='../vista/registrarTutor.php';
    </script>";
?>