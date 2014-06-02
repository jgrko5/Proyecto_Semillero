<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_INGENIERIA e order by nombre');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from (
        											select ROWNUM, AUX.*
        													from(
        															CRUD_ESTUDIANTES_educacion e order by nombre
																)AUX
																WHERE ROWNUM <= :last
													)
													WHERE ROWNUM >= :first');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_salud e order by nombre');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_basicas e order by nombre');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_agroindustria e order by nombre');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_bellas_artes e order by nombre');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_economica e order by nombre');
                        }
                    }
                }
            }
        }
    }
}

oci_execute($stid);

$combobit = "<table><thead><tr><th>Cedula</th><th>Tarjeta de Identidad</th><th>Nombres y apellidos</th></tr></thead><tbody>";
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