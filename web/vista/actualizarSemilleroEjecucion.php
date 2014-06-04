<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
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
						<form action="../controlador/registrarSemilleroEjecucion.php" method="post">

							<div class="etiqueta">
								<label>Proyecto de investigación:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="proyecto" placeholder="Nombre del proyecto de investigación" value="<?php echo $_SESSION['proyectoSE'] ?>" />
							</div></br>

							<div class="etiqueta">
								<label>Horas del docente:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="horas" placeholder="Horas del docente" value="<?php echo $_SESSION['horasSE'] ?>" />
							</div></br>

							<div class="etiqueta">
								<label>Año:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="año" placeholder="Año" value="<?php echo $_SESSION['anioSE'] ?>" />
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
