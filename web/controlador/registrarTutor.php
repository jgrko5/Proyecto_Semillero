<?php

include_once ('oracle.php');
	
session_start();

$idFacultad=2;
$_SESSION['idFacultad']=$idFacultad;
$documentoTut = $_POST['docTutor'];
$nombreTut= $_POST['nombTutor'];
$apellidoTut= $_POST['apeTutor'];
$generoTut= $_POST['genTutor'];
$categoriaTut= $_POST['catTutor'];
$grupoInTut= $_POST['giTutor'];

$conexion = conectar();

$stid = oci_parse($conexion, 'select id, nombre from Categorias t order by t.nombres ');
















?>