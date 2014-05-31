<?php

include_once ('oracle.php');

session_start();

error_reporting("E_ERROR && E_WARNING");

header("Content-Type: text / html; charset =UTF-8");
$conexion = conectar();
$codigo = $_POST['grupo'];

$consulta=oci_parse($conexion, 'SELECT DISTINCT p.TITULO,p.CODIGO
FROM PROYECTOS_INVESTIGACION p
LEFT JOIN SEMILLEROS_CONSOLIDACION sc
ON sc.ID = p.SEMILLEROS_CONSOLIDACION_ID
LEFT JOIN SEMILLEROS_EJECUCION se
ON se.ID = p.SEMILLEROS_EJECUCION_ID
LEFT JOIN GRUPOS_INVESTIGACION g
ON g.CODIGO  = sc.GRUPOS_INVESTIGACION_ID
AND g.CODIGO = se.GRUPOS_INVESTIGACION_ID
WHERE G.CODIGO = :codigo
ORDER BY (p.TITULO)');

oci_bind_by_name($consulta, ':codigo', $codigo);

oci_execute($consulta);

$select="";

$select.="<div class=".'"etiqueta"'."><label>Proyecto de investigación:</label></div></br><div class=".'"componente"'."><select class=".'"select"'." title=".'"Proyecto de investigación"'.">";
while($row=oci_fetch_array($consulta))
{
    $select.="<option value=".'"'.$row[1].'"'.">".$row[0]."</option>";
}
$select.="</select></div>";


oci_free_statement($consulta);
oci_close($consulta);


?>