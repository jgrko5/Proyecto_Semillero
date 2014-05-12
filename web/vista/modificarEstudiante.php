<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>

<body>
	<div id="main" class="wrapper" style="overflow: hidden" >
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdo();
		getMenuDerecho();
		?>
		<div id="contenido">
			<section id="estudiante" >
				<article >
					<header>
						<h6>Modificar datos del estudiante</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/modificarEstudiante.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Tipo de documento:</label>
								</div>
								</br>
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
								</br>
								<div class="componente">
									<input class="textField" type="text" name="tipoEst" required="required" placeholder="Modifique documento del estudiante"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Nombres:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="nombreEst" required="required" placeholder="Modifique los nombres del estudiante" readonly="true"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Apellidos:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="apellidoEst" required="required" placeholder="Modifique los apellidos del estudiante" readonly="true"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Direccion:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="direccionEst" required="required" placeholder="Modifique la direccion de residencia"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Telefono:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="telefonoEst" required="required" placeholder="Modifique el telefono de contacto" />
								</div>
								</br>

								<div class="etiqueta">
									<label>Correo:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="correoEst" required="required" placeholder="Modifique el correo electronico"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Semestre:</label>
								</div>
								</br>
								<div class="componente">
									<select class="select" title="Semestre">
										<option>Primero</option>
										<option>Segundo</option>
										<option>Tercero</option>
										<option>Cuarto</option>
										<option>Quinto</option>
										<option>Sexto</option>
										<option>Septimo</option>
										<option>Octavo</option>
										<option>Noveno</option>
										<option>Decimo</option>
									</select>
								</div>
								</br>
								</br>
								<div align="center">
									<input class="button" type="submit" value="Registrar" />
								</div>
								</br>
							</center>
						</form>
					</div>
				</article>
			</section>
		</div>
		<?php
		
		?>

		<footer>
			<?php
			//getFooter()
			?>
		</footer>
	</div>
</body>
</html>
