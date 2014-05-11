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
		getPanelSesion();
		?>
		<section id="proyecto">
			<article>

				<header>
					<h6>Registrar proyecto</h6></br>  
				</header>

				<div id="formulario">
					<form action="../controlador/registrarProyecto.php" method="post">
						<center>
							<div class="etiqueta">
								<label>Código:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el código"/>
							</div></br></br>

							<div class="etiqueta">
								<label>Título:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el título"/>
							</div></br></br>

							<div class="etiqueta">
								<label>Gasto efectivo:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el gasto efectivo"/>
							</div></br></br>
							<div class="etiqueta">
								<label>Duración:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la duración"/>
							</div></br></br>
							<div class="etiqueta">
								<label>Fecha inicio:</label>
							</div></br>
							<div class="componente">
								<input type="date" class="textField"/>
							</div></br></br>
				</div></br>
				<div align="center">
					<input class="button" type="submit" value="Registrar"/>
				</div></br>
				</center>
				</form>
	</div>
	</article>
	</section>
	</div>
</body>
</html>
