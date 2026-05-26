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
    if (isset($_REQUEST['verDetalleNasa'])) {
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']= '';
        header('Location: '.$sIndex);
        exit;
    }
    $oFechaActual=new DateTime();
    $sFechaActualFormateada=$oFechaActual->format('d-m-y');
    $FechaMinima="16-06-1995";
    if(!isset($Session['FechaNasaEnCurso'])){
        $_SESSION['FechaNasaEnCurso']=$FechaActualFormateada;
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
            if($FechaNueva!==$_SESSION['FechaNasaEnCurso']){
                $_SESSION['FechaNasaEnCurso']=$FechaNueva;
                unset($_SESSION['FotoNasaEnCurso']);
            }
        }
    }
    require_once $View['layout'];
?>