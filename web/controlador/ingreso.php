<?php

include ("oracle.php");
session_start();

$conexion = conectar();

$usuario = strtolower($_POST['usuario']);
$contrasena = $_POST['contrasena'];

$stid = oci_parse($conexion, 'select s.activo, s.facultad_id, f.nombre from sesiones s join facultades f on s.facultad_id = f.id where s.usuario=:usuario and s.contrasena=:pass and s.activo=' . "'1'");
oci_bind_by_name($stid, ':usuario', $usuario);
oci_bind_by_name($stid, ':pass', $contrasena);

$r = oci_execute($stid);

if (!$r) {
    $e = oci_error($conn);
    // Para errores de oci_parse, pase el gestor de conexión
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

if ($row = oci_fetch_array($stid)) {
    if ($row[0] == 1) {
        $_SESSION['idFacultad'] = $row[1];
        $_SESSION['nomFacultad'] = $row[2];
        if ($row[1] != 83) {
            $_SESSION['seleccion'] = $row[1];
        }

        if ($usuario == 'ingenieria') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicioIngenieria.php';
            </script>";
        }
        if ($usuario == 'educacion') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicioEducacion.php';
            </script>";
        }
        if ($usuario == 'salud') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicioSalud.php';
            </script>";
        }
        if ($usuario == 'basicas') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicioBasicas.php';
            </script>";
        }
        if ($usuario == 'agroindustria') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicioAgroindustria.php';
            </script>";
        }
        if ($usuario == 'bellasartes') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicioBellasArtes.php';
            </script>";
        }
        if ($usuario == 'economicas') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicioEconomicas.php';
            </script>";
        }
        if ($usuario == 'vicerrectoria') {
            echo "<script type='text/javascript'>
            document.location.href='../vista/inicio.php';
            </script>";
        }

    }
} else {
    echo "<script type='text/javascript'>
    alert('usuario o contraseña incorrecto'); 
    document.location.href='../vista/inicioSesion.php';
    </script>";
}

oci_free_statement($stid);

oci_close($conexion);
?>