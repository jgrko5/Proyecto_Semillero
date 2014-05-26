<?php
include_once ("imports.php");
include_once ("header.php");
include_once ("footer.php");
session_start();
getImports();
?>
<body onload="tunCalendario();">
    <div id="main" class="wrapper">
        <?php getheaderstart();
        getPanelSesion();
        getMenuIzquierdo();
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
