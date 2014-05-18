<?php

include ("oracle.php");
session_start();

	$conexion = conectar();
	
	$stid = ociparse($conexion, 'insert')


?>