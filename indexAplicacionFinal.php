<?php
    require_once  'conf/ConfAPP.php';
    require_once  'conf/ConfDBPDO.php';
    session_start();
    if(!isset($_SESSION['PaginaEnCurso'])){
        $_SESSION['PaginaEnCurso']='inicioPublico';
    }
    require_once $Controller[$_SESSION['PaginaEnCurso']];
?>