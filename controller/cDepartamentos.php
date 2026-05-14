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
        header('Location:   '.$sIndex);
        exit;
    }
    if(isset($_REQUEST['buscar'])){
        $sDescripcionBuscada="";
        $aErrores = [
            'descDepartamento'=>null
        ];
        $entradaOK=true;
        $aErrores['DescDepartamento']=validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDepartamento']);
        $entradaOK=is_null($aErrores['DescDepartamentos']);
        if($entradaOK){
            $descripcionBuscada=$_REQUEST['descDepartamento'] ?? '';
            $_SESSION['BusquedaDptoEnCurso']=$sDescripcionBuscada;
        }
        else {
            if (isset($_SESSION['busquedaDptoEnCurso'])){
                $descripcionBuscada=$_SESSION['busquedaDptoEnCurso'];
            }
        }
        $aListaDepartamentos=[];
        $aObjetoDepartamentos=DepartamentoPDO::buscarDepartamentoPorDesc($descripcionBuscada);
    }
    require_once $View['layout'];
?>