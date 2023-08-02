<?php

class indexModel extends Model {

    public function __construct() {
        parent::__construct();
    }    
    
    public function getReg(){
        
         $c = $this->_db->query("select * from region");
         $c->setFetchMode(PDO::FETCH_ASSOC);
         return $c->fetchAll();
    }
    
    public function getCiu($reg = false){
        
        $c = $this->_db->query("SELECT Id_ciu, Nom_ciu 
                                FROM ciudad c
                                LEFT JOIN region r ON (r.Id_reg = c.Id_reg)
                                WHERE Cod_reg = $reg");
        $c->setFetchMode(PDO::FETCH_ASSOC);
        return $c->fetchAll();
    }
    
}