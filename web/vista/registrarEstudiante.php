<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaProgramasAcademicos.php");
include_once ("../controlador/listasemestres.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="estudiante">
				<article >
					<header>
						</br><h6>Registrar estudiante</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarEstudiante.php" method="post">
							<div class="etiqueta">
								<label>Tarjeta de identidad:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="tarjetaEst"   placeholder="Ingrese la tarjeta de identidad del estudiante"/>
							</div>
							</br>
							
							<div class="etiqueta">
								<label>Cedula de ciudadania:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="cedulaEst"   placeholder="Ingrese la cedula del estudiante"/>
							</div>
							</br>

							<div class="etiqueta">
								<label>Nombres:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="nombreEst"   placeholder="Ingrese los nombres del estudiante" />
							</div>
							</br>

							<div class="etiqueta">
								<label>Apellidos:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="apellidoEst"   placeholder="Ingrese los apellidos del estudiante"/>
							</div>
							</br>

							<div class="etiqueta">
								<label>Direccion:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="direccionEst" placeholder="Ingrese la direccion de residencia"/>
							</div>
							</br>

							<div class="etiqueta">
								<label>Telefono:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="telefonoEst"  placeholder="Ingrese el telefono de contacto" />
							</div>
							</br>

							<div class="etiqueta">
								<label>Correo:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="correoEst"  placeholder="Ingrese el correo electronico"/>
							</div>
							</br>
							<div class="etiqueta">
								<label>Programa academico:</label>
							</div>
							</br>
							<div class="componente">
								<select class="select" title="Programa academico" name="programaEst">
									<?php
									   echo $combobit;
									?>
								</select>
							</div>
							</br>

							<div class="etiqueta">
								<label>Semestre:</label>
							</div>
							</br>
							<div class="componente">
								<select class="select" title="Semestre" name="semestreEst">
									<?php echo $combosemestre; ?>
								</select>
							</div>
							</br>
							</br>

							<div align="center">
								<input class="button" type="submit" value="Registrar" />
							</div>
							</br>
						</form>
					</div>
				</article>
			</section>
		</div>
		<footer>
			<?php
			getFooter()
			?>
		</footer>
	</div>
</body>
</html>
