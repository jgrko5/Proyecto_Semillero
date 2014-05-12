<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>

<body>
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		?>
		<!-- --------------------CÓDIGO HTML------------------------------------------------ -->

		<section id="login">
			<article >
				<header>
					</br><h6>¡Bienvenido!</h6>
					<h6><label>Sistema de gestion de semilleros de investigación</label></h6>
				</header>

				<div id="formulario" align="right">

					<form action="../controlador/login.php" method="post">

						<div class="etiqueta">
							<label> Usuario: </label>
						</div>
						</br>
						<div class="componente" align="left">
							<input class="textField"type="text" name="idusuario" required="required" />
						</div>
						</br>

						<div class="etiqueta">
							<label> Contraseña: </label>
						</div>
						</br>
						<div class="componente" align="left">
							<input class="password" type="password" name="password" required="required"/>
						</div>
						</br>
						</br>
						<div align="center">
							<input class="button" type="submit" value="Ingresar" />
						</div>
					</form>
				</div>
			</article>
		</section>

		<!-- --------------------CÓDIGO HTML------------------------------------------------ -->
		<?php
		// getFooter();
		?>
	</div>
</body>
</html>