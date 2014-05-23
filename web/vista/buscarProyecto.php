<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ('../controlador/listaProyecto.php');
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
        getheaderstart();
        getPanelSesion();
        getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="proyecto">
				<article>
					<header>
						</br><h6>Buscar proyecto de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/buscarProyecto.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el código</label>
								</div>

								<div class="componente">
									<input class="textfield" type="text" name="codigoP" required="required" placeholder="Código" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar"/>
								</div></br>

								<header>
									<h1>Proyectos de investigación</h1></br>
								</header>
								<div id="resultado" class="datagrid">

									<?php
                                    include ('../controlador/buscarProyecto.php');
									?>
									<table>
										<thead>
											<tr>
												<th>Código</th><th>Título</th><th>Gasto efectivo</th><th>Duración</th><th>Fecha inicio</th>
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
