<main id="contenedor">  
    <h2 id="titulo">INICIO PRIVADO</h2>
    <form action="" method="post" id="Detalles">
        <button name="Plantilla" id="Boton"><span>PLANTILLA</span></button>
        <button name="Detalles" id="Boton"><span>DETALLES</span></button>
        <button name="Error" id="Boton"><span>ERROR</span></button>
        <button name="Departamentos" id="Boton"><span>DEPARTAMENTOS</span></button>
        <button name="Rest" id="Boton"><span>REST</span></button>
        <button name="WIP" id="Boton"><span>WIP</span></button>
    </form>
    <?php
        switch($avInicioPrivado['idioma']){
            case "es":
                echo("<h3>Bienvenido ".$avInicioPrivado['DescUsuario'].".</h3>");
                if($avInicioPrivado['NumAccesos']==1){
                    //Esto se muestra si es la primera vez que el usuario inicia sesión en la aplicación.
                    echo('<h3>Esta es la primera vez que se conecta.</h3>');
                }
                else{
                    //Esto se muestra si no es la primera vez que el usuario inicia sesión en la aplicación.
                    setlocale(LC_TIME, 'es_ES.utf8','es_ES','spanish');
                    echo("<h3>Esta es la ".$avInicioPrivado['NumAccesos']."º vez que se conecta.</h3>");
                    echo("<h3>Se conecto por ultima vez el ".strftime("%d de %B del %Y a las %H:%M:%S",($avInicioPrivado['FechaHoraUltimaConexionAnterior'])->getTimestamp()).".</h3>");
                }
            break;
            case "pr";
                echo("<h3>Bem-vindo ".$avInicioPrivado['DescUsuario'].".</h3>");
                if($avInicioPrivado['NumAccesos']==1){
                    //Esto se muestra si es la primera vez que el usuario inicia sesión en la aplicación.
                    echo('<h3>Esta é a primeira vez que se liga.</h3>');
                }
                else{
                    //Esto se muestra si no es la primera vez que el usuario inicia sesión en la aplicación.
                    setlocale(LC_TIME, 'es_ES.utf8','es_ES','spanish');
                    echo("<h3>Este é o ".$avInicioPrivado['NumAccesos']."º assim que ligar.</h3>");
                    echo("<h3>Ele fez login pela última vez em ".strftime("%d de %B do %Y para o %H:%M:%S",($avInicioPrivado['FechaHoraUltimaConexionAnterior'])->getTimestamp()).".</h3>");
                }
            break;
        }
        //Se muetra el mensaje de bienvenida.
    ?>
</main>