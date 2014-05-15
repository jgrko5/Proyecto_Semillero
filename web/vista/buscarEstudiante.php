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
										<td style="border:1px inset #666;">Documento</td><td style="border:1px inset #666;">Nombres y apellidos</td>
										<td style="border:1px inset #666;">Modificar <a href="#openModal">Open Modal</a></td>
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
				<h6>Buscar estudiante</h6>
					<div class="etiqueta">
						<label>Documento:</label>
					</div></br>
					<div class="etiqueta">
						<label>Aqui va el documento</label>
					</div></br>
					<div class="etiqueta">
						<label>Nombre:</label>
					</div></br>
					<div class="etiqueta">
						<label>Aqui va el nombre:</label>
					</div></br>
					<div class="etiqueta">
						<label>Direccion:</label>
					</div></br>
					<div class="etiqueta">
						<label>Aqui va la direccion:</label>
					</div></br>
					<div class="etiqueta">
						<label>Correo:</label>
					</div></br>
					<div class="etiqueta">
						<label>Aqui va el correo:</label>
					</div></br>
					<div class="etiqueta">
						<label>Telefono:</label>
					</div></br>
					<div class="etiqueta">
						<label>Aqui va el telefono:</label>
					</div></br>
					<div class="etiqueta">
						<label>Semestre:</label>
					</div></br>
					<div class="etiqueta">
						<label>Aqui va el semestre:</label>
					</div></br>
				
			</div>
		</div>
		<?php
		getFooter();
		?>
	</div>
</body>
</html>
