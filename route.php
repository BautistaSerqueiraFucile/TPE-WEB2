<?php

define( 'URL', '//'.$_SERVER[ 'SERVER_NAME' ].':'.$_SERVER[ 'SERVER_PORT' ].dirname( $_SERVER[ 'PHP_SELF' ] ).'/' );


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
    $pc_control->showGamaPc( $parameters[ 1 ], URL );
    break;
    case 'gamas':
        //$gama_control->showAllGama(URL);
        $gama_control->UL_showAllGama( URL );// probar logueado editar
    break; 

    case 'login':
        $user_control->showLogin( URL );
        break; 

    case 'editarGama':
        $gama_control->UL_editGama( $parameters[ 1 ],URL);       
    break;

    case 'modificarGama':              ;
        $gama_control->UL_modifieGama( $parameters[ 1 ] ,$_REQUEST);  
        header('location: '.URL.'gamas');     
    break;

    //CONSULTAR SI, CUANDO ELIMINA UNA GAMA TIENE QUE ELIMINAR NECESARIAMENTE TODAS LAS PC PERTENECIENTE A ESA 
    //GAMA TAMBIEN
    case 'eliminarGama':  
        var_dump($_REQUEST)      ;
        var_dump($parameters[ 1 ])      ;
        $pc_control->UL_deletePcByGama( $parameters[ 1 ]);  
        $gama_control->UL_deleteGama( $parameters[ 1 ]);  
        header('location: '.URL.'gamas');     
    break;

}