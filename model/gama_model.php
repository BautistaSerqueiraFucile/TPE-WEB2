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

    function postGama($gama){
        $respuesta = $this->db->prepare( 'INSERT INTO gama (id_gama, name_gama, description_gama) value(?,?,?)' );
        return $respuesta->execute( array( '', $gama[ 'name' ], $gama[ 'description_gama' ] ) );
    }

    function putGama($elemento, $gama){
        $respuesta = $this->db->prepare( 'UPDATE gama SET name_gama=?, description_gama=? WHERE (id_gama=?)');
        return $respuesta->execute(array($gama[ 'name_gama' ],$gama[ 'description_gama' ], $elemento));
    }

    function deleteGama($gama){
        $respuesta = $this->db->prepare( 'DELETE FROM gama WHERE id_gama=?' );
        return $respuesta->execute( array( $gama) );
    }

    function searchGama($gama) {
        $respuesta = $this->db->prepare( 'SELECT * FROM gama WHERE (id_gama=?)' );
        $respuesta->execute( array($gama));    
        return ($respuesta->fetch( PDO::FETCH_OBJ ) );
    }

    function searchGamaByName($gama) {
        $respuesta = $this->db->prepare( 'SELECT * FROM gama WHERE (name_gama=?)' );
        $respuesta->execute( array($gama));    
        return ($respuesta->fetch( PDO::FETCH_OBJ ) );
    }




}