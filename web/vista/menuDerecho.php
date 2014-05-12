<?php
    function getMenuDerecho()
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
		</li>
		<li>
			<a href="#"><span>Grupo de investigación</span></a>
		</li>
		<li>
			<a href="#"><span>Materia</span></a>
		</li>
		<li>
			<a href="#"><span>Premio</span></a>
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
			<a href="#"><span>Proyecto de investigación</span></a>
		</li>
		<li class="last">
			<a href="#"><span>Tutor</span></a>
		</li>
		
	</ul>
</nav>
</div>

<?php
}
?>