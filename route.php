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
    $pc_control->UL_showAllPc( URL );
    break;
    
    case 'detail':
    $pc_control->showDetailPc( $parameters[ 1 ], URL );
    break;
    case 'gama':
    $pc_control->UL_viewPcByGama( $parameters[ 1 ], URL );
    break;
    case 'gamas':
        //$gama_control->showAllGama(URL);
        $gama_control->UL_showAllGama( URL );// probar logueado editar
    break; 

    case 'login':
        $user_control->showLogin( URL );
        break; 

    case 'loginOut':
        header('location: '.URL.'home');
        break;

    case 'editarPc':
        $pc_control->UL_editPc( $parameters[ 1 ],URL);       
    break;

    case 'modificarPc':              
        $pc_control->UL_modifiePc( $parameters[ 1 ] ,$_REQUEST);  
        header('location: '.URL.'home');     
    break;

    //CONSULTAR SI, CUANDO ELIMINA UNA GAMA TIENE QUE ELIMINAR NECESARIAMENTE TODAS LAS PC PERTENECIENTE A ESA 
    //GAMA TAMBIEN
    case 'eliminarPc':                
        $pc_control->UL_deletePc( $parameters[ 1 ]);            
        header('location: '.URL.'home');     
    break;

    case 'altaPc':                
        $pc_control->UL_showAltaPc(URL);            
    break;

    case 'createPc':                
         $pc_control->UL_CreatePc($_GET);
         header('location: '.URL.'home');  
    break;

    case 'altaGama':
        $gama_control->UL_showAltaGama(URL);
    break;

    case 'createGama':
        $gama_control->UL_CreateGama($_GET);
        header('location: '.URL.'home'); 
    break;

}