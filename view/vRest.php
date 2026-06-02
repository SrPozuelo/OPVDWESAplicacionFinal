<main id="contenedor">  
    <h2 id="titulo">REST</h2>
    <div id="Apis" class="row w-50 position-absolute start-50 justify-content-evenly">
        <div class="col-5" id="div1">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="col-12  d-flex justify-content-center text-center">
                    <table class="table table-hover table-bordered border-dark align-middle w-100 m-0">
                        <tr>
                            <th class="table-secondary" style="border-left:1px solid black !important;">
                                <label for="desc">Fecha:</label>
                            </th>
                            <td class="w-50 table-info border-0">
                                <input type="date" name="FechaNasaEnCurso" class="fecha obligatorio rounded-4 text-center" size="70" style="min-height: 40px;" id="FechaNasaEnCurso" value="<?php echo $avRest['FechaNasaEnCurso']?>">
                            </td>
                            <td class="span w-25 table-info border-0">
                                <span><?php echo $avRest['FechaNasaEnCursoError']?></span>
                            </td>
                            <td id="Env" class="w-25 table-info border-0" style="border-right:1px solid black !important;">
                                <button class="btn btn-primary" type="submit" name="Buscar" >BUSCAR</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <?php
                if($avRest['MostrarBotonDetalle']){
                    ?>
                        <p id="TituloNasa" class="w-100 text-center p-3 m-0"><?php echo($avRest["Titulo"])?></p>
                        <img src="<?php echo($avRest['Url'])?>" alt="Foto del dia de la NASA." width="100%" height="45%">
                        <h5 id="Desc">DESCRIPCIÓN:</h5>
                        <div id="Scroll" class="w-100">
                            <p id="DescripcionNasa" class="w-100 m-0 p-0"><?php echo($avRest['Descripcion'])?></p>
                        </div>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="d-flex align-items-center justify-content-center">
                            <button type="submit" class="btn btn-primary" name="VerDetalleNasa">VER DETALLES</button>
                        </form>
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