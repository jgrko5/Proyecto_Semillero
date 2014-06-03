<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
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
						</br><h6>Modificar datos del espacio académico</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarMateria.php" method="post">
							<center>
								<div class="etiqueta">
                                    <label>Código:</label>
                                </div>
                                </br>
                                <div class="componente">
                                    <input class="textField" type="text" name="codigo" readonly="true" required="required" value="<?php echo $_SESSION['codMateria'] ?>" placeholder="Código del espacio académico"/>
                                </div>
                                </br>
                                <div class="etiqueta">
                                    <label>Nombre:</label>
                                </div>
                                </br>
                                <div class="componente">
                                    <input class="textField" type="text" name="nombre" value="<?php echo $_SESSION['nomMateria'] ?>" required="required" placeholder="Nombre del espacio académico"/>
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
