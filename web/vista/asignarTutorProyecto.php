<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php getheaderstart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="proyecto">
			<article>
					<header>
					</br><h6>Asignar proyecto de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/asignarTutorProyecto.php" method="post">
							<div class="etiqueta">
								<label>Ingrese el código del tutor</label>
							</div>
							<div class="componente">
								<input class="textField"  type="text" name="codigoTutor" required="required" placeholder="Código"  />
							</div>
							<div align="left">
								<input class="button" type="submit" value="Buscar" />
							</div>
							<div class="etiqueta">
								<label>Nombres:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required">
							</div></br>
							
							<div class="etiqueta">
								<label>Apellidos:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required">
							</div></br>
							<div class="etiqueta">
								<label>Proyectos:</label>
							</div></br>
							
								<div class="componente">
									<select class="select" title="Proyectos" name="proTutor">
									<?php
										echo $comboCate;
									?>
									</select>
							    </div></br></br>

							<div align="center">
								<input class="button" type="submit" value="Asignar" />
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