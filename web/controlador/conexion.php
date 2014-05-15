<?php
// Create connection to Oracle
$conn = oci_connect("admin", "semillero", "xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
	?>
	<div>
	Conexion con exito
	</div>
	<?php
	
}
// Close the Oracle connection
oci_close($conn);
?>