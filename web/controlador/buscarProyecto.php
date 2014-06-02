<?php
include_once ('oracle.php');

session_start();

$codigo= $_POST['codigoP'];

$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_INGENIERIA e WHERE (codigo = :codigoProyecto) order by e.titulo');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_educacion e WHERE (codigo = :codigoProyecto) order by e.titulo');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_salud e WHERE (codigo = :codigoProyecto) order by e.titulo');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_basicas e WHERE (codigo = :codigoProyecto) order by e.titulo');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_agroindustria e WHERE (codigo = :codigoProyecto) order by e.titulo');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_bellas_artes e WHERE (codigo = :codigoProyecto) order by e.titulo');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_economica e WHERE (codigo = :codigoProyecto) order by e.titulo');
                        }
                    }
                }
            }
        }
    }
}


oci_bind_by_name($stid, ':codigoProyecto', $codigo);

$r = oci_execute($stid);

$emergentePro .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=".'"modalDialogHeader"';
$emergentePro .= "><h6>Información de proyecto de investigación</h6></header>";

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
    $emergentePro.= "<div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Codigo:</label></div>";
    $emergentePro.= "<div class=".'"etiquetaE"'."><label>".$row[0]."</label></div>";
    $emergentePro.= "<div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Titulo:</label></div>".
    "<div class=".'"etiquetaE"'."><label>".$row[1]."</label></div></br>
    <div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Gasto efectivo:</label></div>
    <div class=".'"etiquetaE"'."><label>".$row[2]."</label></div></br>
    <div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Duración:</label></div>
    <div class=".'"etiquetaE"'."><label>".$row[3]."</label></div></br>
    <div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Fecha de inicio:</label></div>
    <div class=".'"etiquetaE"'."><label>".$row[4]."</label></div></br></br></br>";
    
}
else
{
$emergentePro.= "<div class=".'"etiquetaE"'."style=".'"font-weight: bold;font-size:16px"'."><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";    
}
$emergentePro.="</div></div>";

oci_free_statement($stid);

oci_close($conexion);

?>
