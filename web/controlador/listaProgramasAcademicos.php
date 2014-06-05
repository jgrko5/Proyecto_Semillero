<?php
include_once ('oracle.php');
session_start();

$conn = conectar();
$stid = oci_parse($conn, 'select id, nombre from programas_academicos where facultades_id=:id');
oci_bind_by_name($stid, ':id', $_SESSION['seleccion']);
$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$combobit = "";
while ($row = oci_fetch_array($stid)) {
    if ($row[1] != 'vicerrectoria') {
        $combobit .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
    }

}

oci_close($conn);
?>