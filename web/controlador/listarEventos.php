<?php
include_once ('oracle.php');

session_start();

$conectar = conectar();
$stid = oci_parse($conectar, 'select id, nombre from eventos order by nombre');

oci_execute($stid);

$comboboxEventos = "";
while ($row = oci_fetch_array($stid)) {
    $comboboxEventos .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
}

oci_close($conectar);
?>