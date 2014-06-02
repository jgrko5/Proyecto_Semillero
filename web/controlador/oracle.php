<?php
/**
 * Clase para conectar la base de datos;
 */
	function conectar()
	{
		$conn = oci_connect("admin", "semillero", "//192.168.1.16:1521/xe");
		
		if (!$conn)
		{
   			$m = oci_error();
            echo $m['message'], "\n";
            exit;
		}
		return $conn;
	}
	
	
	
?>