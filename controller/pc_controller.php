<?php

require_once "model/gama_model.php";
require_once "model/pc_model.php";
require_once "view/pc_view.php";

class pc_controller{

    private $gama_model;
    private $pc_model;
    private $pc_view;

public function __construct(){

        $this->gama_model= new gama_model();
        $this->pc_model= new pc_model();
        $this->pc_view= new pc_view();

    }

    private function checkLoggedIn() {
        session_start();
        return ( isset( $_SESSION[ 'id_user' ] ) );
    }

    
    // mostrar todas las pc
    public function showAllPc(){
        $pc = $this->pc_model->GetAllPc();
        $gama = $this->gama_model->getAllGama();                
        $this->pc_view->viewAllPc( $pc, $gama);
    }
    
    // mostrar en detalle la pc elegida
    public function showDetailPc($id,$URL){
        $pc = $this->pc_model->GetPcById($id);
        $gama = $this->gama_model->getAllGama();  
        $this->pc_view->ViewDetailPc($id, $pc, $gama, $URL);
    }
    
    // mostrar las pc por gama
    public function showGamaPc($gama,$URL){
        $pc = $this->pc_model->GetPcByGama($gama);
        $gama = $this->gama_model->getAllGama();  
        $this->pc_view->viewPcByGama($pc, $gama, $URL);
    }


    public function UL_showAllPc(){
        var_dump();
        $pc = $this->pc_model->GetAllPc();
        $gama = $this->gama_model->getAllGama();                
        $this->pc_view->UL_viewAllPc( $pc, $gama, $URL);
    }
    
    public function UL_editPc($id_pc,$URL){
        $elemento = $this->pc_model->searchPc($id_pc);  
        $gamas = $this->gama_model->getAllGama();              
        $this->pc_view->UL_viewEditPc($gamas,$elemento, $URL);
    }

    public function UL_modifiePc($id_pc, $elemento){        
         $this->pc_model->putPc($id_pc, $elemento);          
    }

    public function UL_deletePc($elemento){
        $this->pc_model->deletePc($elemento); 
        
   }
   public function UL_viewPcByGama($gama,$URL){
    $pc = $this->pc_model->GetPcByGama($gama);
    $gama = $this->gama_model->getAllGama();  
    $this->pc_view->UL_viewPcByGama($pc, $gama, $URL);
}
   

}
