<?php
include_once ('oracle.php');

session_start();

$anioSC = $_POST['anio'];
$periodoSC = $_POST['periodo'];
$notaSC = $_POST['nota'];
$homologacionSC = $_POST['homologo'];
$grupo = $_POST['grupo'];
$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_ingenieria(anio, periodo, nota, grupos_investigacion_id, homologo) values (:anio, :periodo, :nota, :grupo, :homologo)');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_educacion(anio, periodo, nota, grupos_investigacion_id, homologo) values (:anio, :periodo, :nota, :grupo, :homologo)');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_salud(anio, periodo, nota, grupos_investigacion_id, homologo) values (:anio, :periodo, :nota, :grupo, :homologo)');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_basicas(anio, periodo, nota, grupos_investigacion_id, homologo) values (:anio, :periodo, :nota, :grupo, :homologo)');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_agroindustria(anio, periodo, nota, grupos_investigacion_id, homologo) values (:anio, :periodo, :nota, :grupo, :homologo)');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_bellas_artes(anio, periodo, nota, grupos_investigacion_id, homologo) values (:anio, :periodo, :nota, :grupo, :homologo)');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_economica(anio, periodo, nota, grupos_investigacion_id, homologo) values (:anio, :periodo, :nota, :grupo, :homologo)');
                        }
                    }
                }
            }
        }
    }
}

oci_bind_by_name($stid, ':anio', $anioSC);
oci_bind_by_name($stid, ':periodo', $periodoSC);
oci_bind_by_name($stid, ':nota', $notaSC);
oci_bind_by_name($stid, ':grupo', $grupor);
oci_bind_by_name($stid, ':homologo', $homologacionSC);

$r = oci_execute($stid);
oci_free_statement($stid);

$stid2 = oci_parse($conexion, "(select max(id) from SEMILLEROS_CONSOLIDACION)");
$r2 = oci_execute($stid2);
$idConso = 0;
if ($rowSE = oci_fetch_array($stid2)) {
    $idConso = $rowSE[0];
}

$stid = oci_parse($conexion, 'UPDATE proyectos_investigacion SET SEMILLEROS_CONSOLIDACION_ID = :idSE');

oci_bind_by_name($stid, ':idSE', $idConso);
$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
echo "<script type='text/javascript'>
    alert('Semillero registrado con exito'); 
    document.location.href='../vista/registrarSemilleroConsolidacion.php';
    </script>";

oci_free_statement($stid);

oci_close($conexion);
?>