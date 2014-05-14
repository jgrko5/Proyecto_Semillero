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
			<section id="premio">
				<article>
					<header>
						</br><h6>asignarPremio</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/asirnarPremio.php" method="post">
							<div class="etiqueta">
								<label>Premios</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Premios">
									<option>uno</option>
								</select>
							</div>

							<div class="etiqueta">
								<label>Estudiantes</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Premios">
									<option>pepito</option>
								</select>
							</div>
						</form>
						<div align="center">
							<input class="button" type="submit" value="Aceptar" />
						</div></br>
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
