<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
<<<<<<< HEAD
include_once ("../controlador/buscarEspacioAcademico.php");
=======
include_once ("../controlador/buscarEspaciosAcademicos.php");
>>>>>>> 066fb10c156c71414185a87b0ef80c17e067649d
getImports();
?>
<body onload="tunCalendario();">
	<div="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdo();
		?>
		<div>
			<section id="espacioAcademico">
				<article>
					<header>
						<h6>Lista espacios académicos</h6>
					</header>
					<div id="formulario">
							<center>
								<div id="resultado" class="datagrid">
								    
									<table>
										<thead>
											<tr>
												<th>Código</th><th>Nombre</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                            
                                            echo $combobit;
											?>
										</tbody>
									</table>
								</div>

							</center>						  
					</div>
				</article>
			</section>
		</div>

		<div>

		</div>

		</div>
</body>
</html>
