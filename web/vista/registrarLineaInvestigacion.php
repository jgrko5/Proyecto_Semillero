<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include ("../controlador/listaGruposInvestigacion.php");
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
						</br><h6>Registrar línea investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/registrarLineaInvestigacion.php" method="post">
							<center>
								
								<div class="etiqueta">
									<label>Nombre:</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="nombreLinea" required="required" placeholder="Ingrese el nombre"/>
								</div></br>

								<div class="etiqueta">
									<label>Grupo investigación:</label>
								</div></br>

								<div class="componente">
									<select class="select" title="Grupo de investigación" name="gruposI"/>
									<?php
									echo $comboGrupo;
									?>
									</select>
								</div></br></br>

								<div aling="center">
									<input class="button" type="submit" value="Registrar" />
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
