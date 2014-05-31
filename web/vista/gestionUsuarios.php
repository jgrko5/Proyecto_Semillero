<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/gestionarContrasenas.php");
include_once ("../controlador/listaUsuarios.php");
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
					<div id="formulario">
						<header>
							</br><h6>Gestión de contraseñas</h6></br>
						</header>
						<div id="formulario">
							<form action="../controlador/gestionContrasenas.php" method="post">
								<div class="etiqueta">
									<label> Usuario:</label>
								</div>
								<div class="componente">
									<select class="select" title="gestion de contraseñas" name="gestionCon" onchange="showService(this.value,'gestionarContrasenas')">
										<?php
										echo $combobitUsuarios;
										?>
									</select>
								</div></br>
								<?php
									echo $textContrasena;
								?></br>
							</form>
						</div>
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
