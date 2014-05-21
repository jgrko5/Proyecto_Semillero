<?php

	function getPanelSesion()
	{

?>
<div id='cssmenu' class='align-right'>
<ul>
   <li class='Last'><a href='inicioSesion.php'><span>Salir</span></a></li>
   <li class='Active'><a href='#'><span>Facultad de <?php echo $_SESSION['nomFacultad'] ?></span></a></li>
</ul>
</div>
<?php
}
?>
