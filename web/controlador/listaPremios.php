<?php
include_once ('oracle.php');

$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
	$stid = oci_parse($conexion, 'select * from crud_premios_INGENIERIA e order by nombre');
} else {
	if ($_SESSION['seleccion'] == 2) {
		$stid = oci_parse($conexion, 'select * from crud_premios_educacion e order by nombre');
	} else {
		if ($_SESSION['seleccion'] == 21) {
			$stid = oci_parse($conexion, 'select * from crud_premios_salud e order by nombre');
		} else {
			if ($_SESSION['seleccion'] == 22) {
				$stid = oci_parse($conexion, 'select * from crud_premios_basicas e order by nombre');
			} else {
				if ($_SESSION['seleccion'] == 23) {
					$stid = oci_parse($conexion, 'select * from crud_premios_agroindustria e order by nombre');
				} else {
					if ($_SESSION['seleccion'] == 24) {
						$stid = oci_parse($conexion, 'select * from crud_premios_bellas_artes e order by nombre');
					} else {
						if ($_SESSION['seleccion'] == 25) {
							$stid = oci_parse($conexion, 'select * from crud_premios_economica e order by nombre');
						}
					}
				}
			}
		}
	}
}

$r = oci_execute($stid);
$comboboxPremios = "";
$combobitPremio = "<table><thead><tr><th>Nombre</th><th>Observaciones</th></tr></thead><tbody>";
$i = 0;

while ($row = oci_fetch_array($stid)) {
	$comboboxPremios .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
    if ($i == 1) {
        $combobitPremio .= " <tr class= " . '"alt"' . " ><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>" ;
        $i = 0;
    } else {
        $combobitPremio .= " <tr ><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i++;
    }
}
$combobitPremio .= "</tbody></table>";

oci_free_statement($stid);

oci_close($conexion);

?>