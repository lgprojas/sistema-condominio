<?php

class encuestaModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getEstResidencia($idper=false){
        
        $id = $this->_db->query("SELECT Id_estre
                                    FROM persona                                     
                                    WHERE Id_per = $idper
                                ");
        $est = $id->fetch(PDO::FETCH_ASSOC);
        return $est['Id_estre'];
    }
    
    public function getTipoRel($idper=false){
        
        $id = $this->_db->query("SELECT Id_trel
                                    FROM vivienda_persona                                     
                                    WHERE Id_per = $idper
                                    LIMIT 1
                                ");
        $est = $id->fetch(PDO::FETCH_ASSOC);
        return $est['Id_trel'];
    }
    
    public function getAllEncuUsu($condicion='') {
        
        $sql = $this->_db->query("SELECT *
                                  FROM encuesta e
                                  LEFT JOIN condominio co ON (co.Id_cond=e.Id_cond)
                                  $condicion
                                  ORDER BY Fchi_encu ASC
                            ");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
//    public function getAllEncu() {
//        
//        $sql = $this->_db->query("SELECT *
//                                  FROM encuesta e
//                                  LEFT JOIN condominio co ON (co.Id_cond=e.Id_cond)
//                                  ORDER BY Nom_cond ASC, Fchi_encu ASC 
//                            ");
//        return $sql->fetchAll(PDO::FETCH_ASSOC);
//    }
    
    public function getNameEncu($idencu=false, $cond=false){
        
        $id = $this->_db->query("SELECT Nom_encu
                                    FROM encuesta                                     
                                    WHERE Id_encu = $idencu
                                        AND Id_cond = $cond
                                ");
        $est = $id->fetch(PDO::FETCH_ASSOC);
        return $est['Nom_encu'];
    }
    
    public function getNameEncuAdmin($idencu=false){
        
        $id = $this->_db->query("SELECT Nom_encu
                                    FROM encuesta                                     
                                    WHERE Id_encu = $idencu
                                ");
        $est = $id->fetch(PDO::FETCH_ASSOC);
        return $est['Nom_encu'];
    }
    
    public function getAllItemEncu($idencu=false, $cond=false) {
        
        $sql = $this->_db->query("SELECT ie.*
                                  FROM encuesta e
                                  LEFT JOIN item_encuesta ie ON (ie.Id_encu = e.Id_encu)
                                  WHERE ie.Id_encu = $idencu
                                    AND Id_cond = $cond
                                  ORDER BY Id_iencu ASC 
                            ");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getCondEncu($idencu=false){
        
        $id = $this->_db->query("SELECT Id_cond
                                    FROM encuesta                                     
                                    WHERE Id_encu = $idencu
                                ");
        $est = $id->fetch(PDO::FETCH_ASSOC);
        return $est['Id_cond'];
    }
    
    public function getEstVotEncu($encu = false, $usu = false) {
        
        $id = $this->_db->query(
                "SELECT Id_iencu 
                 FROM votacion_encuesta                
                 WHERE Id_encu = $encu 
                 AND Id_usu = $usu
                ");
        if ($id->rowCount() > 0) {
            $var = $id->fetch(PDO::FETCH_ASSOC);
             return $var['Id_iencu'];
        }else{
            return 0;
        } 
    }
    
    public function getAllItemEncuAdmin($idencu=false) {
        
        $sql = $this->_db->query("SELECT ie.*
                                  FROM encuesta e
                                  LEFT JOIN item_encuesta ie ON (ie.Id_encu = e.Id_encu)
                                  WHERE ie.Id_encu = $idencu
                                  ORDER BY Id_iencu ASC 
                            ");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function addVotoEncuesta($usu=false, $encu=false, $iencu=false, $cond=false) {
        
        $this->_db->prepare("INSERT INTO votacion_encuesta (
                                  Id_ve,
                                  Fch_ve,
                                  Id_usu,
                                  Id_encu,
                                  Id_iencu,
                                  Id_cond
                                  ) VALUES (
                            NULL,
                            NOW(),
                            :Id_usu,
                            :Id_encu,
                            :Id_iencu,
                            :Id_cond
                            )")
                ->execute(array(
                    ':Id_usu' => $usu,
                    ':Id_encu' => $encu,
                    ':Id_iencu' => $iencu,
                    ':Id_cond' => $cond
                ));
    }
}
