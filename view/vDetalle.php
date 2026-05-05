<header class="cabecera-principal">
    <div class="contenido-cabecera">
        <div class="identidad">
            <a href="../index.html" style="text-decoration:none;">
                <div class="logo-iniciales">ÓS</div>
            </a>
            <h1>Óscar Pozuelo Villamandos</h1>
        </div>
        <div class="curso-badge" style="background-color: #777BB4; color: white;">
            Login Logoff
        </div>
        <form action="" method="post" id="FormularioSesion">
            <button name="Volver" id="Sesion"><span>VOLVER</span></button>
        </form>
    </div>
</header>
<main id="contenedor">  
    <h2 id="titulo">DETALLES:</h2>
    <?php
        echo('<h4>Contenido de la variable $_SESSION:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Session'])){
                    foreach($avDetalle['Session'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_SESSION['.$sVariable.']</td>');
                            echo('<td><pre id="detallePre">'.print_r($sResultado,true).'</pre></td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_SESSION está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_COOKIE:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Cookie'])){
                    foreach($avDetalle['Cookie'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_COOKIE['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_COOKIE está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_SERVER:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Server'])){
                    foreach($avDetalle['Server'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_SERVER['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_SERVER está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_REQUEST:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Request'])){
                    foreach($avDetalle['Request'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_REQUEST['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_REQUEST está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_GET:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Get'])){
                    foreach($avDetalle['Get'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_GET['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_GET está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_POST:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Post'])){
                    foreach($avDetalle['Post'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_POST['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_POST está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_FILES:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Files'])){
                    foreach($avDetalle['Files'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_FILES['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_FILES está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_ENV:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($avDetalle['Env'])){
                    foreach($avDetalle['Env'] AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_ENV['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_ENV está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <div><?php echo phpinfo()?></div>
</main>