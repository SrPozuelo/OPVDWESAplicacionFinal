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
    $avError=[
        'codError'    =>'',
        'descError'   =>'',
        'archivoError'=>'',
        'lineaError'  =>''
    ];
    if(isset($_SESSION['error'])){
        $oError=$_SESSION['error'];
        if(is_object($oError) && get_class($oError)=='AppError'){
            $avError['codError']=$oError->getCodError();
            $avError['descError']=$oError->getDescError();
            $avError['archivoError']=$oError->getArchivoError();
            $avError['lineaError']=$oError->getLineaError();
        }
        unset($_SESSION['error']);
    }
    require_once $View['layout'];
?>