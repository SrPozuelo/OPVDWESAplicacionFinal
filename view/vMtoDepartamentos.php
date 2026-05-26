<main id="contenedor">  
    <h2 class="h1 col-12 d-flex  justify-content-center pb-5  f text-dark" style="min-width: 850px;" >MANTENIMIENTO DE DEPARTAMENTOS</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="CentradoArriba">
        <div class="col-12  d-flex justify-content-center  text-center">
            <table class="table table-hover table-bordered border-dark align-middle w-75">
                <tr>
                    <th class="table-secondary" style="border-left:1px solid black !important;">
                        <label for="desc">Descripción:</label>
                    </th>
                    <td class="w-50 table-info border-0">
                        <input type="text" name="DescDepartamento" class="texto rounded-4" size="70" style="min-height: 40px;" id="DescDepartamento" value="<?php echo $avDepartamentos['Busqueda']?>">
                    </td>
                    <td class="span w-25 table-info border-0">
                        <span><?php echo $avDepartamentos['DescDepartamentoError']?></span>
                    </td>
                    <td id="Env" class="w-25 table-info border-0" style="border-right:1px solid black !important;">
                        <button class="btn btn-primary " type="submit" name="Buscar" >BUSCAR</button>
                    </td>
                </tr>
            </table>
        </div>  
    </form>
    <?php
        /*
         * Se muestra el listado de departamentos.style="min-width: 850px;"
         */
    ?>
    <h3>Resultado de la busqueda:</h3>
    <table class="table table-striped table-hover table-bordered border-dark">
        <thead>
            <tr class="table-secondary text-center">
                <th>Código</th>
                <th>Descripción del departamento</th>
                <th>Fecha de Creación</th>
                <th>Volumen de Negocio</th>
                <th>Fecha de Baja</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                if(count($avDepartamentos['Departamentos'])>0){
                    foreach($avDepartamentos['Departamentos'] as $Departamento){
                        ?>
                            <tr class="table-info align-middle ">
                                <td class='text-center'><?php echo $Departamento['CodDepartamento'];?>                                                                  </td>
                                <td>                    <?php echo $Departamento['DescDepartamento'];?>                                                                 </td>
                                <td class='text-center'><?php echo $Departamento['FechaCreacionDepartamento'];?>                                                        </td>
                                <td class='text-end'   ><?php echo $Departamento['VolumenDeNegocio'];?>                                                                 </td>
                                <td class='text-center'><?php echo ($Departamento['FechaBajaDepartamento']!=='') ? $Departamento['FechaBajaDepartamento']:'NO TIENE'; ?></td>
                                <td>
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="w-100 d-flex align-items-center justify-content-evenly">
                                        <button class="btn btn-primary"  name="Editar" value="<?php echo $Departamento['CodDepartamento'];?>">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                        <button class="btn btn-primary"  name="Mostrar" value="<?php echo $Departamento['CodDepartamento'];?>">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary" name="Borrar" value="<?php echo $Departamento['CodDepartamento'];?>">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <?php
                                            if($Departamento['FechaBajaDepartamento']!==''){
                                                ?><button class="btn btn-danger" name="Baja" class="Baja" value="<?php echo $Departamento['CodDepartamento'];?>"><i class="fa-solid fa-arrow-down"></i></button><?php
                                            }
                                            else{
                                                ?><button class="btn btn-success" name="Alta" class="Alta" value="<?php echo $Departamento['CodDepartamento'];?>"><i class="fa-solid fa-arrow-up"></i></button><?php
                                            }
                                        ?>
                                    </form>
                                </td>
                            </tr>
                        <?php
                    }
                }
                else{
                    ?>
                        <td colspan='5' class="centrado">NO SE ENCONTRARON DEPARTAMENTOS CON ESA DESCRIPCIÓN.</td>
                    <?php
                }
            ?>
        </tbody>
    </table>
</main>