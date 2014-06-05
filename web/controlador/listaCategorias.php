<?php
session_start();

error_reporting("E_ERROR && E_WARNING");

$conexion = conectar();

$stid = oci_parse($conexion, 'select id, nombre from Categorias t order by nombre ');

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$comboCate = "";

while ($row = oci_fetch_array($stid)) {
    $comboCate .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
}
oci_free_statement($stid);
oci_close($conexion);
?>