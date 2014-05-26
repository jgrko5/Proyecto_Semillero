<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['documento'];

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_INGENIERIA e where cedula=:codigo or tarjetaidentidad=:tarjeta');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_educacion e where cedula=:codigo or tarjetaidentidad=:tarjeta');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_salud e where cedula=:codigo or tarjetaidentidad=:tarjeta');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_basicas e where cedula=:codigo or tarjetaidentidad=:tarjeta');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_agroindustria e where cedula=:codigo or tarjetaidentidad=:tarjeta');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_bellas_artes e where cedula=:codigo or tarjetaidentidad=:tarjeta');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_economica e where cedula=:codigo or tarjetaidentidad=:tarjeta');
                        }
                    }
                }
            }
        }
    }
}
oci_bind_by_name($stid, ':codigo', $codigo);
oci_bind_by_name($stid, ':tarjeta', $codigo);

oci_execute($stid);

$i = 0;
$emergenteEst = "";
$emergenteEst .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergenteEst .= "><h6>Estudiantes</h6></header>";
$texfield = "";
if ($row = oci_fetch_array($stid)) {

    if ($row[0] == "") {
        $row[0] = "No registra";
    } else {
        $texfield .= "<div id=" . '"'.$row[0].'"' . " class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '"' . $row[2] . '"' . "></div>";
    }
    if ($row[1] == "") {
        $row[1] = "No registra";
    } else {
        $texfield .= "<div id=" . '"'.$row[1].'"' . " class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '"' . $row[2] . '"' . "></div>";
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

    
    $emergenteEst .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Cedula:</label></div>";
    $emergenteEst .= "<div class=" . '"etiquetaE"' . "><label>" . $row[0] . "</label></div>";
    $emergenteEst .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Tarjeta de identidad:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . " " . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[2] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Dirección:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[3] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Correo:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[4] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Telefono:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[5] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Semestre:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[8] . "</label></div></br></br></br>";
} else {
    $emergenteEst .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
    $texfield .= "<div class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '" "' . "></div>";
}
$emergenteEst .= "</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>