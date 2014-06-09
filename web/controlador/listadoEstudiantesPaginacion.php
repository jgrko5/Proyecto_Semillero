<?php
include_once ('oracle.php');

session_start();

$cant_reg = 20;
$num_pag = 0;
if (isset($_GET["pagina"])) {

    $num_pag = $_GET["pagina"];
}

if (!$num_pag) {
    $comienzo = 0;
    $num_pag = 1;
    $max = 20;
} else {
    $comienzo = ($num_pag - 1) * $cant_reg;
    $max = $num_pag * 20;
}

$conexion = conectar();
$resultado = "";

//TOTAL DE ESTUDIANTES POR FACULTAD

if ($_SESSION['seleccion'] == 1) {
    $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_ESTUDIANTES_INGENIERIA ');
} else {
    if ($_SESSION['seleccion'] == 2) {
        $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_ESTUDIANTES_educacion');
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_ESTUDIANTES_salud');
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_ESTUDIANTES_basicas');
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_ESTUDIANTES_agroindustria');
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_ESTUDIANTES_bellas_artes');
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $resultado = oci_parse($conexion, 'select COUNT(*) from CRUD_ESTUDIANTES_economica');
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
    $_SESSION['tamEst'] = $row[0];
}

//CONSULTA PAGINADA DE LOS ESTUDIANTES

if ($_SESSION['seleccion'] == 1) {
    $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select e.CEDULA, e.TARJETAIDENTIDAD, e.NOMBRE from CRUD_ESTUDIANTES_INGENIERIA e order by e.NOMBRE ) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
} else {
    if ($_SESSION['seleccion'] == 2) {
        $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select e.CEDULA, e.TARJETAIDENTIDAD, e.NOMBRE from CRUD_ESTUDIANTES_educacion e order by e.NOMBRE ) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
    } else {
        if ($_SESSION['seleccion'] == 21) {
            $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select e.CEDULA, e.TARJETAIDENTIDAD, e.NOMBRE from CRUD_ESTUDIANTES_SALUD e order by e.NOMBRE ) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
        } else {
            if ($_SESSION['seleccion'] == 22) {
                $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select e.CEDULA, e.TARJETAIDENTIDAD, e.NOMBRE from CRUD_ESTUDIANTES_BASICAS e order by e.NOMBRE ) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
            } else {
                if ($_SESSION['seleccion'] == 23) {
                    $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select e.CEDULA, e.TARJETAIDENTIDAD, e.NOMBRE from CRUD_ESTUDIANTES_AGROINDUSTRIA e order by e.NOMBRE ) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
                } else {
                    if ($_SESSION['seleccion'] == 24) {
                        $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select e.CEDULA, e.TARJETAIDENTIDAD, e.NOMBRE from CRUD_ESTUDIANTES_BELLAS_ARTES e order by e.NOMBRE ) a 
where ROWNUM <= $max ) where rnum  >= $comienzo");
                    } else {
                        if ($_SESSION['seleccion'] == 25) {
                            $resultado = oci_parse($conexion, "select * from ( select a.*, ROWNUM rnum from ( 
select e.CEDULA, e.TARJETAIDENTIDAD, e.NOMBRE from CRUD_ESTUDIANTES_ECONOMICA e order by e.NOMBRE ) a 
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

$total_paginas = ceil($_SESSION['tamEst'] / $cant_reg);
$tabla = "<table><thead><tr><th>Cedula</th><th>Tarjeta de Identidad</th><th>Nombres y apellidos</th></tr></thead><tbody>";
$navegador = "";
$i = 0;
while ($row = oci_fetch_array($resultado)) {

    if ($i == 1) {
        $tabla .= " <tr class= " . '"alt"' . " ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i = 0;
    } else {
        $tabla .= " <tr ><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        $i++;
    }
}
oci_close($conexion);
$tabla .= "</tbody></table><center><div id=" . '"navegacion"' . ">";

if (($num_pag - 1) > 0) {

    $navegador .= "<a href='buscarEstudiante.php?pagina=" . ($num_pag - 1) . "'>< Anterior</a> ";
}

for ($i = 1; $i <= $total_paginas; $i++) {
    if ($num_pag == $i) {
        $navegador .= "<b><p class='style1'>Página " . $num_pag . "</b> ";
    } else {
        $navegador .= "<a href='buscarEstudiante.php?pagina=$i'>$i</a> ";
    }
}

if (($num_pag + 1) <= $total_paginas) {
    $navegador .= " <a href='buscarEstudiante.php?pagina=" . ($num_pag + 1) . "'>Siguiente ></a>";
}
$navegador .= "</div></center>";
?>