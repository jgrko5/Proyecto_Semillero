<?php
include_once ('oracle.php');
session_start();
error_reporting("E_ERROR && E_WARNING");
$conexion = conectar();
$nombre = "";
$emergenteEvento = "";
if (isset($_POST['nombreE'])) {
    $codigo = $_POST['nombreE'];

        $stid = oci_parse($conexion, 'select * from Eventos e where nombre=:nombrePremio');

    oci_bind_by_name($stid, ':nombrePremio', $codigo);
    $r = oci_execute($stid);
    if (!$r) {
        $e = oci_error($conexion);

        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    $emergenteEvento .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
    $emergenteEvento .= "><h6>Información del evento</h6></header>";
    if ($row = oci_fetch_array($stid)) {

        $_SESSION['nombreE'] = $row[1];
        $_SESSION['ciudadE'] = $row[2];
        $_SESSION['anioE'] = $row[3];
        $_SESSION['codE'] = $row[0];

        $emergenteEvento .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>";
        $emergenteEvento .= "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . "</label></div>";
        $emergenteEvento .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Ciudad:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[2] . " " . "</label></div></br>
	<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Año:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[3] . "</label></div></br>";
    
        if ($_SESSION['idFacultad'] == 83) {
            $emergenteEvento .= "<div class=" . '"etiquetaE"' . "><a href=" . '"actualizarEvento.php"' . ">Actualizar información</a></div></br>";
        }
        $emergenteEvento .= "</br></br>";
    } else {
        $emergenteEvento .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
    }
    $emergenteEvento .= "</div></div>";

    oci_free_statement($stid);

    oci_close($conectar);
}
?>