<?php
require_once ('libs/smarty/Smarty.class.php');

class pc_view{
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    function viewAllPc($pc){
        $this->smarty->assign('arreglo', $pc);
        $this->smarty->display('templates/pc_viewAll.tpl');
    }
}