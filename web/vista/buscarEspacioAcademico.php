<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaMaterias.php");
include_once ("../controlador/buscarEspacioAcademico.php");

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

					<header>
						</br><h6>Lista espacios académicos</h6>
					</header>
					<div id="formulario">
						<form  method="post" >
							<center>
								<div class="etiqueta">
									<label>Ingrese el código del espacio academico:</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="documento" required="required" placeholder="Código del espacio academico" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar" onclick="showService(documento.value,'buscarEspacioAcademico');location.href='#openModal'"/>
								</div></br>
								<div id="resultado" class="datagrid">

									<?php

                                    echo $combobit;
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
		echo $emergenteMaterias;
		?>

	</div>
</body>
</html>
