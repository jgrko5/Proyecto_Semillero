<?php
include_once ('oracle.php');

session_start();

$conexion = conectar();

$stid = oci_parse($conexion, 'select * from EVENTOS e order by nombre');

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
$comboboxEventos = "";
$combobit = "<table><thead><tr><th>Nombre</th><th>Ciudad</th><th>Año</th></tr></thead><tbody>";
$i = 0;

while ($row = oci_fetch_array($stid)) {
    $comboboxEventos .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
    if ($i == 1) {
        $combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i = 0;
    } else {
        $combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i++;
    }
}
$combobit .= "</tbody></table>";

oci_free_statement($stid);

oci_close($conexion);
?>