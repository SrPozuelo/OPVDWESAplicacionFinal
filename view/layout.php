<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tema 7-8 | Óscar Pozuelo Villamandos</title>
        <link rel="stylesheet" href="./webroot/css/fonts.css">
        <link rel="stylesheet" href="./webroot/css/all.min.css">
        <link rel="stylesheet" href="./webroot/css/estilos.css"> 
        <link rel="stylesheet" href="./webroot/css/estilosTabla.css">
        <link rel="stylesheet" href="./webroot/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">     
    </head>
    <body <?php if($_SESSION['PaginaEnCurso']=='wip'){echo 'style="background-color:#f5f5f5 !important;"';}?> >
        <header class="cabecera-principal">
            <div class="contenido-cabecera">
                <div class="identidad">
                    <a href="../index.html" style="text-decoration:none;">
                        <div class="logo-iniciales">ÓS</div>
                    </a>
                    <h1>Aplicación final | Óscar Pozuelo Villamandos</h1>
                </div>
                <div class="curso-badge" style="background-color:#1e5631; color:white;">
                    Aplicación final
                </div>
                <?php
                    switch($_SESSION['PaginaEnCurso']){
                        case 'inicioPublico':
                            ?>
                                <form action="" method="post" id="FormularioSesion">
                                    <?php
                                        switch($avInicioPublico['Idioma']){
                                            case 'es':
                                                ?>
                                                    <button type="submit" name="Idioma" value="es" id="Seleccionado"><img src="webroot/images/España.png" alt="España"></button>
                                                    <button type="submit" name="Idioma" value="pr"><img src="webroot/images/Portugal.png" alt="portugal"></button>
                                                <?php
                                            break;
                                            case 'pr':
                                                ?>
                                                    <button type="submit" name="Idioma" value="es"><img src="webroot/images/España.png" alt="España"></button>
                                                    <button type="submit" name="Idioma" value="pr" id="Seleccionado"><img src="webroot/images/Portugal.png" alt="Portugal"></button>
                                                <?php
                                            break;
                                        }
                                    ?>
                                    <button type="submit" name="iniciarSesion" id="Sesion"><span>INICIAR SESIÓN</span></button>
                                </form>
                            <?php 
                        break;
                        case 'detalles':
                        case 'error':
                        case 'wip':
                        case 'plantilla':
                        case 'departamento':
                        case 'rest':
                            ?>
                                <form action="" method="post" id="FormularioSesion">
                                    <button type="submit" name="Volver" id="Sesion"><span>VOLVER</span></button>
                                </form>
                            <?php
                        break;
                        case 'inicioPrivado':
                            ?>
                                <form action="" method="post" id="FormularioSesion">
                                    <button type="submit" name="cerrarSesion" id="Sesion"><span>CERRAR SESION</span></button>
                                </form>
                            <?php
                        break;
                    }
                ?>  
            </div>
        </header>
        <?php require_once $View[$_SESSION['PaginaEnCurso']];?>
        <footer class="pie-pagina">
            <div class="contenido-footer">
                <div class="texto-legal">
                    <p>2025-26 IES LOS SAUCES. ©Todos los derechos reservados.</p>
                    <p class="autor"><a href="https://oscarpozvil.ieslossauces.es" target="_blank">Óscar Pozuelo Villamandos.</a> Fecha de Actualización: 20-04-2026</p>
                </div>
                <div class="iconos-footer">
                    <a href="https://github.com/SrPozuelo/OPVDWESAplicacionFinal" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="../../OPVDWESProyectoDWES/indexProyectoDWES.html" title="Inicio"><i class="fa-solid fa-house"></i></a>
                </div>
            </div>
        </footer>
        <script src="./webroot/js/bootstrap.bundle.min.js"></script>
    </body>
</html>