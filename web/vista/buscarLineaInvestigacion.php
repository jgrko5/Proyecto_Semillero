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
<<<<<<< HEAD
								
								<div id="resultado" class="datagrid">
=======
								<div class="etiqueta">
									<label>Ingrese el código:</label>
								</div></br>
>>>>>>> origin/master

									<?php
                                    echo $tabla;
                                    echo $navegador;
									?>
								</div>
<<<<<<< HEAD
								</br>
=======
								<div align="center">
									<input class="button" type="submit" value="Buscar"/>
								</div></br>
								<header>
									<h1>Líneas de investigación:</h1>
								</header>

								<div class="tabla">
									<table style="border:1px solid #666;">
										<tr>
											<td style="border:1px inset #666;">Código</td><td style="border:1px inset #666;">Nombre</td>
											<td style="border:1px inset #666;">Clasificación</td><td style="border:1px inset #666;">Fecha conformación</td>
											<td style="border:1px inset #666;">Facultad</td>
										</tr>
									</table>
								</div></br>
>>>>>>> origin/master
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
