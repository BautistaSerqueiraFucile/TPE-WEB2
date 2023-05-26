<?php
require_once 'libs/smarty/Smarty.class.php';

class gama_view() {
    private $smarty;

    function __construct(){
        $this->$smarty = new Smarty();
    }

    function gamaAllView( ) {

        $smarty->assign("a","variable a");
        $smarty->display('templates/gama_viewAll.tpl');
    }

    function prueba(){
        echo "hola";
    }
}