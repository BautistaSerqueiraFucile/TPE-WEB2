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

    public function showAllPc(){
                       
        $this->pc_view->viewAllPc( $this->pc_model->getAllPc(), $this->gama_model->getAllGama() );
    }  
}