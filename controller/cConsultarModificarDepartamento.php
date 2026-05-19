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
        
    }
    else{
        $EntradaOK=false;
    }
    $DescMostrar=isset($_REQUEST['Modificar']) ? $_REQUEST['DescDepartamento'] : $oDepartamento->getDescDepartamento();
    require_once $View['layout'];
?>