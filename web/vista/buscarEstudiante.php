<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaEstudiante.php");
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
						<form action="../controlador/buscarEstudiante.php" method="post" >
							<center>
								<div class="etiqueta">
									<label>Ingrese el número de identificación</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="documento" required="required" placeholder="número de identificación" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar"/>
								</div></br>
								<header>
									<h1 style="color: #000000">Estudiantes</h1></br>
								</header>

								<div id="resultado" class="datagrid">
								    
								    <?php include('../controlador/buscarEstudiante.php');?>
									<table>
										<thead>
											<tr>
												<th>Cedula</th><th>Tarjeta de Identidad</th><th>Nombres y apellidos</th><th>Modificar</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                            
                                            echo $combobit;
											?>
										</tbody>
									</table>
								</div>

								</br>
							</center>
						</form>
					</div>
				</article>
			</section>
		</div>

		<div id="openModal" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h6>Buscar estudiante</h6>
				<div class="etiqueta">
					<label>Documento:</label>
				</div></br>
				<div class="etiqueta">
					<label>Aqui va el documento</label>
				</div></br>
				<div class="etiqueta">
					<label>Nombre:</label>
				</div></br>
				<div class="etiqueta">
					<label>Aqui va el nombre:</label>
				</div></br>
				<div class="etiqueta">
					<label>Direccion:</label>
				</div></br>
				<div class="etiqueta">
					<label>Aqui va la direccion:</label>
				</div></br>
				<div class="etiqueta">
					<label>Correo:</label>
				</div></br>
				<div class="etiqueta">
					<label>Aqui va el correo:</label>
				</div></br>
				<div class="etiqueta">
					<label>Telefono:</label>
				</div></br>
				<div class="etiqueta">
					<label>Aqui va el telefono:</label>
				</div></br>
				<div class="etiqueta">
					<label>Semestre:</label>
				</div></br>
				<div class="etiqueta">
					<label>Aqui va el semestre:</label>
				</div></br>

			</div>
		</div>
		<?php
        getFooter();
		?>
	</div>
</body>
</html>
