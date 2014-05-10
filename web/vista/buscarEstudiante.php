<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body>
	<div id="izquierdo">
		<ul id="menu" class="nav">
			<li class="dash">
				<a href="../vista/inicioDelegado.php">
					<span>Inicio</span>
				</a>
			</li>
			<li class="charts">
				<a href="../vista/inicioDelegado.php">
					<span>Inicio</span>
				</a>
			</li>
			<li class="charts">
				<a href="../vista/inicioDelegado.php">
					<span>Inicio</span>
				</a>
			</li>
			
		</ul>
	</div>
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		?>
		
		<nav class="nav">

			<ul >
				<h5>
					<a href="listaEstudiantes.php">
						<font color="black">Estudiantes</font>
					</a></br>
					<a href="listaProfesores.php">
						<font color="black">Profesores</font>
					</a></br>
					<a href="listaTrabajoDeGrado.php">
						<font color="black">Trabajo de Grado</font>
					</a></br>
					<a href="listaSolicitudes.php">
						<font color="black">Solicitudes</font>
					</a>
					
			</ul>
		</nav>
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

							<div class="etiqueta">
								<label>Palabra clave:</label>
							</div>
							<div class="componente">
								<input class="textField" type="text" name="correoEst" required="required" placeholder="Busqueda por C.C., T.I. o Nombre"/>
								<input class="button" type="submit" value="Buscar" src="/vista/resultadoEstudiantes.php" />
							</div>
							</br>

						</center>
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
