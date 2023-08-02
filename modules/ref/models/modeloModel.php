<?php

class modeloModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getModelos($condicion = ''){

        $sj = $this->_db->query("SELECT m.Id_modelo, Nom_modelo, ma.Id_marca, Nom_marca 
                                    FROM modelo m
                                    LEFT JOIN marca ma ON (ma.Id_marca = m.Id_marca)  
                                    WHERE ma.Id_marca = m.Id_marca
                                    $condicion
                                    ORDER BY Nom_marca, Nom_modelo ASC");
        return $sj->fetchAll();
    }
    
    public function getMarcas(){
        
         $t = $this->_db->query("select * from marca");
        return $t->fetchAll();
    }
        
    public function newModelo($nom = false, $marca = false){    
                
        $this->_db->prepare(
                "INSERT INTO modelo VALUES" . 
                "(null,:Nom_modelo, :Id_marca)"               
                )
                ->execute(array(
                    ':Nom_modelo' => $nom,                  
                    ':Id_marca' => $marca
                ));
    }
    
    public function getIdModelo($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT Id_modelo
                                 FROM modelo 
                                 WHERE Id_modelo={$id}");
        return $tp->fetch();
    }
    
    public function getDatosModelo($idc = false){
       
        $id = (int) $idc;
        $tp = $this->_db->query("SELECT * 
                                 FROM modelo m
                                 LEFT JOIN marca ma ON (ma.Id_marca = m.Id_marca)
                                 WHERE m.Id_modelo={$id}");
        return $tp->fetch();
    }
    
    public function editarModelo($idc=false, $nom=false, $marca=false){
        
        $id = (int) $idc;
        $this->_db->prepare("UPDATE modelo SET Nom_modelo = :nom, Id_marca = :marca WHERE Id_modelo = :id")
        ->execute(array(
            ':id' => $id,
            ':nom' => $nom,
            ':marca' => $marca
        ));
    }
    
    public function eliminarModelo($idc = false){
        
        $id = (int) $idc;
        $this->_db->query("DELETE FROM modelo " .
                          "WHERE Id_modelo=$id");
    }
}
?>
