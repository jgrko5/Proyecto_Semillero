<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['documento'];

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_INGENIERIA e where documento=:codigo order by e.nombre');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_educacion e where documento=:codigo order by e.nombre');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_salud e where documento=:codigo order by e.nombre');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_basicas e where documento=:codigo order by e.nombre');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_agroindustria e where documento=:codigo order by e.nombre');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_bellas_artes e where documento=:codigo order by e.nombre');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_economica e where documento=:codigo order by e.nombre');
                        }
                    }
                }
            }
        }
    }
}
oci_bind_by_name($stid, ':codigo', $codigo);

oci_execute($stid);

$i = 0;
$emergenteTut = "";
$emergenteTut .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergenteTut .= "><h6>Información del tutor</h6></header>";
if ($row = oci_fetch_array($stid)) {

    if ($row[0] == "") {
        $row[0] = "No registra";
    }
    if ($row[1] == "") {
        $row[1] = "No registra";
    }
    if ($row[3] == "") {
        $row[3] = "No registra";
    }
    if ($row[4] == "") {
        $row[4] = "No registra";
    }
    if ($row[5] == "") {
        $row[5] = "No registra";
    }

    $emergenteTut .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Cedula:</label></div>";
    $emergenteTut .= "<div class=" . '"etiquetaE"' . "><label>" . $row[0] . "</label></div>";
    $emergenteTut .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . " " . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Apellido:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[2] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Genero:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[3] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Categoria:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[4] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Grupo:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[5] . "</label></div></br></br></br>";
} else {
    $emergenteTut .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
}
$emergenteTut .= "</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>