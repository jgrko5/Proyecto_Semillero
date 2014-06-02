<?php
include_once('oracle.php'); 

session_start();

$codigoP = $_POST['codigoProyecto'];
$tituloP = $_POST['tituloProyecto'];
$gastoEP = $_POST['gastoEProyecto'];
$duracionP = $_POST['duracionProyecto'];
$fechaIP = $_POST['fechaIProyecto'];

$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
   $stid = oci_parse($conexion, 'INSERT INTO PROYECTOS_INVESTIGACION (codigo, titulo, gastoEfectivo, duracion, fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, :fechaIProyecto)');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'INSERT INTO PROYECTOS_INVESTIGACION (codigo, titulo, gastoEfectivo, duracion, fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, :fechaIProyecto)');
    } else {
        if ($_SESSION['seleccion'] == 21) {
           $stid = oci_parse($conexion, 'INSERT INTO PROYECTOS_INVESTIGACION (codigo, titulo, gastoEfectivo, duracion, fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, :fechaIProyecto)');
        } else {
            if ($_SESSION['seleccion'] == 22) {
               $stid = oci_parse($conexion, 'INSERT INTO PROYECTOS_INVESTIGACION (codigo, titulo, gastoEfectivo, duracion, fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, :fechaIProyecto)');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'INSERT INTO PROYECTOS_INVESTIGACION (codigo, titulo, gastoEfectivo, duracion, fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, :fechaIProyecto)');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                      $stid = oci_parse($conexion, 'INSERT INTO PROYECTOS_INVESTIGACION (codigo, titulo, gastoEfectivo, duracion, fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, :fechaIProyecto)');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'INSERT INTO PROYECTOS_INVESTIGACION (codigo, titulo, gastoEfectivo, duracion, fechaInicio) VALUES (:codigoProyecto, :tituloProyecto, :gastoEProyecto, :duracionProyecto, :fechaIProyecto)');
                        }
                    }
                }
            }
        }
    }
}


oci_bind_by_name($tid, ':codigoProyecto', $codigoP);
oci_bind_by_name($tid, ':tituloProyecto', $tituloP);
oci_bind_by_name($tid, ':gastoEProyecto', $gastoEP);
oci_bind_by_name($tid, ':duracionProyecto', $duracionP);
oci_bind_by_name($tid, ':fechaIProyecto', $fechaIP);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>