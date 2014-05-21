<?php
include_once ('oracle.php');

session_start();

$idFacultad='';
$_SESSION['idFacultad']=(int)$idFacultad;

$codigoP = $_POST['codigoPE'];
$tituloP = $_POST['tituloPE'];
$fechaInicioP = $_POST['fechaPE'];
$duracionP = $_POST['duracionPE'];
$gastoP = $_POST['gastoPE'];
$estudianteP = $_POST['nombreestPE'];

$conexion = conectar();

if ($_SESSION['idFacultad'] == 1) {
	$stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(codigoProyecto, tituloProyecto, fechaInicio, duracionProyecto, gastoProyecto, nombresEstudiantes) values (:codigoPE, :tituloPE, :fechaPE, :duracionPE, :gastoPE, :nombreestPE)');
}
 else {
	if ($_SESSION['idFacultad'] == 2) {
		$stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(codigoProyecto, tituloProyecto, fechaInicio, duracionProyecto, gastoProyecto, nombresEstudiantes) values (:codigoPE, :tituloPE, :fechaPE, :duracionPE, :gastoPE, :nombreestPE)');
}
		if ($_SESSION['idFacultad'] == 21) {
			$stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(codigoProyecto, tituloProyecto, fechaInicio, duracionProyecto, gastoProyecto, nombresEstudiantes) values (:codigoPE, :tituloPE, :fechaPE, :duracionPE, :gastoPE, :nombreestPE)');
}
		} else {
			if ($_SESSION['idFacultad'] == 22) {
				$stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(codigoProyecto, tituloProyecto, fechaInicio, duracionProyecto, gastoProyecto, nombresEstudiantes) values (:codigoPE, :tituloPE, :fechaPE, :duracionPE, :gastoPE, :nombreestPE)');
}
			} else {
				if ($_SESSION['idFacultad'] == 23) {
					$stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(codigoProyecto, tituloProyecto, fechaInicio, duracionProyecto, gastoProyecto, nombresEstudiantes) values (:codigoPE, :tituloPE, :fechaPE, :duracionPE, :gastoPE, :nombreestPE)');
}
				} else {
					if ($_SESSION['idFacultad'] == 24) {
						$stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(codigoProyecto, tituloProyecto, fechaInicio, duracionProyecto, gastoProyecto, nombresEstudiantes) values (:codigoPE, :tituloPE, :fechaPE, :duracionPE, :gastoPE, :nombreestPE)');
}
					} else {
						if ($_SESSION['idFacultad'] == 25) {
							$stid = oci_parse($conexion, 'INSERT INTO crud_ejecucion_ingenieria(codigoProyecto, tituloProyecto, fechaInicio, duracionProyecto, gastoProyecto, nombresEstudiantes) values (:codigoPE, :tituloPE, :fechaPE, :duracionPE, :gastoPE, :nombreestPE)');
}
						} 
					}
				}
			}
		}
	}
}

oci_bind_by_name($stid, ':codigoPE', $codigoP);
oci_bind_by_name($stid, ':tituloPE', $tituloP);
oci_bind_by_name($stid, ':fechaPE', $fechaInicioP);
oci_bind_by_name($stid, ':duracionP', $duracionPE);
oci_bind_by_name($stid, ':gastoP', $gastoPE);
oci_bind_by_name($stid, ':estudianteP', $nombreestPE);

echo "<script type='text/javascript'>
    alert('Semillero registrado con exito'); 
    document.location.href='../vista/registrarSemilleroEjecucion.php';
    </script>";

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

?>