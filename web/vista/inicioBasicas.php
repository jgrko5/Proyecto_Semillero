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
        getMenuIzquierdoFacultad();

        getMenuDerecho();
        $_SESSION['seleccion'] = 22;
        ?>
        <div id="contenido">
            <section id="premio">
                <article>
                    <center>
                        </br>
                        </br>
                        ...... En construcción
                        </br>
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

