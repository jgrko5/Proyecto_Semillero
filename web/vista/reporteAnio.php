<?php
include ("imports.php");
include ("header.php");
include ("footer.php");
session_start();
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
                        </br><h6>Reporte general por año</h6>
                    </header>
                
                    <div id="formulario">
                        <form action="../controlador/reporte.php" method="post">
                        <div class="etiqueta">
                            <label>Ingrese el año a consulta:</label>
                        </div></br>

                        <div class="componente">
                            <input class="textField" type="text" name="anio" required="required" placeholder="Año a consultar" value="" />
                        </div>
</br></br>
                        <div align="center">
                            <input class="button" type="submit" value="Buscar"/>
                        </div></br></br>
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
