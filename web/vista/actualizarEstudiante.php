<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include ("../controlador/buscarEstudiante.php");
getImports();
?>

<body onload="tunCalendario();">
	<div id="main" class="wrapper" style="overflow: hidden" >
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdoFacultad();
		getMenuDerecho();
		?>
		<div id="contenido">
			<section id="estudiante" >
				<article >
					<header>
						</br><h6>Modificar datos del estudiante</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarEstudiante.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Cedula:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" value="<?php echo $_SESSION['actCedula'] ?>" name="cedula"  placeholder="Modifique documento del estudiante"/>
								</div>

								</br>

								<div class="etiqueta">
									<label>Tarjeta de identidad:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" value="<?php echo $_SESSION['actTarjeta'] ?>" name="tarjeta"  placeholder="Modifique documento del estudiante"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Nombres:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="nombre" value="<?php echo $_SESSION['actNombre'] ?>"  placeholder="Modifique los nombres del estudiante" readonly="true"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Direccion:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="direccion" value="<?php echo $_SESSION['actDireccion'] ?>"  placeholder="Modifique la direccion de residencia"/>
								</div>
								</br>


								<div class="etiqueta">
									<label>Correo:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="correo" value="<?php echo $_SESSION['actCorreo'] ?>"  placeholder="Modifique el correo electronico"/>
								</div>
								</br>

								<div class="etiqueta">
									<label>Telefono:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="telefono"  value="<?php echo $_SESSION['actTelefono'] ?>" placeholder="Modifique el telefono de contacto" />
								</div>
								</br></br>

								<div align="center">
									<input class="button" type="submit" value="Actualizar" />
								</div>
								</br>
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
