<?php
include_once ("menuDerecho.php");
    function getMenuIzquierdoFacultad()
	{

?>

<div id="indice" class="flyoutmenu" >
	<nav>
		<ul>
			<li class="mheader" style="color: #000000">

				<?php
if ($_SESSION['idFacultad'] == 83) {
?>     <a href="inicio.php">
				<?php
                echo "Inicio";
				?>
				</a>
				<?php
                } else if (isset($_SESSION)) {
                echo "Facultad de " . $_SESSION['nomFacultad'];
                } else {

                echo "Bienvenido";

                }
				?>
			</li>

			<li>
				<a href="#"><span>Estudiante</span></a>
				<ul>

					<li>
						<a href="buscarEstudiante.php">Buscar</a>
					</li>

					<li class="lupper">
						<a href="registrarEstudiante.php">Registrar </a>
					</li>
				</ul>
			</li>
			<li>
			<a href="#"><span>Eventos</span></a>
			<ul>
			<?php
if($_SESSION['idFacultad']==83)
{

			?>

			<li>
			<a href="asignarEvento.php">Asignar</a>
			</li>
			<?php
            }
			?>
			<li>
			<a href="buscarEvento.php">Lista eventos</a>
			</li>
			<?php
if($_SESSION['idFacultad']==83)
{

			?>
			<li class="lupper">
			<a href="registrarEvento.php">Registrar</a>
			</li>
			<?php
            }
			?>
			</ul>
			</li>

			<li>
			<a href="#"><span>Grupo de investigación</span></a>
			<ul>
			<li class="lupper">
			<a href="buscarGrupoInvestigacion.php">Buscar</a>
			</li>
			<?php
if($_SESSION['idFacultad']==83)
{

			?>

			<li class="lupper">
			<a href="registrarGrupoInvestigacion.php">Registrar</a>
			</li>
			<?php
            }
			?>
			</ul>

			</li>
			<?php
if($_SESSION['idFacultad']==83)
{

			?>
			<li class="last">
				<a href="#"><span>Espacios académicos</span></a>
				<ul>
					<li class="lupper">
						<a href="buscarEspacioAcademico.php">Buscar</a>
					</li>

					<li>
						<a href="registrarMateria.php">Registrar</a>
					</li>

				</ul>
			</li>
			<?php
            }
			?>
			<li class="last">
				<a href="#"><span>Premios</span></a>
				<ul>
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li class="lupper">
						<a href="asignarPremio.php">Asignar premio a estudiante</a>
					</li>
					<?php
                    }
					?>
					<li class="lupper">
						<a href="buscarPremios.php">Lista premios</a>
					</li>
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li>
					<a href="registrarPremio.php">Registrar</a>
					</li>
					<?php
                    }
					?>
				</ul>
			</li>

			<li>
<<<<<<< HEAD
			<a href="#"><span>Proyecto de investigación</span></a>
			<ul>
			<li class="lupper">
			<a href="asignarProyectoEstudiante.php">Asignar estudiantes</a>
			</li>
=======
				<a href="#"><span>Proyecto de investigación</span></a>
				<ul>
					<li class="lupper">
						<a href="asignarProyectoEstudiante.php">Asignar estudiante</a>
					</li>
>>>>>>> origin/master

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

			<li class="lupper">
			<a href="buscarProyectosConsolidacion.php">Lista proyectos consolidación</a>
			</li>

			</ul>
			</li>

			<li class="last">
				<a href="#"><span>Semillero en ejecución</span></a>
				<ul>

					<li class="lupper">
						<a href="buscarProyectosEjecucion.php">Lista proyectos ejecución</a>
					</li>

					<li>
						<a href="registrarSemilleroEjecucion.php">Registrar</a>
					</li>
				</ul>
			</li>

			<li class="last">
				<a href="#"><span>Tutor</span></a>
				<ul>

					<li class="lupper">
						<a href="asignartutorproyecto.php">Asignar proyecto de investigación</a>
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
						<a href="gestionUsuarios.php" >Gestión de contraseñas</a>
					</li>
				</ul>
			</li>
			<li>
				<a  href="#"><span >Facultades</span></a>
				<ul>
					<li class="lupper">
						<a href="inicioEconomicas.php" >Ciencias administrativas y económicas</a>
					</li>
					<li>
						<a href="inicioAgroindustria.php">Ciencias agroindustriales</a>
					</li>
					<li>
						<a href="inicioBasicas.php">Ciencias básicas y tecnológicas</a>
					</li>
					<li>
						<a href="inicioSalud.php">Ciencias de la salud</a>
					</li>
					<li>
						<a href="inicioBellasArtes.php">Ciencias humanas y bellas artes</a>
					</li>
					<li>
						<a href="inicioEducacion.php">Educación</a>
					</li>
					<li >
						<a href="inicioIngenieria.php">Ingeniería</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Reportes</span></a>
				<ul>
					<?php
                    if (true) {

                    }
					?>
					<li >
						<a href="reporteAnio.php" >Reporte por año</a>
					</li>

				</ul>
			</li>
		</ul>
	</nav>
</div>

<?php
}
?>

<?php
function getMenuIzquierdo() {
    getMenuIzquierdoFacultad();
    getMenuDerecho();
}
?>
