<main id="contenedor">  
    <h2 id="titulo">MANTENIMIENTO DE DEPARTAMENTOS</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table class="formulario conErrores">
            <tr>
                <td>
                    <label for="desc">Descripción:</label>
                </td>
                <td>
                    <input type="text" name="DescDepartamento" class="texto obligatorio" id="DescDepartamento" value="<?php echo(isset($_REQUEST["DescDepartamento"])&&empty($aErrores["DescDepartamento"]))?$_REQUEST["DescDepartamento"]:''?>">
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
                while($oRegistroObject=$resultadoConsulta->fetchObject()){
                    echo '<tr>';
                    echo '<td class="centrado">'.$oRegistroObject->T02_CodDepartamento.'</td>';
                    echo '<td>'.$oRegistroObject->T02_DescDepartamento.'</td>';
                    $oFechaCreacion = new DateTime($oRegistroObject->T02_FechaCreacionDepartamento);
                    echo "<td class='centrado'>".$oFechaCreacion->format("d-m-Y")."</td>";
                    echo '<td class="importe">'.number_format($oRegistroObject->T02_VolumenDeNegocio, 2, ',', '.').'€</td>';
                    if(!is_null($oRegistroObject->T02_FechaBajaDepartamento)){
                        //si no se pone la condición la fecha no es null
                        $oFechaBaja = new DateTime($oRegistroObject->T02_FechaBajaDepartamento);
                        echo '<td>' . $oFechaBaja->format("d-m-Y") . '</td>';
                    }
                    else{
                        echo '<td>No tiene</td>';
                    }
                    echo '</tr>';
                }
                echo '<tr>';
                echo "<td class='centrado' colspan=5><strong>Número de registros:</strong>".$resultadoConsulta->rowCount()."</td>";
                echo "</tr>";
            ?>
        </tbody>
    </table>
</main>