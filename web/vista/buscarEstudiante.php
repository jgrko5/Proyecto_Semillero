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
					<li class="mheader">
						Buscar estudiante
					</li>
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
										<td style="border:1px inset #666;">Modificar
											<a href="#openModal">Open Modal</a></td>
									</tr>
								</table>
							</div></br>
						</center>
					</div>
				</article>
			</section>
		</div>
		

		<div id="openModal" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h2>Modal Box</h2>
				<p>
					This is a sample modal box that can be created using the powers of CSS3.
				</p>
				<p>
					You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.
				</p>
			</div>
		</div>
			<?php
			getFooter();
			?>
	</div>
</body>
</html>
