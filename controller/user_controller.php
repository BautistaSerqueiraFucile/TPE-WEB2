<?php

require_once('view/user_view.php');
require_once('model/user_model.php');

class user_controller{
    private $user_view;
    private $user_model;

    function __construct(){
        $this->user_view = new user_view();
        $this->user_model = new user_model();
    }

    function showLogin(){
         
        $this->user_view->ViewForm();
    }

    function showCreateUser(){
         
        $this->user_view->ViewFormCreate();       

    }

    public function verifyUser() {
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = $this->user_model->getUser($username);
        
        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (($user) && password_verify($password, $user->user_password)) {
            
            // INICIO LA SESSION Y LOGUEO AL USUARIO
            session_start();
            $_SESSION['id_user'] = $user->id_user;
            $_SESSION['username'] = $user->username;
            
            header('Location: home');
        } else {
            echo "entre a usuario incorrecto";
            $this->user_view->ViewForm("LOGIN INCORRECTO");
        }
    }

    public function createUser() {
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $hash = password_hash($password, PASSWORD_DEFAULT);
        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($username) && !empty($hash)) {
            $this->user_model->postUser($hash);

            header('Location: login');
        } else {
            $this->user_view->ViewForm("complete todos los campos");
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . LOGIN);
    }
}