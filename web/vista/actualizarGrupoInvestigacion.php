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
			<section id="grupo">
				<article>
					<header>
						</br><h6>Actualizar grupo de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/modificarGrupoInvestigacion.php" method="post">
							<div class="etiqueta">
								<label>Nombre:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el nombre"/>
							</div></br>

							<div class="etiqueta">
								<label>Clasificación:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la clasificación"/>
							</div></br>

							<div class="etiqueta">
								<label>Fecha conformación:</label>
							</div></br>

							<div class="componente">
								<input  type="date" class="textField"/>
							</div></br>

							<div class="etiqueta">
								<label>Facultad:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la facultad"/>
							</div></br></br>

							<div align="center">
								<input class="button" type="submit" value="Actualizar" />
							</div>
							</br>
						</form>
					</div>
				</article>
			</section>
		</div>
<?php
getFooter();
		?>
	</div>
</body>
</html>
