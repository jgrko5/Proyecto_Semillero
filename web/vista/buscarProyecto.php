<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
include_once ('../controlador/listadoProyectosPaginacion.php');
include_once ('../controlador/buscarProyecto.php');
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
        getheaderstart();
        getPanelSesion();
        getMenuIzquierdo();
		?>
		<div id="contenido">
			<section id="proyecto">
				<article>
					<header>
						</br><h6>Buscar proyecto de investigación</h6>
					</header>
					<div id="formulario">
						<form  method="post">
							<center>
								<div class="etiqueta">
									<label>Ingrese el código</label>
								</div>

								<div class="componente">
									<input class="textfield" type="text" name="codigoP" required="required" placeholder="Código" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar" onclick="showService(codigoP.value,'buscarProyecto');location.href='#openModal'"/>
								</div></br>
							</center>
						</form>
						<form  method="get">
							<center>
								<header>
									<h1>Proyectos de investigación</h1></br>
								</header>
								<div id="resultado" class="datagrid">

									<?php
                                    echo $tabla;
                                    echo $navegador;
									?>
								</div>
								</br>
							</center>
						</form>
					</div>
				</article>
			</section>
		</div>
		<?php
        echo $emergentePro;
        getFooter();
		?>
	</div>
</body>
</html>
