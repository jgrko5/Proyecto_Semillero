<?php
include_once ('oracle.php');
session_start();
error_reporting("E_ERROR && E_WARNING");
$conexion=conectar();
$codigo = $_POST['gestionCon'];

$stid = oci_parse($conexion, 'select contrasena from sesiones where id =:idsesion');
oci_bind_by_name($stid, ':idsesion', $codigo);

oci_execute($stid);

$textContrasena = "<div class=".'"etiqueta"'."><label>Contraseña:</label></div><div class=".'"componente"'.">< input class=".'"textfield"'."type=".'"text"'."name=".'"contrasena"'."placeholder=" .'"Contraseña"'."/></div>";                                             

?>