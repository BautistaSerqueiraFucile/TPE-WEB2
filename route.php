<?php

define( 'URL', '//'.$_SERVER[ 'SERVER_NAME' ].':'.$_SERVER[ 'SERVER_PORT' ].dirname( $_SERVER[ 'PHP_SELF' ] ).'/' );
define( 'LOGIN', URL.'login' );
define( 'HOME', URL.'home' );

require_once 'controller/pc_controller.php';
require_once 'controller/gama_controller.php';
require_once 'controller/user_controller.php';

$pc_control = new pc_controller();
$gama_control = new gama_controller();
$user_control = new user_controller();

if ( !empty( $_REQUEST[ 'action' ] ) ) {
    $action = $_REQUEST[ 'action' ];
} else {
    $action = 'home';
}

$parameters = explode( '/', $action );

switch ( $parameters[ 0 ] ) {
    case 'home':
    $pc_control->showAllPc( URL );
    break;

    case 'detail':
    $pc_control->showDetailPc( $parameters[ 1 ], URL );
    break;
    case 'gama':
    $pc_control->UL_viewPcByGama( $parameters[ 1 ], URL );
    break;
    case 'gamas':
    //$gama_control->showAllGama( URL );
    $gama_control->UL_showAllGama( URL );
    // probar logueado editar
    break;

    
    //para loguear o crear usuario nuevo
    case 'login':
    $user_control->showLogin();
    break;

    case 'loginCreate':
        $user_control->showCreateUser();
        break;

    case 'verifyUser':
    $user_control->verifyUser();
    break;

    case 'createUser':
        $user_control->createUser();
        break;
     //FIN
     
     

    case 'editarPc':
    $pc_control->UL_editPc( $parameters[ 1 ], URL );

    break;

    case 'modificarPc':              ;
    $pc_control->UL_modifiePc( $parameters[ 1 ], $_REQUEST );

    header( 'location: '.URL.'home' );

    break;

    case 'eliminarPc':                ;
    $pc_control->UL_deletePc( $parameters[ 1 ] );

    header( 'location: '.URL.'home' );

    break;

}