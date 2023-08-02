<?php

class marcaModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getMarcas(){

        $sj = $this->_db->query("select * 
                                    from marca
                                    order by Nom_marca asc");
        return $sj->fetchAll();
    }
    
    public function newMarca($nom=false){    
                
        $this->_db->prepare(
                "insert into marca values" . 
                "(null, :Nom_marca)"               
                )
                ->execute(array(
                    ':Nom_marca' => $nom
                ));
    }
    
    public function getMarca($idmarca=false){
       
        $id = (int) $idmarca;
        $tp = $this->_db->query("select * from marca where Id_marca={$id}");
        return $tp->fetch();
    }
    
    public function editarMarca($idmarca=false, $nom=false){
        
        $id = (int) $idmarca;
        $this->_db->prepare("UPDATE marca SET Nom_marca = :nom WHERE Id_marca = :id")
        ->execute(array(
            ':id' => $id,
            ':nom' => $nom
        ));
    }
    
    public function eliminarMarca($idmarca=false){
        
        $id = (int) $idmarca;
        $this->_db->query("DELETE FROM marca " .
                          "WHERE Id_marca=$id");
    }
}
?>
