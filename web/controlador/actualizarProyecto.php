<?php
include_once ('oracle.php');

session_start();
$codigo = "";
$tituloP = "";
$gastoEP = "";
$duracionP = "";
$fechaP = "";
if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
}
if (isset($_POST['tituloProyecto'])) {

    $tituloP = $_POST['tituloProyecto'];
}
if (isset($_POST['gastoEProyecto'])) {
    $gastoEP = $_POST['gastoEProyecto'];

}
if (isset($_POST['duracionProyecto'])) {
    $duracionP = $_POST['duracionProyecto'];

}
if (isset($_POST['fechaProyecto'])) {

    $fechaP = $_POST['fechaProyecto']." nada";
}
echo $_POST['fechaProyecto'];
$conexion = conectar();
$stid = "";
if ($fechaP == "") {

    $stid = oci_parse($conexion, "UPDATE PROYECTOS_INVESTIGACION SET titulo = :tituloProyecto, gastoEfectivo = :gastoEProyecto, duracion = :duracionProyecto, fechaInicio = TO_DATE('" . $fechaP . "','yy-mm-dd') where codigo= :codigo");

    oci_bind_by_name($stid, ':tituloProyecto', $tituloP);
    oci_bind_by_name($stid, ':gastoEProyecto', $gastoEP);
    oci_bind_by_name($stid, ':duracionProyecto', $duracionP);
    oci_bind_by_name($stid, ':fechaIProyecto', $fechaP);
    oci_bind_by_name($stid, ':codigo', $codigo);
    
    $r = oci_execute($stid);
    if (!$r) {
        $e = oci_error($conexion);
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }
} else {
    $stid = oci_parse($conexion, "UPDATE PROYECTOS_INVESTIGACION SET titulo = :tituloProyecto, gastoEfectivo = :gastoEProyecto, duracion = :duracionProyecto where codigo= :codigo");

    oci_bind_by_name($stid, ':tituloProyecto', $tituloP);
    oci_bind_by_name($stid, ':gastoEProyecto', $gastoEP);
    oci_bind_by_name($stid, ':duracionProyecto', $duracionP);
    oci_bind_by_name($stid, ':codigo', $codigo);
    $r = oci_execute($stid);
    if (!$r) {
        $e = oci_error($conexion);
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }
}

oci_free_statement($stid);

oci_close($conexion);

unset($conexion, $stid, $codigo, $tituloP, $gastoEP, $duracionP, $fechaP);
echo "<script type='text/javascript'>
    alert('Grupo de investigacion actualizado con exito'); 
    document.location.href='../vista/buscarProyecto.php';
    </script>";
?>