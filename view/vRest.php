<main id="contenedor">  
    <h2 id="titulo">REST</h2>
    <div id="Apis" class="row w-50 position-absolute top-50 start-50 justify-content-evenly">
        <div class="col-5" id="div1">
            
            <?php
                if($avRest['MostrarBotonDetalle']){
                    ?>
                        <p id="TituloNasa" class="w-100 text-center p-3 m-0"><?php echo($avRest["Titulo"])?></p>
                        <img src="<?php echo($avRest['Url'])?>" alt="Foto del dia de la NASA.">
                        <h3>DESCRIPCIÓN:</h3>
                        <p><?php echo($avRest['Descripcion'])?></p>
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn btn-primary name="VerDetallesNasa">VER DETALLES</button>
                        </div>
                    <?php
                }
                else{
                    ?>
                        <p id="TituloNasa" class="position-relative w-100 text-center p-3 m-0 top-50" style="color:red;transform:translate(0%,-50%);"><?php echo($avRest["Titulo"])?></p>
                    <?php
                }
            ?>
        </div>
        <div class="col-5" id="div2">AQUÍ NO HAY NADA</div>
    </div>
</main>