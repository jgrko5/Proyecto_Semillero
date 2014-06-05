<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main"  class="wrapper">
		<?php
        getHeaderStart();
        getPanelSesion();
        getMenuIzquierdoFacultad();
		?>
		<div id="contenido">
			<section id="proyecto">
				<article>

					<header>
						</br><h6>Actualizar proyecto</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarProyecto.php" method="post">

							<div class="etiqueta">
                                <label>Código:</label>
                            </div></br>
                            <div class="componente">
                                <input class="textField" type="text" name="codigo" required="required" placeholder="Ingrese el título" readonly="true" value="<?php echo $_SESSION['codigo']; ?>"/>
                            </div></br>
                            
                            <div class="etiqueta">
                                <label>Título:</label>
                            </div></br>
                            <div class="componente">
                                <input class="textField" type="text" name="tituloProyecto" required="required" placeholder="Ingrese el título" value="<?php echo $_SESSION['titulo']; ?>"/>
                            </div></br>

							<div class="etiqueta">
								<label>Gasto efectivo:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="gastoProyecto" required="required" placeholder="Ingrese el gasto efectivo" value="<?php echo $_SESSION['gasto']; ?>"/>
							</div></br>
							<div class="etiqueta">
								<label>Duración:</label>
							</div></br>
							<div class="componente">
								<input class="textField" type="text" name="duracionProyecto" required="required" placeholder="Ingrese la duración" value="<?php echo $_SESSION['duracion']; ?>"/>
							</div></br>
							<div class="etiqueta">
								<label>Fecha inicio:</label>
							</div></br>
							<div class="componente">
								<input type="date" class="textField" name="fechaProyecto" value="<?php echo $_SESSION['fechaInicio']; ?>"/>
							</div></br></br>

							<div align="center">

								<input class="button" type="submit" value="Actualizar"/>

							</div></br>

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
