<?php
include_once ('oracle.php');
session_start();

$conn = conectar();
$stid = oci_parse($conn, 'select id, nombre from facultades order by nombre');

oci_execute($stid);

$comboboxFacultad = "";
while ($row = oci_fetch_array($stid)) {
    $comboboxFacultad .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
}

oci_close($conn);
?>