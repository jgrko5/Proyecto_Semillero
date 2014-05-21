<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();

if ($_SESSION['idFacultad'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_grupos_INGENIERIA e');
} else {
    if ($_SESSION['idFacultad'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_educacion e');
    } else {
        if ($_SESSION['idFacultad'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_salud e ');
        } else {
            if ($_SESSION['idFacultad'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_basicas e ');
            } else {
                if ($_SESSION['idFacultad'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_agroindustria e');
                } else {
                    if ($_SESSION['idFacultad'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_bellas_artes e');
                    } else {
                        if ($_SESSION['idFacultad'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_GRUPOS_economica e');
                        }
                    }
                }
            }
        }
    }
}

oci_execute($stid);

$combobit = "";
$i = 0;

while ($row = oci_fetch_array($stid)) {
    if ($row[0] != '0019') {
        if ($i == 1) {
            $combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td>" . $row[3] . "</td></tr>";
            $i = 0;
        } else {
            $combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td>" . $row[3] . "</td></tr>";
            $i++;
        }
    } else {
        continue;
    }

}

oci_close($conexion);
?>