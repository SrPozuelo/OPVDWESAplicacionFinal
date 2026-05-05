<?php
    /**
    * @author: Óscar Pozuelo
    * @since: 30/04/2026
    * @description: Controlador de Detalle.
    */
    // Se comprueba si el botón "volver" ha sido pulsado.
    if(isset($_REQUEST['Volver'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPrivado';
        header('Location: indexAplicacionFinal.php');
        exit;
    }
    $avDetalle=[
        'Session' => $_SESSION,
        'Cookie'  => $_COOKIE,
        'Server'  => $_SERVER,
        'Request' => $_REQUEST,
        'Get'     => $_GET,
        'Post'    => $_POST,
        'Files'   => $_FILES,
        'Env'     => $_ENV,
    ];
    require_once $View['layout'];
?>