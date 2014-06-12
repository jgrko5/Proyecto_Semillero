<?php
include_once ('oracle.php');

session_start();

$cant_reg = 10;

$num_pag =0 ;

if (isset($_GET["pagina"])) {
    $num_pag = $_GET["pagina"];
}

if ($num_pag == 0) {
    $comienzo = 0;
    $num_pag = 1;
    $max = 10;
} else {
    $comienzo = ($num_pag - 1) * $cant_reg;
    $max = $num_pag * 10;
}

$conexion = conectar();
$resultado = "";

//TOTAL DE ESTUDIANTES POR FACULTAD

if ($_SESSION['seleccion'] == 1) {
    $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_linea_INGENIERIA ');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_linea_educacion');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_linea_salud');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_linea_basicas');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_linea_agroINDUSTRIA');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_linea_bellas_ARTES');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_linea_economica');
                        }
                    }
                }
            }
        }
    }
}
oci_execute($resultado);

$total_registros = 0;
if ($row = oci_fetch_array($resultado)) {
    $total_registros = $row[0];
    $_SESSION['tamEje'] = $row[0];
}

//CONSULTA PAGINADA DE LOS ESTUDIANTES

if ($_SESSION['seleccion'] == 1) {
    $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select * from CRUD_linea_INGENIERIA e order by e.grupo) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
} else {
    if ($_SESSION['seleccion'] == 2) {
        $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select * from CRUD_linea_educacion e order by e.grupo) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select * from CRUD_linea_SALUD e order by e.grupo) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select * from CRUD_linea_BASICAS e order by e.grupo) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select * from CRUD_linea_AGROINDUSTRIA e order by e.grupo) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select * from CRUD_linea_BELLAS_ARTES e order by e.grupo) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select * from CRUD_linea_ECONOMICA e order by e.grupo) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
                        }
                    }
                }
            }
        }
    }
}
oci_execute($resultado);

//CODIGO DE LAS TABLAS

$total_paginas = ceil($_SESSION['tamEje'] / $cant_reg);
$tabla = "<table><thead><tr><th>Grupo de investigación</th><th>Linea de investigación</th></tr></thead><tbody>";
$navegador = "";
$i = 0;
while ($row = oci_fetch_array($resultado)) {

    if ($i == 1) {
        $tabla .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        $i = 0;
    } else {
        $tabla .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        $i++;
    }
}
oci_close($conexion);
$tabla .= "</tbody></table><center><div id=" . '"navegacion"' . ">";

if (($num_pag - 1) > 0) {

    $navegador .= "<a href='buscarlineaInvestigacion.php?pagina=" . ($num_pag - 1) . "'>< Anterior</a> ";
}

for ($i = 1; $i <= $total_paginas; $i++) {
    if ($num_pag == $i) {
        $navegador .= "<b><p class='style1'>Página " . $num_pag . "</b> ";
    } else {
        $navegador .= "<a href='buscarLineaInvestigacion.php?pagina=$i'>$i</a> ";
    }
}

if (($num_pag + 1) <= $total_paginas) {
    $navegador .= " <a href='buscarLineaInvestigacion.php?pagina=" . ($num_pag + 1) . "'>Siguiente ></a>";
}
$navegador .= "</div></center>";
?>