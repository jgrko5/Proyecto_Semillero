<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
session_start();
getImports();
?>

<body onload="tunCalendario();">
	<div id="main" class="wrapper" style="overflow: hidden" >
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdoFacultad();
		getMenuDerecho();
		?>
		<div id="contenido">
			<section id="estudiante" >
				<article >
					<header>
						</br><h6>Actualizar datos de un evento</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarEvento.php" method="post">
							<center>
								
								<div class="etiqueta">
									<label>Nombre:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="nombreEvento" required="required" placeholder="Nuevo nombre del evento" value="<?php echo $_SESSION['nombreE']; ?>"/>
								</div>
								</br>
								
								<div class="etiqueta">
									<label>Ciudad:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="ciudadEvento" required="required" placeholder="Nuevo ciudad del evento"  value="<?php echo $_SESSION['ciudadE']; ?>"/>
								</div>
								</br></br>
								
								<div class="etiqueta">
									<label>Año:</label>
								</div>
								</br>
								<div class="componente">
									<input class="textField" type="text" name="anioEvento" required="required" placeholder="Nuevo año del evento" value="<?php echo $_SESSION['anioE']; ?>"/>
								</div>
								</br>

								<div align="center">
									<input class="button" type="submit" value="Actualizar" />
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
