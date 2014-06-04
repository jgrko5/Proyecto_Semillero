<?php
include_once ('oracle.php');

session_start();

$conectar = conectar();
$nombre = $_POST['nombreE'];
if ($_SESSION['seleccion'] == 1) {
	$stid = oci_parse($conexion, 'select * from crud_premios_INGENIERIA e where nombre=:nombrePremio');
} else {
	if ($_SESSION['seleccion'] == 2) {
		$stid = oci_parse($conexion, 'select * from crud_premios_educacion e where nombre=:nombrePremio');
	} else {
		if ($_SESSION['seleccion'] == 21) {
			$stid = oci_parse($conexion, 'select * from crud_premios_salud e where nombre=:nombrePremio');
		} else {
			if ($_SESSION['seleccion'] == 22) {
				$stid = oci_parse($conexion, 'select * from crud_premios_basicas e where nombre=:nombrePremio');
			} else {
				if ($_SESSION['seleccion'] == 23) {
					$stid = oci_parse($conexion, 'select * from crud_premios_agroindustria e where nombre=:nombrePremio');
				} else {
					if ($_SESSION['seleccion'] == 24) {
						$stid = oci_parse($conexion, 'select * from crud_premios_bellas_artes e where nombre=:nombrePremio');
					} else {
						if ($_SESSION['seleccion'] == 25) {
							$stid = oci_parse($conexion, 'select * from crud_premios_economica e where nombre=:nombrePremio');
						}
					}
				}
			}
		}
	}
}

oci_bind_by_name($stid, ':nombrePremio', $nombre);
oci_execute($stid);

$i = 0;
$emergentePremio = "";
$emergentePremio .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergentePremio .= "><h6>Información del premio</h6></header>";
if ($row = oci_fetch_array($stid)) {

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

oci_close($conectar);

?>