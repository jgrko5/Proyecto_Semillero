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
		?>
		<div>
			<section id="grupo">
				<article>
					<header>
						<h6>Modificar datos del grupo de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarGrupoInvestigacion.php" method="post">
							<center>
								<div aling="&#x2190;">
									<div class="etiqueta">
										<label>Código:</label>
									</div>
								</div>
								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el código"/>
								</div>

								<div aling="&#x2190;">
									<div class="etiqueta">
										<label>Nombre:</label>
									</div>
								</div>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el nombre"/>
								</div>

								<div aling="&#x2190;">
									<div class="etiqueta">
										<label>Clasificación:</label>
									</div>
								</div>
								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la clasificación"/>
								</div>

								<div aling="&#x2190;">
									<div class="etiqueta">
										<label>Fecha conformación:</label>
									</div>
								</div>
								<div class="componente">
									<input  type="date" class="textField"/>
								</div>

								<div aling="&#x2190;">
									<div class="etiqueta">
										<label>Facultad:</label>
									</div>
								</div>
								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la facultad"/>
								</div>

								<div aling="center">
									<input class="button" type="submit" value="Actualizar" />
								</div></br>
							</center>
						</form>
				</article>
			</section>
		</div></br>

	</div>
</body>
</html>
