<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['service'];

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_INGENIERIA e where codigo=:codigo  ');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_educacion e where codigo=:codigo  ');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_salud e where codigo=:codigo  ');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_basicas e where codigo=:codigo  ');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_agroindustria e where codigo=:codigo  ');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_bellas_artes e where codigo=:codigo  ');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_economica e where codigo=:codigo  ');
                        }
                    }
                }
            }
        }
    }
}
oci_bind_by_name($stid, ':codigo', $codigo);

oci_execute($stid);

$combobit = "";
$i = 0;
$emergenteGrupos="";
$emergenteGrupos .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=".'"modalDialogHeader"'."><h6>Grupo de investigación</h6></header>";
$combobit .= "<table><thead><tr><th>Codigo</th><th>Nombre</th><th>Clasificacion</th><th>fecha de Creacion</th></tr></thead><tbody>";

if ($row = oci_fetch_array($stid)) {
    $emergenteGrupos.= "</br><div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Codigo:</label></div>";
    $emergenteGrupos.= "<div class=".'"etiquetaE"'."><label>".$row[0]."</label></div>";
    $emergenteGrupos.= "<div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Nombre:</label></div>".
    "<div class=".'"etiquetaE"'."><label>".$row[1]."</label></div></br>
    <div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Clasificacion:</label></div>
    <div class=".'"etiquetaE"'."><label>".$row[2]."</label></div></br>
    <div class=".'"etiquetaE"'."style=".'"font-weight: bold;"'."><label>Fecha de creación:</label></div>
    <div class=".'"etiquetaE"'."><label>".$row[3]."</label></div></br></br></br>";
    if ($i == 1) {
        $combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td><a href='" . "#openModal" . "'>Ver</a>  </td></tr>";
        $i = 0;
    } else {
        $combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td><a href='" . "#openModal" . "'>Ver</a>  </td></tr>";
        $i++;

    }
    
}

$combobit .= "</tbody></table>";
$emergenteGrupos.="</div></div>";

oci_free_statement($stid);

oci_close($conexion);
?>

