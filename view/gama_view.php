<?php
require_once ('libs/smarty/Smarty.class.php');

class gama_view {
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

// funcion para hacer la vista de las gamas    
function viewAllGama($gamas,$URL) {

        $this->smarty->assign('url', $URL);                
        $this->smarty->assign('gama_arreglo', $gamas);      
        
        $this->smarty->display('templates/gama_viewAll.tpl');
    }
    
    function UL_viewAllGama($gamas,$URL) {

        $this->smarty->assign('url', $URL);                
        $this->smarty->assign('gama_arreglo', $gamas);     
        
        $this->smarty->display('templates/UL_gama_viewAll.tpl');
    }

    function UL_viewEditGama($gamas, $elemento,$URL) {

        $this->smarty->assign('url', $URL);                
        $this->smarty->assign('elemento', $elemento);  
        $this->smarty->assign('gama_arreglo', $gamas);    
        
        $this->smarty->display('templates/UL_gama_edit.tpl');
    }


    
}