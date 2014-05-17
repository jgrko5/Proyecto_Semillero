<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>prueba</title>
		<meta name="description" content="">
		<meta name="author" content="daniel">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
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

		<style type="text/css">
			
		</style>
	</head>

	<body onload="tunCalendario();">
		<div>
			<header>
				<h1>prueba</h1>
			</header>
			<nav id="calendar">
				<p>
					<a href="/">Home</a>
				</p>
				<p>
					<a href="/contact">Contact</a>
				</p>
			</nav>

			<div id="miCalendario">
			
			</div>

			<footer>
				<p>
					&copy; Copyright  by daniel
				</p>
			</footer>
		</div>
	</body>
</html>
