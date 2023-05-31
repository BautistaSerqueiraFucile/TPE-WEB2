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
        $respuesta = $this->db->prepare( 'INSERT INTO pc (id_pc, motherboard, processor, video, description_pc, RAM, id_gama) value(?,?,?,?,?,?,?)' );
        $respuesta->execute( array( '', $pc[ 'motherboard' ], $pc[ 'procesor' ],$pc[ 'video' ],$pc[ 'description_pc' ],$pc[ 'RAM' ],$pc[ 'id_gama' ] ) );
    }

    function putPc($pc){
        $respuesta = $this->db->prepare( 'UPDATE pc SET motherboard=? SET processor=? SET video=? SET description_pc=? SET RAM=? SET id_gama=? WHERE (id_pc= ?)' );
        $respuesta->execute(array( $pc[ 'motherboard' ], $pc[ 'processor' ],$pc[ 'video' ],$pc[ 'description_pc' ],$pc[ 'RAM' ],$pc[ 'id_gama' ],$pc[ 'id_pc' ] ));
    }

    function deletetPc($pc){
        $respuesta = $this->db->prepare( 'DELETE FROM pc WHERE id_pc=?' );
        $respuesta->execute( array( $pc['id_pc'] ) );
    }
    
    function deletePcByGama($gama){
        $respuesta = $this->db->prepare( 'DELETE FROM pc WHERE id_gama=?' );
        $respuesta->execute( array( $gama) );
    }
}