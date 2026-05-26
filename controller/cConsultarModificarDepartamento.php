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
        $_SESSION['PaginaEnCurso']='departamento';
        header('Location: '.$sIndex);
        exit;
    }
    //Se verifica que hay un departamento seleccionado.
    if (!isset($_SESSION['CodDepartamentoEnCurso'])) {
        $_SESSION['PaginaEnCurso'] = 'departamento';
        header('Location: '.$sIndex);
        exit;
    }
    $CodDepartamento=$_SESSION['CodDepartamentoEnCurso'];
    $oDepartamento=DepartamentoPDO::buscarDepartamentoPorCod($CodDepartamento);
    $EntradaOK=true;
    $aErrores=[
        'DescDepartamento'=>null,
        'VolumenDeNegocio'=>null
    ];
    if(isset($_REQUEST['Modificar'])){
        $aErrores['DescDepartamento']=validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDepartamento'],255,4,1);
        $aErrores['VolumenDeNegocio']=validacionFormularios::comprobarFloatMonetarioES($_REQUEST['VolumenDeNegocio'],PHP_FLOAT_MAX,0,1);
        foreach($aErrores as $campo => $valor){
            if(!empty($valor)){
                //Se comprueba si el valor es válido.
                $EntradaOK=false;
            } 
        }
        if($EntradaOK){
            $VolumenFiltrado=str_replace(',','.',$_REQUEST['VolumenDeNegocio']);
            if(DepartamentoPDO::modificarDepartamento($CodDepartamento,$_REQUEST['DescDepartamento'],(float)$VolumenFiltrado)){
                $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
                $_SESSION['PaginaEnCurso']='departamento';
                header('Location: '.$sIndex);
                exit;
            }
            else{
                $aErrores['DescDepartamento']="Error al modificar la descripción en la base de datos.";
                $aErrores['VolumenDeNegocio']="Error al modificar el volumen en la base de datos.";
            }
        }
    }
    else{
        $EntradaOK=false;
    }
    if(isset($_REQUEST['Modificar'])){
        $DescDepartamentoMostrar=(isset($_REQUEST["DescDepartamento"])&&empty($aErrores["DescDepartamento"])) ? $_REQUEST["DescDepartamento"]:$oDepartamento->getDescDepartamento();
        $VolumenDeNegocioMostrar=(isset($_REQUEST["VolumenDeNegocio"])&&empty($aErrores["VolumenDeNegocio"])) ? $_REQUEST["VolumenDeNegocio"]:$oDepartamento->getVolumenDeNegocio();
        $VolumenDeNegocioMostrar=number_format($VolumenDeNegocioMostrar, 2, ',', '.');
    }
    else{
        $DescDepartamentoMostrar=$oDepartamento->getDescDepartamento();
        $VolumenDeNegocioMostrar=number_format($oDepartamento->getVolumenDeNegocio(), 2, ',','.');
    }
    $avConsultarModificarDepartamento=[
        'CodDepartamento'      =>$oDepartamento->getCodDepartamento(),
        'DescDepartamento'     =>$DescDepartamentoMostrar,
        'FechaCreacion'        =>(new DateTime($oDepartamento->getFechaCreacionDepartamento()))->format('d-m-y'),
        'VolumenDeNegocio'     =>$VolumenDeNegocioMostrar,
        'FechaBajaDepartamento'=>(new DateTime($oDepartamento->getFechaBajaDepartamento()))->format('d-m-y'),
        'ErrorDescDepartamento'=>$aErrores['DescDepartamento'],
        'ErrorVolumenDeNegocio'=>$aErrores['VolumenDeNegocio']
    ];
    require_once $View['layout'];
?>