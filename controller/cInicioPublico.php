<?php
    $sIndex='indexAplicacionFinal.php';
    if(isset($_REQUEST['iniciarSesion'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='login';
        header('Location: '.$sIndex);
        exit;
    }
    if(isset($_REQUEST['Idioma'])){
        setcookie("Idioma",$_REQUEST['Idioma'],time()+(7*24*3600));
        header('Location: '.$sIndex);
        exit;
    }
    if (!isset($_COOKIE['Idioma'])){
        setcookie("Idioma","es",time()+(3600*24*7));
        header('Location: '.$sIndex);
        exit;
    }
    if(isset($_REQUEST['Ampliar'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='ampliar';
        setcookie("Archivo",$_REQUEST['Ampliar'],(time()+(3600*24*7)));
        header('Location: '.$sIndex);
        exit;
    }
    $avInicioPublico=[
        'Idioma'=>$_COOKIE['Idioma'] ?? 'es'
    ];
    require_once $View['layout'];
?>