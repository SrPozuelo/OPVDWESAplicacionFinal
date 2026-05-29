<?php
    $sIndex='indexAplicacionFinal.php';
    if(empty($_SESSION['usuarioOPVDWESLoginLogoff'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPublico';
        header('Location: '.$sIndex);
        exit;
    }
    //Se comprueba si el botón "detalles" ha sido pulsado.
    if(isset($_REQUEST['Detalles'])){
        //Código que se ejecuta si el botón "Detalles" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='detalles';
        header('Location: '.$sIndex);
        exit;
    }
    //Se comprueba si el botón "Plantilla" ha sido pulsado.
    if(isset($_REQUEST['Plantilla'])){
        //Código que se ejecuta si el botón "Plantilla" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='plantilla';
        header('Location: '.$sIndex);
        exit;
    }
    //Se comprueba si el botón "Error" ha sido pulsado.
    if(isset($_REQUEST['Error'])){
        //Código que se ejecuta si el botón "Error" fue pulsado.
        $Consulta="SELECT * FROM T03_TablaQueNoExiste";
        DBPDO::ejecutarConsulta($Consulta);
        header('Location: '.$sIndex);
        exit;
    }
    //Se comprueba si el botón "Departamentos" ha sido pulsado.
    if(isset($_REQUEST['Departamentos'])){
        //Código que se ejecuta si el botón "Departamentos" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='departamento';
        header('Location: '.$sIndex);
        exit;
    }
    //Se comprueba si el botón "Rest" ha sido pulsado.
    if(isset($_REQUEST['Rest'])){
        //Código que se ejecuta si el botón "Rest" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='rest';
        header('Location: '.$sIndex);
        exit;
    }
    //Se comprueba si el botón "WIP" ha sido pulsado.
    if(isset($_REQUEST['WIP'])){
        //Cóigo que se ejecuta si el botón "WIP" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='wip';
        header('Location: '.$sIndex);
        exit;
    }
    //Se comprueba si el botón "Cerrar sesion" ha sido pulsado.
    if(isset($_REQUEST['cerrarSesion'])) {
        //Código que se ejecuta si el botón "Cerrar sesion" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['paginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPublico';
        $_SESSION['BusquedaDptoEnCurso']=(isset($_SESSION['BusquedaDptoEnCurso'])) ? '':$_SESSION['BusquedaDptoEnCurso'];
        header('Location: '.$sIndex);
        exit;
    }
    //Se crea un array con los datos del usuario para pasarlos a la vista
    $avInicioPrivado=[
        'DescUsuario'                     => $_SESSION['usuarioOPVDWESLoginLogoff']->getDescUsuario(),
        'NumAccesos'                      => $_SESSION['usuarioOPVDWESLoginLogoff']->getNumAccesos(),
        'FechaHoraUltimaConexionAnterior' => $_SESSION['usuarioOPVDWESLoginLogoff']->getFechaHoraUltimaConexionAnterior(),
        'Inicial'                         => $_SESSION['usuarioOPVDWESLoginLogoff']->getInicial(),
        //Se determina el idioma (si no hubiera cookie, que sea 'es')
        'idioma'                          => $_COOKIE['Idioma'] ?? 'es'
    ];
    require_once $View['layout'];
?>