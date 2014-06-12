<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include_once ("../controlador/listaLineaInvestigacion.php");
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
						</br><h6>Buscar línea de investigación</h6></br>
					</header>
					<div id="formulario">
						<form  method="get">
							<center>
								
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
		</div>
		<?php
        getFooter();
		?>
	</div>
</body>
</html>
