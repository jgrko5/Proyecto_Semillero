<?php
include_once ('oracle.php');

session_start();

$codigoPC = $_POST['codPC'];

$conexion = conectar();
if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_INGENIERIA where codigo = :codigoPC');
} else if ($_SESSION['seleccion'] == 2) {
    $stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_EDUCACION where codigo = :codigoPC');
} else if ($_SESSION['seleccion'] == 21) {
    $stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_SALUD where codigo = :codigoPC');
} else if ($_SESSION['seleccion'] == 22) {
    $stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_BASICAS where codigo = :codigoPC');
} else if ($_SESSION['seleccion'] == 23) {
    $stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_AGRO where codigo = :codigoPC');
} else if ($_SESSION['seleccion'] == 24) {
    $stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_BELLAS where codigo = :codigoPC');
} else if ($_SESSION['seleccion'] == 25) {
    $stid = oci_parse($conexion, 'select * from CRUD_CONSOLIDACION_ECONOMICA where codigo = :codigoPC');
}

oci_bind_by_name($stid, ':codigoPC', $codigoPC);

oci_execute($stid);

$emergenteProC = "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergenteProC .= "><h6>Información de proyecto de investigación en consolidacion</h6></header>";

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
    if ($row[3] == "") {
        $row[3] = "No registra";
    }
    if ($row[4] == "") {
        $row[4] = "No registra";
    }
    
    $_SESSION['idSE']=$row[8];
    $_SESSION['codProSE']=$row[6];
    $_SESSION['proyectoSE']=$row[7];
    $_SESSION['anioSE']=$row[5];
    $_SESSION['periodoSE']=$row[3];
    $_SESSION['notaSE']=$row[0];
    
    $emergenteProC .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Codigo:</label></div>";
    $emergenteProC .= "<div class=" . '"etiquetaE"' . "><label>" . $row[0] . "</label></div>";
    $emergenteProC .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Titulo:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Gasto efectivo:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[2] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Duración:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[3] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Fecha de inicio:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[4] . "</label></div></br>";

    if ($_SESSION['idFacultad'] == 83) {
        $emergenteProC .= "<div class=" . '"etiquetaE"' . "><a href=" . '"actualizarSemilleroConsolidacion.php"' . ">Actualizar informacion</a></div></br>";
    }
    $emergenteProC .= "</br></br>";

} else {
    $emergenteProC .= $codigoPC."<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
}
$emergenteProC .= "</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>