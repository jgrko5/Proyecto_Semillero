<?php
session_start();
unset($_SESSION["idFacultad"]);
unset($_SESSION['nomFacultad']);
unset($_SESSION['seleccion']);
session_destroy();
header("Location: ../vista/inicioSesion.php");
exit ;
?>