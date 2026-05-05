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
    </div>
</header>
<main id="contenedor">  
    <h2 id="titulo">Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table class="formulario conErrores">
            <tr>
                <td colspan="3"><h3>Iniciar sesion:</h3></td>
            </tr>
            <tr>
                <td>
                    <label for="cod">Nombre:</label>
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
                <td colspan="3" id="Env">
                    <button type="submit" id="Enviar" class="BotonTabla" name="Enviar">ENVIAR</button>
                    <button name="Volver" id="Volver" class="BotonTabla"><?php echo $textoBotonVolver; ?></button>
                </td>
            </tr>
            <tr>
                <td colspan="3" id="Env"></td>
            </tr>
            <tr>
                <td colspan="3" id="Env">
                    <p>Si todavia no tienes una cuenta:</p>
                    <button name="Registrarse" id="Registrarse" class="BotonTabla">REGISTRARSE</button>
                </td>
            </tr>
        </table>
    </form>
</main>