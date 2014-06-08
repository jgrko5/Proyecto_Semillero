<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include_once ("../controlador/listadoEjecucionPaginacion.php");
include_once ('../controlador/buscarProyectoEjecucion.php');
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
			<section id="proyecto">
				<article>
					<header>
						</br><h6>Lista proyectos en ejecución</h6>
					</header>
					<div id="formulario">
						<form method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el codigo del proyecto:</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="codPE" required="required" placeholder="Código del proyecto"/>
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar" onclick="showService(codPE.value,'buscarProyectoEjecucion');location.href='#openModal'"/>
								</div>

								<header>
									<h1 style="color: #000000">Proyectos de investigación en ejecución</h1></br>
								</header>

								<div id="resultado" class="datagrid">

									<?php
									echo $tabla;
                                    echo $navegador;
									?>
								</div>
								</br>
							</center>
						</form>
					</div>
				</article>
			</section>

			<?php
			echo $emergenteProE;
			?>
		</div>
		

		<?php
		getFooter();
		?>
	</div>
</body>
