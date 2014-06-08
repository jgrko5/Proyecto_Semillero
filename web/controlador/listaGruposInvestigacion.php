<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_grupos_INGENIERIA e');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_educacion e');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_salud e ');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_basicas e ');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_agroindustria e');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_bellas_artes e');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_economia e');
                        }
                    }
                }
            }
        }
    }
}

$r = oci_execute($stid);

if ($r == false) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['offset']), E_USER_ERROR);
}

$tabla = "<table><thead><tr><th>Código</th><th>Nombre</th><th>Clasificacion</th><th>fecha de Creacion</th></tr></thead><tbody>";
$i = 0;
$comboGrupo = "";
while ($row = oci_fetch_array($stid)) {

    if ($row[0] != '0019') {

        $comboGrupo .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
        if ($i == 1) {
            $tabla .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td>" . $row[3] . "</td></tr>";
            $i = 0;
        } else {
            $tabla .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td>" . $row[3] . "</td></tr>";
            $i++;
        }
    } else {
        continue;
    }

}

$tabla .= "</tbody></table>";
oci_close($conexion);
?>