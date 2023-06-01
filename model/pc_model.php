<?php

class pc_model{

    private $db;
    private $id_gama;

    function __construct(){
        $this->id_gama = "";
        $this->db = new PDO("mysql:host=localhost;"."dbname=db_pcshop;charset:utf8","root","");
    }

    // funcion para obtener datos de pc en conjunto con gama
    function GetAllPc(){
        $sentencia = $this->db->prepare('SELECT * FROM pc join gama on pc.id_gama = gama.id_gama');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
        
    }

    // funcion para obtener datos de una pc en conjunto con gama
    function GetPcById($id){
        $sentencia = $this->db->prepare('SELECT * FROM pc JOIN gama on pc.id_gama = gama.id_gama WHERE pc.id_pc=?');
        $sentencia->execute(array($id));
        return ($sentencia->fetch(PDO::FETCH_OBJ)); 
    }

    // funcion para obtener datos de pc por conjunto de gama
    function GetPcByGama($gama){
        $sentencia = $this->db->prepare('SELECT * FROM pc JOIN gama on pc.id_gama = gama.id_gama WHERE pc.id_gama=?');
        $sentencia->execute(array($gama));
        return ($sentencia->fetchAll(PDO::FETCH_OBJ)); 
    }



    //-----------------------------------------------------------------------------
    function postPc($pc){
        $respuesta = $this->db->prepare( 'INSERT INTO pc (id_pc, motherboard, processor, video, RAM, id_gama) value(?,?,?,?,?,?,?)' );
        $respuesta->execute( array( '', $pc[ 'motherboard' ], $pc[ 'procesor' ],$pc[ 'video' ],$pc[ 'description_pc' ],$pc[ 'RAM' ],$pc[ 'gama' ] ) );
    }

    function putPc($id_pc,$pc){        
        $respuesta = $this->db->prepare( 'UPDATE pc SET motherboard=?, processor=?, video=?, RAM=?, id_gama=? WHERE (id_pc= ?)' );
        $respuesta->execute(array( $pc[ 'motherboard' ], $pc[ 'processor' ],$pc[ 'video' ],$pc[ 'RAM' ], $pc[ 'gama' ],$id_pc));
    }

    function deletePc($id_pc){
        $respuesta = $this->db->prepare( 'DELETE FROM pc WHERE id_pc=?' );
        $respuesta->execute( array( $pc) );
    }
    
    function deletePcByGama($id_gama){
        $respuesta = $this->db->prepare( 'DELETE FROM pc WHERE id_gama=?' );
        $respuesta->execute( array( $gama) );
    }

    function searchPc($id_pc) {
        $respuesta = $this->db->prepare( 'SELECT * FROM pc JOIN gama on (pc.id_gama=gama.id_gama) WHERE (id_pc=?)' );
        $respuesta->execute( array($id_pc));    
        return ($respuesta->fetch( PDO::FETCH_OBJ ) );
    }
}