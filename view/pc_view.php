<?php
require_once ('libs/smarty/Smarty.class.php');

class pc_view{
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    function viewAllPc($pc, $aside, $URL){
        $this->smarty->assign('url', $URL);
        $this->smarty->assign('title', 'Home');          
        $this->smarty->assign('pc_arreglo', $pc);
        $this->smarty->assign('gama_arreglo', $aside);
        $this->smarty->display('templates/pc_viewAll.tpl');
    }

    function ViewDetailPc($id, $pc, $aside, $URL){
        $this->smarty->assign('url', $URL);
        $this->smarty->assign('title', $id);
        $this->smarty->assign('pc', $pc);
        $this->smarty->assign('gama_arreglo', $aside);
        $this->smarty->display('templates/pc_detail.tpl');
    }
}