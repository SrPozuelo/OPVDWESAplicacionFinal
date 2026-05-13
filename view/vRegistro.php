<main id="contenedor">
    <h2 id="titulo">REGISTRO</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table class="formulario conErrores">
            <tr>
                <td colspan="3"><h3>Crear nuevo usuario:</h3></td>
            </tr>
            <tr>
                <td>
                    <label for="cod">Código:</label>
                </td>
                <td>
                    <input type="text" name="CodUsuario" class="texto obligatorio" id="CodUsuario" value="<?php echo $avRegistro['CodUsuario']?>">
                </td>
                <td class="span">
                    <span><?php echo $avRegistro['ErroresCodUsuario']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Nombre y apellidos:</label>
                </td>
                <td>
                    <input type="text" name="DescUsuario" class="texto obligatorio" id="DescUsuario" value="<?php echo $avRegistro['DescUsuario']?>">
                </td>
                <td class="span">
                    <span><?php echo $avRegistro['ErroresDescUsuario']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Contraseña:</label>
                </td>
                <td>
                    <input type="password" name="Password" class="texto obligatorio" id="Password" value="<?php echo $avRegistro['Password']?>">
                </td>
                <td class="span">
                    <span><?php echo $avRegistro['ErroresPassword']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Confirmar contraseña:</label>
                </td>
                <td>
                    <input type="password" name="ConfirmarPassword" class="texto obligatorio" id="ConfirmarPassword" value="<?php echo $avRegistro['ConfirmarPassword']?>">
                </td>
                <td class="span">
                    <span><?php echo $avRegistro['ErroresConfirmarPassword']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Respuesta de seguridad:</label>
                </td>
                <td>
                    <input type="password" name="RespuestaDeSeguridad" class="texto obligatorio" id="RespuestaDeSeguridad" value="<?php echo $avRegistro['RespuestaDeSeguridad']?>">
                </td>
                <td class="span">
                    <span><?php echo $avRegistro['ErroresRespuestaDeSeguridad']?></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" id="Env">
                    <button type="submit" id="Crear" class="BotonTabla" name="Crear">CREAR</button>
                    <button name="Volver" id="Volver" class="BotonTabla">VOLVER</button>
                </td>
            </tr>
        </table>
    </form>
</main>