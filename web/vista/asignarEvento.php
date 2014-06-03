<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listarEventos.php");
include_once ("../controlador/buscarEstudiante.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php getheaderstart();
		getPanelSesion();
		getMenuIzquierdoFacultad();
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
							</div></br>
							<?php
							echo $textfieldCodigo;
							?>
							<div class="etiqueta">
								<label>Nombres y apellidos:</label>
							</div></br>
							<?php
							echo $textfield;
							?>
							
							<div class="etiqueta">
								<label>Eventos:</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Eventos" name="eventosA">
									<?php
									echo $comboboxEventos;
									?>
									
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
		<?php
		getFooter();
		?>
	</div>
</body>
</html>
