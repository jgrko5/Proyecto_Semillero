<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaEstudiante.php");
include_once ("../controlador/buscarEstudiante.php");
include_once ("../controlador/paginacion.php");

getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
		
        getHeaderStart();
        getPanelSesion();
        getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="estudiante">
				<article>
					<header>
						</br><h6>Buscar estudiante</h6>
					</header>
					<div id="formulario">
						<form  method="post" >
							<center>
								<div class="etiqueta">
									<label>Ingrese el número de identificación:</label>
								</div></br>

								<div class="componente">
									<input class="textfield" type="text" name="documento" required="required" placeholder="número de identificación" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar" onclick="showService(documento.value,'buscarEstudiante');location.href='#openModal'"/>
								</div></br>
								<header>
									<h1 style="color: #000000">Estudiantes</h1></br>
								</header>

								<div id="resultado" class="datagrid">

									<?php
									
									foreach ($filas as $fila)
	                                    echo $combobit;
									?>
								</div>
								</br>
							</center>
							<input id="page_num" name="page_num" type="hidden" value="<?=$page_num?>"/> 
							Mostrando 
							<input id="page_size" name="page_size" type="number" min="1" max="<?=$total?>" value="<?=$page_size?>" autofocus="autofocus" /> 
							entradas de <?=$total?>
							<input type="submit" value="Cambiar" />
						</form>
					</div>
				</article>
			</section>
		</div>

		<?php
        echo $emergenteEst;
		?>
		<?php
        getFooter();
		?>
	</div>
</body>
</html>
