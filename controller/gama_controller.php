<?php

require_once 'model/gama_model.php';
require_once 'view/gama_view.php';

class gama_controller
{

    private $gama_model;

    private $gama_view;

    public function __construct()
    {

        $this->gama_model = new gama_model();

        $this->gama_view = new gama_view();
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
        if ($this->checkLoggedIn()) {
            $this->gama_view->UL_viewAllGama($gamas);
        } else {
            $this->gama_view->viewAllGama($gamas);
        }

    }

    public function UL_editGama($id_gama)
    {
        if ($this->checkLoggedIn()) {
            $gamas = $this->gama_model->getAllGama();
            $elemento = $this->gama_model->searchGama($id_gama);
            $this->gama_view->UL_viewEditGama($gamas, $elemento);
        } else
            header('location: ' . LOGIN);
    }

    public function UL_showAltaGama()
    {
        if ($this->checkLoggedIn()) {
            $gama = $this->gama_model->getAllGama();
            $this->gama_view->UL_viewAltaGama($gama);
        } else
            header('location: ' . LOGIN);
    }



    // ABM --

    public function UL_modifyGama($elemento, $gama)
    {

        if ($this->checkLoggedIn()) {
            $this->gama_model->putGama($elemento, $gama);
            header('location:' . HOME); 
        } else
            header('location: ' . LOGIN);
    }

    public function UL_deleteGama($elemento)
    {
        if ($this->checkLoggedIn()) {
            $this->gama_model->deleteGama($elemento);
            header('location:' . HOME); 
        } else
            header('location: ' . LOGIN);
    }

   
    public function UL_CreateGama($query)
    {
        if ($this->checkLoggedIn()) {
            $this->gama_model->postGama($query);
            header('location:' . HOME); 
        } else
            header('location: ' . LOGIN);
    }
}