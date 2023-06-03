<?php

require_once ('libs/smarty/Smarty.class.php');

class user_view{
    private $smarty;

    function __construct(){
        $this->smarty = new smarty();
    }

    public function ViewForm($error = null){
        $this->smarty->assign('url', URL);        
        $this->smarty->assign('title', 'Form');        
        $this->smarty->assign('error', $error);        
        $this->smarty->display('templates/login.tpl');
    }


    public function ViewFormCreate($error = null){
        $this->smarty->assign('url', URL);        
        $this->smarty->assign('title', 'Form');        
        $this->smarty->assign('error', $error);        
        $this->smarty->display('templates/createUser.tpl');
    }

}