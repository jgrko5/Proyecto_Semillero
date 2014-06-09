<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include_once ("../controlador/listadoTutoresPaginacion.php");
include_once ("../controlador/buscarTutor.php");
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
			<section id="tutor">
				<article>
					<header>
						</br><h6>Buscar tutor</h6>
					</header>
					<div id="formulario">
						<form  method="post">
							<div class="etiqueta">
								<label>Ingrese el número de identificación</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="documento" required="required" placeholder="Número de identificación" value="" />
							</div>

							<div align="center">
								<input class="button" type="submit" value="Buscar" onclick="showService(documento.value,'buscarTutor');location.href='#openModal'"/>
							</div></br>
						</form>
						<form  method="get">
							<header>
								<h6>Tutores</h6></br>
							</header>
							<div id="resultado" class="datagrid">

								<?php

                                echo $tabla;
                                echo $navegador;
								?>
							</div></br>
						</form>
					</div>
				</article>
			</section>
		</div>
		<?php

        echo $emergenteTut;
		?>
		<?php
        getFooter();
		?>
	</div>
</body>
</html>
