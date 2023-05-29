<?php

require_once "model/gama_model.php";
require_once "view/gama_view.php";

class gama_controller{

    private $gama_model;    
    private $gama_view;

public function __construct(){

        $this->gama_model= new gama_model();        
        $this->gama_view= new gama_view();
    }

    public function showAllGama($URL){
        $gamas = $this->gama_model->getAllGama();                
        $this->gama_view->viewAllGama($gamas, $URL);
    }
    
}