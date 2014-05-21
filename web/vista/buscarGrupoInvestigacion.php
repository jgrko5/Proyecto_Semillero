<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaGruposInvestigacion.php");
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
			<section id="grupo">
				<article>
					<header>
						</br><h6>Buscar grupo de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/buscarGrupoInvestigacion.php" method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el código</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="tipo" required="required" placeholder="Código" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar"/>
								</div></br>
								<header>
									<h2>Grupos de investigación</h2>
								</header>
								<div id="resultado" class="datagrid">

									<?php
                                        include ('../controlador/buscarGruposInvestigacion.php');
									?>
									<table>
										<thead>
											<tr>
												<th>Codigo</th><th>Nombre</th><th>Clasificacion</th><th>fecha de Creacion</th>
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
