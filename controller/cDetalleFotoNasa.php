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
    $oFotoNasa=$_SESSION['FotoNasaEnCurso'] ?? null;
    if($oFotoNasa==null){
        $_SESSION['PaginaEnCurso']='rest';
        header('Location: '.$sIndex);
        exit;
    }
    $avDetalleNasa=[
        'Titulo'     =>$oFotoNasa->getTitulo(),
        'Fecha'      =>(new DateTime($oFotoNasa->getFecha()))->format('d-m-y'),
        'UrlHD'      =>$oFotoNasa->getUrlHD(),
        'Descripcion'=>$oFotoNasa->getDescripcion()
    ];
    require_once $View['layout'];
?>