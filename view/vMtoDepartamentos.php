<main id="contenedor">  
    <h2 id="titulo">MANTENIMIENTO DE DEPARTAMENTOS</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table class="formulario conErrores">
            <tr>
                <td>
                    <label for="desc">Descripción:</label>
                </td>
                <td>
                    <input type="text" name="DescDepartamento" class="texto obligatorio" id="DescDepartamento" value="<?php echo $avDepartamentos['DescDepartamentoError']?>">
                </td>
                <td id="Env">
                    <button type="submit" id="Enviar" name="Enviar">BUSCAR</button>
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
                                <td>                 <?php echo ($Departamento['FechaBajaDepartamento']!=='') ? $Departamento['fechaBajaDepartamento']:'NO TIENE'; ?></td>
                            </tr>
                        <?php
                    }
                }
                else{
                    ?>
                        <td colspan='5'>NO SE ENNCONTRARON DEPARTAMENTOS CON ESA DESCRIPCIÓN</td>
                    <?php
                }
            ?>
        </tbody>
    </table>
</main>