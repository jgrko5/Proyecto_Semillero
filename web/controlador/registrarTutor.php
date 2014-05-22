<?php

include_once ('oracle.php');

session_start();

$documentoTut = $_POST['docTutor'];
$nombreTut = $_POST['nombTutor'];
$apellidoTut = $_POST['apeTutor'];
$generoTut = $_POST['genTutor'];
$categoriaTut = $_POST['catTutor'];
$grupoInTut = $_POST['giTutor'];

$conexion = conectar();

if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'INSERT INTO crud_tutores_ingenieria(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'INSERT INTO crud_tutores_educacion(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'INSERT INTO crud_tutores_salud(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'INSERT INTO crud_tutores_basicas(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'INSERT INTO crud_tutores_agroindustria(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'INSERT INTO crud_tutores_bellas_artes(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'INSERT INTO crud_tutores_economica(documento, nombre,apellido,genero,categorias_id,grupos_investigacion_codigo) values ( :docTutor,:nombreTutor, :apeTutor,  :genTutor, :catTutor, :giTutor)');
                        }
                    }
                }
            }
        }
    }
}

oci_bind_by_name($stid, ':docTutor', $docTutor);
oci_bind_by_name($stid, ':nombreTutor', $nombreTutor);
oci_bind_by_name($stid, ':apeTutor', $apeTutor);
oci_bind_by_name($stid, ':genTutor', $genTutor);
oci_bind_by_name($stid, ':catTutor', $catTutor);
oci_bind_by_name($stid, ':giTutor', $giTutor);

$r = oci_execute($stid);

oci_free_statement($stid);

oci_close($conexion);

echo "<script type='text/javascript'>
    alert('Tutor registrado con exito'); 
    document.location.href='../vista/registrarTutor.php';
    </script>";


?>