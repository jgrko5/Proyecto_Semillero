<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/buscarPremio.php");
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
			<section id="estudiante">
				<article>
					<div id="formulario">
						<header>
							</br><h6>Lista de premios</h6></br>
						</header>
						<div id="resultado" class="datagrid">

							<?php

                            echo $combobitPremio;
							?>
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
