<?php
include_once ('oracle.php');

error_reporting("E_ERROR && E_WARNING");
$conectar = conectar();
$nombre = $_POST['nombreP'];
if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from crud_evento_INGENIERIA e where nombre=:nombrePremio');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from crud_evento_educacion e where nombre=:nombrePremio');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from crud_evento_salud e where nombre=:nombrePremio');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from crud_evento_basicas e where nombre=:nombrePremio');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from crud_evento_agroindustria e where nombre=:nombrePremio');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from crud_evento_bellas_artes e where nombre=:nombrePremio');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from crud_evento_economica e where nombre=:nombrePremio');
                        }
                    }
                }
            }
        }
    }
}

oci_bind_by_name($stid, ':nombreEvento', $nombre);
$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$emergenteEvento = "";
$emergenteEvento .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergenteEvento .= "><h6>Información del evento</h6></header>";
if ($row = oci_fetch_array($stid)) {

    $_SESSION['nombreE'] = $row[0];
    $_SESSION['ciudadE'] = $row[1];
    $_SESSION['anioE'] = $row[2];
    $_SESSION['codE'] = $row[4];

    $emergenteEvento .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>";
    $emergenteEvento .= "<div class=" . '"etiquetaE"' . "><label>" . $row[0] . "</label></div>";
    $emergenteEvento .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Ciudad:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . " " . "</label></div></br>
	<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Año:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[2] . "</label></div></br>";

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
?>