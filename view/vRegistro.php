<header class="cabecera-principal">
    <div class="contenido-cabecera">
        <div class="identidad">
            <a href="../index.html" style="text-decoration:none;">
                <div class="logo-iniciales">ÓS</div>
            </a>
            <h1>Óscar Pozuelo Villamandos</h1>
        </div>
        <div class="curso-badge" style="background-color:#1e5631; color:white;">
            Aplicación final
        </div>
        <form action="" method="post" id="FormularioSesion">
            <button name="Volver" id="Sesion"><span>VOLVER</span></button>
        </form>
    </div>
</header>
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
                    <input type="text" name="CodUsuario" class="texto obligatorio" id="CodUsuario" value="<?php echo(isset($_REQUEST["CodUsuario"])&&empty($aErrores["CodUsuario"]))?$_REQUEST["CodUsuario"]:''?>">
                </td>
                <td class="span">
                    <span><?php echo $aErrores['CodUsuario']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Nombre y apellidos:</label>
                </td>
                <td>
                    <input type="text" name="DescUsuario" class="texto obligatorio" id="DescUsuario" value="<?php echo(isset($_REQUEST["DescUsuario"])&&empty($aErrores["DescUsuario"]))?$_REQUEST["DescUsuario"]:''?>">
                </td>
                <td class="span">
                    <span><?php echo $aErrores['DescUsuario']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Contraseña:</label>
                </td>
                <td>
                    <input type="password" name="Password" class="texto obligatorio" id="Password" value="<?php echo(isset($_REQUEST["Password"])&&empty($aErrores["Password"]))?$_REQUEST["Password"]:''?>">
                </td>
                <td class="span">
                    <span><?php echo $aErrores['Password']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="desc">Confirmar contraseña:</label>
                </td>
                <td>
                    <input type="password" name="ConfirmarPassword" class="texto obligatorio" id="ConfirmarPassword" value="<?php echo(isset($_REQUEST["ConfirmarPassword"])&&empty($aErrores["ConfirmarPassword"]))?$_REQUEST["ConfirmarPassword"]:''?>">
                </td>
                <td class="span">
                    <span><?php echo $aErrores['ConfirmarPassword']?></span>
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