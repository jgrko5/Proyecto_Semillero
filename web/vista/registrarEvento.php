<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
getImports();
?>

<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdoFacultad();
		?>
		<div id="contenido">

			<section id="evento">
				<article>
					<header>
						</br><h6>Registrar evento</h6>
					</header>

					<div id="formulario">
						<form action="../controlador/registrarEvento.php" method="post">
							<div class="etiqueta">
								<label>Nombre:</label>
							</div></br>
							<div class="componente">
								<input class="textfield" type="text"name="nombreEv" placeholder="Ingrese el nombre"/>
							</div>

							<div class="etiqueta">
								<label>Ciudad:</label>
							</div></br>
							<div class="componente">
								<input class="textfield" type="text"name="ciudadEv" placeholder="Ingrese la ciudad"/>
							</div>
							<br/>

							<div class="etiqueta">
								<label>Año:</label>
							</div></br>
							<div class="componente">
								<input class="textfield" type="text"name="añoEv" placeholder="Ingrese el año"/>
							</div>
							<br/>
							</br>

					</div>
					<div align="center">
						<input class="button" type="submit" value="Registrar" />
					</div></br>
					</form>
				</article>

			</section>
		</div>
		<?php
		getFooter();
		?>
	</div>
</body>
</html>
