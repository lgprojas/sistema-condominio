<?php

class indexModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getInfos($condicion =''){

        $sj = $this->_db->query("SELECT Id_info, Nom_info, Fch_cinfo, Fch_tinfo, Nom_cond
                                 FROM informacion i
                                 LEFT JOIN condominio co ON(co.Id_cond=i.Id_cond)
                                 $condicion
                                    ORDER BY Fch_cinfo DESC");
        return $sj->fetchAll();
    }
    
    public function getCondInfo(){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $per->fetchAll();
    }
    
    public function getIdCondInfo($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCondsGestorInfo($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorInfo($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
        
    public function newInfo($nom=false,$desc=false,$fchi=false,$fcht=false,$adj=false,$idusu=false,$cond=false){    
                
        $this->_db->prepare(
                "INSERT INTO informacion VALUES" . 
                "(NULL,:Nom_info, :Desc_info, NOW(), :Fch_cinfo, :Fch_tinfo, :Adj_info, :Id_usu, :Id_cond)"               
                )
                ->execute(array(
                    ':Nom_info' => $nom,
                    ':Desc_info' => $desc,
                    ':Fch_cinfo' => !empty($fchi) ? $fchi : NULL,
                    ':Fch_tinfo' => !empty($fcht) ? $fcht : NULL,
                    ':Adj_info' => !empty($adj) ? $adj : NULL,
                    ':Id_usu' => $idusu,
                    ':Id_cond' => $cond
                ));
    }
    
    public function getIdInfo($idi = false){
       
        $id = (int) $idi;
        $tp = $this->_db->query("SELECT Id_info
                                 FROM informacion 
                                 WHERE Id_info={$id}");
        return $tp->fetch();
    }
    
    public function getDatosInfo($idi = false){
       
        $id = (int) $idi;
        $tp = $this->_db->query("SELECT i.*, Nom_cond 
                                 FROM informacion i
                                 LEFT JOIN condominio co ON(co.Id_cond=i.Id_cond)
                                 WHERE Id_info={$id}");
        return $tp->fetch();
    }
    
    public function editInfo($nom=false,$desc=false,$fchi=false,$fcht=false,$idinfo=false,$cond=false){
        
        $id = (int) $idc;
        $this->_db->prepare("UPDATE informacion SET 
                                Nom_info = :nom, 
                                Desc_info = :desc, 
                                Fch_cinfo = :cfch,
                                Fch_tinfo = :tfch,   
                                Id_cond = :cond
                             WHERE Id_info = :id")
        ->execute(array(
            ':id' => $idinfo,
            ':nom' => $nom,
            ':desc' => $desc,
            ':cfch' => $fchi,
            ':tfch' => $fcht,
            ':cond' => $cond
        ));
    }
    
    public function delFileEdit($idinfo=false){
        
        $this->_db->prepare(
                "UPDATE informacion SET 
                    Adj_info = :Adj_info
                WHERE Id_info = $idinfo"                              
                )
                ->execute(array(
                    ':Adj_info' => NULL
                ));
    }
    
    public function addFileEdit($idinfo=false, $file=false){
        
        $this->_db->prepare(
                "UPDATE informacion SET 
                    Adj_info = :Adj_info
                WHERE Id_info = $idinfo"                              
                )
                ->execute(array(
                    ':Adj_info' => $file
                ));
    }
    
    public function eliminarInfo($idc = false){
        
        $id = (int) $idc;
        $this->_db->query("delete from informacion " .
                          "where Id_info=$id");
    }
}
?>
