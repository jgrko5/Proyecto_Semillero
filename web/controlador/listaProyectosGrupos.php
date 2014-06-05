<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
if ($_SESSION['seleccion'] == 1) {
    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_INGENIERIA e where documento=:codigo order by e.nombre');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_educacion e where documento=:codigo order by e.nombre');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_salud e where documento=:codigo order by e.nombre');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_basicas e where documento=:codigo order by e.nombre');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_agroindustria e where documento=:codigo order by e.nombre');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_bellas_artes e where documento=:codigo order by e.nombre');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $stid = oci_parse($conexion, 'select * from CRUD_TUTORES_economica e where documento=:codigo order by e.nombre');
                        }
                    }
                }
            }
        }
    }
}
$consulta = oci_parse($conexion, 'SELECT DISTINCT p.TITULO,p.CODIGO
FROM PROYECTOS_INVESTIGACION p
LEFT JOIN SEMILLEROS_CONSOLIDACION sc
ON sc.ID = p.SEMILLEROS_CONSOLIDACION_ID
LEFT JOIN SEMILLEROS_EJECUCION se
ON se.ID = p.SEMILLEROS_EJECUCION_ID
LEFT JOIN GRUPOS_INVESTIGACION g
ON g.CODIGO  = sc.GRUPOS_INVESTIGACION_ID
and g.CODIGO = se.GRUPOS_INVESTIGACION_ID
ORDER BY (p.TITULO)');

$r = oci_execute($consulta);

if (!$r) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit ;
}

$select = "";

$select .= "<div class=" . '"etiqueta"' . ">
<label>Proyecto de investigación:</label>
</div></br>
<div class=" . '"componente"' . ">
<select class=" . '"select"' . " title=" . '"Proyecto de investigación"' . ">";

while ($row = oci_fetch_array($consulta)) {
    $select .= "<option value=" . '"' . $row[1] . '"' . ">" . $row[0] . "</option>";
}
$select .= "</select></div>";

oci_free_statement($consulta);
oci_close($consulta);
?>