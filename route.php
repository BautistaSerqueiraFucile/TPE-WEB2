<?php

define( 'URL', '//'.$_SERVER[ 'SERVER_NAME' ].':'.$_SERVER[ 'SERVER_PORT' ].dirname( $_SERVER[ 'PHP_SELF' ] ).'/' );

require_once 'controller/pc_controller.php';
$pc_control = new pc_controller();

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
    $pc_control->showGamaPc( $parameters[ 1 ], URL );
    break;
}