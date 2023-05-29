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

    // mostrar todas las pc
    public function showAllPc($URL){
        $pc = $this->pc_model->GetAllPc();
        $gama = $this->gama_model->getAllGama();                
        $this->pc_view->viewAllPc( $pc, $gama, $URL);
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
}