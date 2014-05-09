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
		?>
		<section id="estudiante">
			<article>

				<header>
					<h6>Agregar estudiante</h6></br>
				</header>

				<div id="formulario">
					<form action="../controlador/agregarEstudiante.php" method="post">

						<div class="etiqueta">
							<label>Tipo de documento:</label>
						</div>
						<div class="componente">
							<select class="select" title="Tipo de documento">
								<option>Cedula de ciudadania</option>
								<option>Tarjeta de identidad</option>
							</select>
						</div>
						
						</br>

						<div class="etiqueta">
							<label>Documento:</label>
						</div>
						<div class="componente">
							<input class="textField" type="text" name="tipoEst" required="required" />
						</div>
						</br>

						<div class="etiqueta">
							<label>Nombres:</label>
						</div>
						<div class="componente">
							<input class="textField" type="text" name="nombreEst" required="required" />
						</div>
						</br>

						<div class="etiqueta">
							<label>Apellidos:</label>
						</div>
						<div class="componente">
							<input class="textField" type="text" name="apellidoEst" required="required" />
						</div>
						</br>
						
						<div class="etiqueta">
							<label>Direccion:</label>
						</div>
						<div class="componente">
							<input class="textField" type="text" name="direccionEst" required="required" />
						</div>
						</br>
						
						<div class="etiqueta">
							<label>Telefono:</label>
						</div>
						<div class="componente">
							<input class="textField" type="text" name="telefonoEst" required="required" />
						</div>
						</br>
						
						<div class="etiqueta">
							<label>Correo:</label>
						</div>
						<div class="componente">
							<input class="textField" type="text" name="correoEst" required="required" />
						</div>
						</br>

					</form>
				</div>

			</article>
		</section>
		<nav>
			<p>
				<a href="/">Home</a>
			</p>
			<p>
				<a href="/contact">Contact</a>
			</p>
		</nav>
	</div>
</body>
</html>
