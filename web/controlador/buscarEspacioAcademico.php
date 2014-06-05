<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['documento'];

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
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
$i = 0;
$emergenteMaterias = "";
$emergenteMaterias .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergenteMaterias .= "><h6>Espacio académico</h6></header>";

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

    $_SESSION['codMateria'] = $row[0];
    $_SESSION['nomMateria'] = $row[1];

    $emergenteMaterias .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Codigo:</label></div>";
    $emergenteMaterias .= "<div class=" . '"etiquetaE"' . "><label>" . $row[0] . "</label></div>";
    $emergenteMaterias .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . "</label></div></br>";

    if ($_SESSION['idFacultad'] == 83) {
        $emergenteMaterias .= "<div class=" . '"etiquetaE"' . "><a href=" . '"actualizarMateria.php"' . ">Actualizar informacion</a></div></br>";
    }
    $emergenteMaterias .= "</br></br>";
} else {
    $emergenteMaterias .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
}
$emergenteMaterias .= "</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>