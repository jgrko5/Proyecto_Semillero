<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaProyecto.php");
include_once ("../controlador/buscarEstudiante.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php getheaderstart();
        getPanelSesion();
        getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="proyecto">
				<article>
					<header>
						</br><h6>Asignar proyecto de investigación</h6>
					</header>
					<div id="formulario">
						<form method="post">
							<div class="etiqueta">
								<label>Ingrese el código del estudiante</label>
							</div>
							<div class="componente">
								<input class="textField"  type="text" name="documento" required="required" placeholder="Código"  />
							</div>
							<div align="left">
								<input class="button" type="submit" value="Buscar" onclick="showService(documento.value,'buscarEstudiante')"/>
							</div>
						</form>
						<form action="../controlador/asignarEstudianteProyecto.php"  method="post">
						    <div class="etiqueta">
                                <label>Código resultante:</label>
                            </div></br>
						    <?php
						    echo $textfieldCodigo;
						    ?>
							<div class="etiqueta">
								<label>Nombres y apellidos:</label>
							</div></br>

							<?php
							
                            echo $texfield;
							?>
							</br>
							<div class="etiqueta">
								<label>Proyectos:</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Proyectos" name="proEstudiante">
									<?php
                                    echo $comboProyecto;
									?>
								</select>
							</div></br></br>

							<div align="center">
								<input class="button" type="submit" value="Asignar" />
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