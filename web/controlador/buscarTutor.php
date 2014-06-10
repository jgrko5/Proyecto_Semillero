<?php

include_once ('oracle.php');

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = "";
if (isset($_POST['documento'])) {
    $codigo = $_POST['documento'];

}

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_INGENIERIA e where documento=:codigo');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_educacion e where documento=:codigo');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_salud e where documento=:codigo');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_basicas e where documento=:codigo');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_agroindustria e where documento=:codigo');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_bellas_artes e where documento=:codigo');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_economica e where documento=:codigo');
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
$emergenteTut = "";
$emergenteTut .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergenteTut .= "><h6>Información del tutor</h6></header>";
if ($row = oci_fetch_array($stid)) {

    if ($row[0] == "") {
        $row[0] = "No registra";
    } else {
        $textfieldCodigo .= "<div  class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"codigo"' . "required=" . '"required"' . "value=" . '"' . $row[0] . '"' . "readonly=" . '"true"' . "></div>";
    }
    if ($row[1] == "") {
        $row[1] = "No registra";
    } else {
        $texfield .= "<div id=" . '"' . $row[1] . '"' . " class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '"' . $row[1] . '"' . "readonly=" . '"true"' . "></div>";
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

    $_SESSION['documentoT'] = $row[0];
    $_SESSION['nombreT'] = $row[1];
    $_SESSION['apellidoT'] = $row[2];
    $_SESSION['generoT'] = $row[3];

    $emergenteTut .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Cédula:</label></div>";
    $emergenteTut .= "<div class=" . '"etiquetaE"' . "><label>" . $row[0] . "</label></div>";
    $emergenteTut .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . " " . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Apellido:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[2] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Género:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[3] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Categoría:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[4] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Grupo:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[5] . "</label></div></br>";
    if ($_SESSION['idFacultad'] == 83) {
        $emergenteTut .= "<div class=" . '"etiquetaE"' . "><a href=" . '"actualizarTutor.php"' . ">Actualizar informacion</a></div></br>";
    }
    $emergenteTut .= "</br></br>";
} else {
    $emergenteTut .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
    $texfield .= "<div class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '""' . "readonly=" . '"true"' . "placeholder=" . '"Resultado de la busqueda"' . "></div>";
    $textfieldCodigo .= "<div class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"codigo"' . "required=" . '"required"' . "value=" . '""' . "readonly=" . '"true"' . "placeholder=" . '"Resultado de la busqueda"' . "></div>";
}
$emergenteTut .= "</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>