<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body>
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="premio">
				<article>
					<header>
						<h6>Registrar premio</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/agregarEstudiante.php" method="post">
							<div class="etiqueta">
								<label>Nombre:</label>
							</div>
							<br/>
							<div class="componente">
								<input class="textfield" type="text" name="nombrePremio" required="required" placeholder="Ingrese el nombre" />
							</div>
							<br/>

							<div class="etiqueta">
								<label>Observaciones:</label>
							</div>
							<br/>
							<div class="componente">
								<textarea rows="3" cols="5" class="textArea" type="text" name="observaciones" >
									</textarea>
							</div>
							<br/><br/><br/><br/>
							
							<div align="center">
								<input class="button" type="submit" value="Registrar" />
							</div></br>
							</div>
							
						</form>
					</div>
				</article>
			</section>

		</div>
	</div>
	<div>
		<div>

		</div>

	</div>
</body>
</html>
