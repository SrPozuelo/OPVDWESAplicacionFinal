<main id="contenedor">  
    <h2 id="titulo">CONSULTA-MODIFICACIÓN DE DEPARTAMENTO</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="formu">
        <table class="formulario conErrores">
            <tr>
                <td>
                    <label for="cod">Código:</label>
                </td>
                <td>
                    <input type="text" name="CodDepartamento" class="texto bloqueado" id="CodDepartamento" value="<?php echo($avConsultarModificarDepartamento['CodDepartamento']);?>" readonly="true">
                </td>
                <td class="span">
                    <span></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Descripción:</label>
                </td>
                <td>
                    <input type="text" name="DescDepartamento" class="texto obligatorio" id="DescDepartamento" value="<?php echo($avConsultarModificarDepartamento['DescDepartamento']);?>">
                </td>
                <td class="span">
                    <span><?php echo $avConsultarModificarDepartamento['ErrorDescDepartamento']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Fecha de creación:</label>
                </td>
                <td>
                    <input type="text" name="FechaCreacionDepartamento" class="texto bloqueado" id="FechaCreacionDepartamento" value="<?php echo($avConsultarModificarDepartamento['FechaCreacion']);?>" readonly="true">
                </td>
                <td class="span">
                    <span></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Volumen de negocio:</label>
                </td>
                <td>
                    <input type="text" name="VolumenDeNegocio" class="texto obligatorio" id="VolumenDeNegocio" value="<?php echo($avConsultarModificarDepartamento['VolumenDeNegocio']);?>">
                </td>
                <td class="span">
                    <span><?php echo $avConsultarModificarDepartamento['ErrorVolumenDeNegocio']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">FechaBajaDepartamento:</label>
                </td>
                <td>
                    <input type="text" name="FechaBajaDepartamento" class="texto bloqueado" id="FechaBajaDepartamento" value="<?php echo($avConsultarModificarDepartamento['FechaBajaDepartamento']);?>" readonly="true">
                </td>
                <td class="span">
                    <span></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" id="Env">
                    <button type="submit" id="Enviar" class="BotonTabla" name="Modificar" style="top:50% !important; left:50% !important; transform:translate(-50%,-50%) !important;">MODIFICAR</button>
                </td>
            </tr>
        </table>
    </form>
</main>