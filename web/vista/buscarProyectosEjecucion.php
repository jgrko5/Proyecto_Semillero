<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaeProyectosEjecucion.php");
getImports();
?>
<body onload="tunCalendario();">
	<div="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div>
			<section id="consolidacion">
				<article>
					<header>
						<h6>Lista proyectos en ejecución</h6>
					</header>
					<div id="formulario">
							<center>
								<div class="etiqueta">
									<label>Ingrese el número de identificación:</label>
								</div></br>
								
								<div class="componente">
									<input class="textfield" type="text" name="docPE" required="required" placeholder="número de identificación"/>
								</div>
								
								<div align="center">
									<input class="button" type="submit" value="Buscar" onclick="showService(documento.value,'buscarEstudiante');location.href='#openModal'"/>
								</div>
								
								<header>
									<h1 style="color: #000000">Proyectos de investigación en ejecución</h1></br>
								</header>
								
								<div id="resultado" class="datagrid">

									<?php
										echo $tablaEjecucion;
									?>
								</div>
							</center>
					</div>
				</article>
			</section>
		</div>
</body>
</html>
