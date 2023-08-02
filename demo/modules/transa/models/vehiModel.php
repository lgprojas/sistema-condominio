<?php

class vehiModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getVehis($cond=''){

        $vehi = $this->_db->query("SELECT v.Id_vehi, Cod_vehi, Nom_marca, Nom_modelo, Nom_cond
                                    FROM vehiculo v                                    
                                    LEFT JOIN modelo mo ON (mo.Id_modelo=v.Id_modelo)
                                    LEFT JOIN marca ma ON (ma.Id_marca=mo.Id_marca)
                                    LEFT JOIN vehiculo_persona vep ON (vep.Id_vehi=v.Id_vehi)
                                    LEFT JOIN persona p ON(p.Id_per=vep.Id_per)
                                    LEFT JOIN vivienda_persona vip ON (vip.Id_per=p.Id_per)
                                    LEFT JOIN vivienda vi ON (vi.Id_viv=vip.Id_viv)
                                    LEFT JOIN condominio c ON (c.Id_cond=v.Id_cond)
                                    WHERE v.Id_vehi IS NOT NULL 
                                    $cond 
                                    GROUP BY v.Id_vehi ASC, Nom_marca ASC, Nom_modelo ASC
                                    ");
        return $vehi->fetchAll();
    }
    
    public function getCondsGestorVehi($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorVehi($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getMar(){
        
         $t = $this->_db->query("select * from marca");
        return $t->fetchAll();
    }
    
    public function getMod($mar=false){
        
        $sc = $this->_db->query(
                "SELECT Id_modelo as a, Nom_modelo as b
                 FROM modelo                 
                 WHERE Id_marca = $mar                      
                 ORDER BY Nom_modelo ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
    public function getIdCondVehi($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getConds(){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $per->fetchAll();
    }
    
    public function getCond($id=false){

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
    
    public function getVehi($id=false){

        $c = $this->_db->query("SELECT v.Id_vehi,
                                       Cod_vehi,
                                       Desc_vehi,
                                       v.Id_cond,
                                       Nom_cond,
                                       mo.Id_modelo,
                                       Nom_modelo,
                                       mo.Id_marca,
                                       Nom_marca
                                FROM vehiculo v
                                LEFT JOIN modelo mo ON (mo.Id_modelo=v.Id_modelo)
                                LEFT JOIN marca ma ON (ma.Id_marca=mo.Id_marca)
                                LEFT JOIN condominio c ON (c.Id_cond=v.Id_cond)
                                WHERE v.Id_vehi = $id
                                    ");
        return $c->fetch();
    } 
    
    public function getMarcas(){

        $bd = $this->_db->query("select * 
                                    from marca
                                    order by Nom_marca asc");
        return $bd->fetchAll();
    }
    
    public function getModelos(){

        $bd = $this->_db->query("select * 
                                    from modelo
                                    order by Nom_modelo asc");
        return $bd->fetchAll();
    }
    
    public function verificarVehi($id=false, $cond=''){
        
        $ver = $this->_db->query(
                "SELECT Cod_vehi 
                FROM vehiculo 
                WHERE Cod_vehi = '$id' 
                $cond
                ");
        return $ver->fetch();
    }
    
    public function verificarIdVehi($id=false){
        
        $sql = $this->_db->query(
                "select Id_vehi from vehiculo where Id_vehi = $id"
                );
        return $sql->fetch();
    }

    public function newVehic($cod=false,$desc=NULL,$mod=false,$cond=false){    
                
        $this->_db->prepare(
                "INSERT INTO vehiculo VALUES" . 
                "(NULL, :Cod_vehi, :Desc_vehi, :Id_modelo, :Id_cond)"               
                )
                ->execute(array(
                    ':Cod_vehi' => $cod,
                    ':Desc_vehi' => $desc,
                    ':Id_modelo' => $mod,
                    ':Id_cond' => $cond
                )); 
    }
    
        public function editVehi($id=false,$desc=NULL,$mod=false,$cond=false){    
                
        $this->_db->prepare(
                "UPDATE vehiculo SET " . 
                "Desc_vehi = :Desc_vehi, 
                 Id_modelo = :Id_modelo,
                 Id_cond = :Id_cond
                 WHERE Id_vehi =$id"               
                
                )
                ->execute(array(
                    ':Desc_vehi' => $desc,
                    ':Id_modelo' => $mod,
                    ':Id_cond' => $cond
                )); 
    }
    
    public function eliminarVehi($id){
        
        $this->_db->query("DELETE FROM vehiculo " .
                          "WHERE Id_vehi=$id");
    }
    
    public function gIdCond($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCondfVehi(){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $per->fetchAll();
    }
    
    public function getCBLsVehi($cond = false){

        $per = $this->_db->query("SELECT Id_cb AS a, Nom_cb AS b
                                  FROM calle_block
                                  WHERE Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
}
?>
