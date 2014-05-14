<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body>
	<div id="main" class="wrapper">
		<?php getheaderstart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="evento">
				<article>
					<header>
						</br><h6>Asignar evento</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/asignarEvento.php" method="post">
							<div class="etiqueta">
								<label>Ingrese el código del estudiante:</label>
							</div>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Código" />
							</div>
							<div align="left">
								<input class="button" type="submit" value="Buscar" />
							</div>

							<div class="etiqueta">
								<label>Nombres y apellidos:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required">
							</div></br>

							<div class="etiqueta">
								<label>Eventos</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Premios">
									<option>congreso</option>
								</select>
							</div></br></br>

							<div align="center">
								<input class="button" type="submit" value="Asignar" />
							</div></br>
					</div>
					</form>
				</article>
			</section>
		</div>
	</div>
</body>
</html>
