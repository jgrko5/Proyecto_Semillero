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
			<section id="proyecto">
				<article>
					<header>
						</br><h6>Buscar proyecto de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/buscarProyecto.php" method="post">
							<center>
							<div class="etiqueta">
								<label>Ingrese el código</label>
							</div>

							<div class="componente">
								<input class="textfield" type="text" name="tipo" required="required" placeholder="Código" />
							</div>
							
							<div align="center">
								<input class="button" type="submit" value="Buscar"/>
							</div></br>

							<header>
								<h1>Proyectos de investigación</h1>
							</header>
							<div class="tabla">
								<table style="border:1px solid #666;">
									<tr>
										<td style="border:1px inset #666;">Código</td><td style="border:1px inset #666;">Título</td>
										<td style="border:1px inset #666;">Gasto efectivo</td><td style="border:1px inset #666;">Duración</td>
										<td style="border:1px inset #666;">Fecha inicio</td>
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
