<?php

require_once ('libs/smarty/Smarty.class.php');

class user_view{
    private $smarty;

    function __construct(){
        $this->smarty = new smarty();
    }

    public function ViewForm($gamas,$url){
        $this->smarty->assign('url', $url);
        $this->smarty->assign('title', 'Form');
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/login.tpl');
    }
}