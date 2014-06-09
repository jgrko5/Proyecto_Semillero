<?php
include_once ('oracle.php');
session_start();
error_reporting("E_ERROR && E_WARNING");
$conexion = conectar();
$codigo = $_POST['gestionCon'];

$stid = oci_parse($conexion, 'select * from sesiones where id =:idsesion');
oci_bind_by_name($stid, ':idsesion', $codigo);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$textContrasena = "";
if ($row = oci_fetch_array($stid)) {
    $textContrasena .= "<div class=" . '"etiqueta"' . "><label>Nombre de usuario:</label></div><div class=" . '"componente"' . "><input readonly=".'"true"'." name=".'"usuario"'." class=" . '"textfield"' . " type=" . '"text"' . "
    value=".'"'.$row[1].'"' . "/></div></br>";
    $textContrasena .= "<div class=" . '"etiqueta"' . "><label>Contraseña:</label></div><div class=" . '"componente"' . "><input name=".'"contrasena"'." class=" . '"textfield"' . " type=" . '"text"' . "
    value=".'"'.$row[2].'"' . "/></div></br></br></br>";
}



?>