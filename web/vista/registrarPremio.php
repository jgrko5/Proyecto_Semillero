<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
session_start();
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
			<section id="premio">
				<article>
					<header>
						</br><h6>Registrar premio</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarPremio.php" method="post">
							<div class="etiqueta">
								<label>Nombre:</label>
							</div>
							<br/>
							<div class="componente">
								<input class="textfield" type="text" name="nombrePremio" required="required" placeholder="Ingrese el nombre" />
							</div>
							<br/>

							<div class="etiqueta">
								<label>Observaciones:</label>
							</div>
							<br/>
							<div class="componente">
								<textarea rows="3" cols="5" class="textArea" type="text" name="observaciones" >
									</textarea>
							</div>
							<br/>
							<br/>
							<br/>
							<br/>

							<div align="center">
								<input class="button" type="submit" value="Registrar" />
							</div></br>
					</div>

					</form>
		</article>
		</section>
		</div>
		<?php getFooter(); ?>
	</div>
</body>
</html>
