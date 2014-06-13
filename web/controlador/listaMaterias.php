<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['service'];

$stid = oci_parse($conexion, 'select * from MATERIAS m order by m.nombre');

oci_bind_by_name($stid, ':codigo', $codigo);

$r = oci_execute($stid);
if (!$r) {
	$e = oci_error($conexion);
	trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
$combobit = "";
$i = 0;
$combobit .= "";

while ($row = oci_fetch_array($stid)) {
	$combobit .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
}

oci_free_statement($stid);

oci_close($conexion);
?>