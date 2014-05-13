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
			<section id="linea">
				<article>
					<header>
						</br><h6>Buscar línea de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/buscarLineaInvestigacion.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el código</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="tipo" required="required" placeholder="Código" />
								</div>
								<div align="center">
									<input class="button" type="submit" value="Buscar"/>
								</div></br>
								<header>
									<h1>Líneas de investigación</h1>
								</header>

								<div class="tabla">
									<table style="border:1px solid #666;">
										<tr>
											<td style="border:1px inset #666;">Código</td><td style="border:1px inset #666;">Nombre</td>
											<td style="border:1px inset #666;">Clasificación</td><td style="border:1px inset #666;">Fecha conformación</td>
											<td style="border:1px inset #666;">Facultad</td>
										</tr>
									</table>
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
