<?php

class patenteModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCondPat(){

        $sql = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $sql->fetchAll();
    }
    
    public function getCondsGestorPat($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
        public function getCondGestorPat($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getIdCondPat($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getIdVehiPat($cod=false,$cond=false){
        
        $sql = $this->_db->query("SELECT Id_vehi
                                    FROM vehiculo                                    
                                    WHERE Cod_vehi = '$cod'
                                        AND Id_cond = $cond
                                ");
        $id = $sql->fetch(PDO::FETCH_ASSOC);
        return $id['Id_vehi'];
    }
    
    public function verificarCod($cod = false, $cond=false){
        
        $id = $this->_db->query(
                "SELECT Cod_vehi 
                FROM vehiculo 
                WHERE Cod_vehi = '$cod'
                AND Id_cond = $cond
                ");
        //$result = $id->fetchAll();
        if ($id->rowCount() > 0) {
            $var = $id->fetch(PDO::FETCH_ASSOC);
             return $var['Cod_vehi'];
        }else{
            return false;
        }       
    }
    
    public function verCodAsoc($cod = false, $cond=false){
        
        $id = $this->_db->query(
                "SELECT vep.Id_vehi 
                 FROM vehiculo v
                 LEFT JOIN vehiculo_persona vep ON (vep.Id_vehi=v.Id_vehi)
                 LEFT JOIN persona p ON ( p.Id_per = vep.Id_per ) 
                 WHERE Cod_vehi = '$cod' 
                 AND p.Id_cond = $cond
                ");
        if ($id->rowCount() > 0) {
            $var = $id->fetch(PDO::FETCH_ASSOC);
             return $var['Id_vehi'];
        }else{
            return false;
        }     
    }
    
    public function getDatosPatente($cod=false, $cond=false){
        
         $ec = $this->_db->query("SELECT v.Id_vehi,
                                       Cod_vehi,
                                       Desc_vehi,
                                       Nom_modelo,
                                       Nom_marca
                                FROM vehiculo v
                                LEFT JOIN modelo mo ON (mo.Id_modelo=v.Id_modelo)
                                LEFT JOIN marca ma ON (ma.Id_marca=mo.Id_marca)                                                                                                
                                LEFT JOIN vehiculo_persona vep ON (vep.Id_vehi=v.Id_vehi)                               
                                WHERE Cod_vehi = '$cod'
                                AND v.Id_cond = $cond ");
        return $ec->fetch();
    }   
    
    public function getDatosProp($cod=false, $cond=false){
        
         $ec = $this->_db->query("SELECT CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per, 
                                        CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                        CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per
                                FROM vehiculo v
                                LEFT JOIN modelo mo ON (mo.Id_modelo=v.Id_modelo)
                                LEFT JOIN marca ma ON (ma.Id_marca=mo.Id_marca)                                                                                                
                                LEFT JOIN vehiculo_persona vep ON (vep.Id_vehi=v.Id_vehi)
                                LEFT JOIN persona p ON (p.Id_per=vep.Id_per)
				LEFT JOIN tipo_relvehi trv ON (trv.Id_trelv=vep.Id_trelv)
                                WHERE Cod_vehi = '$cod'
                                AND p.Id_cond = $cond
                                AND vep.Id_trelv = 1");
        return $ec->fetch();
    }  
    
    public function getDatosRel($cod=false, $cond=false){
        
         $ec = $this->_db->query("SELECT Nom_cb,
                                         Num_viv,
                                         Nom_trel,
                                         Nom_cond
                                FROM vehiculo v                                                                                               
                                LEFT JOIN vehiculo_persona vep ON (vep.Id_vehi=v.Id_vehi)
                                LEFT JOIN persona p ON (p.Id_per=vep.Id_per)
                                LEFT JOIN vivienda_persona vp ON (vp.Id_per=p.Id_per)
                                LEFT JOIN vivienda vi ON (vi.Id_viv=vp.Id_viv)
                                LEFT JOIN calle_block cb ON (cb.Id_cb = vi.Id_cb)
				LEFT JOIN tipo_rel tr ON (tr.Id_trel=vp.Id_trel)
                                LEFT JOIN condominio co ON (co.Id_cond=v.Id_cond)                                
                                WHERE Cod_vehi = '$cod'
                                AND p.Id_cond = $cond
                                AND vep.Id_trelv = 1
                                AND vp.Id_trel = 1
                                ");
        return $ec->fetch();
    }  
    
    public function getDatosCond($cod=false, $cond=false) {
        
        $ec = $this->_db->query("SELECT Nom_cond
                                FROM vehiculo v
                                LEFT JOIN condominio co ON (co.Id_cond=v.Id_cond)                                
                                WHERE Cod_vehi = '$cod'
                                AND v.Id_cond = $cond
                                ");
        return $ec->fetch();
    }
    
    public function getDatosViv($cod=false, $cond=false){
        
         $ec = $this->_db->query("SELECT CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per, 
                                        CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                        CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per
                                    FROM persona pe
                                    LEFT JOIN vivienda_persona vip ON ( vip.Id_per = pe.Id_per )
                                    LEFT JOIN vivienda vi ON (vi.Id_viv=vip.Id_viv)                                   
                                    WHERE vip.Id_viv = (
                                        SELECT vp.Id_viv
                                        FROM vehiculo v
                                        LEFT JOIN vehiculo_persona vep ON ( vep.Id_vehi = v.Id_vehi )
                                        LEFT JOIN persona p ON ( p.Id_per = vep.Id_per )
                                        LEFT JOIN vivienda_persona vp ON ( vp.Id_per = p.Id_per )
                                        LEFT JOIN vivienda vi ON ( vi.Id_viv = vp.Id_viv )
                                        WHERE Cod_vehi = '$cod' 
                                            AND vi.Id_cond = $cond 
                                            AND Id_trel = 1
                                            AND Id_trelv =1
                                        )
                                    AND Id_trel =1
                                 ");
         return $ec->fetch();
    }   
    
    public function getDatosEstacionaPatente($cod=false, $cond=false){
        
        $ec = $this->_db->query("SELECT Nom_esta
                                    FROM vehiculo v
                                    LEFT JOIN vehiculo_persona vp ON ( vp.Id_vehi = v.Id_vehi )
                                    LEFT JOIN persona pe ON ( pe.Id_per = vp.Id_per )
                                    LEFT JOIN vivienda_persona vip ON ( vip.Id_per = pe.Id_per )
                                    LEFT JOIN vivienda vi ON ( vi.Id_viv = vip.Id_viv )
                                    LEFT JOIN estacionamiento e ON ( e.Id_esta = vi.Id_esta )
                                    WHERE Cod_vehi = '$cod'
                                    AND vi.Id_cond = $cond
                                 ");
         return $ec->fetch();
    }
    
    public function getPerAsoc($cod=false, $cond=false) {
        
         $ec = $this->_db->query("SELECT p.Id_per,
                                         CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per, 
                                         CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per, 
                                         CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per, 
                                         CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                         CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per
                                    FROM vehiculo v
                                    LEFT JOIN modelo mo ON ( mo.Id_modelo = v.Id_modelo )
                                    LEFT JOIN marca ma ON ( ma.Id_marca = mo.Id_marca )
                                    LEFT JOIN vehiculo_persona vep ON ( vep.Id_vehi = v.Id_vehi )
                                    LEFT JOIN persona p ON ( p.Id_per = vep.Id_per )
                                    WHERE Cod_vehi = '$cod'
                                    AND v.Id_cond = $cond
                                    AND vep.Id_trelv <>1
                                    ");
        return $ec->fetchAll();
    }
    
    public function getVivRelPerPatente($idper = false, $cond = false){

        $per = $this->_db->query("SELECT v.Id_viv,
                                       Num_viv,
                                       Nom_cb
                                  FROM vivienda v 
                                  LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv)
                                  LEFT JOIN calle_block cb ON (cb.Id_cb=v.Id_cb)
                                  WHERE Id_per = $idper
                                   AND v.Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
    
    public function getRelVivCond(){

        $sql = $this->_db->query("SELECT *
                                    FROM tipo_rel
                                    WHERE Id_trel <> 1
                                    ");
        return $sql->fetchAll();
    }
    
    public function getActExt(){

        $sql = $this->_db->query("SELECT *
                                    FROM act_extra
                                    ");
        return $sql->fetchAll();
    }
    
    public function getAllVivCond($cond=false){

        $sql = $this->_db->query("SELECT v.Id_viv, Nom_cb, Num_viv
                                FROM calle_block cb
                                LEFT JOIN vivienda v ON ( v.Id_cb = cb.Id_cb )
                                WHERE v.Id_cond = $cond
                                ORDER BY Nom_cb ASC , Num_viv ASC 
                                    ");
        return $sql->fetchAll();
    }
    
    public function regVisitaPerPatente($per=false,$viv=false,$acte=false,$usu=false,$vehi=false,$eprop=false,$evisita=false,$cond=false){    
                
        $per = (int) $per;
        $viv = (int) $viv;
        $acte = (int) $acte;
        $usu = (int) $usu;
        $eprop = (int) $eprop;
        $evisita = (int) $evisita;
        $cond = (int) $cond;
        
        $sqla = $this->_db->prepare(
                "INSERT INTO reg_visita VALUES " . 
                "(null, NOW(), :Id_per, :Id_viv, :Id_actext, :Id_usu, :Cod_vehi, :Est_prop, :Est_visita, :Id_cond)"               
                )
                ->execute(array(
                    ':Id_per' => $per,                  
                    ':Id_viv' => !empty($viv) ? $viv : NULL,
                    ':Id_actext' => !empty($acte) ? $acte : NULL,
                    ':Id_usu' => $usu,
                    ':Cod_vehi' => !empty($vehi) ? $vehi : NULL,
                    ':Est_prop' => !empty($eprop) ? $eprop : NULL,
                    ':Est_visita' => !empty($evisita) ? $evisita : NULL,
                    ':Id_cond' => $cond
                ));
        $id1 = $this->_db->lastInsertId($sqla);
        
        $sqlb = $this->_db->query("SELECT Id_regv
                                    FROM reg_visita
                                    WHERE Id_per = $per
                                        AND Id_viv = $viv
                                        AND Id_regv = $id1
                                ");
        $id2 = $sqlb->fetch(PDO::FETCH_ASSOC);

        if ($id1 === $id2['Id_regv']) { 
            return $id2['Id_regv'];
        }
    }
    
    public function deletRegVisita($idrv = false, $cond = false){
        
        $id = (int) $idrv;
        $sql = $this->_db->query("DELETE FROM reg_visita WHERE Id_regv = $id AND Id_cond = $cond");
        
        if ($sql) { 
            return true;
        }
        return false;
    }
    
    public function existePer($per=false){
        
        $sql = $this->_db->query("SELECT Id_per
                                    FROM persona                                    
                                    WHERE Id_per = $per
                                ");
        return $sql->fetch();
    }
    
    public function existeViv($viv=false){
        
        $sql = $this->_db->query("SELECT Id_viv
                                    FROM vivienda                                    
                                    WHERE Id_viv = $viv
                                ");       
        return $sql->fetch();
    }
    
    public function existeRelVivPer($viv=false, $per=false){
        
        $sql = $this->_db->query("SELECT Id_vper
                                    FROM vivienda_persona                                   
                                    WHERE Id_viv = $viv
                                        AND Id_per = $per
                                ");
        return $sql->fetch();
    }
    
    public function addRelVivPer($viv=false, $per=false, $trel=false){    
                
        $this->_db->prepare(
                "INSERT INTO vivienda_persona VALUES" . 
                "(null, :Id_viv, :Id_per, :Id_trel)"               
                )
                ->execute(array(
                    ':Id_viv' => $viv,                  
                    ':Id_per' => $per,
                    ':Id_trel' => $trel
                ));
    }
    
    public function getNamePerCondBusqPat($per=false, $cond=false) {
        
        $a = $this->_db->query("
                                SELECT CONCAT_WS(' ',
                                    CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)), 
                                    CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)), 
                                    CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)), 
                                    CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100))
                                    )
                                FROM persona
                                WHERE CONCAT_WS(' ',
                                    CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)), 
                                    CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)), 
                                    CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)), 
                                    CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100))
                             ) LIKE '%$per%'
                                 AND Id_cond = $cond                                 
                                ");

        return $a->fetchAll(PDO::FETCH_COLUMN);
    }

//-----------------------------------------------------------------------------
//Registro relación persona - patente
        
    public function getIdPersBusPat($ape1 = false, $ape2 = false, $nom1 = false, $nom2 = false, $cond = false) {

        $sql = $this->_db->query("SELECT Id_per as Id
                                FROM persona
                                WHERE Id_cond = $cond 
                                AND Ape1_per = AES_ENCRYPT('$ape1','".ENCRYPT_KEY."')
                                AND Ape2_per = AES_ENCRYPT('$ape2','".ENCRYPT_KEY."')
                                AND Nom1_per = AES_ENCRYPT('$nom1','".ENCRYPT_KEY."')
                                AND Nom2_per = AES_ENCRYPT('$nom2','".ENCRYPT_KEY."')
                                ");
        $idc = $sql->fetch(PDO::FETCH_ASSOC);
        return $idc['Id'];
    }
    
    public function getRelVehi($cod=false, $cond=false) {
        
            $sql = $this->_db->query("SELECT *
                                    FROM tipo_relvehi
                                    WHERE Id_trelv <>
                                    ALL (
                                        SELECT Id_trelv
                                        FROM vehiculo v
                                        LEFT JOIN vehiculo_persona vp ON (vp.Id_vehi=v.Id_vehi)
                                        WHERE Cod_vehi = '$cod'
                                            AND Id_cond = $cond
                                            AND Id_trelv = 1
                                        GROUP BY Id_trelv
                                    )
                                ");
            return $sql->fetchAll();
    }
    
    public function poseeYaRelPerPat($vehi=false,$per=false,$trelv=false,$cond=false){
        
         $ec = $this->_db->query("SELECT Cod_vehi,
                                         CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per, 
                                         CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per, 
                                         CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                         CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per,
                                         Nom_trelv
                                 FROM vehiculo v
                                 LEFT JOIN vehiculo_persona vp ON (vp.Id_vehi=v.Id_vehi)                                  
                                 LEFT JOIN persona p ON ( p.Id_per = vp.Id_per )
                                 LEFT JOIN tipo_relvehi tr ON (tr.Id_trelv=vp.Id_trelv)
                                 WHERE vp.Id_vehi = $vehi
                                    AND vp.Id_per = $per
                                    AND vp.Id_trelv = $trelv 
                                    AND v.Id_cond = $cond
                                ");
        return $ec->fetch();
    }
    
    public function addrelperpat($vehi=false,$per=false,$trelv=false){    
                
        $sql = $this->_db->prepare(
                "INSERT INTO vehiculo_persona VALUES" . 
                "(null, :Id_vehi, :Id_per, :Id_trelv)"               
                )
                ->execute(array(                                     
                    ':Id_vehi' => $vehi,
                    ':Id_per' => $per,
                    ':Id_trelv' => $trelv
                ));
        if ($sql) { 
        return true;
        }
    }

        public function getrelperpat($vehi=false, $per=false, $trelv=false, $cond=false){
        
         $ec = $this->_db->query("SELECT p.Id_per,
                                         CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per, 
                                         CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per,
                                         CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                         CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per
                                 FROM vehiculo_persona vp 
                                 LEFT JOIN persona p ON ( p.Id_per = vp.Id_per )
                                 WHERE vp.Id_vehi = $vehi
                                    AND vp.Id_per = $per
                                    AND vp.Id_trelv = $trelv
                                    AND Id_cond = $cond
                                 ");
        return $ec->fetch();
    }
//------------------------------------------------------------------------------
    
    public function regVisitaPerPatenteAvan($per=false,$viv=false,$acte=false,$usu=false,$vehi=false,$eprop=false,$evisita=false,$cond=false){    
                
        $per = (int) $per;
        $viv = (int) $viv;
        $acte = (int) $acte;
        $usu = (int) $usu;
        $eprop = (int) $eprop;
        $evisita = (int) $evisita;
        $cond = (int) $cond;
        
        $this->_db->prepare(
                "INSERT INTO reg_visita VALUES " . 
                "(null, NOW(), :Id_per, :Id_viv, :Id_actext, :Id_usu, :Cod_vehi, :Est_prop, :Est_visita, :Id_cond)"               
                )
                ->execute(array(
                    ':Id_per' => $per,                  
                    ':Id_viv' => !empty($viv) ? $viv : NULL,
                    ':Id_actext' => !empty($acte) ? $acte : NULL,
                    ':Id_usu' => $usu,
                    ':Cod_vehi' => !empty($vehi) ? $vehi : NULL,
                    ':Est_prop' => !empty($eprop) ? $eprop : NULL,
                    ':Est_visita' => !empty($evisita) ? $evisita : NULL,
                    ':Id_cond' => $cond
                ));
    }
}
