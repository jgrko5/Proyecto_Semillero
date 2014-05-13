<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
getImports();
?>
<body>
	<div>
		<header>
			</br><h1>resultadoEstudiantes</h1>
		</header>
		<nav class="nav">
			<p>
				<a class="a" href="/">Home</a>
			</p>
			<p>
				<a class="a" href="/contact">Contact</a>
			</p>
		</nav>

		<div>
			<div id="tabla">
				<table>
					<tr>
						<td>T.I.</td>
						<td>C.C.</td>
						<td class="td">Nombre</td>
						<td class="td">Acciones</td>
					</tr>
				</table>

			</div>
		</div>

		<?php
		getFooter();
		?>
	</div>
</body>
</html>
