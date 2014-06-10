<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
require ("../controlador/buscarGrupoInvestigacion.php");
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php
		getHeaderStart();
		getPanelSesion();
		getMenuIzquierdoFacultad();
        getMenuDerecho();
		?>
		<div id="contenido">
			<section id="grupo">
				<article>
					<header>
						</br><h6>Actualizar grupo de investigación</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/actualizarGrupoInvestigacion.php" method="post">
							<div class="etiqueta">
                                <label>Código:</label>
                            </div></br>

                            <div class="componente" >
                                <input class="textField" type="text" name="codigo" required="required" placeholder="Ingrese el codigo" readonly="true" value="<?php echo $_SESSION['actualCodG'];?>"  />
                            </div></br>
                            
                            <div class="etiqueta">
                                <label>Nombre:</label>
                            </div></br>

                            <div class="componente" >
                                <input class="textField" type="text" name="nombre" required="required" placeholder="Ingrese el nombre" value="<?php echo $_SESSION['actualNombreG'];?>"/>
                            </div></br>

							<div class="etiqueta">
								<label>Clasificación:</label>
							</div></br>

							<div class="componente">
								<input class="textField" type="text" name="clasificacion" required="required" placeholder="Ingrese la clasificación" value="<?php echo $_SESSION['actualClasG']; ?>"/>
							</div></br>
                           
							<div class="etiqueta">
								<label>Fecha conformación:</label>
							</div></br>

							<div class="componente">
								<input  type="date" class="textField" name="fecha" value="<?php echo date('Y-m-d',strtotime($_SESSION['actualFeG'])); ?>"/>
							</div></br>

							</br>

							<div align="center">
								<input class="button" type="submit" value="Actualizar" />
							</div>
							</br>
						</form>
					</div>
				</article>
			</section>
		</div>
		<?php
		getFooter();
		?>
	</div>
</body>
</html>
