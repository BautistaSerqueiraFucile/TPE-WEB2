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

    // checkeo de logeo
    private function checkLoggedIn() {
        session_start();
        return ( isset( $_SESSION[ 'id_user' ] ) );
    }

    // VISTAS --
    
    // mostrar todas las pc y si esta logueado vista administrador
    public function showAllPc(){
        $pc = $this->pc_model->GetAllPc();
        $gama = $this->gama_model->getAllGama();                
        if ($this->checkLoggedIn()) {
            $this->pc_view->UL_viewAllPc($pc, $gama);
        } else {
            $this->pc_view->viewAllPc( $pc, $gama);
        }
        
    }
    
    // mostrar en detalle la pc elegida
    public function showDetailPc($id){
        $pc = $this->pc_model->GetPcById($id);
        $gama = $this->gama_model->getAllGama();  
        $this->pc_view->ViewDetailPc($id, $pc, $gama);
    }
    
    // mostrar las pc por gama y si esta logueado vista administrador
    public function showGamaPc($gama,){
        $pc = $this->pc_model->GetPcByGama($gama);
        $gama = $this->gama_model->getAllGama();
        if ($this->checkLoggedIn()) {
            $this->pc_view->UL_viewPcByGama($pc, $gama);
        } else {
            $this->pc_view->viewPcByGama($pc, $gama);
        }

    }

    // editar pc si esta logueado, si no redirigir a login
    public function UL_editPc($id_pc){
        if ($this->checkLoggedIn()) {
            $elemento = $this->pc_model->searchPc($id_pc);  
            $gamas = $this->gama_model->getAllGama();              
            $this->pc_view->UL_viewEditPc($gamas,$elemento);
        }
        else {
            header('location:' . LOGIN);
        }
    }

     // agregar pc si esta logueado, si no redirigir a login
     public function UL_showAltaPc(){
        if ($this->checkLoggedIn()) {
            $gama = $this->gama_model->getAllGama();  
            $this->pc_view->UL_viewAltaPc($gama);
        } else {
            header('location:' . LOGIN);
        }
    }

    // editar pc si esta logueado, si no redirigir a login
    public function UL_modifiePc($id_pc, $elemento){
        if ($this->checkLoggedIn()) {
            $this->pc_model->putPc($id_pc, $elemento);
            header('location:' . HOME);           
        } else {
            header('location:' . LOGIN);
        }        
    }


    

    // ABM --

    // eliminar pc si esta logueado, si no redirigir a login
    public function UL_deletePc($elemento){
        if ($this->checkLoggedIn()) {
            $this->pc_model->deletePc($elemento);
            header('location:' . HOME); 
        } else {
            header('location:' . LOGIN);
        }
        
   }
 
    // agregar pc si esta logueado, si no redirigir a login
    public function UL_CreatePc($query){
        if ($this->checkLoggedIn()) {
            $this->pc_model->postPc($query);
            header('location:' . HOME); 
        } else {
            header('location:' . LOGIN);
        }
    }
   
}
