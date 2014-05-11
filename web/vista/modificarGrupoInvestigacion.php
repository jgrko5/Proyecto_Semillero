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
		<section id="grupo">
			<article>
				<header>
					<h6>Modificar datos del grupo de investigación</h6>
				</header>
				<div id="formulario">
					<form action="../controlador/registrarGrupoInvestigacion.php" method="post">
						<center>
							
								<div class="etiqueta">
									<label>Código:</label>
								</div></br>
							
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el código"/>
							</div></br></br>
							
								<div class="etiqueta">
									<label>Nombre:</label>
								</div></br>

							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese el nombre"/>
							</div></br></br>

							
								<div class="etiqueta">
									<label>Clasificación:</label>
								</div></br>
							
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la clasificación"/>
							</div></br></br>

							
								<div class="etiqueta">
									<label>Fecha conformación:</label>
								</div></br>
							
							<div class="componente">
								<input  type="date" class="textField"/>
							</div></br></br>

							
								<div class="etiqueta">
									<label>Facultad:</label>
								</div></br>
						
							<div class="componente">
								<input class="textField" type="text" name="tipo" required="required" placeholder="Ingrese la facultad"/>
							</div></br></br>

							<div aling="center">
								<input class="button" type="submit" value="Actualizar" />
							</div>
						</center>
					</form>
				</div>
			</article>
		</section>
	</div>
</body>
</html>
