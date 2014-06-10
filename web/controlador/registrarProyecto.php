<?php
include_once ('oracle.php');

session_start();

//INSERCION DEL PROYECTO EN LA BASE DE DATOS

$codigoP = $_POST['codigoProyecto'];
$tituloP = $_POST['tituloProyecto'];
$gastoEP = $_POST['gastoEProyecto'];
$duracionP = $_POST['duracionProyecto'];
$fechaIP = $_POST['fechaIProyecto'];

$conexion = conectar();
$stid = oci_parse($conexion, "INSERT INTO PROYECTOS_INVESTIGACION p (p.codigo, p.titulo, p.gastoEfectivo, p.duracion, p.fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, TO_DATE('" . $fechaIP . "','yy-mm-dd'))");

oci_bind_by_name($stid, ':codigoProyecto', $codigoP);
oci_bind_by_name($stid, ':tituloProyecto', $tituloP);
oci_bind_by_name($stid, ':gastoEProyecto', $gastoEP);
oci_bind_by_name($stid, ':duracionProyecto', $duracionP);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

// INSERCION DE EL SEMILLERO EN CONSOLIDACION EN LA BD

$anioSC = $_POST['anio'] + 0;
$periodoSC = $_POST['periodo'];
$notaSC = $_POST['nota'];

if (isset($_POST['valido']) && $_POST['valido'] == '1') {
    $homologacionSC = 'V';
}
else {
	$homologacionSC ='F';
}
$grupo = $_POST['grupo'];

$stid = oci_parse($conexion, 'INSERT INTO SEMILLEROS_CONSOLIDACION(anio, periodos_id, nota, grupos_investigacion_id, homologo) values (:anio, :periodo,:nota, :grupo, :homologo)');
// $stid = oci_parse($conexion, 'INSERT INTO SEMILLEROS_CONSOLIDACION( periodos_id, grupos_investigacion_id,homologo, nota) values (:periodo, :grupo,:homologo, :nota)');

oci_bind_by_name($stid, ':anio', $anioSC);
oci_bind_by_name($stid, ':periodo', $periodoSC);
oci_bind_by_name($stid, ':nota', $notaSC);
oci_bind_by_name($stid, ':grupo', $grupo);
oci_bind_by_name($stid, ':homologo', $homologo);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
   
    print htmlentities($e['sqltext']);
    print htmlentities($e['offset']);
}
oci_free_statement($stid);

//SELECCION DEL ID DEL SEMILLERO EN CONSOLIDACION AL QUE SE VA A ACTUALIZAR EN EL PROYECTO DE INVESTIGACION

$stid2 = oci_parse($conexion, "(select max(id) from SEMILLEROS_CONSOLIDACION)");
$r2 = oci_execute($stid2);
$idConso = 0;
if ($rowSE = oci_fetch_array($stid2)) {
    $idConso = $rowSE[0];
}
oci_free_statement($stid2);

//ACTUALIZACION DE LA FORANEA DE CONSOLIDACION EN EL PROYECTO DE INVESTIGACION

$stid = oci_parse($conexion, 'UPDATE proyectos_investigacion p SET p.SEMILLEROS_CONSOLIDACION_ID = :idSE where p.codigo= :codigoP');

oci_bind_by_name($stid, ':idSE', $idConso);
oci_bind_by_name($stid, ':codigoP', $codigoP);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

oci_free_statement($stid);

oci_close($conexion);

//BORRADO DE LAS VARIABLES USADAS

unset($codigoP, $tituloP, $gastoEP, $duracionP, $fechaIP);
echo "<script type='text/javascript'>
    alert('Registrado con exito'); 
    document.location.href='../vista/registrarProyecto.php';
    </script>";
?>