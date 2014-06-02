<?php
include_once ('oracle.php');

session_start();

$conectar = conectar();
$stid = oci_parse($conectar, 'select id, nombre from premios order by nombre');

oci_execute($stid);

$comboboxPremios = "";
while ($row = oci_fetch_array($stid)) {
    $comboboxPremios .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
}

oci_close($conectar);

?>