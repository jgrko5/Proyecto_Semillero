<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdoFacultad();
		?>
		<div id="contenido">
			<section id="tutor">
				<article>
					<header>
						</br><h6>Actualizar Tutor</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/modificarTutor.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Nombre:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el nombre" />
								</div></br>

								<div class="etiqueta">
									<label>Apellidos:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese los apellidos" />
								</div></br>
								<div class="etiqueta">
									<label>Género:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el género" />
								</div></br>

								<div class="etiqueta">
									<label>Categoría:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la categoría" />
								</div></br>
								<div class="etiqueta">
									<label>Grupo de investigación:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el grupo de investigación" />
								</div></br></br>
								<div align="center">
									<input class="button" type="sumit" value="Actualizar" />
								</div></br>
							</center>
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