<?php 

class gama_model{
    private $db;

    function __construct(){
        $this->db = new PDO("mysql:host=localhost;"."dbname=db_pcshop;charset:utf8","root","");
    }

    // funcion para obtener datos de gama 
    function getAllGama(){
        $sentencia = $this->db->prepare("SELECT * FROM gama");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}