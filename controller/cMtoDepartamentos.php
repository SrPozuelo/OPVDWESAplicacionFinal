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
    if(isset($_REQUEST['Editar'])){
        $_SESSION['CodDepartamentoEnCurso']=$_REQUEST['Editar'];
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='editar';
        header('Location:   '.$sIndex);
        exit;
    }
    $entradaOK=true;
    $aErrores=[
        'DescDepartamento'=>null
    ];
    if(isset($_REQUEST['Buscar'])){
        $sDescripcionBuscada="";
        $aErrores['DescDepartamento']=validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDepartamento'],255,0,0);
        $entradaOK=is_null($aErrores['DescDepartamento']);
    }
    else{
        $entradaOK=false;
    }
    if($entradaOK){
        $sDescripcionBuscada=$_REQUEST['DescDepartamento'] ?? '';
        $_SESSION['BusquedaDptoEnCurso']=$sDescripcionBuscada;
    }
    else{
        if(isset($_SESSION['BusquedaDptoEnCurso'])){
            $sDescripcionBuscada=$_SESSION['BusquedaDptoEnCurso'];
        }
        else{
            $sDescripcionBuscada='';
        }
    }
    $aListaDepartamentos=[];
    $aObjetoDepartamentos=DepartamentoPDO::buscarDepartamentoPorDesc($sDescripcionBuscada);
    if (!is_null($aObjetoDepartamentos)) {
        foreach ($aObjetoDepartamentos as $oDepartamento) {
            $oFechaCreacion=new DateTime($oDepartamento->getFechaCreacionDepartamento());
            $oFechaBajaFormateada='';
            if (!is_null($oDepartamento->getFechaBajaDepartamento())) {
                $oFechaBaja=new DateTime($oDepartamento->getFechaBajaDepartamento());
                $oFechaBajaFormateada = $oFechaBaja->format('d-m-Y');
            }
            $aListaDepartamentos[] = [
                'CodDepartamento'           => $oDepartamento->getCodDepartamento(),
                'DescDepartamento'          => $oDepartamento->getDescDepartamento(),
                'FechaCreacionDepartamento' => $oFechaCreacion->format('d-m-Y'),
                'VolumenDeNegocio'          => number_format($oDepartamento->getVolumenDeNegocio(), 2, ',', '.').' €',
                'FechaBajaDepartamento'     => $oFechaBajaFormateada
            ];
        }
    }
    $avDepartamentos=[
        'Departamentos'           =>$aListaDepartamentos,
        'DescDepartamentoError'   =>$aErrores['DescDepartamento'],
        'Busqueda'                =>(isset($_REQUEST["DescDepartamento"])&&(empty($aErrores["DescDepartamento"])))? $_REQUEST["DescDepartamento"]:'',
    ];
    require_once $View['layout'];
?>