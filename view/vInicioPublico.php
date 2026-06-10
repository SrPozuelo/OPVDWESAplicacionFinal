<?php $iTiempo=2000 ?>
<main id="contenedor">  
    <h2 id="titulo">Aplicación final</h2>
    <div id="carouselExampleDark" class="carousel carousel-dark slide z-2" data-bs-ride="carousel" style="margin-top:10dvh; overflow:hidden !important;">
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

            <div class="carousel-item w-100 active" data-bs-interval="<?php echo $iTiempo;?>" style="height:655px;">
                <img src="./webroot/images/230129DiagramaDeCasosDeUso.PNG" class="d-block mx-auto rounded w-100" alt="Diagramas de caso de uso." style="width:22.95dvw">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">DIAGRAMAS DE CASO DE USO</h5>
                    <p class="text-black bg-transparent">El diagrama de caso de uso de esta aplicación.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="230129DiagramaDeCasosDeUso.pdf">AMPLIAR</button>
                    </form>
                </div>
            </div>


            <div class="carousel-item w-100" data-bs-interval="<?php echo $iTiempo;?>" style="height:655px;">
                <img src="./webroot/images/090626UsoDeLaSessionParaLaAplicación.PNG" class="d-block mx-auto rounded w-100" alt="Uso de la sesión." style="width:73.52dvw;">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">USO DE LA SESIÓN</h5>
                    <p class="text-black bg-transparent">Fichero con el uso de la sesión en esta aplicación.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="100626UsoDeLaSessionParaLaAplicación.pdf">AMPLIAR</button>
                    </form>
                </div>
            </div>


            <div class="carousel-item w-100" data-bs-interval="<?php echo $iTiempo;?>" style="height:655px;">
                <img src="./webroot/images/220504SecuenciaDesarrolloCRUDcompleto.PNG" class="d-block mx-auto rounded w-100" alt="Desarrollo del CRUD." style="width:22.52dvw;">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">DESARROLLO DEL CRUD</h5>
                    <p class="text-black bg-transparent">Secuencia del desarrollo del CRUD completo.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="220504SecuenciaDesarrolloCRUDcompleto.pdf">AMPLIAR</button>
                    </form>
                </div>
            </div>


            <div class="carousel-item w-100" data-bs-interval="<?php echo $iTiempo;?>" style="height:655px;">
                <img src="./webroot/images/230129ArbolDeNavegación.PNG" class="d-block mx-auto rounded w-100" alt="Árbol de navegación." style="width:23.20dvw;">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">ÁRBOL DE NAVEGACIÓN</h5>
                    <p class="text-black bg-transparent">Árbol de navegación de la aplicación final.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="230129ArbolDeNavegación.pdf">AMPLIAR</button>
                    </form>
                </div>
            </div>


            <div class="carousel-item w-100" data-bs-interval="<?php echo $iTiempo;?>" style="height:655px;">
                <img src="./webroot/images/230129CatalogoDeRequisitos.PNG" class="d-block mx-auto rounded w-100" alt="Catálogo de requisitos." style="width:23.42dvw;">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">CATÁLOGO DE REQUISITOS</h5>
                    <p class="text-black bg-transparent">Catálogo de requisitos de la Aplicación Final.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="230129CatalogoDeRequisitos.pdf">AMPLIAR</button>
                    </form>
                </div>
            </div>

            <div class="carousel-item w-100" data-bs-interval="<?php echo $iTiempo;?>" style="height:655px;">
                <img src="./webroot/images/ModeloDeClasesDeUsoDeLaAplicacion.PNG" class="d-block mx-auto rounded w-100" alt="Diagrama de clases." style="width:50dvw">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">DIAGRAMA DE CLASES</h5>
                    <p class="text-black bg-transparent">Diagrama de clases de la Aplicación Final.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="100626DiagramaDeClasesBueno.pdf">AMPLIAR</button>
                    </form>
                </div>
            </div>


            <div class="carousel-item w-100" data-bs-interval="<?php echo $iTiempo;?>" style="height:655px;">
                <img src="./webroot/images/230131RelacionDeFicheros.PNG" class="d-block mx-auto rounded w-100" alt="Relación de ficheros." style="width:23.36dvw;">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">RELACIÓN DE FICHEROS</h5>
                    <p class="text-black bg-transparent">Relación de los ficheros de la Aplicación final.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="230131RelacionDeFicheros.pdf">AMPLIAR</button>
                    </form>
                </div>
            </div>


            <div class="carousel-item w-100" data-bs-interval="<?php echo $iTiempo;?>" style=" height:655px;">
                <img src="./webroot/images/250211ModeloFisicoDeDatos.JPG" class="d-block mx-auto rounded w-100" alt="Modelo físico de datos" style="width:22.4dvw;">
                <div class="carousel-caption d-none d-md-block CaptionCarrousel">
                    <h5 class="text-black bg-transparent">MODELO FÍSICO DE DATOS</h5>
                    <p class="text-black bg-transparent">Modelo físico de datos de la Aplicación final.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <button type="submit" class="btn btn-primary" name="Ampliar" value="250211ModeloFisicoDeDatos.pdf">AMPLIAR</button>
                    </form>
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