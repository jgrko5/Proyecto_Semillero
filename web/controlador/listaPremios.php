<?php
include_once ('oracle.php');
session_start();
$conexion = conectar();

$stid = oci_parse($conexion, 'select * from Premios e order by nombre');

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
$comboboxPremios = "";
$combobitPremio = "<table><thead><tr><th>Nombre</th><th>Observaciones</th></tr></thead><tbody>";
$i = 0;

while ($row = oci_fetch_array($stid)) {
    $comboboxPremios .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
    if ($i == 1) {
        $combobitPremio .= " <tr class= " . '"alt"' . " ><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i = 0;
    } else {
        $combobitPremio .= " <tr ><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i++;
    }
}
$combobitPremio .= "</tbody></table>";

oci_free_statement($stid);

oci_close($conexion);
?>