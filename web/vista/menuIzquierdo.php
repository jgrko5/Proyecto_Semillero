<?php
include_once ("menuDerecho.php");
    function getMenuIzquierdo()
	{

?>

<div id="indice" class="flyoutmenu" >
	<nav>
		<ul>
			<li class="mheader">
				Nombre facultad
			</li>

			<li>
				<a href="#"><span>Estudiante</span></a>
				<ul>
					<li class="lupper">
						<a href="agregarEstudiante.php">Registrar</a>
					</li>
					<li>
						<a href="buscarEstudiante.php">Buscar</a>
					</li>

				</ul>
			</li>
			<li>
				<a href="#"><span>Evento</span></a>
				<ul>
					<li class="lupper">
						<a href="registrarEvento.php">Registrar</a>
					</li>
					<li>
						<a href="#">Asignar</a>
					</li>

				</ul>
			</li>
			<li>
				<a href="#"><span>Grupo de investigación</span></a>
				<ul>
					<li class="lupper">
						<a href="actualizarGrupoInvestigacion.php">Actualizar</a>
					</li>
					<li>
						<a href="buscarGrupoInvestigacion.php">Buscar</a>
					</li>
					<li>
						<a href="registrarGrupoInvestigacion.php">Registrar</a>
					</li>
				</ul>

			</li>
			<li>
				<a href="#"><span>Materia</span></a>
			</li>
			<li>
				<a href="#"><span>Premio</span></a>
				<ul>
					<li class="lupper">
						<a href="registrarPremio.php">Registrar</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Proyecto de investigación</span></a>
				<ul>
					<li class="lupper">
						<a href="actualizarProyecto.php">Actualizar</a>
					</li>
					<li>
						<a href="registrarProyecto.php">Registrar</a>
					</li>
				</ul>
			</li>
			<li class="last">
				<a href="#"><span>Tutor</span></a>
				<ul>
					<li class="lupper">
						<a href="buscarTutor.php">Buscar</a>
					</li>
					<li>
						<a href="registrarTutor.php">Registrar</a>
					</li>
				</ul>
			</li>

		</ul>
	</nav>
</div>

<?php
getMenuDerecho();
}
?>
<?php
function getMenuIzquierdoVice()
{

?>

<div id="indice" class="flyoutmenu" >
	<nav>
		<ul>
			<li class="mheader">
				Facultades
			</li>

			<li>
				<a href="#"><span>Ciencias administrativas y económicas</span></a>
			</li>
			<li>
				<a href="#"><span>Ciencias agroindustriales</span></a>
			</li>
			<li>
				<a href="#"><span>Ciencias básicas y tecnológicas</span></a>
			</li>
			<li>
				<a href="#"><span>Ciencias de la salud</span></a>
			</li>
			<li>
				<a href="#"><span>Ciencias humanas y bellas artes</span></a>
				<ul>
					<li class="lupper">
						<a href="#nolink">Nikon Lenses</a>
					</li>
					<li>
						<a href="#nolink">Canon Lenses</a>
					</li>
					<li>
						<a href="#nolink">Sigma Lenses</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Educación</span></a>
			</li>
			<li class="last">
				<a href="#"><span>Ingeniería</span></a>
			</li>

		</ul>
	</nav>
</div>

<?php
}
?>