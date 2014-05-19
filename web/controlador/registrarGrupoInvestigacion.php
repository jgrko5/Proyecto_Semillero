<?php

include_once ('oracle.php');

session_start();

$codigo = $_POST['codigo'];
$normal = $_POST['nombre'];
$clasificacion = $_POST['clasificacion'];
$fecha = $_POST['fecha'];
$facultad = $_POST['facultad'];

$conexion = conectar();

$stid = oci_parse($conexion, "INSERT INTO grupos_Investigacion(codigo, nombre,clasificacioncolciencias,fechaconformacion,facultades_id) values ( :codigo, :nombre, :clasificacion, :fecha,  :facultad)");

oci_bind_by_name($stid, ':codigo', $codigo);
oci_bind_by_name($stid, ':nombre', $normal);
oci_bind_by_name($stid, ':clasificacion', $clasificacion);
oci_bind_by_name($stid, ':fecha', $fecha);
oci_bind_by_name($stid, ':facultad', $facultad);

$r = oci_execute($stid);

/*echo "<script type='text/javascript'>
    alert('Estudiante registrado con exito'); 
    document.location.href='../vista/registrarGrupoInvestigacion.php';
    </script>";
*/
oci_free_statement($stid);

oci_close($conexion);


?>