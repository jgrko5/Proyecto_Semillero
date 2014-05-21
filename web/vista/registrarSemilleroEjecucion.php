<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaGruposInvestigacion.php");
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
			<section id="ejecucion">
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
								<label>Fecha inicio:</label>
							</div></br>

							<div class="componente">
								<input type="date" class="textField" name="fecha"/>
							</div></br>

							<div class="etiqueta">
								<label>Duración del proyecto de investigación:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="duracion" placeholder="Duración"/>
							</div></br>

							<div class="etiqueta">
								<label>Gasto:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="gasto" placeholder="Gasto"/>
							</div></br>

							<div class="etiqueta">
								<label>Nombre del estudiante:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="nombre" placeholder="Nombre"/>
							</div></br></br></br>

							<div aling="center">
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
