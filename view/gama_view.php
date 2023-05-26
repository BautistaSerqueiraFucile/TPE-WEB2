<?php
require_once ('libs/smarty/Smarty.class.php');

class gama_view {
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function gamaAllView( ) {
        $this->smarty->assign("a","juansito");
        $this->smarty->display('templates/gama_viewAll.tpl');
    }
}