<?php

class cbModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCBs($cond=''){

        $sj = $this->_db->query("SELECT cb.Id_cb, Nom_cb, Nom_cond 
                                    FROM calle_block cb
                                    LEFT JOIN condominio co ON (co.Id_cond = cb.Id_cond)
                                    $cond 
                                    ORDER BY cb.Id_cb ASC");
        return $sj->fetchAll();
    }
    
    public function getCondsGestorCB($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorCB($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getCBConds(){
        
         $t = $this->_db->query("select * from condominio");
        return $t->fetchAll();
    }
    
    public function getCBCond($id=false){

        $c = $this->_db->query("SELECT Id_cond, Nom_cond
                                FROM condominio 
                                WHERE Id_cond = (
                                    SELECT u.Id_cond
                                    FROM usuario u
                                    LEFT JOIN persona p ON ( p.Id_per = u.Id_per )
                                    WHERE u.Id_usu =$id
                                )");
        return $c->fetchAll();
    }
        
    public function newCB($nom = false, $cond = false){    
                
        $this->_db->prepare(
                "INSERT INTO calle_block VALUES" . 
                "(null,:Nom_cb, :Id_cond)"               
                )
                ->execute(array(
                    ':Nom_cb' => $nom,                  
                    ':Id_cond' => $cond
                ));
    }
    
    public function getIdCB($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT Id_cb
                                 FROM calle_block 
                                 WHERE Id_cb={$id}");
        return $tp->fetch();
    }
    
    public function getIdCondCB($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getDatosCB($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT * 
                                 FROM calle_block cb
                                 LEFT JOIN condominio co ON (co.Id_cond = cb.Id_cond)
                                 WHERE cb.Id_cb={$id}");
        return $tp->fetch();
    }
    
    public function editarCB($idc=false, $nom=false, $cond=false){
        
        $id = (int) $idc;
        $this->_db->prepare("UPDATE calle_block SET Nom_cb = :nom, Id_cond = :cond WHERE Id_cb = :id")
        ->execute(array(
            ':id' => $id,
            ':nom' => $nom,
            ':cond' => $cond
        ));
    }
    
    public function eliminarCB($idc = false){
        
        $id = (int) $idc;
        $this->_db->query("delete from calle_block " .
                          "where Id_cb=$id");
    }
}
?>
