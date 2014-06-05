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
					</br>
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
