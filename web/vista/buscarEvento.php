<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/buscarEvento.php");
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
							</br><h6>Lista de eventos</h6></br>
						</header>
						<div id="resultado" class="datagrid">

							<?php

                            echo $combobit;
							?>
						</div>
						</br>
					</div>
				</article>
			</section>
		</div

		<?php
        getFooter();
		?>
	</div>
</body>
</html>
