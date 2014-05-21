<?php
	include_once('oracle.php');
	
	session_start();
	$conexion = conectar();
	
	
	$stid = oci_parse($conexion, 'select id, nombre from semestres order by id');
	
	oci_execute($stid);
	
	
	while($row = oci_fetch_array($stid))
	{
		$combosemestre .= " <option value='" . $row[0] . "'>" . $row[1] . "</option>";
	}
	
	 oci_free_statement($stid);

    oci_close($conexion);
?>