<?php

require_once 'model/gama_model.php';
require_once 'view/gama_view.php';

class gama_controller {

    private $gama_model;

    private $gama_view;

    public function __construct() {

        $this->gama_model = new gama_model();

        $this->gama_view = new gama_view();
    }

    private function checkLoggedIn() {
        session_start();
        return ( isset( $_SESSION[ 'id_user' ] ) );
    }

    public function showAllGama( $URL ) {
        
        $gamas = $this->gama_model->getAllGama();

        if ( $this->checkLoggedIn() ) {
            $this->gama_view->UL_viewAllGama( $gamas, $URL );
        } else {
            $this->gama_view->viewAllGama( $gamas, $URL );

        }

    }

    public function UL_editGama( $id_gama, $URL ) {
        $gamas = $this->gama_model->getAllGama();

        if ( $this->checkLoggedIn() ) {
            $elemento = $this->gama_model->searchGama( $id_gama );
            $this->gama_view->UL_viewEditGama( $gamas, $elemento, $URL );
        }
        else
        header( 'location: LOGIN' );
        
        

        

        
    }

    public function UL_modifieGama( $elemento, $gama ) {
        $this->gama_model->putGama( $elemento, $gama );

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