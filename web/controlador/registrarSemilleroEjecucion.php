<?php
include_once ('oracle.php');

session_start();

$añoSC = $_POST['año'];
$periodoSC = $_POST['periodo'];
$notaSC = $_POST['nota'];
$homologacionSC = $_POST['homologo'];
$grupo = $_POST['grupo'];
$horasdocente = $_POST['horas'];
$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(año, periodo, nota, grupos_investigacion_id, homologo, horasdocente) values (:año, :periodo, :nota, :grupo, :homologo, :horasdocente)');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_educacion(año, periodo, nota, grupos_investigacion_id, homologo, horasdocente) values (:año, :periodo, :nota, :grupo, :homologo, :horasdocente)');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_salud(año, periodo, nota, grupos_investigacion_id, homologo, horasdocente) values (:año, :periodo, :nota, :grupo, :homologo, :horasdocente)');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_basicas(año, periodo, nota, grupos_investigacion_id, homologo, horasdocente) values (:año, :periodo, :nota, :grupo, :homologo, :horasdocente)');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_agroindustria(año, periodo, nota, grupos_investigacion_id, homologo, horasdocente) values (:año, :periodo, :nota, :grupo, :homologo, :horasdocente)');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_bellas_artes(año, periodo, nota, grupos_investigacion_id, homologo, horasdocente) values (:año, :periodo, :nota, :grupo, :homologo, :horasdocente)');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_economica(año, periodo, nota, grupos_investigacion_id, homologo, horasdocente) values (:año, :periodo, :nota, :grupo, :homologo, :horasdocente)');
                        }
                    }
                }
            }
        }
    }
}

oci_bind_by_name($stid, ':año', $añoSC);
oci_bind_by_name($stid, ':periodo', $periodoSC);
oci_bind_by_name($stid, ':nota', $notaSC);
oci_bind_by_name($stid, ':grupo', $grupor);
oci_bind_by_name($stid, ':homologo', $homologacionSC);
oci_bind_by_name($stid, ':horasdocente', $horasdocente);

$r = oci_execute($stid);

$stid2 = oci_parse($conexion, "(select max(id) from SEMILLEROS_ejecucion)");
$r2 = oci_execute($stid2);
$idConso = 0;
if ($rowSE = oci_fetch_array($stid2)) {
    $idConso = $rowSE[0];
}

$stid = oci_parse($conexion, 'UPDATE proyectos_investigacion SET SEMILLEROS_ejecucion_ID = :idSE');

oci_bind_by_name($stid, ':idSE', $idConso);
$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($conexion);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
echo "<script type='text/javascript'>
    alert('Semillero registrado con exito'); 
    document.location.href='../vista/registrarSemilleroEjecucion.php';
    </script>";

oci_free_statement($stid);

oci_close($conexion);
?>