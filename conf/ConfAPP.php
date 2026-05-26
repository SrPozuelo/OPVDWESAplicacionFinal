<?php
    require_once 'core/libreriaValidacion.php';
    require_once 'model/Usuario.php'; 
    require_once 'model/UsuarioPDO.php';
    require_once 'model/Departamento.php';
    require_once 'model/DepartamentoPDO.php';
    require_once 'model/AppError.php';
    require_once 'model/REST.php';
    require_once 'model/FotoNasa.php';
    const API_KEY_NASA='VArtVZZeOSBGcSkPjTl7VzP0gX2olfPh8kdQgz3b';
    $Controller=[
        'inicioPublico'   => 'controller/cInicioPublico.php',
        'login'           => 'controller/cLogin.php',
        'inicioPrivado'   => 'controller/cInicioPrivado.php',
        'detalles'        => 'controller/cDetalle.php',
        'registro'        => 'controller/cRegistro.php',
        'cuenta'          => 'controller/cCuenta.php',
        'cambiarPassword' => 'controller/cCambiarPassword.php',
        'borrarCuenta'    => 'controller/cBorrarCuenta.php',
        'error'           => 'controller/cError.php',
        'wip'             => 'controller/cWIP.php',
        'plantilla'       => 'controller/cPlantilla.php',
        'departamento'    => 'controller/cMtoDepartamentos.php',
        'rest'            => 'controller/cRest.php',
        'editar'          => 'controller/cConsultarModificarDepartamento.php'
    ];
    $View=[
        'inicioPublico'   => 'view/vInicioPublico.php',
        'layout'          => 'view/layout.php',
        'login'           => 'view/vLogin.php',
        'inicioPrivado'   => 'view/vInicioPrivado.php',
        'detalles'        => 'view/vDetalle.php',
        'registro'        => 'view/vRegistro.php',
        'cuenta'          => 'view/vCuenta.php',
        'cambiarPassword' => 'view/vCambiarPassword.php',
        'borrarCuenta'    => 'view/vBorrarCuenta.php',
        'error'           => 'view/vError.php',
        'wip'             => 'view/vWIP.php',
        'plantilla'       => 'view/vPlantilla.php',
        'departamento'    => 'view/vMtoDepartamentos.php',
        'rest'            => 'view/vRest.php',
        'editar'          => 'view/vConsultarModificarDepartamento.php'
    ];
?>