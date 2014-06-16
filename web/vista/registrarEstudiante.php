<?php
include ("imports.php");
include ("header.php");
include ("footer.php");	
include_once ("../controlador/listaProgramasAcademicos.php");
include_once ("../controlador/listarSemestres.php");
include ("../controlador/listaMaterias.php");
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
								<label>Cédula de ciudadania:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="cedulaEst"   placeholder="Ingrese la cédula del estudiante"/>
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
								<label>Dirección:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="direccionEst" placeholder="Ingrese la dirección de residencia"/>
							</div>
							</br>

							<div class="etiqueta">
								<label>Teléfono:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="telefonoEst"  placeholder="Ingrese el teléfono de contacto" />
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
								<label>Programa académico:</label>
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

							<div class="etiqueta">
								<label>Nota:</label>
							</div>
							</br>
							<div class="componente">
								<input class="textField" type="text" name="nota"  placeholder="Nota de la fase de formacion"/>
							</div>
							<div class="etiqueta">
								<label>Homólogo:</label>
							</div></br>

							<div class="componente">
								<input type="checkbox" id="homologacion" value="1" name="valido" />
							</div>
							<div class="etiqueta">
                                    <label>Materia:</label>
                                </div>
                                <div class="componente">
                                    <select class="select" title="Materias" name="materia">
                                        <?php
                                            echo $combobit;
                                        ?>
                                    </select>
                                </div></br></br></br>
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
