<?php

require_once('view/user_view.php');
require_once('model/user_model.php');
require_once 'view/auxiliar_view.php';

class user_controller{
    private $user_view;
    private $user_model;
    private $auxiliar_view;

    function __construct(){
        $this->user_view = new user_view();
        $this->user_model = new user_model();
        $this->auxiliar_view = new auxiliar_view();
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
            $this->auxiliar_view->auxiliar_user("Usuario no coincide/contraseña incorrecta"); 
        }
    }

    public function createUser() {
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        if (!empty($username) && !empty($hash)) {
            if ($this->user_model->postUser($hash)) {
                $this->auxiliar_view->auxiliar_user("Se creo usuario correctamente"); 
            }
            else {
                $this->auxiliar_view->auxiliar_user("Error en la creacion de usuario"); 
            }
        } else {
            $this->user_view->ViewForm("complete todos los campos");
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . HOME);
    }
}