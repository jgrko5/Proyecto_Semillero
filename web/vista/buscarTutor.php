<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaTutor.php");
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
			<section id="tutor">
				<article>
					<header>
						</br><h6>Buscar tutor</h6>
					</header>
					<div id="formulario">
						<form action="../controlador/buscarTutor.php" method="post">
								<div class="etiqueta">
									<label>Ingrese el número de identificación</label>
								</div></br>

								<div class="componente">
									<input class="textField" type="text" name="tipo" required="required" placeholder="Número de identificación" />
								</div>

								<div align="center">
									<input class="button" type="submit" value="Buscar"/>
								</div></br>
								<header>
									<h6>Tutores</h6></br>
								</header>
								<div id="resultado" class="datagrid">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Documento</th><th>Nombre</th><th>Apellido</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            echo $combobit;
                                            ?>
                                        </tbody>
                                    </table>
                                </div></br>
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
