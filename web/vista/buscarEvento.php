<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
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
					<header>
						</br><h6>Buscar evento</h6>
					</header>

					<div id="formulario">
						<header>
							<h1>Lista de eventos</h1>
						</header>
						<div id="resultado" class="datagrid">

							<table>
								<thead>
									<tr>
										<th>Nombre</th><th>Tarjeta de Identidad</th><th>Nombres y apellidos</th><th>Modificar</th>
									</tr>
								</thead>
								<tbody>
									<?php

                                    echo $combobit;
									?>
								</tbody>
							</table>
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
