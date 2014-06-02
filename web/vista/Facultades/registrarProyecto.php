<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
session_start();
getImports();
?>

<body onload="tunCalendario();">
	<div id="main"  class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">

			<section id="proyecto">
				<article>

					<header>
						</br><h6>Registrar proyecto</h6>
					</header>

					<div id="formulario">
						<form action="../controlador/registrarProyecto.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Código:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="codigoProyecto" required="required" placeholder="Ingrese el código"/>
								</div></br>

								<div class="etiqueta">
									<label>Título:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="tituloProyecto" required="required" placeholder="Ingrese el título"/>
								</div></br>

								<div class="etiqueta">
									<label>Gasto efectivo:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="gastoEProyecto" required="required" placeholder="Ingrese el gasto efectivo"/>
								</div></br>
								<div class="etiqueta">
									<label>Duración:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="duracionProyecto" required="required" placeholder="Ingrese la duración"/>
								</div></br>
								<div class="etiqueta">
									<label>Fecha inicio:</label>
								</div></br>
								<div class="componente">
									<input type="date" class="textField" name="fechaIProyecto"/>
								</div></br>
					</div></br>
					<div align="center">
						<input class="button" type="submit" value="Registrar"/>
					</div></br>
					</center>
					</form>
		</div>
		</article>
		</section>
		<?php
		getFooter();
		?>
	</div></div>
</body>
</html>
