<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
session_start();
include_once ("../controlador/buscarProyectoEjecucion.php");
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
			<section id="estudiante">
				<article>
					<header>
						</br><h6>Actualizar proyecto en ejecución</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarSemilleroEjecucion.php" method="post">

							<div class="etiqueta">
								<label>Proyecto de investigación:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" readonly="true" name="proyecto" placeholder="Nombre del proyecto de investigación" value="<?php echo $_SESSION['proyectoSE'] ?>" />
							</div></br>

							<div class="etiqueta">
								<label>Año:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="anio" placeholder="Año" value="<?php echo $_SESSION['anioSE'] ?>" />
							</div></br>

							<div class="etiqueta">
								<label>Período:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="periodo" placeholder="Período" value="<?php echo $_SESSION['periodoSE'] ?>" />
							</div></br>

							<div class="etiqueta">
								<label>Nota:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="nota" placeholder="Nota" value="<?php echo $_SESSION['notaSE'] ?>"/>
							</div>


							</br></br>

							<div align="center">
								<input class="button" type="submit" value="Actualizar" />
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
