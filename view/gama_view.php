<?php
require_once ('libs/smarty/Smarty.class.php');

class gama_view {
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function viewAllGama($gama,$URL) {

        $this->smarty->assign('url', $URL);                
        $this->smarty->assign('gama_arreglo', $gama);      
        
        $this->smarty->display('templates/gama_viewAll.tpl');
    }
}