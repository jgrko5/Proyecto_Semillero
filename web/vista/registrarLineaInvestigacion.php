<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body>
	<div id="main" class="wrapper">
		<?php
		getheaderstart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="linea">
				<article>
					<header>
						<h6>Registrar línea investigación</h6></br>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarLineaInvestigacion.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Código:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el código"/>
								</div></br>

								<div class="etiqueta">
									<label>Nombre:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el nombre"/>
								</div></br>

								<div class="etiqueta">
									<label>Grupo investigación:</label>
								</div></br>

								<div class="componente">
									<select class="select" title="Grupo de investigación"/>
									<option>Sinfoci</option>
								</select>
							</div></br></br>
								
								<div aling="center">
									<input class="button" type="submit" value="Registrar" />
								</div></br>
							</center>
						</form>
					</div>
				</article>
			</section>
		</div>
	</div>
</body>
</html>
