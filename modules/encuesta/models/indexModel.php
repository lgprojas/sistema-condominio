<?php

class indexModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getIdCondUsu($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCond(){
        
        $b = $this->_db->query("select * from condominio");
        return $b->fetchAll();
    }
    
    public function getEncuestas($cond=false) {
        
        $sql = $this->_db->query("SELECT e.*, Nom_cond
                                  FROM encuesta e
                                  LEFT JOIN condominio co ON (co.Id_cond=e.Id_cond)
                                  $cond
                            ");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getCondsGestorEncu($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorEncu($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function addEncuesta($enc=false, $fcht=false, $cond=false) {
        
        $this->_db->prepare("INSERT INTO encuesta (
                                  Id_encu,
                                  Nom_encu,
                                  Fchi_encu,
                                  Fcht_encu,
                                  Id_cond
                                  ) VALUES (
                            NULL,
                            :Nom_encu, 
                            NOW(),
                            :Fcht_encu,
                            :Id_cond
                            )")
                ->execute(array(
                    ':Nom_encu' => $enc,
                    ':Fcht_encu' => !empty($fcht) ? $fcht : NULL,
                    ':Id_cond' => $cond
                ));
    
    }
    
    public function getEstEncu($id = false){

        $sql = $this->_db->query("SELECT Id_estencu    
                                FROM encuesta
                                WHERE Id_encu = $id
                                ");
        $est = $sql->fetch(PDO::FETCH_ASSOC);
        return $est['Id_estencu'];
    }
    
    public function editEstEncuesta($idencu = false, $estencu = false){
        
        $id = (int) $idencu;
        $est = (int) $estencu;
        $this->_db->query("UPDATE encuesta SET Id_estencu = $est " .
                          "WHERE Id_encu = $id");
    }
    
    public function editEncuesta($encu = false, $fcht = false, $cond = false, $idencu = false){
        
        $id = (int) $idencu;
        $this->_db->query("UPDATE encuesta SET 
                                  Nom_encu = '$encu', 
                                  Fcht_encu = '$fcht',
                                  Id_cond = $cond
                          WHERE Id_encu = $id");
    }
    
    public function verificarEncuesta($id = false){
        
        $sql = $this->_db->query(
                "SELECT Id_encu FROM encuesta where Id_encu = $id"
                );
        return $sql->fetch();
    }
    
    public function eliminarEncuesta($id = false){
        
        $this->_db->query("DELETE FROM encuesta WHERE Id_encu = $id");
    }
        
    public function getItemsEncu($idencu=false) {
        
        $sql = $this->_db->query("SELECT *
                                  FROM item_encuesta
                                  WHERE Id_encu = $idencu
                            ");
        return $sql->fetchAll();
    }
    
    public function getEstFileItem($iditem = false, $idencu = false){

        $sql = $this->_db->query("SELECT Adj_iencu   
                                  FROM item_encuesta                               
                                  WHERE Id_iencu = $iditem  
                                  AND Id_encu = $idencu ");

        $est = $sql->fetch(PDO::FETCH_ASSOC);
        return $est['Adj_iencu'];
    }
    
    public function addItemEncuesta($item=false, $idencu=false) {
        
        $this->_db->prepare("INSERT INTO item_encuesta (
                                  Id_iencu,
                                  Nom_iencu,
                                  Adj_iencu,
                                  Id_encu
                                  ) VALUES (
                            NULL,
                            :Nom_iencu, 
                            NULL,
                            :Id_encu
                            )")
                ->execute(array(
                    ':Nom_iencu' => $item,
                    ':Id_encu' => $idencu
                ));
    
    }
    
    public function editItemEncuesta($item = false, $iditem = false, $idencu = false){
        
        $id = (int) $idencu;
        $this->_db->query("UPDATE item_encuesta SET 
                                  Nom_iencu = '$item'
                          WHERE Id_iencu = $iditem 
                               AND Id_encu = $idencu");
    }
    
    public function addFileItemEncuesta($filename=false, $item=false, $idencu=false) {
        
        $idi = (int) $item;
        $ide = (int) $idencu;
        $this->_db->query("UPDATE item_encuesta SET 
                                  Adj_iencu = '$filename'
                          WHERE Id_iencu = $idi 
                               AND Id_encu = $ide");
    
    }
    
    public function verificarItemEncuesta($idencu = false, $item = false){
        
        $idi = (int) $item;
        $ide = (int) $idencu;
        $sql = $this->_db->query(
                "SELECT Id_iencu 
                 FROM item_encuesta 
                 WHERE Id_iencu = $idi 
                   AND Id_encu = $ide"
                );
        return $sql->fetch();
    }
    
    public function getNameFileItemEncuesta($idencu = false, $item = false){
        
        $idi = (int) $item;
        $ide = (int) $idencu;
        $sql = $this->_db->query(
                "SELECT Adj_iencu 
                 FROM item_encuesta 
                 WHERE Id_iencu = $idi 
                   AND Id_encu = $ide"
                );
        $file = $sql->fetch(PDO::FETCH_ASSOC);
        return $file['Adj_iencu'];
    }
    
    public function deleteFileItemEncuesta($idencu=false, $item=false) {
        
        $idi = (int) $item;
        $ide = (int) $idencu;
        $this->_db->query("UPDATE item_encuesta SET 
                                  Adj_iencu = NULL
                          WHERE Id_iencu = $idi 
                               AND Id_encu = $ide");
    
    }
    
    public function deleteItemEncuesta($idencu=false, $item=false){
        
        $idi = (int) $item;
        $ide = (int) $idencu;
        $this->_db->query("DELETE FROM item_encuesta 
                           WHERE Id_encu = $ide 
                            AND Id_iencu = $idi");
    }
    
    public function getNameEncuVota($idencu=false, $cond=false){
        
        $id = $this->_db->query("SELECT Nom_encu
                                    FROM encuesta                                     
                                    WHERE Id_encu = $idencu
                                        AND Id_cond = $cond
                                ");
        $est = $id->fetch(PDO::FETCH_ASSOC);
        return $est['Nom_encu'];
    }
    
    public function getEstVotEncu($idencu=false) {
        
        $sql = $this->_db->query("SELECT Nom_iencu, i.Id_iencu, COUNT( ve.Id_iencu ) AS Total_iencu
                                  FROM item_encuesta i
                                  LEFT OUTER JOIN votacion_encuesta ve ON ( ve.Id_iencu = i.Id_iencu )
                                  WHERE ve.Id_encu = $idencu
                                    OR ve.Id_iencu IS NULL
                                  GROUP BY Nom_iencu
                            ");
        //OR ve.Id_encu IS NULL
        return $sql->fetchAll();
    }
}
