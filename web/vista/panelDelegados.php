<?php

	function getPanelSesion()
	{

?>
<div id='cssmenu' class='align-right'>
<ul>
   <li class='Last'><a href='../controlador/cerrarSesion.php'><span>Salir</span></a></li>
   <li class='Active'><a href='#'><span>
       <?php
    if (isset($_SESSION['nomFacultad'])) {
        echo "Facultad de " . $_SESSION['nomFacultad'];
    } else { {
            echo "Bienvenido";
        }
    }
       ?></span></a></li>
</ul>
</div>
<?php
}
?>
