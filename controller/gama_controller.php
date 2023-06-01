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

    public function UL_showAllGama($URL){
        $gamas = $this->gama_model->getAllGama();                
        $this->gama_view->UL_viewAllGama($gamas, $URL);
    }

    public function UL_editGama($id_gama,$URL){
        $elemento = $this->gama_model->searchGama($id_gama);  
        $gamas = $this->gama_model->getAllGama();              
        $this->gama_view->UL_viewEditGama($gamas,$elemento, $URL);
    }

    public function UL_modifieGama($elemento, $gama){
         $this->gama_model->putGama($elemento, $gama); 
         
    }
    public function UL_deleteGama($elemento){
        $this->gama_model->deleteGama($elemento);         
   }

   public function UL_showAltaGama($URL){
        $gama = $this->gama_model->getAllGama();  
        $this->gama_view->UL_viewAltaGama($gama, $URL);
   }

   public function UL_CreateGama($query){
        $this->gama_model->postGama($query);
   }
}