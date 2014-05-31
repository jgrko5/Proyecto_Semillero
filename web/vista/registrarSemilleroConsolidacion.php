<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaGruposInvestigacion.php");
include_once ("../controlador/listaProyectosGrupos.php");
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
			<section id="consolidacion">
				<article>
					<header>
						</br><h6>Registrar semillero en consolidación</h6>
					</header>
					<div id="formulario">
						<form method="post">

							<div class="etiqueta">
								<label>Grupo de investigación:</label>
							</div></br>

							<div class="componente">
								<select class="select" title="Grupos de investigación" name="grupo" onchange="showService(grupo.value,'listaProyectosGrupos')">
									<?php
                                    echo $comboGrupo;
									?>
								</select>
							</div></br>

							<?php
                            echo $select;
							?>
							</br>

							<div class="etiqueta">
								<label>Año:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="año" placeholder="Año"/>
							</div></br>

							<div class="etiqueta">
								<label>Período:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="periodo" placeholder="Período"/>
							</div></br>

							<div class="etiqueta">
								<label>Nota:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="nota" placeholder="Nota"/>
							</div></br>

							<div class="etiqueta">
								<label>Homologación:</label>
							</div></br>

							<div class="componente">
								<input type="checkbox" id="homologacion" value="3" onChange="total()" name="valido" />
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
