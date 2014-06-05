<?php
include_once ('oracle.php');

$conexion = conectar();

$stid = oci_parse($conexion, 'select id, nombre from semestres order by id');

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$combosemestre = "";

while ($row = oci_fetch_array($stid)) {
    $combosemestre .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
}

oci_free_statement($stid);

oci_close($conexion);
?>