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
    </div>
</header>
<main id="contenedor">  
    <h2 id="titulo">Aplicación final</h2>
    <div id="carouselExampleDark" class="carousel carousel-dark slide z-2" data-bs-ride="carousel">
            <div class="carousel-indicators z-2">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="bg-dark active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="bg-dark" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" class="bg-dark" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" class="bg-dark" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" class="bg-dark" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" class="bg-dark" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" class="bg-dark" aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner">
                
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="./webroot/images/230129DiagramaDeCasosDeUso.PNG" class="d-block mx-auto rounded" style="width:22.95dvw !important;">
                    <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                        <h5 class="text-black bg-transparent">DIAGRAMAS DE CASO DE USO</h5>
                        <p class="text-black bg-transparent">El diagrama de caso de uso de esta aplicación.</p>
                        <button type="button" class="btn btn-primary">AMPLIAR</button>
                    </div>
                </div>
                
                
                <div class="carousel-item" data-bs-interval="200000">
                    <img src="./webroot/images/220111UsoDeLaSessionParaLaAplicación.PNG" class="d-block w-25 mx-auto rounded">
                    <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                        <h5 class="text-black bg-transparent">USO DE LA SESIÓN</h5>
                        <p class="text-black bg-transparent">Fichero con el uso de la sesión en esta aplicación.</p>
                        <button type="button" class="btn btn-primary">AMPLIAR</button>
                    </div>
                </div>


                <div class="carousel-item" data-bs-interval="5000">
                    <img src="./webroot/images/220504SecuenciaDesarrolloCRUDcompleto.PNG" class="d-block mx-auto rounded" style="width:22.6dvw !important;">
                    <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                        <h5 class="text-black bg-transparent">DESARROLLO DEL CRUD</h5>
                        <p class="text-black bg-transparent">Secuencia del desarrollo del CRUD completo.</p>
                        <button type="button" class="btn btn-primary">AMPLIAR</button>
                    </div>
                </div>


                <div class="carousel-item" data-bs-interval="5000">
                    <video src="webroot/video/home_banner_4_dolphin.mp4" class="d-block w-100 object-fit-contain" alt="BYD Dolphin" autoplay loop preload="metadata"></video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bg-transparent">Cuarto slide label</h5>
                        <p class="text-white bg-transparent">Some representative placeholder content for the third slide.</p>
                    </div>
                </div>


                <div class="carousel-item" data-bs-interval="5000">
                    <video src="webroot/video/home_banner_5_seal_dmi.mp4" class="d-block w-100 object-fit-contain" alt="BYD Seal DMI" autoplay loop preload="metadata"></video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bg-transparent">Quinto slide label</h5>
                        <p class="text-white bg-transparent">Some representative placeholder content for the third slide.</p>
                    </div>
                </div>


                <div class="carousel-item" data-bs-interval="5000">
                    <video src="webroot/video/home_banner_6_seal.mp4" class="d-block w-100 object-fit-contain" alt="BYD Seal" autoplay loop preload="metadata"></video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bg-transparent">Sexto slide label</h5>
                        <p class="text-white bg-transparent">Some representative placeholder content for the third slide.</p>
                    </div>
                </div>


                <div class="carousel-item" data-bs-interval="2000">
                    <img src="webroot/images/home_banner_7_atto2.webp" class="d-block w-100" alt="BYD Atto2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bg-transparent">Septimo slide label</h5>
                        <p class="text-white bg-transparent">Some representative placeholder content for the third slide.</p>
                    </div>
                </div>


                <div class="carousel-item">
                    <video src="webroot/video/home_banner_8_sealion.mp4" class="d-block w-100 object-fit-contain" alt="BYD Seal Lion" autoplay loop preload="metadata"></video>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bg-transparent">Octavo slide label</h5>
                        <p class="text-white bg-transparent">Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-black rounded" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-black rounded" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</main>