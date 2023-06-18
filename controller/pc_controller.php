<?php

require_once "model/gama_model.php";
require_once "model/pc_model.php";
require_once "view/pc_view.php";
require_once 'view/auxiliar_view.php';

class pc_controller
{

    private $gama_model;
    private $pc_model;
    private $pc_view;
    private $auxiliar_view;

    public function __construct()
    {

        $this->gama_model= new gama_model();
        $this->pc_model= new pc_model();
        $this->pc_view= new pc_view();
        $this->auxiliar_view = new auxiliar_view();

    }

    // checkeo de logeo
    private function checkLoggedIn()
    {
        session_start();
        return (isset($_SESSION['id_user']));
    }

    // VISTAS --

    // mostrar todas las pc y si esta logueado vista administrador
    public function showAllPc()
    {
        $pc = $this->pc_model->GetAllPc();
        $gamas = $this->gama_model->getAllGama();  
        if ($pc) {
            if ($this->checkLoggedIn()) {
                $this->pc_view->UL_viewAllPc($pc, $gamas);
            } else {
                $this->pc_view->viewAllPc( $pc, $gamas);
            }    
        }  
        else {
            if ($this->checkLoggedIn()) {
                $this->auxiliar_view->UL_pc_gama_empty("Sin elementos",$gamas);     
            }
            else {
                $this->auxiliar_view->pc_gama_empty("Sin elementos",$gamas);     
            }
           
        }            
        
        
    }

    // mostrar en detalle la pc elegida
    public function showDetailPc($id)
    {
        $pc = $this->pc_model->GetPcById($id);
        $gamas = $this->gama_model->getAllGama(); 
        if (!empty($pc)) {
            if ($this->checkLoggedIn()) {
                $this->pc_view->UL_ViewDetailPc($id, $pc, $gamas);
            }            
            else{
                $this->pc_view->ViewDetailPc($id, $pc, $gamas);
            }    
        }  
        else {
            $this->auxiliar_view->mensaje("No se encontro el elemento",$gamas,"home");
        }      
        
    }

    // mostrar las pc por gama y si esta logueado vista administrador
    public function showGamaPc($gama){
        $pc = $this->pc_model->GetPcByGama($gama);
        $gamas = $this->gama_model->getAllGama();
        if (!empty($pc)) {
            if ($this->checkLoggedIn()) {
                $this->pc_view->UL_viewPcByGama($pc, $gamas);
            } else {
                $this->pc_view->viewPcByGama($pc, $gamas);
            }    
        }
        else {
            if ($this->checkLoggedIn()) {
                $this->auxiliar_view->UL_pc_gama_empty("Sin elementos",$gamas);     
            }
            else {
                $this->auxiliar_view->pc_gama_empty("Sin elementos",$gamas);     
            }
           
        }    
        

    }

    // editar pc si esta logueado, si no redirigir a login
    public function UL_editPc($id_pc)
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama(); 
            $elemento = $this->pc_model->searchPc($id_pc);  
            if (!empty($elemento)) {
                $this->pc_view->UL_viewEditPc($gamas,$elemento);    
            }
            else {
                $this->auxiliar_view->mensaje("No existe la pc que se quiere editar ",$gamas,"home");
            }
        }
        else {
            header('location:' . LOGIN);
        }
    }

    // agregar pc si esta logueado, si no redirigir a login
    public function UL_showAltaPc()
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();  
            $this->pc_view->UL_viewAltaPc($gamas);
        } else {
            header('location:' . LOGIN);
        }
    }

    // editar pc si esta logueado, si no redirigir a login
    public function UL_modifiePc($id_pc, $elemento){
        $gamas = $this->gama_model->getAllGama();  
        if ($this->checkLoggedIn()) {
            if($this->pc_model->putPc($id_pc, $elemento)){
                $this->auxiliar_view->mensaje("Se modifico correctamente",$gamas,"home");                      
            }
            else {
                $this->auxiliar_view->mensaje("Ocurrio un error y no se pudo modificar la PC",$gamas,"home");                      
            }
            
        } else {
            header('location:' . LOGIN);
        }
    }

    public function UL_confirmDeletePc($elemento)
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            $this->auxiliar_view->confirmacion("Confirmar para eliminar la gama y sus elementos", $gamas, "eliminarPc/".$elemento, "home");
        } else
            header('location: ' . LOGIN);
    }
    

    // ABM --

    // eliminar pc si esta logueado, si no redirigir a login
    public function UL_deletePc($elemento){
        $gamas = $this->gama_model->getAllGama();  
        if ($this->checkLoggedIn()) {
            if($this->pc_model->deletePc($elemento)){
                $this->auxiliar_view->mensaje("Se elimino correctamente",$gamas,"home");                      
            }else {
                $this->auxiliar_view->mensaje("Ocurrio un error al eliminar PC",$gamas,"home");                      
            }
            
        } else {
            header('location:' . LOGIN);
        }

    }

    // agregar pc si esta logueado, si no redirigir a login
    public function UL_CreatePc($query){
        $gamas = $this->gama_model->getAllGama();  
        if ($this->checkLoggedIn()) {
            if ($this->pc_model->postPc($query)) {
                $this->auxiliar_view->mensaje("Se creo una pc correctamente",$gamas,"home");                      
            }
            $this->auxiliar_view->mensaje("Ocurrio un error en la creacion de PC",$gamas,"home");                      
        } else {
            header('location:' . LOGIN);
        }
    }

}