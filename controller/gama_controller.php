<?php

require_once 'model/gama_model.php';
require_once 'view/gama_view.php';
require_once 'view/auxiliar_view.php';


class gama_controller
{

    private $gama_model;

    private $gama_view;

    private $auxiliar_view;

    public function __construct()
    {

        $this->gama_model = new gama_model();

        $this->gama_view = new gama_view();
        
        $this->auxiliar_view = new auxiliar_view();
    }

    private function checkLoggedIn()
    {
        session_start();
        return (isset($_SESSION['id_user']));
    }

    //VISTA --

    public function showAllGama()
    {
        $gamas = $this->gama_model->getAllGama();
        if ($gamas) {
            if ($this->checkLoggedIn()) {
                $this->gama_view->UL_viewAllGama($gamas);
            } else {
                $this->gama_view->viewAllGama($gamas);
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

    public function UL_editGama($id_gama)
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            $elemento = $this->gama_model->searchGama($id_gama);
            if ($elemento) {                
                $this->gama_view->UL_viewEditGama($gamas, $elemento);    
            }
            else{
                $this->auxiliar_view->mensaje("No se encontro elemento",$gamas,"gamas");
            }            
        } else
            header('location: ' . LOGIN);
    }

    public function UL_showAltaGama()
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            $this->gama_view->UL_viewAltaGama($gamas);
        } else
            header('location: ' . LOGIN);
    }



    // ABM --

    public function UL_modifyGama($elemento, $gama)
    {
        
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            if ($this->gama_model->putGama($elemento, $gama)) {
                $this->auxiliar_view->mensaje("Se modifico una gama correctamente",$gamas,"gamas");            
            }
            else {
                $this->auxiliar_view->mensaje("Ocurrio un error al modificar GAMA",$gamas,"gamas");            
            }
            
        } else
            header('location: ' . LOGIN);
    }

    public function UL_confirmDeleteGama($elemento)
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            $this->auxiliar_view->confirmacion("Confirmar para eliminar la gama y sus elementos", $gamas, "eliminarGama/".$elemento, "gamas");
        } else
            header('location: ' . LOGIN);
    }


    public function UL_deleteGama($elemento)
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            if ($this->gama_model->deleteGama($elemento)) {
                $this->auxiliar_view->mensaje("Se elimino correctamente",$gamas,"gamas");            
            }
            else{
                $this->auxiliar_view->mensaje("Ocurrio un error al eliminar GAMA",$gamas,"gamas");            
            }
            
        } else
            header('location: ' . LOGIN);
    }

   
    public function UL_CreateGama($query)
    {        
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            $existe = $this->gama_model->searchGamaByName($query['name']);
            if (!$existe) {
                if ($this->gama_model->postGama($query)) {
                    $this->auxiliar_view->mensaje("Se Agrego una gama nueva correctamente",$gamas,"gamas");
                }
                else {
                    $this->auxiliar_view->mensaje("Ocurrio un error al crear una nueva gama GAMA",$gamas,"gamas");
                }    
            }
            else {
                $this->auxiliar_view->mensaje("La GAMA ya esxiste, NO se puede crear",$gamas,"gamas");
            } 
            
        } else
            header('location: ' . LOGIN);
    }
}