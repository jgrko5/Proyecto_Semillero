<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
include_once ("../controlador/listaGruposInvestigacion.php");
include_once ("../controlador/listaProyecto.php");
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
            <section id="consolidacion">
                <article>
                    <header>
                        </br><h6>Registrar semillero en consolidación</h6>
                    </header>
                    <div id="formulario">
                        <form action="../controlador/registrarSemilleroConsolidacion.php" method="post">

                            <div class="etiqueta">
                                <label >Grupo de investigación:</label>
                            </div></br>

                            <div class="componente">
                                <input class="textField" type="text" name="grupo" placeholder="grupo de investigación"/>
                            </div>
                            </br>

                            <div class="etiqueta">
                                <label>Proyecto de investigación:</label>
                            </div></br>

                            <div class="componente">
                                <select class="select" title="Proyecto de investigación">
                                    <input class="textField" type="text" name="proyecto" placeholder="proyecto de investigación"/>
                                </select>
                            </div></br>

                            <div class="etiqueta">
                                <label>Año:</label>
                            </div></br>

                            <div class="componente">
                                <input class="textField" type="text" name="año" placeholder="Año"/>
                            </div></br>

                            <div class="etiqueta">
                                <label>Período:</label>
                            </div></br>

                            <div class="componente">
                                <input class="textField" type="text" name="periodo" placeholder="Período"/>
                            </div></br>

                            <div class="etiqueta">
                                <label>Nota:</label>
                            </div></br>

                            <div class="componente">
                                <input class="textField" type="text" name="nota" placeholder="Nota"/>
                            </div></br>

                            <div class="etiqueta">
                                <label>Homologación:</label>
                            </div></br>

                            <div class="componente">
                                <input type="checkbox" id="homologacion" value="3" onChange="total()" name="valido" />
                            </div></br></br>

                            <div align="center">
                                <input class="button" type="submit" value="Registrar" />
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
