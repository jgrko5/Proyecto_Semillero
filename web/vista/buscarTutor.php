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
			<section id="tutor">
				<article>
					<header>
						</br><h6>Buscar tutor</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/buscarTutor.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el número de identificación</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Número de identificación" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar"/>
								</div></br>
								<header>
									<h6>Tutores</h6>
								</header>
								
								<div class="tabla">
								<table style="border:1px solid #666;">
									<tr>
										<td style="border:1px inset #666;">Documento</td><td style="border:1px inset #666;">Nombre</td>
										<td style="border:1px inset #666;">Apellidos</td><td style="border:1px inset #666;">Género</td>
										<td style="border:1px inset #666;">Categoría</td><td style="border:1px inset #666;">Grupo de investigación</td>
									</tr>
								</table>
								</div></br>
							</center>
						</form>
					</div>
				</article>
			</section>
			<?php
			getFooter();
			?>
		</div>
	</div>
</body>
</html>
