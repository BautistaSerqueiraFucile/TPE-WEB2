<?php

class pc_model{

    private $db;
    private $id_gama;

    function __construct(){
        $this->id_gama = "";
        $this->db = new PDO("mysql:host=localhost;"."dbname=db_pcshop;charset:utf8","root","");
    }

    function getAllPc(){
        $sentencia = $this->db->prepare('SELECT * FROM pc join gama on pc.id_pc=gama.id_gama');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}