<?php
include_once ('oracle.php');

session_start();

// Registro de semillero en formacion

$nota = $_POST['nota'];
$homologo=0;
if(isset($_REQUEST['valido']))
{
    $homologo=1;
}
$año = date("Y");
$mes = date("m");

if (7 > $mes) {
    $periodo = 1;
} else {
    $periodo = 2;
}

$conexion1 = conectar();

$stid = oci_parse($conexion1, 'INSERT INTO SEMILLEROS_FORMACION(nota, homologo, anio, periodos_id) values (:nota, :homologo, :anio,:periodo )');
$periodo = 1;
ocibindbyname($stid, ':nota', $nota);
ocibindbyname($stid, ':homologo', $homologo);
ocibindbyname($stid, ':anio', $año);
ocibindbyname($stid, ':periodo', $periodo);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

oci_free_statement($stid);

oci_close($conexion1);

//seleccionar Id de semillero  formacion

$conexion1 = conectar();

$stid = oci_parse($conexion1, 'SELECT max(id)  from SEMILLEROS_FORMACION');
oci_execute($stid);
$id = "";
if ($row = oci_fetch_array($stid)) {
    $id = $row[0];
}

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

oci_free_statement($stid);

oci_close($conexion1);

// Registro de estudiante

$tarjetaEst = $_POST['tarjetaEst'];
$cedulaEst = $_POST['cedulaEst'];
$nombreEst = $_POST['nombreEst'] . " " . $_POST['apellidoEst'];
$direccionEst = $_POST['direccionEst'];
$telefonoEst = $_POST['telefonoEst'];
$correoEst = $_POST['correoEst'];
$semestreEst = $_POST['semestreEst'];
$programaEst = $_POST['programaEst'];

$conexion = conectar();

$stid = oci_parse($conexion, 'INSERT INTO estudiantes (cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');

oci_bind_by_name($stid, ':tarjetaEst', $tarjetaEst);
oci_bind_by_name($stid, ':cedulaEst', $cedulaEst);
oci_bind_by_name($stid, ':nombreEst', $nombreEst);
oci_bind_by_name($stid, ':direccionEst', $direccionEst);
oci_bind_by_name($stid, ':telefonoEst', $telefonoEst);
oci_bind_by_name($stid, ':correoEst', $correoEst);
oci_bind_by_name($stid, ':semestreEst', $semestreEst);
oci_bind_by_name($stid, ':programaEst', $programaEst);
oci_bind_by_name($stid, ':id', $id);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Estudiante registrado con exito'); 
    document.location.href='../vista/registrarEstudiante.php';
    </script>";
?>

