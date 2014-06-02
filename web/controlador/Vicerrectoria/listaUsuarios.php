<?php

include_once('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");
$conexion=conectar();

$stid = oci_parse($conexion, 'select s.id, s.usuario from sesiones s order by s.usuario');

oci_execute($stid);

$combobitUsuarios = "";

while ($row = oci_fetch_array($stid))
{
	$combobitUsuarios .= "<option value=".'"'. $row[0] .'"' .">" . $row[1] . "</option>";
}
oci_close($conexion);

?>