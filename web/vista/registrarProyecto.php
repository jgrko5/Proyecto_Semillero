<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>

<body>
  <div id="main"  class="wrapper">
  <?php
  getHeaderStart();
  ?>
  <section id="proyecto">
  	<article>
  			
	    <header>
	      <h1>Registrar proyecto</h1>
	    </header>
    <nav>
      <p><a href="/">Home</a></p>
      <p><a href="/contact">Contact</a></p>
    </nav>

    <div id="formulario">
    	<form action="../controlador/registrarProyecto.php" method="post">
		
			<div class="etiqueta">
				<label>Titulo:</label>
			</div>
			<div class="componente">	
				<select class="select" title="Título">
				<option>Cedula de ciudadania</option>
				<option>Tgarjeta de identidad</option>
				</select>
			</div>	      
    </div>

    <footer>
     <p>&copy; Copyright  by DanielCruz</p>
    </footer>
  </div>
</body>
</html>
