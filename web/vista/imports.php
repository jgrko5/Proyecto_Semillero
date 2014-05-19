<?php
    function getImports()
	{

?>

<html lang="es">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
 
		<link href="../../css/style.css" rel="stylesheet">
		<link href="../../css/panelSuperior.css" rel="stylesheet">
		<link href="../../css/panelIzquierdo.css" rel="stylesheet">
		<link href="../../css/emergente.css" rel="stylesheet">
		<link href="../../css/calendario.css" rel="stylesheet">
		<script>
			!window.jQuery && document.write(unescape('%3Cscript src=”jquery-1.7.1.min.js”%3E%3C/script%3E'))
		</script>
		<script type="text/javascript">
			/*****************************************************************************
			 Calendario. Script creado por Tunait! (8/8/2004) Versión del 28-Ene.-07
			 Si quieres usar este script en tu sitio eres libre de hacerlo con la condición de que permanezcan intactas estas líneas, osea, los créditos.
			 Script de libre uso bajo la condición de mantener intactos los créditos de autor.
			 No permitida su distribución sin previa autorización
			 Ver condiciones de uso en http://javascript.tunait.com/
			 tunait@yahoo.com
			 ******************************************************************************/
			var idContenedor = "miCalendario"

			var hoy = new Date()
			var mes = hoy.getMonth()
			var dia = 1
			var anio = hoy.getFullYear()
			var diasSemana = new Array('L', 'M', 'M', 'J', 'V', 'S', 'D')
			var meses = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
			var tunIex = navigator.appName == "Microsoft Internet Explorer" ? true : false;
			if (tunIex && navigator.userAgent.indexOf('Opera') >= 0) {
				tunIex = false
			}
			tunOp = navigator.userAgent.indexOf('Opera') >= 0 ? true : false;
			function tunCalendario() {
				dia2 = dia
				tab = document.createElement('table')
				tab.id = 'calendario'
				document.getElementById(idContenedor).appendChild(tab)
				tcabeza = document.createElement('thead')
				tab.appendChild(tcabeza)
				fi2 = document.createElement('tr')
				fi2b = document.createElement('th')
				fi2b.colSpan = 7
				fi2.id = 'mesCalendario'
				fi2b.appendChild(document.createTextNode(meses[mes] + "  -  " + anio))
				fi2.appendChild(fi2b)
				tcabeza.appendChild(fi2)
				fi = document.createElement('tr')
				tcabeza.appendChild(fi)
				for ( m = 0; m < 7; m++) {
					ce = document.createElement('th')
					ce.appendChild(document.createTextNode(diasSemana[m]))
					fi.appendChild(ce)
				}
				var escribe = false
				var escribe2 = true
				fecha = new Date(anio, mes, dia)
				var d = fecha.getDay() - 1//dia semana
				if (d < 0) {
					d = 6
				}
				tcuerpo = document.createElement('tbody')
				tab.appendChild(tcuerpo)
				while (escribe2) {
					fi = document.createElement('tr')
					co = 0
					for ( t = 0; t < 7; t++) {
						ce = document.createElement('td')
						if (escribe && escribe2) {
							fecha2 = new Date(anio, mes, dia)

							if (fecha2.getMonth() != mes) {
								escribe2 = false;
							} else {
								ce.appendChild(document.createTextNode(dia));
								dia++;
								co++
							}
						}
						if (d == t && !escribe) {
							ce.appendChild(document.createTextNode(dia))
							dia++;
							co++
							escribe = true
						}
						fi.appendChild(ce)
						if (hoy.getDate() + 1 == dia && mes == hoy.getMonth() && anio == hoy.getFullYear()) {
							ce.className = "Hoy"
						}
					}

					if (co > 0) {
						tcuerpo.appendChild(fi)
					}

				}
				dia = dia2
			}

		</script>
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- Scala Sitio Web-->
		<meta name="viewport" content="width=device-width,initial-scale=1"/>

		<!-- Palabras clave sitio web-->
		<meta name="keywords" content="universidad, quindio, semilleros, gestion"/>
		<!-- Descripcion sitio web-->
		<meta name="descripcion" content="Sistema de gestion de semilleros de investigacion"/>

		<title>Gestion de semilleros de investigacion</title>
	</head>
	<?php
	}

	function getImportsAdmin()
	{
	?>

<html lang="es">
<head>
<meta charset="utf-8">

<link href="../../css/style.css" rel="stylesheet">

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Scala Sitio Web-->
<meta name="viewport" content="width=device-width,initial-scale=1"/>

<!-- Palabras clave sitio web-->
<meta name="keywords" content="elite, publicidad, elite publicidad, elite publicidad armenia, calcomanias, avisos, señalizacion vial, pendones, impresion digital, vinilos, polarizados, decoracion vehiculos, quindio, armenia, colombia, suramerica"/>

<!-- Descripcion sitio web-->
<meta name="descripcion" content="Somos una institución prestadora de servicios publicitarios comprometida con la promoción de las empresas del eje cafetero en todas sus etapas"/>

<!-- Autores Diseño Web.-->
<link rel="author" href="../../humans.txt" />

<!-- Editor de texto-->
<script src="../../libs/ckeditor/ckeditor.js"></script>

<!-- jQuery library (1.9.1) -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- jQuery library (served from Google) -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="../../favicon.ico">
<link rel="apple-touch-icon" href="../../favicon.png">

<!-- Dropzonejs file - css -->
<link href="../../css/dropzone.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../../js/dropzone.min.js"></script>

<!-- Menu pegajoso -->
<script>
	$(document).ready(function() {
		posicionarMenu();

		$(window).scroll(function() {
			posicionarMenu();
		});

		function posicionarMenu() {
			var altura_del_logo = $('#contenedorHeader').outerHeight(true);

			var altura_del_menu = $('nav').outerHeight(true);

			if (($(window).scrollTop() >= (altura_del_logo + 15))) {
				$('nav').addClass('fixed');
				$('#main').css('margin-top', (altura_del_menu) + 'px');
			} else {
				$('nav').removeClass('fixed');
				$('#main').css('margin-top', '0');
			}
		}

	});

</script>

<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] ||
		function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o), m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-47449603-2', 'elitepublicidad.com.co');
	ga('send', 'pageview');

</script>

<title>Elite Publicidad Armenia</title>
</head>
<?php
}
?>