<?php

include_once ("imports.php");
include ("header.php");
include ("footer.php");

include_once ("../controlador/buscarGrupoInvestigacion.php");
include_once ("../controlador/listaGruposInvestigacion.php");
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
			<section id="grupo">
				<article>
					<header>
						</br><h6>Buscar grupo de investigación</h6>
					</header>
					<div id="formulario">
						<form method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el código:</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="service" required="required" placeholder="Código" />
								</div>

								<div align="center">
									<input class="button" type="submit" name="boton" onclick="showService(service.value,'buscarGrupoInvestigacion');location.href='#openModal'" value="Buscar" />
								</div></br>

								<header>
									<h2>Grupos de investigación</h2>
								</header>
								<div id="resultado" class="datagrid">

									<?php
                                    echo $tabla;
									?>
								</div>
								</br>
							</center>
						</form>
					</div>
				</article>
			</section>
		</div>
		<?php
        echo $emergenteGrupos;
		?>
		<?php
        getFooter();
		?>
	</div>
</body>
</html>
