<?php
include_once ('oracle.php');
session_start();
error_reporting("E_ERROR && E_WARNING");
$conexion = conectar();
$codigo = $_POST['gestionCon'];

$stid = oci_parse($conexion, 'select contrasena from sesiones where id =:idsesion');
oci_bind_by_name($stid, ':idsesion', $codigo);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$textContrasena = "";
if ($row = oci_fetch_array($stid)) {
    $textContrasena .= "<div class=" . '"etiqueta"' . "><label>Contraseña:</label></div><div class=" . '"componente"' . ">< input class=" . '"textfield"' . "type=" . '"text"' . "value=" . '"' . $row[0] . '"' . "name=" . '"contrasena"' . "placeholder=" . '"Contraseña"' . "/></div>";
}
?>