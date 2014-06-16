<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include ("../controlador/listaGruposInvestigacion.php");
include ("../controlador/listaProyecto.php");
include ("../controlador/listaMaterias.php");
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
			<section id="consolidacion">
				<article>
					<header>
						</br><h6>Registrar semillero en ejecución</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarSemilleroEjecucion.php" method="post">

							<div class="etiqueta">
								<label>Grupo de investigación:</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Grupos de investigación" name="grupo">
									<?php
                                    echo $comboGrupo;
									?>
								</select>
							</div></br>

							<div class="etiqueta">
								<label>Proyecto de investigación:</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Proyecto de investigación">
									<?php
                                    echo $comboProyecto;
									?>
								</select>
							</div></br>

							<div class="etiqueta">
								<label>Horas del docente:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="horas" placeholder="Horas del docente"/>
							</div></br>

							<div class="etiqueta">
								<label>Año:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="año" placeholder="Año"/>
							</div></br>

							<div class="etiqueta">
								<label>Período:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="periodo" placeholder="Período"/>
							</div></br>

							<div class="etiqueta">
								<label>Nota:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="nota" placeholder="Nota"/>
							</div></br>

							<div class="etiqueta">
								<label>Homologación:</label>
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
							</div></br></br></br></br>

							<div align="center">
								<input class="button" type="submit" value="Registrar" />
							</div></br>
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
