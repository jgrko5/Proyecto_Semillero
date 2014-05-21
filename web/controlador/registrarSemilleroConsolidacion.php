<?php
include_once ('oracle.php');

session_start();

$idFacultad='';
$_SESSION['idFacultad']=(int)$idFacultad;

$añoSC = $_POST['año'];
$periodoSC = $_POST['periodo'];
$notaSC = $_POST['nota'];
$horasDocenteSC = $_POST['horasDocente'];
$homologacionSC = $_POST['valido'];

$conexion = conectar();

if ($_SESSION['idFacultad'] == 1) {
	$stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_ingenieria(año, periodo, nota, horasDocente, valido) values (:año, :periodo, :nota, :horasDocente, :valido)');
}
 else {
	if ($_SESSION['idFacultad'] == 2) {
		$stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_educacion(año, periodo, nota, horasDocente, valido) values (:año, :periodo, :nota, :horasDocente, :valido)');
	} else {
		if ($_SESSION['idFacultad'] == 21) {
			$stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_salud(año, periodo, nota, horasDocente, valido) values (:año, :periodo, :nota, :horasDocente, :valido)');
		} else {
			if ($_SESSION['idFacultad'] == 22) {
				$stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_basicas(año, periodo, nota, horasDocente, valido) values (:año, :periodo, :nota, :horasDocente, :valido)');
			} else {
				if ($_SESSION['idFacultad'] == 23) {
					$stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_agroindustria(año, periodo, nota, horasDocente, valido) values (:año, :periodo, :nota, :horasDocente, :valido)');
				} else {
					if ($_SESSION['idFacultad'] == 24) {
						$stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_bellas_artes(año, periodo, nota, horasDocente, valido) values (:año, :periodo, :nota, :horasDocente, :valido)');
					} else {
						if ($_SESSION['idFacultad'] == 25) {
							$stid = oci_parse($conexion, 'INSERT INTO crud_consolidacion_economica(año, periodo, nota, horasDocente, valido) values (:año, :periodo, :nota, :horasDocente, :valido)');
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
oci_bind_by_name($stid, ':horasDocente', $horasDocenteSC);
oci_bind_by_name($stid, ':valido', $homologacionSC);

echo "<script type='text/javascript'>
    alert('Semillero registrado con exito'); 
    document.location.href='../vista/registrarSemilleroConsolidacion.php';
    </script>";

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>