<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("panelDelegados.php");
getImports();
?>
<body>
	
	<div id="right" class="wrapper">
		<?php
		getHeaderStart();
		?>
		<?php
	getPanelDelegados();
	?>

		<div>
			<section id="estudiante">
				<article >

					<header>
						<h6>Buscar estudiante</h6>
					</header>

					<div id="formulario">
						<center>
							<div class="etiqueta">
								<label>Tipo de busqueda:</label>
							</div>
							<div class="componente">
								<select class="select" title="Tipo de busqueda">
									<option>Cedula de ciudadania</option>
									<option>Tarjeta de identidad</option>
									<option>Nombre</option>
								</select>
							</div>
							</br>

							<div class="etiqueta">
								<label>Palabra clave:</label>
							</div>
							<div class="componente">
								<input class="textField" type="text" name="correoEst" required="required" placeholder="Busqueda por C.C., T.I. o Nombre"/>
							</div>

						</center>
						<div class="componente">
							<input class="button" type="submit" value="Buscar" src="/vista/resultadoEstudiantes.php" />
						</div>
						</br>
						</br>
					</div>

				</article>
			</section>
		</div>

		<footer>
			<p>
				&copy; Copyright  by bernal
			</p>
		</footer>
	</div>
</body>
</html>
