<?php
include_once ('oracle.php');

session_start();

$horas = $_POST['horas'];
$anio = $_POST['anio'];
$periodo = $_POST['periodo'];
$nota = $_POST['nota'];

$conexion = conectar();

$stid = oci_parse($conexion, 'UPDATE SEMILLEROS_EJECUCION SET (año = :anio, horasdocente = :horas, nota = :nota, 
                                                                  periodo = :periodo) WHERE id=:id');

oci_bind_by_name($stid, ':anio', $anio);
oci_bind_by_name($stid, ':horas', $horas);
oci_bind_by_name($stid, ':nota', $nota);
oci_bind_by_name($stid, ':periodo', $periodo);
oci_bind_by_name($stid, ':id', $_SESSION['idSE']);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

oci_free_statement($stid);

oci_close($conexion);

unset($_SESSION['idSE'], $_SESSION['codProSE'], $_SESSION['proyectoSE'], $_SESSION['anioSE'], $_SESSION['periodoSE'], $_SESSION['notaSE'], $_SESSION['horasSE']);

echo "<script type='text/javascript'>
    alert('Proyecto en ejecución actualizado con exito'); 
    document.location.href='../vista/buscarSemilleroEjecucion.php';
    </script>";
?>