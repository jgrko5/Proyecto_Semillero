<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
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
							<form method="post">
								<div class="etiqueta">
									<label> Usuario:</label>
								</div>
								<div class="componente">
									<select class="select" title="gestión de contraseñas" name="gestionCon" >
										<?php
                                        echo $combobitUsuarios;
										?>
									</select>
								</div>
								<div align="left">
									<input type="submit" style="background-image:url(../imagenes/buscar.png);background-size: 100%" class="button" value="" onclick="showService(gestionCon.value,'gestionarContrasenas')" />
								</div>
							</form>
							<form action="../controlador/cambioContrasena.php" method="post">
								<?php
                                echo $textContrasena;
								?> </br>
								<div align="center">
									<input type="submit" class="button" value="Cambiar"  />
								</div>
								</br>
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
