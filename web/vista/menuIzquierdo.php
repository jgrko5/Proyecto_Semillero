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
					<li class="lupper">
						<a href="registrarEstudiante.php">Registrar
                            </a>
					</li>
					<li>
						<a href="buscarEstudiante.php">Buscar</a>
					</li>

				</ul>
			</li>

			<li>
				<a href="#"><span>Grupo de investigación</span></a>
				<ul>
					<li class="lupper">
						<a href="buscarGrupoInvestigacion.php">Buscar</a>
					</li>
				</ul>

			</li>
			<li>
				<a href="#"><span>Proyecto de investigación</span></a>
				<ul>
					<li class="lupper">
						<a href="buscarProyecto.php">Buscar</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Semillero en consolidación</span></a>
				<ul>
					<li class="lupper">
						<a href="registrarSemilleroConsolidacion.php">Registrar</a>
					</li>

				</ul>
			</li>

			<li class="last">
				<a href="#"><span>Semillero en ejecución</span></a>
				<ul>

					<li>
						<a href="registrarSemilleroEjecucion.php">Registrar</a>
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
                Nombre facultad
            </li>

            <li>
                <a  href="#"><span >Estudiante</span></a>
                <ul>
                    <li class="lupper">
                        <a href="buscarEstudiante.php">Buscar</a>
                    </li>
                    <li>
                        <a href="actualizarEstudiante.php">Modificar</a>
                    </li>
                    <li>
                        <a href="registrarEstudiante.php">Registrar</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><span>Evento</span></a>
                <ul>
                    <li class="lupper">
                        <a href="registrarEvento.php" >Registrar</a>
                    </li>
                    <li>
                        <a href="asignarEvento.php">Asignar</a>
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
                    <li>
                        <a href="buscarProyecto.php">Registrar</a>
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
                    <li>
                        <a href="actualizarTutor.php">Registrar</a>
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
}
?>
