<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaGruposInvestigacion.php");
include_once ("../controlador/buscarGrupoInvestigacion.php");
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
						<form method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el código</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="service" required="required" placeholder="Código" />
								</div>

								<div align="center">
									<input class="button" type="submit" name="boton" onclick="showService(service.value);location.href='#openModal'" value="Buscar" />
								</div></br>

								<header>
									<h2>Grupos de investigación</h2>
								</header>
								<div id="resultado" class="datagrid">

									<?php
                                    echo $tabla;
                                    echo $emergenteGrupos;
									?>
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
