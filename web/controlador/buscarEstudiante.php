<?php

include_once ('oracle.php');

session_start();


error_reporting("E_ERROR && E_WARNING");

header( "Content-Type: text / html; charset =UTF-8") ;
    $conexion = conectar();
    $cedula=$_POST['documento'];
    

    if ($_SESSION['seleccion'] == 1) {
        $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_INGENIERIA e where cedula=:cedula or tarjetaidentidad=:tarjeta');
    } else {
        if ($_SESSION['seleccion'] == 2) {
            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_educacion e where cedula=:cedula or tarjetaidentidad=:tarjeta');
        } else {
            if ($_SESSION['seleccion'] == 21) {
                $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_salud e where cedula=:cedula or tarjetaidentidad=:tarjeta');
            } else {
                if ($_SESSION['seleccion'] == 22) {
                    $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_basicas e where cedula=:cedula or tarjetaidentidad=:tarjeta');
                } else {
                    if ($_SESSION['seleccion'] == 23) {
                        $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_agroindustria e where cedula=:cedula or tarjetaidentidad=:tarjeta');
                    } else {
                        if ($_SESSION['seleccion'] == 24) {
                            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_bellas_artes e where cedula=:cedula or tarjetaidentidad=:tarjeta');
                        } else {
                            if ($_SESSION['seleccion'] == 25) {
                                $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_economica e where cedula=:cedula or tarjetaidentidad=:tarjeta');
                            }
                        }
                    }
                }
            }
        }
    }
    oci_bind_by_name($stid, ':cedula', $cedula);
    oci_bind_by_name($stid, ':tarjeta', $cedula);
  
    oci_execute($stid);

    $combobit = "";
    $i = 0;
    
    while ($row = oci_fetch_array($stid)) {
        if ($i == 1) {
            $combobit .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td><a href='" . "#openModal" . "'>Ver</a>  </td></tr>";
            $i = 0;
        } else {
            $combobit .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> <td><a href='" . "#openModal" . "'>Ver</a>  </td></tr>";
            $i++;
        }
    }
    
    echo ($combobit);
     oci_free_statement($stid);
   
    oci_close($conexion);
?>