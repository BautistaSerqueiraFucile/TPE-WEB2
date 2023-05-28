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
        $this->pc_view->viewAllPc( $this->pc_model->GetAllPc(), $this->gama_model->getAllGama(), $URL);
    }
    
    // mostrar en detalle la pc elegida
    public function showDetailPc($id,$URL){
        $pc = $this->pc_model->GetPcById($id);
        $this->pc_view->ViewDetailPc($id, $pc, $this->gama_model->getAllGama(), $URL);
    }
    
    // mostrar las pc por gama
    public function showGamaPc($gama,$URL){
        $pc = $this->pc_model->GetPcByGama($gama);
        $this->pc_view->viewPcByGama($pc, $this->gama_model->getAllGama(), $URL);
    }
}