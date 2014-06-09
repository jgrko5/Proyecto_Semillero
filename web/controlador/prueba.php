<?php
/*
 clase para reportes
 autor Carlos Belisario
 */

require_once ("fpdf/fpdf.php");
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ("jpgraph/jpgraph_pie3d.php");
class Reporte extends FPDF {
    public function __construct($orientation = 'P', $unit = 'mm', $format = 'A4') {
        parent::__construct($orientation, $unit, $format);
    }

    public function gaficoPDF($datos = array(), $nombreGrafico = NULL, $ubicacionTamamo = array(), $titulo = NULL) {
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
            $graph = new PieGraph(600, 400);
            #indicamos titulo del grafico si lo indicamos como parametro
            if (!empty($titulo)) {
                $graph -> title -> Set($titulo);
            }
            //Creamos el plot de tipo tarta
            $p1 = new PiePlot3D($data);
            $p1 -> SetSliceColors($color);
            #indicamos la leyenda para cada porcion de la tarta
            $p1 -> SetLegends($nombres);
            //Añadirmos el plot al grafico
            $graph -> Add($p1);
            //mostramos el grafico en pantalla
            @unlink("../imagen1.png");
            $graph -> Stroke("../imagen1.png");
            $this -> Image("../imagen1.png", $x, $y, $ancho, $altura);
            
        }
    }

}

$pdf = new Reporte();
//creamos el documento pdf
$pdf -> AddPage();
//agregamos la pagina
$pdf -> SetFont("Arial", "B", 16);
//establecemos propiedades del texto tipo de letra, negrita, tamaño
//$pdf->Cell(40,10,'hola mundo',1);
$pdf -> Cell(0, 5, "GRAFICO REALIZADO CON FPDF Y JGRAPH", 0, 0, 'C');
$pdf -> gaficoPDF(array('aprobados' => array(2, 'red'), 'reprobados' => array(1, 'blue')), 'Grafico', array(20, 40, 100, 50), 'grafico');
$pdf -> Output();
?>