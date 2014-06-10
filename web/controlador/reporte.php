<?php
require_once ("oracle.php");
require_once ("fpdf/fpdf.php");
require_once ("jpgraph/jpgraph.php");
require_once ("jpgraph/jpgraph_pie.php");
require_once ("jpgraph/jpgraph_bar.php");
require_once ("jpgraph/jpgraph_pie3d.php");

if (isset($_POST['anio'])) {

    $anio = $_POST['anio'];
}
$anio = 2009;

class PDF extends FPDF {
    public function __construct($orientation = 'P', $unit = 'cm', $format = 'A4') {
        parent::__construct($orientation, $unit, $format);
    }

    function graficoPDF($datos = array(), $nombreGrafico = NULL, $ubicacionTamamo = array(), $titulo = NULL) {
        //construccion de los arrays de los ejes x e y
        if (!is_array($datos) || !is_array($ubicacionTamamo)) {
            echo "los datos del grafico y la ubicacion deben de ser arreglos";
        } elseif ($nombreGrafico == NULL) {
            echo "debe indicar el nombre del grafico a crear";
        } else {
            #obtenemos los datos del grafico
            foreach ($datos as $key => $value) {
                $data[] = $value[0];
                $nombres[] = $key;
                $color[] = $value[1];
            }
            $x = $ubicacionTamamo[0];
            $y = $ubicacionTamamo[1];
            $ancho = $ubicacionTamamo[2];
            $altura = $ubicacionTamamo[3];
            #Creamos un grafico vacio
            $graph = new PieGraph(500, 500);
            #indicamos titulo del grafico si lo indicamos como parametro
            if (!empty($titulo)) {
                $graph -> title -> Set($titulo);
            }
            //Creamos el plot de tipo tarta
            $p1 = new PiePlot3D($data);
            $p1 -> SetSliceColors($color);
            #indicamos la leyenda para cada porcion de la tarta
            $p1 -> SetLegends($nombres);
            $p1 -> SetSize(140);
            //Añadirmos el plot al grafico
            $graph -> Add($p1);
            //mostramos el grafico en pantalla
            @unlink("../$nombreGrafico.png");
            $graph -> Stroke("../$nombreGrafico.png");
            $this -> Image("../$nombreGrafico.png", $x, $y, $ancho, $altura);

        }
    }

    function gaficoPDFBarra($datosy = array(), $datosx = array(), $nombreX = null, $nombreY = null, $facultades = array(), $nombreGrafico = NULL, $ubicacionTamamo = array()) {
        //construccion de los arrays de los ejes x e y
        // Creamos el grafico
        $grafico = new Graph(600, 600, "auto");
        $grafico -> SetScale('textlin');

        // Ajustamos los margenes del grafico-----    (left,right,top,bottom)
        $grafico -> SetMargin(40, 10, 30, 10);

        // Creamos barras de datos a partir del array de datos
        $bplot = new BarPlot($datosy);

        // Configuramos color de las barras
        $bplot -> SetFillColor('#ffffff');
        $bplot -> SetColor('#ffffff');
        $bplot -> Set3D(5, 5, 7);

        //Añadimos barra de datos al grafico
        $grafico -> Add($bplot);

        // Queremos mostrar el valor numerico de la barra
        $bplot -> value -> Show();
        $bplot -> SetLegend("  ");
        $bplot -> SetWeight(16);

        $bplot -> SetColor('red');

        // Configuracion de los titulos
        $grafico -> title -> Set($nombreGrafico);
        $grafico -> xaxis -> title -> Set($nombreX);
        $grafico -> yaxis -> title -> Set($nombreY);
        $grafico -> xaxis -> SetLabelAngle(90);

        $grafico -> title -> SetFont(FF_FONT1, FS_BOLD);
        $grafico -> yaxis -> title -> SetFont(FF_FONT1, FS_BOLD);
        $grafico -> xaxis -> title -> SetFont(FF_FONT1, FS_BOLD);
        $grafico -> xaxis -> SetTickLabels($facultades, array('black'));
        $x = $ubicacionTamamo[0];
        $y = $ubicacionTamamo[1];
        $ancho = $ubicacionTamamo[2];
        $altura = $ubicacionTamamo[3];
        // Se muestra el grafico
        @unlink("../$nombreGrafico.png");
        $grafico -> Stroke("../$nombreGrafico.png");
        $this -> Image("../$nombreGrafico.png", $x, $y, $ancho, $altura);
    }

}

$pdf = new PDF();

//PAGINA 1

$pdf -> AddPage();

$pdf -> SetMargins(3, 1);
$pdf -> SetFont("times", 'B', 12);
$pdf -> MultiCell(18, 0.5, utf8_decode("ASESORÍA EN APLICACIÓN, SEGUIMIENTO Y EVALUACIÓN DE LA POLÍTICA DE SEMILLEROS"), 0, 'C');
$pdf -> Ln(1);
$pdf -> SetFont("times", '', 12);

$html = 'Se realizó una recopilación y organización de la información existente sobre los semilleros en las tres fases de desarrollo (formación, consolidación y ejecución), para realizar un informe de tipo descriptivo teniendo en cuenta números de estudiantes (por año, facultad, programa académico), número de proyectos presentados y  grupos de investigación (consolidación y ejecución), por otro lado, dentro de las actividades previstas para desarrollar estaba incluir estudiantes que han homologado el semillero de investigación por una de las asignaturas presentadas en su pensum académico, sin embargo no se contaba con la información requerida  (registro extendido de cada uno de los estudiantes que han pertenecido a un semillero de investigación) para realizar este análisis.';

$pdf -> MultiCell(15, 0.5, utf8_decode($html));

$pdf -> SetFont("times", 'B', 12);
$pdf -> Ln();
$pdf -> MultiCell(18, 0.5, utf8_decode("Recopilación de la información durante año $anio."), 0, 'C');
$pdf -> MultiCell(18, 0.5, utf8_decode("Semillero en fase de formación"), 0, 'L');

$pdf -> Ln();
$pdf -> SetFont("times", '', 12);

$conexion = conectar();

$stid = oci_parse($conexion, "select count(*) from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID where f.anio=:anio");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);
$cantidad = 0;
if ($row = oci_fetch_array($stid)) {
    $cantidad = $row[0];
}

$stid = oci_parse($conexion, "select count(*) as cantidad,p.FACULTADES_ID, fa.NOMBRE from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID join PROGRAMAS_ACADEMICOS p on 
e.PROGRAMAS_ACADEMICOS_ID=p.ID JOIN FACULTADES fa on p.FACULTADES_ID = fa.ID where f.anio= :anio  GROUP by p.FACULTADES_ID, fa.NOMBRE ORDER by fa.nombre");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);

$max = array();
$min = array();
$i = 0;
$valores = array();
$nombre = array();
$facultades = array();
$arreglo = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);
for ($i = 0; $i < $arreglo; $i++) {
    $valores[$i] = $res[$i][0];
    $nombre[$i] = $anio;
    $facultades[$i] = $res[$i][2];
    if ($i == 0) {

        $min[0] = $res[$i][0];
        $min[1] = $res[$i][2];
    } else {

        $max[0] = $res[$i][0];
        $max[1] = $res[$i][2];
    }
}

while ($row = oci_fetch_array($stid)) {

    $arreglo[$i] = $row[0];
    $nombre[$i] = $row[2];
    $i++;
}
$text = "Dentro de la información ya procesada se realizó un conteo de los estudiantes totales en  semillero  fase de formación en el año $anio encontrando un total de $cantidad, y se analizaron segun a la facultad a la cual pertenecen. ";
$text .= "Encontrando un mayor número de estudiantes de la facultad de $max[1] con un valor de $max[0] y un menor numero en la facultad de $min[1] con un valor de $min[0].";
$pdf -> MultiCell(15, 0.5, utf8_decode($text));

$pdf -> Ln();
$pdf -> SetFont("times", 'B', 12);
$pdf -> MultiCell(15, 0.5, utf8_decode("Estudiantes por facultad"), 0, 'C');

$pdf -> gaficoPDFBarra($valores, $nombre, utf8_decode('año'), 'Estudiantes', $facultades, utf8_decode("Número de estudiantes por facultad"), array(4, 15, 13, 13));

///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////   CIENCIAS BASICAS     ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
$pdf -> AddPage();
$pdf -> LN();

$pdf -> MultiCell(15, 0.5, utf8_decode("Estudiantes en semilleros de formación según programa académico  y facultad en el año $anio"), 0, 'C');

$stid = oci_parse($conexion, "select count(*) as cantidad,p.NOMBRE,fa.NOMBRE from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID join PROGRAMAS_ACADEMICOS p on 
e.PROGRAMAS_ACADEMICOS_ID=p.ID JOIN FACULTADES fa on p.FACULTADES_ID = fa.ID where f.anio= :anio and p.FACULTADES_ID=22   GROUP by p.FACULTADES_ID, fa.NOMBRE,p.NOMBRE ORDER by p.NOMBRE");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);
$cant = 0.0;
$valores = array(0, 0, 0, 0, 0);
$i = 0;
$cant = 0;
while ($row = oci_fetch_array($stid)) {
    $valores[$i] = $row[0];
    $i++;
}

$temp = array('Fisica' => array($valores[1], 'red'), 'IIC' => array($valores[4], 'blue'), 'Tecnologia en electronica' => array($valores[3], 'green'), 'Quimica' => array($valores[2], 'white'), 'Biologia' => array($valores[0], 'pink'));
try {

    $pdf -> graficoPDF($temp, 'Ciencias basicas', array(6, 6, 10, 10), 'Estudiantes por programa academico facultad de ciencias basicas');
} catch(Exception $e) {

}
///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////   INGENIERIA           ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

$stid = oci_parse($conexion, "select count(*) as cantidad,p.id,p.NOMBRE,fa.NOMBRE from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID join PROGRAMAS_ACADEMICOS p on 
e.PROGRAMAS_ACADEMICOS_ID=p.ID JOIN FACULTADES fa on p.FACULTADES_ID = fa.ID where f.anio= :anio and p.FACULTADES_ID=1   GROUP by p.id,p.FACULTADES_ID, fa.NOMBRE,p.NOMBRE ORDER by p.NOMBRE");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);
$cant = 0.0;
$valores = array(0, 0, 0, 0, 0);
$i = 0;
while ($row = oci_fetch_array($stid)) {
    $valores[$i] = $row[0];
    $i++;
}

$temp = array('Ingenieria civil' => array($valores[0], 'red'), 'Ingenieria de sistemas y computación' => array($valores[1], 'blue'), 'Ingenieria electronica' => array($valores[2], 'green'), 'Tecnologia en obras civiles' => array($valores[3], 'white'), 'Tecnologia en topografia' => array($valores[4], 'pink'));
try {
    $pdf -> graficoPDF($temp, 'Ingenieria', array(6, 15, 10, 10), 'Estudiantes por programa academico facultad de ingenieria');
} catch(Exception $e) {

}

///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////   CIENCIAS DE LA SALUD ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

$pdf -> AddPage();
$pdf -> LN();

$pdf -> MultiCell(15, 0.5, utf8_decode("Estudiantes en semilleros de formación según programa académico  y facultad en el año $anio"), 0, 'C');

$stid = oci_parse($conexion, "select count(*) as cantidad,p.NOMBRE,fa.NOMBRE from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID join PROGRAMAS_ACADEMICOS p on 
e.PROGRAMAS_ACADEMICOS_ID=p.ID JOIN FACULTADES fa on p.FACULTADES_ID = fa.ID where f.anio= :anio and p.FACULTADES_ID=21   GROUP by p.FACULTADES_ID, fa.NOMBRE,p.NOMBRE ORDER by p.NOMBRE");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);
$cant = 0.0;
$valores = array(0, 0, 0);
$i = 0;
$cant = 0;
while ($row = oci_fetch_array($stid)) {
    $valores[$i] = $row[0];
    $i++;
}

$temp = array('Enfermeria' => array($valores[0], 'red'), 'Medicina' => array($valores[1], 'blue'), 'Salud ocupacional' => array($valores[2], 'green'));
try {
    $pdf -> graficoPDF($temp, 'Ciencias de la salud', array(6, 6, 10, 10), 'Estudiantes por programa academico facultad de ciencias de la salud');
} catch(Exception $e) {

}
///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////   CIENCIAS HUMANAS Y BELLAS ARTES     /////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

$stid = oci_parse($conexion, "select count(*) as cantidad,p.NOMBRE,fa.NOMBRE from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID join PROGRAMAS_ACADEMICOS p on 
e.PROGRAMAS_ACADEMICOS_ID=p.ID JOIN FACULTADES fa on p.FACULTADES_ID = fa.ID where f.anio= :anio and p.FACULTADES_ID=24   GROUP by p.FACULTADES_ID, fa.NOMBRE,p.NOMBRE ORDER by p.NOMBRE");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);
$cant = 0.0;
$valores = array(0, 0, 0, 0, 0, 0);
$i = 0;
$cant = 0;
while ($row = oci_fetch_array($stid)) {
    $valores[$i] = $row[0];
    $i++;
}

$temp = array('Artes visuales' => array($valores[0], 'red'), 'Archivistica' => array($valores[1], 'blue'), 'Comunicacion social y periodismo' => array($valores[2], 'green'), 'Filosofia' => array($valores[3], 'white'), 'Gerontologia' => array($valores[4], 'pink'), 'Trabajo social' => array($valores[5], 'pink'));
try {
    $pdf -> graficoPDF($temp, 'Ciencias humanas y bellas artes', array(6, 15, 10, 10), 'Estudiantes por programa academico facultad de ciencias humanas y bellas artes');
} catch(Exception $e) {

}
///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////   CIENCIAS AGROINDUSTRIALES           /////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

$pdf -> AddPage();
$pdf -> LN();

$pdf -> MultiCell(15, 0.5, utf8_decode("Estudiantes en semilleros de formación según programa académico  y facultad en el año $anio"), 0, 'C');

$stid = oci_parse($conexion, "select count(*) as cantidad,p.NOMBRE,fa.NOMBRE from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID join PROGRAMAS_ACADEMICOS p on 
e.PROGRAMAS_ACADEMICOS_ID=p.ID JOIN FACULTADES fa on p.FACULTADES_ID = fa.ID where f.anio= :anio and p.FACULTADES_ID=23   GROUP by p.FACULTADES_ID, fa.NOMBRE,p.NOMBRE ORDER by p.NOMBRE");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);
$cant = 0.0;
$valores = array(0, 0, 0, 0);
$i = 0;
$cant = 0;
while ($row = oci_fetch_array($stid)) {
    $valores[$i] = $row[0];
    $i++;
}

$temp = array('Ingenieria de alimentos' => array($valores[0], 'red'), 'Administracion de empresas agropecuarias' => array($valores[1], 'blue'), 'Tecnologia agropecuaria' => array($valores[2], 'blue'), 'Tecnologia agroindustrial' => array($valores[3], 'green'));
try {
    $pdf -> graficoPDF($temp, 'Ciencias agroindustriales', array(6, 6, 10, 10), 'Estudiantes por programa academico facultad de ciencias agroindustriales');
} catch(Exception $e) {

}
///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////   EDUCACION                ////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

$stid = oci_parse($conexion, "select count(*) as cantidad,p.NOMBRE,fa.NOMBRE from SEMILLEROS_FORMACION f join ESTUDIANTES e on e.SEMILLEROS_FORMACION_FK = f.ID join PROGRAMAS_ACADEMICOS p on 
e.PROGRAMAS_ACADEMICOS_ID=p.ID JOIN FACULTADES fa on p.FACULTADES_ID = fa.ID where f.anio= :anio and p.FACULTADES_ID=24   GROUP by p.FACULTADES_ID, fa.NOMBRE,p.NOMBRE ORDER by p.NOMBRE");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);
$cant = 0.0;
$valores = array(0, 0, 0, 0, 0, 0, 0, 0);
$i = 0;
$cant = 0;
while ($row = oci_fetch_array($stid)) {
    $valores[$i] = $row[0];
    $i++;
}

$temp = array('Licenciatura en biologia' => array($valores[0], 'red'), 'Licenciatura en educacion fisica y deporte' => array($valores[1], 'blue'), 'Licenciatura en español y literatura' => array($valores[2], 'green'), 'Licenciatura en lenguas modernas' => array($valores[3], 'white'), 'Licenciatura en matematicas' => array($valores[4], 'pink'), 'Licenciatura en pedagogia social' => array($valores[5], 'green'), 'Licenciatura en sociales' => array($valores[6], 'white'), 'Licenciatura en pedagogia infantil' => array($valores[7], 'pink'));
try {
    $pdf -> graficoPDF($temp, 'Educacion', array(6, 15, 10, 10), 'Estudiantes por programa academico facultad de educación');
} catch(Exception $e) {

}

///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////      FIN FACULTADES        ////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
$pdf -> AddPage();
$pdf -> SetFont("times", 'B', 12);
$pdf -> Ln();
$pdf -> MultiCell(18, 0.5, utf8_decode("SEMILLEROS EN CONSOLIDACIÓN"), 0, 'C');
$pdf -> SetFont("times", '', 12);
$pdf -> Ln();

$stid = oci_parse($conexion, "select count(*) from ESTUDIANTES e join PROYECTOS_INVESTIGACION p on p.CODIGO = e.PROYECTOS_INVESTIGACION_CODIGO join SEMILLEROS_CONSOLIDACION sc on sc.ID = p.SEMILLEROS_CONSOLIDACION_ID where p.anio=:anio");
oci_bind_by_name($stid, ':anio',$anio);
oci_execute($stid);
$cant = 0;
if ($row = oci_fetch_array($stid)) {
    $cant = $row[0];
}

$pdf -> MultiCell(15, 0.5, utf8_decode("Hasta la fecha se ha encontrado registro de $cant estudiantes que hicieron o hacen parte de semilleros en fase de consolidación para el año $anio."));


///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////      CONSOLIDACION         ////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////


$stid = oci_parse($conexion, "SELECT COUNT(*), f.ID, f.NOMBRE FROM ESTUDIANTES e JOIN PROYECTOS_INVESTIGACION p ON p.CODIGO = e.PROYECTOS_INVESTIGACION_CODIGO
JOIN SEMILLEROS_CONSOLIDACION sc ON sc.ID = p.SEMILLEROS_CONSOLIDACION_ID JOIN GRUPOS_INVESTIGACION g ON g.CODIGO = sc.GRUPOS_INVESTIGACION_ID
JOIN FACULTADES f ON f.ID = g.FACULTADES_ID where sc.ANIO=:anio GROUP BY f.ID,f.NOMBRE");
oci_bind_by_name($stid, ':anio', $anio);
oci_execute($stid);

$valores1 = array();
$nombre = array();
$facultades = array();
$arreglo = oci_fetch_all($stid, $res1, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);

for ($i = 0; $i < $arreglo; $i++) 
{
    $valores1[$i] = $res1[$i][0]+0;
    $nombre[$i] = $anio;
    $facultades[$i] = $res1[$i][2];
}

$pdf -> Ln();
$pdf -> SetFont("times", 'B', 12);
$pdf -> MultiCell(15, 0.5, utf8_decode("Estudiantes en consolidacion por facultad"), 0, 'C');

$pdf -> gaficoPDFBarra($valores1, $nombre, utf8_decode('año'), 'Estudiantes', $facultades, utf8_decode("Número de estudiantes por facultad"), array(4, 6, 13, 13));

$pdf -> SetFont("times", '', 12);
$pdf -> Ln();

$stid = oci_parse($conexion, "select count(*) from PROYECTOS_INVESTIGACION p join SEMILLEROS_CONSOLIDACION sc ON sc.ID = p.SEMILLEROS_CONSOLIDACION_ID JOIN GRUPOS_INVESTIGACION g ON g.CODIGO = sc.GRUPOS_INVESTIGACION_ID JOIN FACULTADES f ON f.ID = g.FACULTADES_ID where sc.ANIO=:anio");
oci_execute($stid);
$cant = 0;
if ($row = oci_fetch_array($stid)) {
    $cant = $row[0];
}

$pdf -> MultiCell(15, 0.5, utf8_decode("Se presentaron aproximadamente $cant poryectos durante el año."));

$pdf -> Output();
?>

