<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaGruposInvestigacion.php");
include_once ("../controlador/listaCategorias.php");
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
			<section id="tutor">
				<article>
					<header>
						</br><h6>Registrar tutor</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarTutor.php" method="post">
								<div class="etiqueta">
									<label>Documento:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="docTutor" required="required" placeholder="Ingrese el documento" />
								</div></br>

								<div class="etiqueta">
									<label>Nombres:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="nombTutor" required="required" placeholder="Ingrese el nombre" />
								</div></br>

								<div class="etiqueta">
									<label>Apellidos:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="apeTutor" required="required" placeholder="Ingrese los apellidos" />
								</div></br>

								<div class="etiqueta">
									<label>Género:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="genTutor" required="required" placeholder="Ingrese el género" />
								</div></br>

								<div class="etiqueta">
									<label>Categoría:</label>
								</div></br>

								<div class="componente">
									<select class="select" title="Categoría" name="catTutor">
									<?php
									   echo $comboCate;
									?>
								</select>
								</div></br>

								<div class="etiqueta">
									<label>Grupo de investigación:</label>
								</div></br>

								<div class="componente">
									<select class="select" title="Grupo de investigación" name="grupoTutor">
									<?php
									   echo $comboGrupo;
									?>
								</select>
								</div></br></br>
								
								<div align="center">
                                <input class="button" type="submit" value="Registrar" />
                            </div>
                            </br>
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
