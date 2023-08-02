<?php

class vivModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getVivs($cond=''){

        $bd = $this->_db->query("SELECT v.Id_viv, Num_viv, Nom_cb, Id_esta, Nom_cond
                                 FROM vivienda v
                                 LEFT JOIN condominio c ON (c.Id_cond = v.Id_cond)
                                 LEFT JOIN calle_block cb ON (cb.Id_cb = v.Id_cb) 
                                 WHERE c.Id_cond = v.Id_cond 
                                 $cond 
                                 ORDER BY Nom_cb ASC, Num_viv ASC");
        return $bd->fetchAll();
    }
    
    public function getCondsGestorViv($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorViv($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getIdCondViv($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCBViv($cond=""){
        
         $ec = $this->_db->query("SELECT * 
                                  FROM calle_block
                                  $cond ");
        return $ec->fetchAll();
    }    
    
    public function getEsttosOK($cond=''){
        
          $ec = $this->_db->query("SELECT Id_esta
                                  FROM vivienda 
                                  $cond 
                                 ");
        return $ec->fetchAll(PDO::FETCH_COLUMN);
    }
    
    public function getVivConds(){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $per->fetchAll();
    }
    
//    public function getVivCondo($id=false){
//
//        $c = $this->_db->query("SELECT Id_cond, Nom_cond
//                                FROM condominio 
//                                WHERE Id_cond = (
//                                    SELECT u.Id_cond
//                                    FROM usuario u
//                                    LEFT JOIN persona p ON ( p.Id_per = u.Id_per )
//                                    WHERE u.Id_usu =$id
//                                )");
//        return $c->fetchAll();
//    }
    
//    public function getIdCondViv($idusu=false){
//        
//        $id = $this->_db->query("SELECT Id_cond
//                                    FROM usuario
//                                    WHERE Id_usu = $idusu
//                                ");
//        $idcond = $id->fetch(PDO::FETCH_ASSOC);
//        return $idcond['Id_cond'];
//    }
    
    public function getCBVivCond($cond=false){
        
        $sc = $this->_db->query(
                "SELECT Id_cb AS a, Nom_cb AS b
                 FROM calle_block                
                 WHERE Id_cond = $cond                      
                 ORDER BY Nom_cb ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
    public function getVivIdCond($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function verificarExisteViv($viv=false,$cb=false,$cond=false){
        
         $ec = $this->_db->query("SELECT Nom_cb,
                                         Num_viv
                                 FROM vivienda
                                 WHERE Id_viv = $viv
                                    AND Id_cb = $cb
                                    AND Id_cond = $cond
                                ");
        return $ec->fetch();
    }
    
    public function newViv($num=false, $cb=false, $esta=false, $cond=false){    
                
        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
        ));
        
        $this->_db->prepare(
                "INSERT INTO vivienda VALUES" . 
                "(NULL, :Num_viv, :Id_cb, :Id_esta, :Id_cond)"               
                )
                ->execute(array(
                    ':Num_viv' => $num,
                    ':Id_cb' => !empty($cb) ? $cb : NULL,
                    ':Id_esta' => !empty($esta) ? $esta : NULL,
                    'Id_cond' => $cond
                ));
    }
    
    public function getViv($id=false){
       
        $id = (int) $id;
        $bd = $this->_db->query("SELECT v.Id_viv, 
                                        Num_viv, 
                                        cb.Id_cb, 
                                        Nom_cb, 
                                        Id_esta, 
                                        c.Id_cond,
                                        Nom_cond
                                 FROM vivienda v
                                 LEFT JOIN calle_block cb ON(cb.Id_cb = v.Id_cb)
                                 LEFT JOIN condominio c ON (c.Id_cond = v.Id_cond)
                                 WHERE v.Id_viv={$id}
                                ");
        return $bd->fetch();
    }
    
    public function editarViv($idviv=false, $num=false, $cb=false, $esta=false, $cond=false){
        
        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
        ));
        
        $id = (int) $idviv;
        $this->_db->prepare("UPDATE vivienda SET 
                            Num_viv = :num,
                            Id_cb = :cb,
                            Id_esta = :esta,
                            Id_cond = :cond
                            WHERE Id_viv = :id")
        ->execute(array(
            ':id' => $id,
            ':num' => $num,
            ':cb' => !empty($cb) ? $cb : NULL,
            ':esta' => !empty($esta) ? $esta : NULL,
            'cond' => $cond
        ));
    }
    
    public function eliminarViv($idviv = false){
        
        $this->_db->prepare("SET @urut = :rut")
        ->execute(array(
            ':rut' => Session::get('rut_usu')
        ));
        
        $id = (int) $idviv;
        $this->_db->query("DELETE FROM vivienda WHERE Id_viv = $id");
    }
    
    public function getIdCondv($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCondf(){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $per->fetchAll();
    }
    
    public function getCBLsViv($cond = false){

        $per = $this->_db->query("SELECT Id_cb AS a, Nom_cb AS b
                                  FROM calle_block
                                  WHERE Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
}
?>
