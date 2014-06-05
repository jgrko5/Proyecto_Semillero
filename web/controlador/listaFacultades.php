<?php
include_once ('oracle.php');
session_start();

$conn = conectar();
$stid = oci_parse($conn, 'select id, nombre from facultades order by nombre');

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$comboboxFacultad = "";
while ($row = oci_fetch_array($stid)) {
    $comboboxFacultad .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
}

oci_close($conn);
?>