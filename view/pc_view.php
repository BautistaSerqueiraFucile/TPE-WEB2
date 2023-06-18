<?php
require_once ('libs/smarty/Smarty.class.php');

class pc_view{
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
    }

    // funcion para dar vista a todas las pcs
    function viewAllPc($pc, $gamas){
        $this->smarty->assign('url', URL);
        $this->smarty->assign('title', 'Home');          
        $this->smarty->assign('pc_arreglo', $pc);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/pc_viewAll.tpl');
    }

    // funcion para dar vista a la pc elegida en detalle
    function ViewDetailPc($id, $pc, $gamas){
        $this->smarty->assign('url', URL);
        $this->smarty->assign('title', $id);
        $this->smarty->assign('pc', $pc);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/pc_detail.tpl');
    }

    // funcion para dar vista a todas las pcs por sus gamas
    function viewPcByGama($pc, $gamas){
        $this->smarty->assign('url', URL);             
        $this->smarty->assign('pc_arreglo', $pc);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/pc_viewByGama.tpl');
    }

    function UL_ViewDetailPc($id, $pc, $gamas){
        $this->smarty->assign('url', URL);
        $this->smarty->assign('title', $id);
        $this->smarty->assign('pc', $pc);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/UL_pc_detail.tpl');
    }

    function UL_viewAllPc($pc, $gamas){
        $this->smarty->assign('url', URL);
        $this->smarty->assign('title', 'Home');          
        $this->smarty->assign('pc_arreglo', $pc);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/UL_pc_viewAll.tpl');
    }

    function UL_viewEditPc($gamas, $elemento){
        $this->smarty->assign('url', URL);        
        $this->smarty->assign('elemento', $elemento);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/UL_pc_edit.tpl');
    }

    function UL_viewPcByGama($pc, $gamas){
        $this->smarty->assign('url', URL);             
        $this->smarty->assign('pc_arreglo', $pc);
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/UL_pc_viewByGama.tpl');
    }

    function UL_viewAltaPc($gamas){
        $this->smarty->assign('url', URL);        
        $this->smarty->assign('gama_arreglo', $gamas);
        $this->smarty->display('templates/pc_templates/UL_pc_Create.tpl');
    }

}