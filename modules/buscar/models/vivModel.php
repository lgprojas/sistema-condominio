<?php

class vivModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCondBViv(){

        $sql = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $sql->fetchAll();
    }
    
    public function getCBViv($cond = false){
        
         $t = $this->_db->query("SELECT * 
                                 FROM calle_block
                                 WHERE Id_cond = $cond");
        return $t->fetchAll();
    }
    
    public function getCondsGestorBViv($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorBViv($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getTipoMotivosMultaViv() {
        
        $sql = $this->_db->query("SELECT *
                                    FROM tipo_multa
                                    ");
        return $sql->fetchAll();
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
    
    public function getCBCond($cond=false){
        
        $sc = $this->_db->query(
                "SELECT Id_cb as a, Nom_cb as b
                 FROM calle_block                 
                 WHERE Id_cond = $cond                      
                 ORDER BY Nom_cb ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
    public function getNumViv($cb=false){
        
        $sc = $this->_db->query(
                "SELECT Id_viv as a, Num_viv as b
                 FROM vivienda                 
                 WHERE Id_cb = $cb                      
                 ORDER BY Num_viv ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
    public function verVivAsoc($idviv=false, $cond=false){
        
        $id = $this->_db->query(
                "SELECT vp.Id_per 
                 FROM vivienda_persona vp
                 LEFT JOIN vivienda v ON (v.Id_viv=vp.Id_viv)
                 WHERE vp.Id_viv = $idviv AND Id_trel = 1
                     AND Id_cond = $cond
                ");
        if ($id->rowCount() > 0) {
            $var = $id->fetch(PDO::FETCH_ASSOC);
             return $var['Id_per'];
        }else{
            return false;
        }     
    }
    
    public function getIdViv($idviv=false, $cond=false){
        
        $id = $this->_db->query("SELECT Id_viv 
                                    FROM vivienda 
                                    WHERE Id_viv = $idviv
                                        AND Id_cond = $cond
                                ");
        if ($id->rowCount() > 0) {
            $var = $id->fetch(PDO::FETCH_ASSOC);
             return $var['Id_viv'];
        }else{
             return "nada";
        } 
    }
    
    public function getDatos($idviv=false, $cond=false){
        
         $ec = $this->_db->query("SELECT Id_viv,
                                       Num_viv,
                                       Nom_cb,
                                       Nom_esta
                                FROM vivienda vi
                                LEFT JOIN calle_block cb ON (cb.Id_cb = vi.Id_cb)
                                LEFT JOIN estacionamiento e ON (e.Id_esta=vi.Id_esta)
                                WHERE vi.Id_viv = $idviv
                                    AND vi.Id_cond = $cond
                                ");
        return $ec->fetch();
    }   
    
    public function getDatosProp($idviv=false, $cond=false){
        
        $ec = $this->_db->query("SELECT CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per, 
                                        CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per,
                                        CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per,
                                        CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                        CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per, 
                                        Nom_estre
                                FROM vivienda vi
                                LEFT JOIN vivienda_persona vp ON (vp.Id_viv=vi.Id_viv)
                                LEFT JOIN persona p ON (p.Id_per=vp.Id_per)
                                LEFT JOIN est_resi er ON (er.Id_estre=p.Id_estre)
                                WHERE vi.Id_viv = $idviv AND Id_trel = 1
                                    AND vi.Id_cond = $cond
                                ");
        return $ec->fetch();
    }  
    
    public function getDatosViv($run=false){
        
        $ec = $this->_db->query("SELECT Nom1_per, Ape1_per, Ape2_per, Nom_esta
                                    FROM persona pe
                                    LEFT JOIN vivienda_persona vip ON ( vip.Id_per = pe.Id_per )
                                    LEFT JOIN vivienda vi ON (vi.Id_viv=vip.Id_viv)
                                    LEFT JOIN estacionamiento e ON (e.Id_esta=vi.Id_esta)
                                    WHERE vip.Id_viv = (
                                    SELECT vp.Id_viv
                                    FROM persona p
                                    LEFT JOIN vivienda_persona vp ON ( vp.Id_per = p.Id_per )
                                    LEFT JOIN vivienda vi ON ( vi.Id_viv = vp.Id_viv )
                                    WHERE Rut_per = '$run' )
                                    AND Id_trel =1
                                 ");
         return $ec->fetch();
    }   
    
//------------------------------------------------------------------------------
//Guardar Multa
    
    public function verExiCodMulta($cod=false, $viv=false){
        
        $id = $this->_db->query(
                "SELECT Id_multa FROM multa WHERE Cod_multa = '$cod' AND Id_viv = $viv"
                );
        return $id->fetch();
    }
    
    public function getIdVivCondMultaViv($idviv=false){
        
        $id = $this->_db->query("SELECT Id_cond
                                    FROM vivienda
                                    WHERE Id_viv = $idviv
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function addMultaVivBViv($cod=false,$fi=false,$fp=NULL,$n=NULL,$m=false,$usu=false,$tmul=false,$viv=false,$cond=false){    
        
        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
            ));
        
        $sql = $this->_db->prepare(
                "INSERT INTO multa VALUES" . 
                "(NULL, 
                  :Cod_multa, 
                   NOW(), 
                  :Fchi_multa, 
                  :Fchp_multa, 
                  :Nota_multa, 
                  :Total_multa, 
                  :Id_usu,
                  :Id_viv,
                  :Id_tmul,
                  :Id_estmul
                )")
                ->execute(array(
                      ':Cod_multa' => $cod, 
                      ':Fchi_multa' => $fi, 
                      ':Fchp_multa' => !empty($fp) ? $fp : NULL, 
                      ':Nota_multa' => !empty($n) ? $n : NULL, 
                      ':Total_multa' => $m, 
                      ':Id_usu' => $usu,
                      ':Id_viv' => $viv,
                      ':Id_tmul' => $tmul,
                      ':Id_estmul' => 1
                ));
        
        if ($sql) { 
            return true;
        }
    }
}
