<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
session_start();
getImports();
?>
<body onload="tunCalendario();">
	<div id="main" class="wrapper">
		<?php getheaderstart();
        getPanelSesion();
        getMenuIzquierdoVice();
        getMenuDerecho();
		?>
		<div id="contenido">
			<section id="premio">
				<article>
					<center>
					</br>
						<img style="width: 80%;position: relative; z-index: 2;margin-bottom: 0; border-radius: 26px" src="../../web/imagenes/udelquindio.jpg" >
					</br>
					</center>
				</article>
			</section>
		</div>
		<footer>
			<?php
            getFooter();
			?>
		</footer>
	</div>
</body>
</html>
