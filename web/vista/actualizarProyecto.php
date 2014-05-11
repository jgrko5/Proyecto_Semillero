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
					<h6>Actualizar proyecto</h6></br>
				</header>

				<div id="formulario">
					<form action="../controlador/registrarProyecto.php" method="post">
						<center>
							<div class="etiqueta">
								<label>Código:</label>
							</div>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el código"/>
							</div></br>

							<div class="etiqueta">
								<label>Título:</label>
							</div>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el título"/>
							</div></br>

							<div class="etiqueta">
								<label>Gasto efectivo:</label>
							</div>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el gasto efectivo"/>
							</div></br>
							<div class="etiqueta">
								<label>Duración:</label>
							</div>
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la duración"/>
							</div></br>
							<div class="etiqueta">
								<label>Fecha inicio:</label>
							</div>
							<div class="componente">
								<input type="date" class="textField"/>
							</div></br>
				</div></br>
				<div align="center">
					<input class="button" type="submit" value="Actualizar"/>
				</div></br>
				</center>
				</form>
	</div>
	</article>
	</section>
	</div>
</body>
</html>
