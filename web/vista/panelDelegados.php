<?php

	function getPanelSesion()
	{

?>
<div id='cssmenu' class='align-right'>
<ul>
      <?php
    if (isset($_SESSION['nomFacultad'])) {
        ?>
   <li class='Last'><a href='../controlador/cerrarSesion.php'><span>Salir</span></a></li>
   <?php
}
    ?>
   <li class='Active'><a href='#'><span>
       <?php
    if (isset($_SESSION['nomFacultad'])) {
        if ($_SESSION['idFacultad'] == 83) {
            echo $_SESSION['nomFacultad'];
        } else {

            echo "Facultad de " . $_SESSION['nomFacultad'];
        }
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
