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
    $entradaOK=true;
    if(isset($_REQUEST['buscar'])){
        $sDescripcionBuscada="";
        $aErrores = [
            'descDepartamento'=>null
        ];
        $aErrores['DescDepartamento']=validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDepartamento'],255,0,1);
        $entradaOK=is_null($aErrores['DescDepartamentos']);
    }
    if($entradaOK){
        $descripcionBuscada=$_REQUEST['descDepartamento'] ?? '';
        $_SESSION['BusquedaDptoEnCurso']=$sDescripcionBuscada;
    }
    else{
        if(isset($_SESSION['busquedaDptoEnCurso'])){
            $descripcionBuscada=$_SESSION['busquedaDptoEnCurso'];
        }
    }
    $aListaDepartamentos=[];
    $aObjetoDepartamentos=DepartamentoPDO::buscarDepartamentoPorDesc($descripcionBuscada);
    if (!is_null($aObjetoDepartamentos)) {
        foreach ($aObjetoDepartamentos as $oDepartamento) {
            $oFechaCreacion=new DateTime($oDepartamento->getFechaCreacionDepartamento());
            $fechaBajaFormateada='';
            if (!is_null($oDepartamento->getFechaBajaDepartamento())) {
                $fechaBaja=new DateTime($oDepartamento->getFechaBajaDepartamento());
                $fechaBajaFormateada = $fechaBaja->format('d-m-Y');
            }
            $aListaDepartamentos[] = [
                'codDepartamento'           => $oDepartamento->getCodDepartamento(),
                'descDepartamento'          => $oDepartamento->getDescDepartamento(),
                'fechaCreacionDepartamento' => $oFechaCreacion->format('d-m-Y'),
                'volumenDeNegocio'          => number_format($oDepartamento->getVolumenDeNegocio(), 2, ',', '.') . ' €',
                'fechaBajaDepartamento'     => $fechaBajaFormateada
            ];
        }
    }
    $avDepartamentos=[
        'Departamentos'           =>$aListaDepartamentos,
        'DesDepartamentosErrores' =>(isset($_REQUEST["DescDepartamento"])&&(empty($aErrores["DescDepartamento"])))?$_REQUEST["DescDepartamento"]:'',
        'Busqueda'                =>$sDescripcionBuscada
    ];
    require_once $View['layout'];
?>