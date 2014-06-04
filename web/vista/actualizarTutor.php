<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/buscarTutor.php");
include_once ("../controlador/listaCategorias.php");
session_start();
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
        getHeaderStart();
        getPanelSesion();
        getMenuIzquierdoFacultad();
		?>
		<div id="contenido">
			<section id="estudiante">
				<article>
					<header>
						</br><h6>Actualizar Tutor</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarTutor.php" method="post">
							<center>
								<div class="etiqueta">
                                    <label>Documento:</label>
                                </div></br>

                                <div class="componente">
                                    <input class="textField" type="text" name="documento" readonly="true" value="<?php echo $_SESSION['documentoT']; ?>" required="required" placeholder="Ingrese el nombre"  />
                                </div></br>
                                <div class="etiqueta">
                                    <label>Nombre:</label>
                                </div></br>

                                <div class="componente">
                                    <input class="textField" type="text" name="nombre" required="required" value="<?php echo $_SESSION['nombreT'] ?>" placeholder="Ingrese el nombre" />
                                </div></br>

                                <div class="etiqueta">
                                    <label>Apellidos:</label>
                                </div></br>

                                <div class="componente">
                                    <input class="textField" type="text" name="apellido" required="required" value="<?php echo $_SESSION['apellidoT'] ?>" placeholder="Ingrese los apellidos" />
                                </div></br>
                                <div class="etiqueta">
                                    <label>Género:</label>
                                </div></br>

                                <div class="componente">
                                    <input class="textField" type="text" name="genero" required="required" value="<?php echo $_SESSION['generoT'] ?>" placeholder="Ingrese el género" />
                                </div></br>

                                <div class="etiqueta">
                                    <label>Categoría:</label>
                                </div></br>

                                <div class="componente">
                                    <select class="select"  title="Categoria" name="categoria">
                                        <?php
                                        echo $comboCate;
                                        ?>
                                    </select>
                                </div></br>
                                </br>
                                <div align="center">
                                    <input class="button" type="submit" value="Actualizar" />
                                </div></br>
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
