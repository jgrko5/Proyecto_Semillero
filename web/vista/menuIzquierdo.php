<?php
include_once ("menuDerecho.php");
    function getMenuIzquierdoFacultad()
	{

?>

<div id="indice" class="flyoutmenu" >
	<nav>
		<ul>
			<li class="mheader">
				<a href="inicio.php">
				<?php
                if (isset($_SESSION)) {
                    echo "Facultad de " . $_SESSION['nomFacultad'];
                } else {

                    echo "Bienvenido";

                }
				?></a>
			</li>

			<li>
				<a href="#"><span>Estudiante</span></a>
				<ul>
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li>
					<a href="actualizarEstudiante.php">Actualizar</a>
					</li>
					<?php
                    }
					?>
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
					<a href="actualizarEvento.php">Actualizar</a>
					</li>

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
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li>
						<a href="actualizarGrupoInvestigacion.php">Actualizar</a>
					</li>
					<li class="lupper">
					<a href="asigarGrupoInvestigacion.php">Asignar estudiante</a>
					</li>
					<?php
                    }
					?>
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
					<li>
						<a href="actualizarEspacioAcademico.php">Actualizar</a>
					</li>
				
	
					<li>
					<a href="registrarEspaciosAcademicos.php">Registrar</a>
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
					<li>
						<a href="actualizarPremios.php">Actualizar</a>
					</li>

					<li class="lupper">
					<a href="asigarPremios.php">Asignar estudiante </a>
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
					<a href="registrarPremios.php">Registrar</a>
					</li>
					<?php
                    }
					?>
				</ul>
			</li>

			<li>
				<a href="#"><span>Proyecto de investigación</span></a>
				<ul>
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li>
						<a href="actualizarProyecto.php">Actualizar</a>
					</li>

					<?php
                    }
					?>
					<li class="lupper">
						<a href="asignarProyectoEstudiante.php">Asignar estudiantes</a>
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
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li>
						<a href="actualizarSemilleroConsolidacion.php">Actualizar</a>
					</li>
					<?php
                    }
					?>

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
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li>
					<a href="actualizarSemilleroEjecucion.php">Actualizar</a>
					</li>
					<?php
                    }
					?>

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
					<?php
if($_SESSION['idFacultad']==83)
{

					?>
					<li>
					<a href="actualizarTutor.php">Actualizar</a>
					</li>
					<?php
                    }
					?>

					<li class="lupper">
						<a href="asignartutor.php">Asignar proyecto de investigación</a>
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
					<?php
                    if (true) {

                    }
					?>
					<li class="lupper">
						<a href="actualizarTutor.php">Actualizar</a>
					</li>

					<li class="lupper">
						<a href="enn.php" >En construcción</a>
					</li>

					<li>
						<a href="asignarTutor.php">Asignar</a>
					</li>
					<li>
					<a href="registrarTutor.php">Registrar</a>
					<a href="enn.php">En cons...</a>
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
    if ($_SESSION['idFacultad'] == 83) {
        getMenuIzquierdoVice();
    } else {
        getMenuIzquierdoFacultad();
    }
    getMenuDerecho();
}
?>
