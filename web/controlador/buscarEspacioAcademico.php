<?php
include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['service'];

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_INGENIERIA e where codigo=:codigo  ');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_educacion e where codigo=:codigo  ');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_salud e where codigo=:codigo  ');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_basicas e where codigo=:codigo  ');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_agroindustria e where codigo=:codigo  ');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_bellas_artes e where codigo=:codigo  ');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_MATERIAS_economica e where codigo=:codigo  ');
                        }
                    }
                }
            }
        }
    }
}
oci_bind_by_name($stid, ':codigo', $codigo);

$r=oci_execute($stid);

?>