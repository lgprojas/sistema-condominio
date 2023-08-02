<?php

class condModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getConds(){

        $sj = $this->_db->query("SELECT co.Id_cond, Nom_cond, Nom_inm, Nom_ciu 
                                    FROM condominio co
                                    LEFT JOIN inmobiliaria i ON (i.Id_inm = co.Id_inm)
                                    LEFT JOIN ciudad c ON (c.Id_ciu = co.Id_ciu)
                                    ORDER BY co.Id_cond ASC");
        return $sj->fetchAll();
    }
    
    public function getInm(){
        
         $t = $this->_db->query("select * from inmobiliaria");
        return $t->fetchAll();
    }
    
    public function getCiu(){
        
         $t = $this->_db->query("select * from ciudad");
        return $t->fetchAll();
    }  
        
    public function newCond($nom = false, $dir = false, $inm = false, $ciu = false){    
                
        $this->_db->prepare(
                "INSERT INTO condominio VALUES" . 
                "(null,:Nom_cond, :Dir_cond, :Id_inm, :Id_ciu)"               
                )
                ->execute(array(
                    ':Nom_cond' => $nom,
                    ':Dir_cond' => $dir,
                    ':Id_inm' => $inm,
                    ':Id_ciu' => $ciu
                ));
    }
    
    public function getIdCond($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT Id_cond
                                 FROM condominio 
                                 WHERE Id_cond={$id}");
        return $tp->fetch();
    }
    
    public function getDatosCond($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT * 
                                 FROM condominio co
                                 LEFT JOIN inmobiliaria i ON (i.Id_inm = co.Id_inm)
                                 LEFT JOIN ciudad c ON (c.Id_ciu = co.Id_ciu)
                                 WHERE co.Id_cond={$id}");
        return $tp->fetch();
    }
    
    public function editarCond($idc=false, $nom=false, $dir=false, $inm=false, $ciu=false){
        
        $id = (int) $idc;
        $this->_db->prepare("UPDATE condominio SET Nom_cond = :nom, Dir_cond = :dir, Id_inm = :inm, Id_ciu = :ciu WHERE Id_cond = :id")
        ->execute(array(
            ':id' => $id,
            ':nom' => $nom,
            ':dir' => $dir,
            ':inm' => $inm,
            ':ciu' => $ciu
        ));
    }
    
    public function eliminarCond($idc = false){
        
        $id = (int) $idc;
        $this->_db->query("delete from condominio " .
                          "where Id_cond=$id");
    }
    
    public function getDatosConfigCond($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT Nom_cond, cc.Id_tv, Nom_tv 
                                 FROM config_cond cc
                                 LEFT JOIN tipo_vot tv ON (tv.Id_tv = cc.Id_tv)
                                 LEFT JOIN condominio co ON (co.Id_cond = cc.Id_cond)
                                 WHERE cc.Id_cond={$id}");
        return $tp->fetch();
    }
    
    public function getTipoVot(){
        
         $t = $this->_db->query("select * from tipo_vot");
        return $t->fetchAll();
    }
    
    public function getIdCondInConfig($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT Id_cond
                                 FROM config_cond 
                                 WHERE Id_cond={$id}");
        return $tp->fetch();
    }
    
    public function addConfigCond($id=false, $tipovot=false){    
                
        $this->_db->prepare(
                "INSERT INTO config_cond VALUES" . 
                "(null,:Id_cond, :Id_tv)"               
                )
                ->execute(array(
                    ':Id_cond' => $id,
                    ':Id_tv' => $tipovot                    
                ));
    }
    
    public function editarConfigCond($idc=false, $tipovot=false){
        
        $id = (int) $idc;
        $this->_db->prepare("UPDATE config_cond SET Id_tv = :tipovot WHERE Id_cond = :id")
        ->execute(array(
            ':id' => $id,
            ':tipovot' => $tipovot
        ));
    }
}
?>
