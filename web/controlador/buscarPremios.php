<?php

include_once ('oracle.php');

error_reporting("E_ERROR && E_WARNING");

$conexion = conectar();
$codigo = $_POST['premioNombre'];

    $stid = oci_parse($conexion, 'select * from Premios e where nombre=:nombrePremio');

oci_bind_by_name($stid, ':nombrePremio', $codigo);
$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$i = 0;
$emergentePremio = "";
$emergentePremio .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergentePremio .= "><h6>Información del premio</h6></header>";
if ($row = oci_fetch_array($stid)) {

    $_SESSION['codP'] = $row[0];
    $_SESSION['nombreP'] = $row[1];
    $_SESSION['observacionesP'] = $row[2];

    $emergentePremio .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>";
    $emergentePremio .= "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . "</label></div>";
    $emergentePremio .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Observaciones:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[2] . " " . "</label></div></br>";

    if ($_SESSION['idFacultad'] == 83) {
        $emergentePremio .= "<div class=" . '"etiquetaE"' . "><a href=" . '"actualizarPremio.php"' . ">Actualizar información</a></div></br>";
    }
    $emergentePremio .= "</br></br>";
} else {
    $emergentePremio .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
}
$emergentePremio .= "</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>