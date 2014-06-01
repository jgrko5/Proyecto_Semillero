<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaProyectosConsolidacion.php");
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
						<h6>Lista proyectos en consolidación</h6>
					</header>
					<div id="formulario">
						<center>

							<div class="etiqueta">
								<label>Ingrese el código del proyecto:</label>
							</div></br>

							<div class="componente">
								<input class="textfield" type="text" name="codPC" required="required" placeholder="nCódigo del proyecto"/>
							</div>

							<div align="center">
								<input class="button" type="submit" value="Buscar" onclick="showService(codPC.value,'buscarProyectoConsolidacion');"/>
							</div>

							<header>
								<h1 style="color: #000000">Proyectos de investigación en consolidación</h1></br>
							</header>

							<div id="resultado" class="datagrid">

								<?php
									echo $tablaConsolidacion;
								?>
							</div>
							</br>

						</center>
					</div>
				</article>
			</section>
		</div>

		<div>

		</div>

		</div>
</body>
</html>
