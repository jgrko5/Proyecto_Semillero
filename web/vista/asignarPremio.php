<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include_once ("../controlador/buscarEstudiante.php");
include_once ("../controlador/listaPremios.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php getheaderstart();
        getPanelSesion();
        getMenuIzquierdoFacultad();
		?>
		<div id="contenido">
			<section id="premio">
				<article>
					<header>
						</br><h6>Asignar premio</h6>
					</header>
					<div id="formulario">
						<form method="post">
							<div class="etiqueta">
								<label>Ingrese el código del estudiante:</label>
							</div>

							<div class="componente">
								<input class="textField" type="text" name="documento" required="required" placeholder="Código"/>
							</div>

							<div align="left">
								<input class="button" type="submit" value="Buscar" onclick="showService(documento.value,'buscarEstudiante');location.href='#openModal'" />
							</div>
						</form>
						<form action="../controlador/asignarPremio.php" method="post">
							<div class="etiqueta">
								<label>Código estudiante:</label>
							</div></br>
							<?php
                            echo $textfieldCodigo;
							?>
							<div class="etiqueta">
								<label>Nombres y apellidos:</label>
							</div></br>
							<?php
                            echo $texfield;
							?>
							<div class="etiqueta">
								<label>Premios:</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Premios" name="premiosA">
									<?php
                                    echo $comboboxPremios;
									?>
								</select>
							</div></br></br></br>

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
</html>
