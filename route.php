<?php

define('URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', URL . 'login');
define('HOME', URL . 'home');
define('GAMA', URL . 'gamas');

require_once 'controller/pc_controller.php';
require_once 'controller/gama_controller.php';
require_once 'controller/user_controller.php';

$pc_control = new pc_controller();
$gama_control = new gama_controller();
$user_control = new user_controller();

if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'home';
}

$parameters = explode('/', $action);

switch ($parameters[0]) {

    // REFERENCIA DE PCS

    case 'home':
        $pc_control->showAllPc();
        break;

    case 'detail':
        $pc_control->showDetailPc($parameters[1]);
        break;

    case 'gama':
        $pc_control->showGamaPc($parameters[1]);
        break;

    case 'editarPc':
        $pc_control->UL_editPc($parameters[1]);
        break;

    case 'modificarPc':
        $pc_control->UL_modifiePc($parameters[1], $_REQUEST);
        break;

        case 'confirmarEliminarPc':
            $pc_control->UL_confirmDeletePc($parameters[1]);
            break;

    case 'eliminarPc':
        $pc_control->UL_deletePc($parameters[1]);
        break;

    case 'altaPc':
        $pc_control->UL_showAltaPc();
        break;

    case 'createPc':
        $pc_control->UL_CreatePc($_REQUEST);
        break;

    //REFERENCIA DE GAMAS

    case 'gamas':
        $gama_control->showAllGama();
        break;

    case 'altaGama':
        $gama_control->UL_showAltaGama();
        break;

    case 'createGama':
        $gama_control->UL_CreateGama($_REQUEST);
        break;

        case 'confirmarEliminarGama':
            $gama_control->UL_confirmDeleteGama($parameters[1]);
            break;
            
    case 'eliminarGama':
        $gama_control->UL_deleteGama($parameters[1]);
        break;

    case 'editarGama':
        $gama_control->UL_editGama($parameters[1]);
        break;
    
    case 'modificarGama':
        $gama_control->UL_modifyGama($parameters[1],$_REQUEST);
        break;


    //PARA LOGUEAR O CREAR USUARIO NUEVO

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

    case 'loginOut':
        $user_control->logout();
        break;
    //FIN








}