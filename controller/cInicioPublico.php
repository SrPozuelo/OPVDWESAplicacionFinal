<?php
    if(isset($_REQUEST['iniciarSesion'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='login';
        header('Location: indexLoginLogoff.php');
        exit;
    }
    if(isset($_REQUEST['Idioma'])){
        setcookie("Idioma",$_REQUEST['Idioma'],time()+(7*24*3600));
        header('Location: indexLoginLogoff.php');
        exit;
    }
    if (!isset($_COOKIE['Idioma'])){
        setcookie("Idioma","es",time()+(3600*24*7));
        header('Location: indexLoginLogoff.php');
        exit;
    }
    require_once $View['layout'];
?>