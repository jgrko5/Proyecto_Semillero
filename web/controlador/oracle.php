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
		return $conn;
	}
	
	
	
?>