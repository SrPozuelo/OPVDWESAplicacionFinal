<?php
    require_once 'conf/ConfDBPDO.php';
    require_once "core/libreriaValidacion.php";
    $sIndex='indexAplicacionFinal.php';
    if(isset($_REQUEST['Volver'])){
        $_SESSION['PaginaEnCurso']='inicioPublico';
        header('Location: '.$sIndex);
        exit;
    }
    if(isset($_REQUEST['Registrarse'])){
        $_SESSION['PaginaEnCurso']='registro';
        header('Location: '.$sIndex);
        exit;
    }
    $textoBotonVolver='VOLVER';
    $aErrores=[
        "CodUsuario"=>'',
        "Password"  =>''
    ];
    $aRespuestas=[
        "CodUsuario"=>'',
        "Password"  =>''
    ];
    $entradaOK=true;
    if(isset($_REQUEST["Enviar"])){
        //Código que se ejecuta cuando se envía el formulario.
        //Se valida los datos del formulario.
        //Se guarda la página anterior:
        $_SESSION['PaginaAnterior'] = $_SESSION['PaginaEnCurso'];
        $aErrores['CodUsuario']=validacionFormularios::comprobarAlfabetico($_REQUEST['CodUsuario'],10,0,1);
        $aErrores['Password'] =validacionFormularios::validarPassword($_REQUEST['Password'],64,4,2,1);
        foreach($aErrores as $campo => $valor){
            if(!empty($valor)){
                //Se comprueba si el valor es válido.
                $entradaOK=false;
            } 
        }
    }
    else{
        //Código que se ejecuta antes de rellenar el formulario.
        $entradaOK=false;
    }
    //Se comprueba el que el nombre del usuario y la contraseña sean introducidos correctamente.
    if($entradaOK){
        //Se Carga la variable $aRespuestas y tratamiento de datos OK.
        $aRespuestas['CodUsuario']=$_REQUEST['CodUsuario'];
        $aRespuestas['Password']=$_REQUEST['Password'];
        $oUsuario=UsuarioPDO::validarUsuario($aRespuestas['CodUsuario'],$aRespuestas['Password']);
        if(!is_null($oUsuario)){
            //Se Avanza a la página de inicio privado.
            $oUsuario = UsuarioPDO::actualizarUltimaConexion($oUsuario);
            //Si el login es correcto, se crea el usuario en la sesión y se redirige a la página de inicio privado.
            $_SESSION['usuarioOPVDWESLoginLogoff']=$oUsuario; 
            $_SESSION['PaginaEnCurso']='inicioPrivado';
            header('Location: '.$sIndex);
            exit;
        }
        else{
            //Si el usuario NO es válido se vuelve a cargar el login con los errores.
            if(empty($aErrores['CodUsuario']) and empty($aErrores['Password'])){
                $aErrores['CodUsuario']="El nombre de usuario o la contrasena estan mal introducidos.";
                $aErrores['Password']="El nombre de usuario o la contrasena estan mal introducidos.";
            }
        }
    }
    require_once $View['layout'];
?>