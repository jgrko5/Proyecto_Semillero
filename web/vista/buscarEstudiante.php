<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include_once ("../controlador/listaEstudiante.php");
include_once ("../controlador/buscarEstudiante.php");
include_once ("../controlador/paginacion.php");
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
						</br><h6>Buscar estudiante</h6>
					</header>
					<div id="formulario">
						<form  method="post" >
							<center>
								<div class="etiqueta">
									<label>Ingrese el número de identificación:</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="documento" required="required" placeholder="número de identificación" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar" onclick="showService(documento.value,'buscarEstudiante');location.href='#openModal'"/>
								</div></br>
								<header>
									<h1 style="color: #000000">Estudiantes</h1></br>
								</header>

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
        echo $emergenteEst;
		?>
		<?php
        getFooter();
		?>
	</div>
</body>
</html>
