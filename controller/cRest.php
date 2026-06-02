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
    $oFechaActual=new DateTime();
    $sFechaActualFormateada=$oFechaActual->format('Y-m-d');
    $FechaMinima="16-06-1995";
    if(!isset($_SESSION['FechaNasaEnCurso'])){
        $_SESSION['FechaNasaEnCurso']=$sFechaActualFormateada;
    }
    $aErrores=['FechaNasaEnCurso'=>null];
    $EntradaOK=true;
    if(isset($_REQUEST['Buscar'])){
        $aErrores['FechaNaseEnCurso']=validacionFormularios::validarFecha($_REQUEST['FechaNasaEnCurso'],$sFechaActualFormateada,$FechaMinima,1);
        if($aErrores['FechaNasaEnCurso']!=null){
            $EntradaOK=false;
        }
        if($EntradaOK){
            $sFechaNueva=$_REQUEST['FechaNasaEnCurso'];
            if($sFechaNueva!==$_SESSION['FechaNasaEnCurso']){
                $_SESSION['FechaNasaEnCurso']=$sFechaNueva;
                unset($_SESSION['FotoNasaEnCurso']);
            }
        }
    }
    else{
        $EntradaOK=false;
    }
    $sFechaSolicitada=$_SESSION['FechaNasaEnCurso'];
    $oFotoNasa=null;
    if((isset($_SESSION['FotoNasaEnCurso'])) && ($_SESSION['FotoNasaEnCurso'] instanceof FotoNasa) && ($_SESSION['FotoNasaEnCurso']->getFecha()=== $sFechaSolicitada)){
        $oFotoNasa=$_SESSION['FotoNasaEnCurso'];
    }
    else{
        $oFotoNasa=REST::apiNasa($sFechaSolicitada);
        $_SESSION['FotoNasaEnCurso']=$oFotoNasa;
    }
    $bMostrarBotonDetalle=true;
    if($oFotoNasa->getTitulo()==='Error de conexión con la NASA'){
        $bMostrarBotonDetalle=false;
    }
    if($EntradaOK){
        if(isset($_REQUEST['VerDetalleNasa'])) {
            $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
            $_SESSION['PaginaEnCurso']= 'detallesNasa';
            header('Location: '.$sIndex);
            exit;
        }
    }
    $avRest=[
        /*API DE LA NASA*/
        'FechaNasaEnCurso'     =>$sFechaSolicitada,
        'FechaNasaEnCursoError'=>$aErrores['FechaNasaEnCurso'],
        'Titulo'               =>$oFotoNasa->getTitulo(),
        'Url'                  =>$oFotoNasa->getUrl(),
        'Descripcion'          =>$oFotoNasa->getDescripcion(),
        'MostrarBotonDetalle'  =>$bMostrarBotonDetalle
    ];
    require_once $View['layout'];
?>