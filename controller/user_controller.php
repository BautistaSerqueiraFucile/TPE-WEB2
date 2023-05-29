<?php

require_once('view/user_view.php');

class user_controller{
    private $user_view;
    private $gama_model;

    function __construct(){
        $this->user_view = new user_view();
        $this->gama_model = new gama_model();
    }

    function showLogin($url){
        $this->user_view->ViewForm($url);
    }
}