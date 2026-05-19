<main id="contenedor">  
    <h2 id="titulo">MANTENIMIENTO DE DEPARTAMENTOS</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="CentradoArriba">
        <table class="formulario conBusqueda">
            <tr>
                <td>
                    <label for="desc">Descripción:</label>
                </td>
                <td>
                    <input type="text" name="DescDepartamento" class="texto" id="DescDepartamento" value="<?php echo $avDepartamentos['Busqueda']?>">
                </td>
                <td id="Env">
                    <button type="submit" id="Buscar" name="Buscar" class="BotonTabla">BUSCAR</button>
                </td>
                <td></td>
                <td class="span">
                    <span><?php echo $avDepartamentos['DescDepartamentoError']?></span>
                </td>
            </tr>
        </table>
    </form>
    <?php
        /*
         * Se muestra el listado de departamentos.
         */
    ?>
    <h3>Resultado de la busqueda:</h3>
    <table class="TablaPHP">
        <thead>
            <tr>
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
                            <tr>
                                <td class="centrado"><?php echo $Departamento['CodDepartamento'];?>                                      </td>
                                <td>                 <?php echo $Departamento['DescDepartamento'];?>                                     </td>
                                <td class='centrado'><?php echo $Departamento['FechaCreacionDepartamento'];?>                            </td>
                                <td class='importe' ><?php echo $Departamento['VolumenDeNegocio'];?>                                     </td>
                                <td>                 <?php echo ($Departamento['FechaBajaDepartamento']!=='') ? $Departamento['FechaBajaDepartamento']:'NO TIENE'; ?></td>
                                <td>
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                        <button name="Editar" id="Boton" value="<?php echo $Departamento['CodDepartamento'];?>"><i class="fa-solid fa-pen"></i></button>
                                        <button name="Mostrar" id="Boton" value="<?php echo $Departamento['CodDepartamento'];?>"><i class="fa-solid fa-eye"></i></button>
                                        <button name="Borrar" id="Boton" value="<?php echo $Departamento['CodDepartamento'];?>"><i class="fa-solid fa-trash"></i></button>
                                        <?php
                                            if($Departamento['FechaBajaDepartamento']!==''){
                                                ?><button name="Baja" id="Boton" class="Baja" value="<?php echo $Departamento['CodDepartamento'];?>"><i class="fa-solid fa-arrow-down"></i></button><?php
                                            }
                                            else{
                                                ?><button name="Alta" id="Boton" class="Alta" value="<?php echo $Departamento['CodDepartamento'];?>"><i class="fa-solid fa-arrow-up"></i></button><?php
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