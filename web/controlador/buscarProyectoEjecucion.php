<?php
include_once ('oracle.php');
$codigoPE="";
if(isset($_POST['codPE' ]))
    {

    $codigoPE = $_POST['codPE'];
    }
    $conexion = conectar();

    if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_EJECUCION_INGENIERIA where (codigo =:codigoPE)');
} else if ($_SESSION['seleccion'] == 2) {
    $stid = oci_parse($conexion, 'select * from CRUD_EJECUCION_EDUCACION where codigo =:codigoPE');
} else if ($_SESSION['seleccion'] == 21) {
    $stid = oci_parse($conexion, 'select * from CRUD_EJECUCION_SALUD where(codigo =:codigoPE)');
} else if ($_SESSION['seleccion'] == 22) {
    $stid = oci_parse($conexion, 'select * from CRUD_EJECUCION_BASICAS where(codigo =:codigoPE)');
} else if ($_SESSION['seleccion'] == 23) {
    $stid = oci_parse($conexion, 'select * from CRUD_EJECUCION_AGROINDUSTRIA where(codigo =:codigoPE)');
} else if ($_SESSION['seleccion'] == 24) {
    $stid = oci_parse($conexion, 'select * from CRUD_EJECUCION_BELLAS_ARTES where(codigo =:codigoPE)');
} else if ($_SESSION['seleccion'] == 25) {
    $stid = oci_parse($conexion, 'select * from CRUD_EJECUCION_ECONOMICA where(codigo =:codigoPE)');
}
oci_bind_by_name($stid, ':codigoPE', $codigoPE);

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
$emergenteProE ="";
$emergenteProE .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
$emergenteProE .= "><h6>Información de proyecto de investigación en ejecución</h6></header>";

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

    $_SESSION['idSE'] = $row[7];
    $_SESSI5ON['codProSE'] = $row[5];
    $_SESSION['proyectoSE'] = $row[6];
    $_SESSION['anioSE'] = $row[4];
    $_SESSION['periodoSE'] = $row[2];

    $emergenteProE .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Código:</label></div>";
    $emergenteProE .= "<div class=" . '"etiquetaE"' . "><label>" . $row[5] . "</label></div>";
    $emergenteProE .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Título:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[6] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Año:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[4] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Período:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[2] . "</label></div></br></br></br>";

    if ($_SESSION['idFacultad'] == 83) {
        $emergenteProE .= "<div class=" . '"etiquetaE"' . "><a href=" . '"actualizarSemilleroEjecucion.php"' . ">Actualizar información</a></div></br>";
    }
    $emergenteProE .= "</br></br>";

} else {
    $emergenteProE .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
}
$emergenteProE .= "</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>