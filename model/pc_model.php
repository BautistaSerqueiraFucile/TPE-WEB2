<?php

class pc_model{

    private $db;
    private $id_gama;

    function __construct(){
        $this->id_gama = "";
        $this->db = new PDO("mysql:host=localhost;"."dbname=db_pcshop;charset:utf8","root","");
    }

    function GetAllPc(){
        $sentencia = $this->db->prepare('SELECT * FROM pc join gama on pc.id_gama = gama.id_gama');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
        
    }

    function GetPcById($id){
        $sentencia = $this->db->prepare('SELECT * FROM pc JOIN gama WHERE pc.id_pc=?');
        $sentencia->execute(array($id));
        return ($sentencia->fetch(PDO::FETCH_OBJ)); 
    }
}