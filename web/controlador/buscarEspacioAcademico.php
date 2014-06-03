<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['service'];

if ($_SESSION['seleccion'] == 1) {
	$stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_INGENIERIA e where codigo=:codigo  ');
} else {
	if ($_SESSION['seleccion'] == 2) {
		$stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_educacion e where codigo=:codigo  ');
	} else {
		if ($_SESSION['seleccion'] == 21) {
			$stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_salud e where codigo=:codigo  ');
		} else {
			if ($_SESSION['seleccion'] == 22) {
				$stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_basicas e where codigo=:codigo  ');
			} else {
				if ($_SESSION['seleccion'] == 23) {
					$stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_agroindustria e where codigo=:codigo  ');
				} else {
					if ($_SESSION['seleccion'] == 24) {
						$stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_bellas_artes e where codigo=:codigo  ');
					} else {
						if ($_SESSION['seleccion'] == 25) {
							$stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_economica e where codigo=:codigo  ');
						}
					}
				}
			}
		}
	}
}
oci_bind_by_name($stid, ':codigo', $codigo);

$r = oci_execute($stid);

$combobit = "";
$i = 0;
$emergenteMaterias="";
$emergenteMaterias .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=".'"modalDialogHeader"';
$emergenteMaterias .= "><h6>Espacio académico</h6></header>";
$combobit .= "<table><thead><tr><th>Codigo</th><th>Nombre</th></tr></thead><tbody>";

if ($row = oci_fetch_array($stid)) {
	if ($row[0] == "") {
		$row[0] = "No registra";
	}
	if ($row[1] == "") {
		$row[1] = "No registra";
	}
	if ($row[2] == "") {
		$row[2] = "No registra";
	}
  	$emergenteMaterias.= "<div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Codigo:</label></div>";
    $emergenteMaterias.= "<div class=".'"etiquetaE"'."><label>".$row[0]."</label></div>";
    $emergenteMaterias.= "<div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Nombre:</label></div>".
	"<div class=" . '"etiquetaE"' . "><label>" . $row[1] . "</label></div></br>";
	if ($i == 1) {
		$combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td> <td><a href='" . "#openModal" . "'>Ver</a>  </td></tr>";
		$i = 0;
	} else {
		$combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td> <td><a href='" . "#openModal" . "'>Ver</a>  </td></tr>";
		$i++;

	}

}
else
{
$emergenteMaterias.= "<div class=".'"etiquetaE"'."style=".'"font-weight: bold;font-size:16px"'."><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";    
}
$combobit .= "</tbody></table>";
$emergenteMaterias.="</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>