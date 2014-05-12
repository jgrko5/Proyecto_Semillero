<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>

<body>
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdo();
		getMenuDerecho();
		?>
		<div id="contenido">

			<section id="evento">
				<article>
					<header>
						<h6>Registrar evento</h6>
					</header>

					<div id="formulario">
						<form action="../controlador/registrarProyecto.php" method="post">
							<div class="etiqueta">
								<label>Nombre:</label>
							</div></br>
							<div class="componente">
								<input class="textfield" type="text"name="te" placeholder="Ingrese el nommbre"/>
							</div>

							<div class="etiqueta">
								<label>Ciudad:</label>
							</div></br>
							<div class="componente">
								<input class="textfield" type="text"name="te" placeholder="Ingrese la ciudad"/>
							</div>
							<br/>
							
							<div class="etiqueta">
								<label>Año:</label>
							</div></br>
							<div class="componente">
								<input class="textfield" type="text"name="te" placeholder="Ingrese el año"/>
							</div>
							<br/>

					</div>
					<div align="center">
						<input class="button" type="submit" value="Registrar" />
					</div></br>
					</form>
				</article>

			</section>

		</div>

	</div>
</body>
</html>
