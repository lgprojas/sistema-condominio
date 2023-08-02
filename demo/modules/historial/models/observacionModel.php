<?php

class observacionModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllObs($condicion=''){

        $bd = $this->_db->query("SELECT o.*, Nom_tobs, o.Id_cond, Nom_cond
                                 FROM observacion o
                                 LEFT JOIN tipo_obs t ON (t.Id_tobs=o.Id_tobs) 
                                 LEFT JOIN condominio c ON (c.Id_cond=o.Id_cond)
                                 WHERE o.Id_cond = c.Id_cond
                                 $condicion
                                 ORDER BY Fchi_obs DESC");
        return $bd->fetchAll();
    }
    
    public function getCondsGestorObservacion($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorObservacion($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getTipoObservacion() {
        
        $sql = $this->_db->query("SELECT *
                                    FROM tipo_obs
                                    ");
        return $sql->fetchAll();
    }
    
    public function verificarObs($obs=false,$cond=false){
        
        $ver = $this->_db->query(
                "SELECT Id_obs 
                FROM observacion
                WHERE Id_obs = $obs
                 AND Id_cond = $cond
                ");
        return $ver->fetch();
    }
    
    public function getIdCondObservacion($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function addObsCond($fchi=false,$nota=false,$tobs=false,$usu=false,$cond=false){    
        
        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
            ));
        
        $sql = $this->_db->prepare(
                "INSERT INTO observacion VALUES" . 
                "(NULL, 
                   NOW(), 
                  :Fchi_obs, 
                  :Nota_obs,
                  :Id_tobs,
                  :Id_usu,
                  :Id_cond
                )")
                ->execute(array(
                      ':Fchi_obs' => $fchi, 
                      ':Nota_obs' => $nota, 
                      ':Id_tobs' => $tobs,
                      ':Id_usu' => $usu,
                      ':Id_cond' => $cond
                ));
        
        if ($sql) { 
            return true;
        }
    }
    
    public function getObservacion($idobs=false,$idcond=false){
       
        $obs = (int) $idobs;
        $cond = (int) $idcond;
        $bd = $this->_db->query("SELECT o.*, Nom_tobs, o.Id_cond, Nom_cond
                                 FROM observacion o
                                 LEFT JOIN tipo_obs t ON (t.Id_tobs=o.Id_tobs) 
                                 LEFT JOIN condominio c ON (c.Id_cond=o.Id_cond)
                                 WHERE Id_obs = $obs
                                 AND o.Id_cond = $cond                               
                                ");
        return $bd->fetch();
    }
    
    public function editarObservacion($id=false,$fi=false,$nota=false,$tobs=false,$cond=false){

        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
            ));
        
        $sql = $this->_db->prepare("UPDATE observacion SET 
                            Fchi_obs = :fchi,
                            Nota_obs = :nota,
                            Id_tobs = :tobs
                            WHERE Id_obs = :id
                                AND Id_cond = :cond
                            ")
        ->execute(array(
            ':id' => $id,
            ':fchi' => $fi,
            ':nota' => $nota,
            ':tobs' => $tobs,
            ':cond' => $cond
        ));
        
        if ($sql) { 
            return true;
        }
    }
    
    public function eliminarObs($obs=false, $cond=false){
        
        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
        ));
        
        $this->_db->query("DELETE FROM observacion 
                            WHERE Id_obs = $obs
                                AND Id_cond = $cond
                            ");
    }
    
    public function getAllCondObs(){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $per->fetchAll();
    }
}
?>
