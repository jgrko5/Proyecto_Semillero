<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include_once ("../controlador/listaGruposInvestigacion.php");
session_start();
getImports();
?>

<body onload="tunCalendario();">
	<div id="main"  class="wrapper">
		<?php
        getHeaderStart();
        getPanelSesion();
        getMenuIzquierdo();
		?>
		<div id="contenido">

			<section id="proyecto">
				<article>

					<header>
						</br><h6>Registrar proyecto</h6>
					</header>

					<div id="formulario">
						<form action="../controlador/registrarProyecto.php" method="post">
							<center>
								<div class="etiqueta">
									<label >Grupo de investigación:</label>
								</div></br>

								<div class="componente">
									<select class="select" title="Grupos de investigación" name="grupo">
										<?php
                                        echo $comboGrupo;
										?>
									</select>
								</div>
								</br>
								<div class="etiqueta">
									<label>Código:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="codigoProyecto" required="required" placeholder="Ingrese el código"/>
								</div></br>

								<div class="etiqueta">
									<label>Título:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="tituloProyecto" required="required" placeholder="Ingrese el título"/>
								</div></br>

								<div class="etiqueta">
									<label>Gasto efectivo:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="gastoEProyecto" required="required" placeholder="Ingrese el gasto efectivo"/>
								</div></br>
								<div class="etiqueta">
									<label>Duración:</label>
								</div></br>
								<div class="componente">
									<input class="textField" type="text" name="duracionProyecto" required="required" placeholder="Ingrese la duración"/>
								</div></br>
								<div class="etiqueta">
									<label>Fecha inicio:</label>
								</div></br>
								<div class="componente">
									<input type="date" class="textField" name="fechaIProyecto"/>
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
								</div></br>
								<div align="center">
									<input class="button" type="submit" value="Registrar"/>
								</div></br>
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
