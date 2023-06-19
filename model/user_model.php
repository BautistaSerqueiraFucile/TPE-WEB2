<?php

class user_model
{

    private $db;

    public function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_pcshop;charset:utf8', 'root', '');
    }

    function getUser($username)
    {
        $respuesta = $this->db->prepare('SELECT * FROM user WHERE username=?');
        $respuesta->execute(array($username));
        return $respuesta->fetch(PDO::FETCH_OBJ);
    }

    function postUser($hash)
    {
        $respuesta = $this->db->prepare('INSERT INTO user (username, user_password) VALUE (?,?)');
        return $respuesta->execute(array($_REQUEST['username'], $hash));
    }

}