<?php
/**
 * Clase para conectar la base de datos;
 */
	function conectar()
	{
		$conn = oci_connect("admin", "semillero", "xe");
		
		if (!$conn)
		{
   			$m = oci_error();
            echo $m['message'], "\n";
            exit;
		}
		else 
		{
		}
		return $conn;
	}
	
	function getInsertar($consulta)
	{
		$conexion=$conectar();
		$statement=oci_parse($conexion, 'inser');
		
	}
	
?>