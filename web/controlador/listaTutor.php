<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_INGENIERIA e order by e.nombre');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_educacion e order by e.nombre');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_salud e order by e.nombre');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_basicas e order by e.nombre');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_agroindustria e order by e.nombre');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_bellas_artes e order by e.nombre');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_economica e order by e.nombre');
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

$combobit = "<table><thead><tr><th>Cedula</th><th>Nombre</th><th>Apellidos</th></tr></thead><tbody>";
$i = 0;

while ($row = oci_fetch_array($stid)) {
    if ($i == 1) {
        $combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i = 0;
    } else {
        $combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i++;
    }

}

$combobit .= "</tbody></table>";
oci_free_statement($stid);

oci_close($conexion);
?>