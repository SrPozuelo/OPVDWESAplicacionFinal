<?php
    /**
    * @author: Óscar Pozuelo
    * @since: 30/04/2026
    * @description: Controlador de la plantilla.
    */
    // Se comprueba si el botón "volver" ha sido pulsado.
    $sIndex='indexAplicacionFinal.php';
    if(isset($_REQUEST['Volver'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPrivado';
        header('Location: '.$sIndex);
        exit;
    }
    $aRespuestas=[
        'CodUsuario'=>'',
        'DescUsuario'=>'',
        'Password'=>'',
        'ConfirmarPassword'=>'',
        'RespuestaDeSeguridad'=>''
    ];
    $aErrores=[
        'CodUsuario'=>'',
        'DescUsuario'=>'',
        'Password'=>'',
        'ConfirmarPassword'=>'',
        'RespuestaDeSeguridad'=>''
    ];
    $entradaOK=true;
    if(isset($_REQUEST['Crear'])){
        $aErrores['CodUsuario']=validacionFormularios::comprobarAlfabetico($_REQUEST['CodUsuario'],10,4,1);
        if((UsuarioPDO::validarCodUsuarioExiste($_REQUEST['CodUsuario']))&&(empty($aErrores['CodUsuario']))){
            $aErrores['CodUsuario']="El nombre del usuario ya existe.";
        }
        $aErrores['DescUsuario']=validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescUsuario'],255,4,1);
        $aErrores['Password']=validacionFormularios::validarPassword($_REQUEST['Password'],64,4,2,1);
        $aErrores['ConfirmarPassword']=validacionFormularios::validarPassword($_REQUEST['ConfirmarPassword'],64,4,2,1);
        define("ResSeguridad","pimentel");
        if(empty($_REQUEST["RespuestaDeSeguridad"])){
            $aErrores["RespuestaDeSeguridad"]="Campo vacío.";
        }
    }
    $codUsuario=(isset($_REQUEST["CodUsuario"])&&(empty($aErrores["CodUsuario"])))?$_REQUEST["CodUsuario"]:'';
    $DescUsuario=(isset($_REQUEST["DescUsuario"])&&(empty($aErrores["DescUsuario"])))?$_REQUEST["DescUsuario"]:'';
    $Password=(isset($_REQUEST["Password"])&&(empty($aErrores["Password"])))?$_REQUEST["Password"]:'';
    $ConfirmarPassword=(isset($_REQUEST["ConfirmarPassword"])&&(empty($aErrores["ConfirmarPassword"])))?$_REQUEST["ConfirmarPassword"]:'';
    $RespuestaDeSeguridad=(isset($_REQUEST["RespuestaDeSeguridad"])&&(empty($aErrores["RespuestaDeSeguridad"])))?$_REQUEST["RespuestaDeSeguridad"]:'';
    $avRegistro=[
        'CodUsuario'                 =>$codUsuario,
        'DescUsuario'                =>$DescUsuario,
        'Password'                   =>$Password,
        'ConfirmarPassword'          =>$ConfirmarPassword,
        'RespuestaDeSeguridad'       =>$RespuestaDeSeguridad,
        'ErroresCodUsuario'          =>$aErrores['CodUsuario'],
        'ErroresDescUsuario'         =>$aErrores['DescUsuario'],
        'ErroresPassword'            =>$aErrores['Password'],
        'ErroresConfirmarPassword'   =>$aErrores['ConfirmarPassword'],
        'ErroresRespuestaDeSeguridad'=>$aErrores['RespuestaDeSeguridad']
    ];
    require_once $View['layout'];
?>