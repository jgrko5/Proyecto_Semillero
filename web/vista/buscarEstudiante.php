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
			<section id="estudiante">
				<article>
					<header>
						</br><h6>Buscar estudiante</h6>
					</header>

					<div id="formulario">
						<form action="../controlador/registrarProyecto.php" method="post" ></form>
						<center>
							<div class="etiqueta">
								<label>Ingrese el número de identificación</label>
							</div></br>

							<div class="componente">
								<input class="textfield" type="text" name="tipo" required="required" placeholder="número de identificación" />
							</div>

							<div align="center">
								<input class="button" type="submit" value="Buscar"/>
							</div></br>
							<header>
								<h1>Estudiantes</h1>
							</header>

							<div class="tabla">
								<table style="border:1px solid #666;">
									<tr>
										<td style="border:1px inset #666;">Documento</td><td style="border:1px inset #666;">Nombre</td>
										<td style="border:1px inset #666;">Apellidos</td><td style="border:1px inset #666;">Dirección</td>
										<td style="border:1px inset #666;">Teléfono</td><td style="border:1px inset #666;">Correo</td>
										<td style="border:1px inset #666;">Semestre</td>
									</tr>
								</table>
							</div></br>
						</center>
					</div>
				</article>
			</section>
		</div>
	</div>
</body>
</html>
