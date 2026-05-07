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
    require_once $View['layout'];
    $aRespuestas=[
        'CodUsuario'=>'',
        'DescUsuario'=>'',
        'Password'=>'',
        'ConfirmarPassword'=>''
    ];
    $aErrores=[
        'CodUsuario'=>'',
        'DescUsuario'=>'',
        'Password'=>'',
        'ConfirmarPassword'=>''
    ];
    $avRegistro=[
        'CodUsuario'=>$aRespuesta['CodUsuario'],
        'DescUsuario'=>$aRespuesta['DescUsuario'],
        'Password'=>$aRespuesta['Password'],
        'ConfirmarPassword'=>$aRespuesta['ConfirmarPassword']
    ];
?>