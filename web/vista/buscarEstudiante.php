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
						<h6>Buscar estudiante</h6>
					</header>

					<div id="formulario">
						<form action="../controlador/registrarProyecto.php" method="post" >
							<div class="etiqueta">
								<label>Ingrese el número de identificación:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="númeroId" required="required" placeholder="Número de identificación"/>
							</div>
							<div align="center">
								<input class="button" type="submit" value="Buscar"/>
							</div></br>
							<center>
							<div id="tabla">
								<table style="border:1px solid #666;">
									<tr>
										<td style="width:50%;border:1px inset #666;">Nombres y apellidos</td>
										<td style="width:30%;border:1px inset #666;">Documento</td>
										<td style="width:40%;border:1px inset #666;">Semestre</td>
										<td style="width:40%;border:1px inset #666;">Correo</td>
									</tr>
								</table>
							</center>
							</div>
						</form>
					</div>

				</article>
			</section>
		</div>
	</div>
</body>
</html>
