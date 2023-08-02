<?php

class indexModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getBackup(){
        
         $t = $this->_db->query("SELECT rb.*, 
                                    CAST(AES_DECRYPT(Nom_usu,'".ENCRYPT_KEY."')AS char(150)) AS Nom_usu
                                 FROM reg_backup rb
                                 LEFT JOIN usuario u ON (u.Id_usu=rb.Id_usu)                
                                 ORDER BY Fch_rb DESC
                                 ");
        return $t->fetchAll();
    }
    
    public function regMovRespaldoBackup($nom = false, $tipo=false, $usu=false){    
                
        $this->_db->prepare(
                "INSERT INTO reg_backup VALUES" . 
                "(NULL, NOW(), :Nomfile_rb, :Tipo_rb, :Id_usu)"               
                )
                ->execute(array(
                    ':Nomfile_rb' => $nom,
                    ':Tipo_rb' => $tipo,
                    ':Id_usu' => $usu
                ));
    }
}