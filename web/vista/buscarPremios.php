<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaPremios.php");
include_once ("../controlador/buscarPremios.php");

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
						<form  method="post" >
							<div class="etiqueta">
								<label>Ingrese el nombre del premio</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" required="required" placeholder="nombre del premio" name="premioNombre" />
							</div>

							<div align="center">
								<input class="button" type="submit" value="Buscar" onclick="showService(premioNombre.value,'buscarPremios');location.href='#openModal';"/>
							</div></br>
							<header>
								</br><h6>Lista de premios</h6></br>
							</header>
							<div id="resultado" class="datagrid">

								<?php

                                echo $combobitPremio;
								?>
							</div>
							</br>
						</form>
					</div>
				</article>
			</section>
		</div>
		<?php
        echo $emergentePremio;
		?>

		<?php

        getFooter();
		?>
	</div>
</body>
</html>
