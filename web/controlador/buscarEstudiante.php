<?php

include_once ('oracle.php');

error_reporting("E_ERROR && E_WARNING");
session_start();
$conexion = conectar();
$codigo = "";
$emergenteEst = "";
$texfield = "";
$texfieldId = "";
$textfieldCodigo = "";
if (isset($_POST['documento'])) {

    $codigo = $_POST['documento'];

    if ($_SESSION['seleccion'] == 1) {
        $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_INGENIERIA e where cedula=:codigo or tarjetaidentidad=:tarjeta');
    } else {
        if ($_SESSION['seleccion'] == 2) {
            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_educacion e where cedula=:codigo or tarjetaidentidad=:tarjeta');
        } else {
            if ($_SESSION['seleccion'] == 21) {
                $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_salud e where cedula=:codigo or tarjetaidentidad=:tarjeta');
            } else {
                if ($_SESSION['seleccion'] == 22) {
                    $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_basicas e where cedula=:codigo or tarjetaidentidad=:tarjeta');
                } else {
                    if ($_SESSION['seleccion'] == 23) {
                        $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_agroindustria e where cedula=:codigo or tarjetaidentidad=:tarjeta');
                    } else {
                        if ($_SESSION['seleccion'] == 24) {
                            $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_bellas_artes e where cedula=:codigo or tarjetaidentidad=:tarjeta');
                        } else {
                            if ($_SESSION['seleccion'] == 25) {
                                $stid = oci_parse($conexion, 'select * from CRUD_ESTUDIANTES_economica e where cedula=:codigo or tarjetaidentidad=:tarjeta');
                            }
                        }
                    }
                }
            }
        }
    }
    oci_bind_by_name($stid, ':codigo', $codigo);
    oci_bind_by_name($stid, ':tarjeta', $codigo);

    $r = oci_execute($stid);
    if (!$r) {
        $e = oci_error($conexion);
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    $i = 0;
    $emergenteEst = "";
    $emergenteEst .= "<div id=" . '"openModal"' . " class=" . '"modalDialog"' . "><div><a href=" . '"#close"' . " title=" . '"Close"' . " class=" . '"close"' . ">X</a><header class=" . '"modalDialogHeader"';
    $emergenteEst .= "><h6>Estudiantes</h6></header>";

    if ($row = oci_fetch_array($stid)) {

        if ($row[0] == "") {
            $row[0] = "No registra";
        } else {
            $textfieldCodigo .= "<div  class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"codigo"' . "required=" . '"required"' . "value=" . '"' . $row[0] . '"' . "readonly=" . '"true"' . "></div>";
            $texfield .= "<div id=" . '"' . $row[0] . '"' . " class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '"' . $row[2] . '"' . "readonly=" . '"true"' . "></div>";
        }
        if ($row[1] == "") {
            $row[1] = "No registra";
        } else {
            $textfieldCodigo .= "<div  class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"codigo"' . "required=" . '"required"' . "value=" . '"' . $row[1] . '"' . "readonly=" . '"true"' . "></div>";
            $texfield .= "<div id=" . '"' . $row[1] . '"' . " class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '"' . $row[2] . '"' . "readonly=" . '"true"' . "></div>";
        }
        if ($row[3] == "") {
            $row[3] = "No registra";
        }
        if ($row[4] == "") {
            $row[4] = "No registra";
        }
        if ($row[5] == "") {
            $row[5] = "No registra";
        }

        $_SESSION['actCedula'] = $row[0];
        $_SESSION['actTarjeta'] = $row[1];
        $_SESSION['actNombre'] = $row[2];
        $_SESSION['actDireccion'] = $row[3];
        $_SESSION['actCorreo'] = $row[4];
        $_SESSION['actTelefono'] = $row[5];
        
        if(($row[6])=="")
        {
            $row[6]= "No completado";
        }
        else
        {
            $row[6]= "Completado";
        }
        if(($row[8])=="")
        {
            $row[8]= "No completado";
        }
        else
        {
            $row[8]= "Completado";
        }
        if(($row[9]==""))
        {
            $row[9]= "No completado";
        }
        else
        {
            $row[9]= "Completado";
        }

        $emergenteEst .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Cédula:</label></div>";
        $emergenteEst .= "<div class=" . '"etiquetaE"' . "><label>" . $row[0] . "</label></div>";
        $emergenteEst .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Tarjeta de identidad:</label></div>" . "<div class=" . '"etiquetaE"' . "><label>" . $row[1] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Nombre:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[2] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Dirección:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[3] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Correo:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[4] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Telefono:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[5] . "</label></div></br>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Semestre:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[8] . "</label></div>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Fase de formación:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[6] . "</label></div>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Fase de consolidación:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[8] . "</label></div>
    <div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;"' . "><label>Fase de ejecución:</label></div>
    <div class=" . '"etiquetaE"' . "><label>" . $row[9] . "</label></div></br></br>";
        if ($_SESSION['idFacultad'] == 83) {
            $emergenteEst .= "<div class=" . '"etiquetaE"' . "><a href=" . '"actualizarEstudiante.php"' . ">Actualizar informacion</a></div></br>";
        }
        $emergenteEst .= "</br></br>";
    } else {
        $emergenteEst .= "<div class=" . '"etiquetaE"' . "style=" . '"font-weight: bold;font-size:16px"' . "><label>No se encontraron coincidencias, por favor intente nuevamente</label></div></br>";
        $texfield .= "<div class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '""' . "readonly=" . '"true"' . "placeholder=" . '"Resultado de la busqueda"' . "></div>";
        $textfieldCodigo .= "<div class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"codigo"' . "required=" . '"required"' . "value=" . '""' . "readonly=" . '"true"' . "placeholder=" . '"Resultado de la busqueda"' . "></div>";
    }
    $emergenteEst .= "</div></div>";

    oci_free_statement($stid);

    oci_close($conexion);
} else {
    $texfield .= "<div class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"tipo"' . "required=" . '"required"' . "value=" . '""' . "readonly=" . '"true"' . "placeholder=" . '"Resultado de la busqueda"' . "></div>";
    $textfieldCodigo .= "<div class=" . '"componente"' . "><input class=" . '"textField"' . "type=" . '"text"' . "name=" . '"codigo"' . "required=" . '"required"' . "value=" . '""' . "readonly=" . '"true"' . "placeholder=" . '"Resultado de la busqueda"' . "></div>";
}
?>