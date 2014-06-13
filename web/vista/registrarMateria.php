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
			<section id="materia">
				<article>
					<header>
						</br><h6>Registrar espacio académico</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarMateria.php" method="post">
							<div class="etiqueta">
								<label>Código:</label>
							</div>
							<br/>
							<div class="componente">
								<input class="textfield" type="text" name="codigo" required="required" placeholder="Ingrese el código" />
							</div>
							<br/>

							<div class="etiqueta">
								<label>Nombre:</label>
							</div>
							<br/>
							<div class="componente">
								<input class="textfield" type="text" name="nombre" required="required" placeholder="Ingrese el nombre" />
							</div>
							<br/>
							<br/>

							<div align="center">
								<input class="button" type="submit" value="Registrar" />
							</div></br>

						</form>
					</div>
				</article>
			</section>
		</div>
		<?php getFooter(); ?>
	</div>
</body>
</html>