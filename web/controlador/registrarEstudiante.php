<?php
include_once ('oracle.php');

session_start();

// Registro de semillero en formacion 

$nota = $_POST['nota'];
$homologo = $_POST['homologacion'];
$año = date("Y");
$mes = date("m");

if(6<$mes)
{
    $periodo=1;
}
else {
	$periodo=2;
}

$conexion1 = conectar();

$stid = oci_parse($conexion1, 
'INSERT INTO SEMILLEROS_FORMACION(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst)');

oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion1);

//seleccionar Id de semillero  formacion

$conexion1 = conectar();

$stid = oci_parse($conexion1,'SELECT id  from SEMILLEROS_FORMACION order by id desc');
$id="";
if($row = oci_fetch_array($stid))
{
    $id=$row[0];
}

oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion1);


// Registro de estudiante

$tarjetaEst = $_POST['tarjetaEst'];
$cedulaEst = $_POST['cedulaEst'];
$nombreEst = $_POST['nombreEst'] ." " . $_POST['apellidoEst'];
$direccionEst = $_POST['direccionEst'];
$telefonoEst = $_POST['telefonoEst'];
$correoEst = $_POST['correoEst'];
$semestreEst = $_POST['semestreEst'];
$programaEst = $_POST['programaEst'];

$conexion = conectar();

if ($_SESSION['idFacultad'] == 1) {
	$stid = oci_parse($conexion, 'INSERT INTO crud_estudiantes_ingenieria(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');
} else {
	if ($_SESSION['idFacultad'] == 2) {
		$stid = oci_parse($conexion, 'INSERT INTO crud_estudiantes_educacion(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');
	} else {
		if ($_SESSION['idFacultad'] == 21) {
			$stid = oci_parse($conexion, 'INSERT INTO crud_estudiantes_salud(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');
		} else {
			if ($_SESSION['idFacultad'] == 22) {
				$stid = oci_parse($conexion, 'INSERT INTO crud_estudiantes_basicas(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');
			} else {
				if ($_SESSION['idFacultad'] == 23) {
					$stid = oci_parse($conexion, 'INSERT INTO crud_estudiantes_agroindustria(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');
				} else {
					if ($_SESSION['idFacultad'] == 24) {
						$stid = oci_parse($conexion, 'INSERT INTO crud_estudiantes_bellas_artes(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');
					} else {
						if ($_SESSION['idFacultad'] == 25) {
							$stid = oci_parse($conexion, 'INSERT INTO crud_estudiantes_economica(cedula, tarjetaidentidad,nombre,direccion,correo,telefono,semestre_id,programas_academicos_id, SEMILLEROS_FORMACION_FK) values ( :cedulaEst, :tarjetaEst, :nombreEst, :direccionEst,  :correoEst, :telefonoEst, :semestreEst, :programaEst,:id)');
						} 
					}
				}
			}
		}
	}
}

oci_bind_by_name($stid, ':tarjetaEst', $tarjetaEst);
oci_bind_by_name($stid, ':cedulaEst', $cedulaEst);
oci_bind_by_name($stid, ':nombreEst', $nombreEst);
oci_bind_by_name($stid, ':direccionEst', $direccionEst);
oci_bind_by_name($stid, ':telefonoEst', $telefonoEst);
oci_bind_by_name($stid, ':correoEst', $correoEst);
oci_bind_by_name($stid, ':semestreEst', $semestreEst);
oci_bind_by_name($stid, ':programaEst', $programaEst);


$r = oci_execute($stid);  

oci_free_statement($stid);


oci_close($conexion);


echo "<script type='text/javascript'>
    alert('Estudiante registrado con exito'); 
    document.location.href='../vista/registrarEstudiante.php';
    </script>";


?>

