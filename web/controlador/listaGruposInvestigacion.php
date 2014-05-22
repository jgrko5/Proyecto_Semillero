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
$comboGrupo = "";
while ($row = oci_fetch_array($stid)) 
{
    
    if ($row[0] != '0019') {
        
        $comboGrupo .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
        if ($i == 1) {
            $combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td>" . $row[3] . "</td></tr>";
            $i = 0;
        } else {
            $combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td>" . $row[3] . "</td></tr>";
            $i++;
        }
    }
    else {
        continue;
    }

}

oci_close($conexion);
?>