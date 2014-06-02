<?php
include_once ('oracle.php');

session_start();

$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
	$stid = oci_parse($conexion, 'select * from crud_premios_INGENIERIA e  ');
} else {
	if ($_SESSION['seleccion'] == 2) {
		$stid = oci_parse($conexion, 'select * from crud_premios_educacion e  ');
	} else {
		if ($_SESSION['seleccion'] == 21) {
			$stid = oci_parse($conexion, 'select * from crud_premios_salud e  ');
		} else {
			if ($_SESSION['seleccion'] == 22) {
				$stid = oci_parse($conexion, 'select * from crud_premios_basicas e  ');
			} else {
				if ($_SESSION['seleccion'] == 23) {
					$stid = oci_parse($conexion, 'select * from crud_premios_agroindustria e  ');
				} else {
					if ($_SESSION['seleccion'] == 24) {
						$stid = oci_parse($conexion, 'select * from crud_premios_bellas_artes e  ');
					} else {
						if ($_SESSION['seleccion'] == 25) {
							$stid = oci_parse($conexion, 'select * from crud_premios_economica e  ');
						}
					}
				}
			}
		}
	}
}

$r = oci_execute($stid);

$combobitPremio = "<table><thead><tr><th>Nombre</th><th>Observaciones</th></tr></thead><tbody>";
$i = 0;

while ($row = oci_fetch_array($stid)) {
    if ($i == 1) {
        $combobitPremio .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>" ;
        $i = 0;
    } else {
        $combobitPremio .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        $i++;
    }
}
$combobitPremio .= "</tbody></table>";

oci_free_statement($stid);

oci_close($conexion);

?>