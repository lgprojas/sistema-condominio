<?php

class inmModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getInms(){

        $sj = $this->_db->query("select * 
                                    from inmobiliaria
                                    order by Nom_inm asc");
        return $sj->fetchAll();
    }
    
    public function newInm($cod=false, $nom=false){    
                
        $this->_db->prepare(
                "insert into inmobiliaria values" . 
                "(null, :Cod_inm, :Nom_inm)"               
                )
                ->execute(array(
                    ':Cod_inm' => $cod,
                    ':Nom_inm' => $nom
                ));
    }
    
    public function getInm($idinm=false){
       
        $id = (int) $idinm;
        $tp = $this->_db->query("select * from inmobiliaria where Id_inm={$id}");
        return $tp->fetch();
    }
    
    public function editarInm($idinm=false, $nom=false){
        
        $id = (int) $idinm;
        $this->_db->prepare("UPDATE inmobiliaria SET Nom_inm = :nom WHERE Id_inm = :id")
        ->execute(array(
            ':id' => $id,
            ':nom' => $nom
        ));
    }
    
    public function eliminarInm($idinm=false){
        
        $id = (int) $idinm;
        $this->_db->query("delete from inmobiliaria " .
                          "where Id_inm=$id");
    }
}
?>
