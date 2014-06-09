<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_INGENIERIA e order by e.titulo');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_educacion e order by e.titulo');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_salud e order by e.titulo');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_basicas e order by e.titulo');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_agroindustria e order by e.titulo');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_bellas_artes e order by e.titulo');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_PROYECTOS_economica e order by e.titulo');
                        }
                    }
                }
            }
        }
    }
}

$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$combobit = "<table><thead><tr><th>Código</th><th>Título</th></thead><tbody>";
$i = 0;
$comboProyecto ="";
while ($row = oci_fetch_array($stid)) {
    $comboProyecto .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
    if ($i == 1) {
        $combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        $i = 0;
    } else {
        $combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        $i++;
    }

}
$combobit .= "</tbody></table>";
oci_free_statement($stid);
oci_close($conexion);
?>