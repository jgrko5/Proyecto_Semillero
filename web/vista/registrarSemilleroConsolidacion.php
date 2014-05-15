<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body>
	<div id="main" class="wrapper">
		<?php getheaderstart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="consolidacion">
				<article>
					<header>
						</br><h6>Registrar semillero consolidación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarSemilleroConsolidacion.php" method="post">
							
							<div class="etiqueta">
								<label>Grupo de investigación:</label>
							</div>
							
							<div class="componente">
								<select class="select" title="Grupos de investigación">
									<option>sinfoci</option>
								</select>
							</div></br>
							
							<div class="etiqueta">
								<label>Proyecto de investigación:</label>
							</div>
							
							<div class="componente">
								<select class="select" title="Proyecto de investigación">
									<option> </option>
								</select>
							</div></br>
							
							<div class="etiqueta">
								<label>Año:</label>
							</div>
							
							<div class="componente">
								<input class="textField" type="text" name="tipo" placeholder="Año"/>
							</div></br>
							
							<div class="etiqueta">
								<label>Período:</label>
							</div>
							
							<div class="componente">
								<input class="textField" type="text" name="tipo" placeholder="Período"/>
							</div></br>
										
							
							<div class="etiqueta">
								<label>Nota:</label>
							</div>
							
							<div class="componente">
								<input class="textField" type="text" name="tipo" placeholder="Nota"/>
							</div></br>
							
							<div class="etiqueta">
								<label>Horas empleadas del docente:</label>
							</div>
							
							<div class="componente">
								<input class="textField" type="text" name="tipo" placeholder="Horas empleadas docente"/>
							</div></br>
							
							<div class="etiqueta">
								<label>Homologación:</label>
							</div>
							
							<div class="componente">
							<input type="checkbox" id="homologacion" value="3" onChange="total()"/> 
							</div></br></br>
							
							<div align="center">
								<input class="button" type="submit" value="Registrar" />
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
