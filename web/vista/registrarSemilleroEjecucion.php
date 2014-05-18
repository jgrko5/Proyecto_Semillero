<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
		getheaderstart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="ejecucion">
				<article>
					<header>
						</br><h6>Registrar semillero en ejecución</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarSemilleroEjecucion.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Código del proyecto de investigación:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" placeholder="Código"/>
								</div></br>

								<div class="etiqueta">
									<label>Título del proyecto de investigación:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" placeholder="Título"/>
								</div></br>

								<div class="etiqueta">
									<label>Fecha inicio:</label>
								</div></br>

								<div class="componente">
									<input type="date" class="textField"/>
								</div></br>

								<div class="etiqueta">
									<label>Duración del proyecto de investigación:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" placeholder="Duración"/>
								</div></br>

								<div class="etiqueta">
									<label>Gasto:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" placeholder="Gasto"/>
								</div></br>
								
								<div class="etiqueta">
									<label>Nombre del estudiante:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" placeholder="Nombre"/>
								</div></br></br></br>

								<div aling="center">
									<input class="button" type="submit" value="Registrar" />
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
