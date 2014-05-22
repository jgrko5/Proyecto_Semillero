<?php
include_once ("menuDerecho.php");
    function getMenuIzquierdoFacultad()
	{

?>

<div id="indice" class="flyoutmenu" >
	<nav>
		<ul>
			<li class="mheader">
				<?php
				if (isset($_SESSION)) {
					echo "Facultad de " . $_SESSION['nomFacultad'];
				} else { {
						echo "Bienvenido";
					}
				}
				?>
			</li>

			<li>
				<a href="#"><span>Estudiante</span></a>
				<ul>
					<li>
						<a href="actualizarEstudiante.php">Actualizar</a>
					</li>

					<li>
						<a href="buscarEstudiante.php">Buscar</a>
					</li>

					<li class="lupper">
						<a href="registrarEstudiante.php">Registrar
<<<<<<< HEAD
                            </a>
=======
						<?php
						$_SESSION['seleccion'] = "ingenieria";
					?>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Eventos</span></a>
				<ul>
					<li>
						<a href="actualizarEvento.php">Actualizar</a>
>>>>>>> 37f0dfe48233bd592e79de81ddd91596885b4193
					</li>

					<li>
						<a href="asignarEvento.php">Asignar</a>
					</li>

					<li>
						<a href="listarEvento.php">Lista eventos</a>
					</li>

					<li class="lupper">
						<a href="registrarEvento.php">Registrar</a>
					</li>

				</ul>
			</li>

			<li>
				<a href="#"><span>Grupo de investigación</span></a>
				<ul>
					<li>
						<a href="actualizarGrupoInvestigacion.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="asigarGrupoInvestigacion.php">Asignar estudiante</a>
					</li>

					<li class="lupper">
						<a href="buscarGrupoInvestigacion.php">Buscar</a>
					</li>

					<li class="lupper">
						<a href="registrarGrupoInvestigacion.php">Registrar</a>
					</li>

				</ul>

			</li>

			<li class="last">
				<a href="#"><span>Espacios académicos</span></a>
				<ul>
					<li>
						<a href="actualizarEspacioAcademico.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="listarEspaciosAcademicos.php">Lista espacios académicos</a>
					</li>

					<li>
						<a href="registrarEspaciosAcademicos.php">Registrar</a>
					</li>
				</ul>
			</li>

			<li class="last">
				<a href="#"><span>Premios</span></a>
				<ul>
					<li>
						<a href="actualizarPremios.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="asigarPremios.php">Asignar estudiante </a>
					</li>

					<li class="lupper">
						<a href="listarPremios.php">Lista premios</a>
					</li>

					<li>
						<a href="registrarPremios.php">Registrar</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#"><span>Proyecto de investigación</span></a>
				<ul>
					<li>
						<a href="actualizarProyecto.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="asigarProyecto.php">Asignar estudiantes</a>
					</li>

					<li class="lupper">
						<a href="buscarProyecto.php">Buscar</a>
					</li>

					<li class="lupper">
						<a href="registrarProyecto.php">Registrar</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#"><span>Semillero en consolidación</span></a>
				<ul>
					<li>
						<a href="actualizarSemilleroConsolidacion.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="listarSemilleroConsolidacion.php">Lista proyectos consolidación</a>
					</li>

					<li class="lupper">
						<a href="registrarSemilleroConsolidacion.php">Registrar</a>
					</li>

				</ul>
			</li>

			<li class="last">
				<a href="#"><span>Semillero en ejecución</span></a>
				<ul>
					<li>
						<a href="actualizarSemilleroEjecucion.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="listarSemilleroEjecucion.php">Lista proyectos ejecución</a>
					</li>

					<li>
						<a href="registrarSemilleroEjecucion.php">Registrar</a>
					</li>
				</ul>
			</li>

			<li class="last">
				<a href="#"><span>Tutor</span></a>
				<ul>

					<li>
						<a href="actualizarTutor.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="asigarutor.php">Asignar proyecto de investigación</a>
					</li>

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
				Inicio
			</li>
			<li>
				<a href="#"><span>Administración de cuentas</span></a>
				<ul>
					<li class="lupper">
						<a href="enn.php" >En construcción</a>
					</li>
					<li>
						<a href="enn.php">En cons...</a>
					</li>
				</ul>
			</li>
			<li>
				<a  href="#"><span >Facultades</span></a>
				<ul>
					<li>
						<a href="inicioCienciasAdmin.php">Ciencias administrativas y económicas</a>
					</li>
					<li>
						<a href="inicioCienciasAgro.php">Ciencias agroindustriales</a>
					</li>
					<li>
						<a href="inicioCienciasBasicas.php">Ciencias básicas y tecnológicas</a>
					</li>
					<li>
						<a href="inicioCienciasSalud.php">Ciencias de la salud</a>
					</li>
					<li>
						<a href="inicioCienciasHumanas.php">Ciencias humanas y bellas artes</a>
					</li>
					<li>
						<a href="inicioCienciasEducacion.php">Educación</a>
					</li>
					<li class="lupper">
						<a href="inicioIngenieria.php">Ingenieria</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Reportes</span></a>
				<ul>
					<li class="lupper">
						<a href="enn.php" >En construcción</a>
					</li>
					<li>
						<a href="enn.php">En cons...</a>
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

<<<<<<< HEAD
<?php function getMenuIzquierdo() 
{
    if($_SESSION['idFacultad'] == 83)
    {
        getMenuIzquierdoVice();
    }
    else 
    {
        getMenuIzquierdoFacultad();
    }
=======
<?php
function getMenuIzquierdo() {
	if ($_SESSION['idFacultad'] == 83) {
		getMenuIzquierdoVice();
	} else {
		getMenuIzquierdoFacultad();
	}
>>>>>>> 37f0dfe48233bd592e79de81ddd91596885b4193
}
?>
