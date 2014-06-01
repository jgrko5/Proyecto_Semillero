<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UFT-8");
$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
	$stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_INGENIERIA order by codigo');
} else if ($_SESSION['seleccion'] == 2) {
	$stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_EDUCACION order by codigo');
} else if ($_SESSION['seleccion'] == 21) {
	$stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_SALUD order by codigo');
} else if ($_SESSION['seleccion'] == 22) {
	$stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_BASICAS order by codigo');
} else if ($_SESSION['seleccion'] == 23) {
	$stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_AGROINDUSTRIA order by codigo');
} else if ($_SESSION['seleccion'] == 24) {
	$stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_BELLAS_ARTES order by codigo');
} else if ($_SESSION['seleccion'] == 25) {
	$stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_ECONOMICA order by codigo');
}
oci_execute($stid);

$tablaConsolidacion = "<table><thead><tr><th>Codigo</th><th>Titulo</th></thead><tbody>";
$i = 0;

while ($row = oci_fetch_array($stid)) {
	if ($i == 1) {
		$tablaConsolidacion .= "tr class= " . '"alt"' . "><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
	} else {
		$combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
		$i++;
	}
}
$tablaConsolidacion .= "</tbody></table>";
oci_free_statement($stid);

oci_close($conexion);
?>