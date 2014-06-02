<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
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
						</br><h6>Registrar espacio academico</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarMateria.php" method="post">
							<div class="etiqueta">
								<label>Codigo:</label>
							</div>
							<br/>
							<div class="componente">
								<input class="textfield" type="text" name="codigo" required="required" placeholder="Ingrese el codigo" />
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