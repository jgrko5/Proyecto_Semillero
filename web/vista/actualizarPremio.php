<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
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
						</br><h6>Actualizar datos de un premio</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarPremio.php" method="post">
							<center>
								
								<div class="etiqueta">
									<label>Nombre:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="nombreMateria" required="required" placeholder="Nuevo nombre del espacio académico"/>
								</div>
								</br>
								
								<div class="etiqueta">
									<label>Observaciones:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="nombreMateria" required="required" placeholder="Nuevo nombre del espacio académico"/>
								</div>
								</br>

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
