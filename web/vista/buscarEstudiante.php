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
		?>
		<div id="contenido">
			<section id="estudiante">
				<article>
					<header>
						<h6>Buscar estudiante</h6></br>
					</header>
					
					<div id="formulario">
						<form action="../controlador/registrarProyecto.php" method="post" ></form>
							<center>
								
							</center>
						</div>

				</article>
			</section>
		</div>
	</div>
</body>
</html>
