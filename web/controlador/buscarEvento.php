<?php
include_once('oracle.php'); 

session_start();


$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from crud_evento_INGENIERIA e  ');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from crud_evento_educacion e  ');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from crud_evento_salud e  ');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from crud_evento_basicas e  ');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from crud_evento_agroindustria e  ');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from crud_evento_bellas_artes e  ');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from crud_evento_economica e  ');
                        }
                    }
                }
            }
        }
    }
}


$r = oci_execute($stid);
 
$combobit = "<table><thead><tr><th>Nombre</th><th>Ciudad</th><th>Año</th></tr></thead><tbody>";
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