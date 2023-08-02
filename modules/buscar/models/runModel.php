<?php

class runModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCondRUN(){

        $sql = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $sql->fetchAll();
    }
    
    public function getCondsGestorRUN($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
        public function getCondGestorRUN($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getIdCondRUN($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function verificarRUN($run=false, $cond=false){
        
        $id = $this->_db->query(
                "SELECT CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per 
                 FROM persona 
                 WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."')
                 AND Id_cond = $cond
                ");
        if ($id->rowCount() > 0) {
            $var = $id->fetch(PDO::FETCH_ASSOC);
             return $var['Rut_per'];
        }else{
            return false;
        }       
    }
    
    public function verRUNAsoc($run=false, $cond=false){
        
        $id = $this->_db->query(
                "SELECT vp.Id_per 
                 FROM persona v
                 LEFT JOIN vivienda_persona vp ON (vp.Id_per=v.Id_per)
                 WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."')
                 AND v.Id_cond = $cond
                ");
        if ($id->rowCount() > 0) {
            $var = $id->fetch(PDO::FETCH_ASSOC);
             return $var['Id_per'];
        }else{
            return false;
        }     
    }
    
    public function getIdRUNPer($run=false, $cond=false){
        
        $id = $this->_db->query("SELECT Id_per
                                    FROM persona
                                    WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."')
                                    AND Id_cond = $cond
                                ");
        $getid = $id->fetch(PDO::FETCH_ASSOC);
        return $getid['Id_per'];
    }
    
    public function getDatos($run=false, $cond=false){
        
         $ec = $this->_db->query("SELECT Id_per,
                                       CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per,
                                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per,
                                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per,
                                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per
                                FROM persona
                                WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."')
                                AND Id_cond = $cond
                                ");
        return $ec->fetch();
    }   
    
    public function getDatosRel($run=false, $cond=false){
        
         $ec = $this->_db->query("SELECT
                                       vi.Id_viv,
                                       Nom_cb,
                                       Num_viv,
                                       Nom_esta,
                                       Nom_trel,
                                       Nom_cond
                                FROM persona p
                                LEFT JOIN vivienda_persona vp ON (vp.Id_per=p.Id_per)
                                LEFT JOIN vivienda vi ON (vi.Id_viv=vp.Id_viv)
                                LEFT JOIN calle_block cb ON (cb.Id_cb = vi.Id_cb)
				LEFT JOIN tipo_rel tr ON (tr.Id_trel=vp.Id_trel)
                                LEFT JOIN condominio co ON (co.Id_cond=vi.Id_cond)
                                LEFT JOIN estacionamiento e ON (e.Id_esta = vi.Id_esta)
                                WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."')
                                AND vi.Id_cond = $cond
                                AND vp.Id_trel = 1
                                ");
        return $ec->fetch();
    }  
    
    public function getDatosViv($run=false, $cond=false){
        
        $ec = $this->_db->query("SELECT CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per, 
                                        CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                                        CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per                                        
                                    FROM persona pe
                                    LEFT JOIN vivienda_persona vip ON ( vip.Id_per = pe.Id_per )
                                    LEFT JOIN vivienda vi ON (vi.Id_viv=vip.Id_viv)                                    
                                    WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."') 
                                        AND vi.Id_cond = $cond
                                        AND Id_trel =1
                                 ");
         return $ec->fetch();
    }   
    
    public function getDatosEstaciona($run=false, $cond=false){
        
        $ec = $this->_db->query("SELECT Nom_esta                                       
                                    FROM persona pe
                                    LEFT JOIN vivienda_persona vip ON ( vip.Id_per = pe.Id_per )
                                    LEFT JOIN vivienda vi ON (vi.Id_viv=vip.Id_viv)
                                    LEFT JOIN estacionamiento e ON (e.Id_esta=vi.Id_esta)                                    
                                    WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."') 
                                        AND vi.Id_cond = $cond
                                 ");
         return $ec->fetch();
    } 
    
    public function getVehiProp($run=false, $cond=false){
        
         $ec = $this->_db->query("SELECT v.Id_vehi,
                                       Cod_vehi,
                                       Desc_vehi,
                                       Nom_modelo,
                                       Nom_marca
                                FROM vehiculo v
                                LEFT JOIN modelo mo ON (mo.Id_modelo=v.Id_modelo)
                                LEFT JOIN marca ma ON (ma.Id_marca=mo.Id_marca)                                                                                                
                                LEFT JOIN vehiculo_persona vep ON (vep.Id_vehi=v.Id_vehi) 
                                LEFT JOIN persona p ON (p.Id_per=vep.Id_per)
                                WHERE Rut_per = AES_ENCRYPT('$run', '".ENCRYPT_KEY."')
                                AND p.Id_cond = $cond 
                                AND Id_trelv = 1
                                 ");
        return $ec->fetch();
    }   
    
//------------------------------------------------------------------------------
    public function gAllVivCond($cond=false){

        $sql = $this->_db->query("SELECT v.Id_viv,
                                         Nom_cb,
                                         Num_viv                                         
                                    FROM vivienda v
                                    LEFT JOIN calle_block cb ON (cb.Id_cb = v.Id_cb)
                                    WHERE v.Id_cond = $cond
                                    ORDER BY Nom_cb ASC, Num_viv ASC
                                    ");
        return $sql->fetchAll();
    }
    
    public function gAllVehiCond($cond=false){

        $sql = $this->_db->query("SELECT v.Id_vehi,
                                        Cod_vehi,
                                       Nom_modelo,
                                       Nom_marca                                     
                                    FROM vehiculo v
                                    LEFT JOIN modelo mo ON (mo.Id_modelo=v.Id_modelo)
                                    LEFT JOIN marca ma ON (ma.Id_marca=mo.Id_marca)
                                    WHERE v.Id_cond = $cond
                                    ORDER BY Nom_marca ASC, Nom_modelo ASC
                                    ");
        return $sql->fetchAll();
    }    
    
    public function gActExtAvanz(){

        $sql = $this->_db->query("SELECT *
                                    FROM act_extra
                                    ");
        return $sql->fetchAll();
    }
    
    //------------------------------------------------------------------------------
    
    public function gAllVivRelPer($idper = false, $cond = false){

        $per = $this->_db->query("SELECT v.Id_viv,
                                       Num_viv,
                                       Nom_cb
                                  FROM vivienda v 
                                  LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv)
                                  LEFT JOIN calle_block cb ON (cb.Id_cb=v.Id_cb)
                                  WHERE Id_per = $idper
                                   AND v.Id_cond = $cond
                                  GROUP BY v.Id_viv ASC
                                    ");
        return $per->fetchAll();
    }
    
    public function gAllVehiRelPer($idper = false, $cond = false){

        $per = $this->_db->query("SELECT Cod_vehi,
                                       Nom_marca,
                                       Nom_modelo
                                  FROM vehiculo v 
                                  LEFT JOIN vehiculo_persona vp ON (vp.Id_vehi=v.Id_vehi)
                                  LEFT JOIN modelo mo ON (mo.Id_modelo = v.Id_modelo)
                                  LEFT JOIN marca ma ON (ma.Id_marca = mo.Id_marca)
                                  WHERE vp.Id_per = $idper
                                   AND v.Id_cond = $cond
                                  GROUP BY Cod_vehi ASC
                                    ");
        return $per->fetchAll();
    }

    public function gVivPoseeProp($idviv=false, $cond=false){
        
         $ec = $this->_db->query("SELECT v.Id_viv
                                 FROM vivienda v
                                 LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv)                                                               
                                 WHERE vp.Id_viv = $idviv
                                    AND Id_trel = 1
                                    AND v.Id_cond = $cond ");
        return $ec->fetch();
    } 
    
        public function gTipoRelViv($condicion=""){

        $sql = $this->_db->query("SELECT Id_trel AS a, Nom_trel AS b
                                    FROM tipo_rel
                                    $condicion
                                    ");
        return $sql->fetchAll();
    }
    
    public function gVehiPoseeProp($idvehi=false, $cond=false){
        
         $ec = $this->_db->query("SELECT v.Id_vehi
                                 FROM vehiculo v
                                 LEFT JOIN vehiculo_persona vp ON (vp.Id_vehi=v.Id_vehi)                                                               
                                 WHERE vp.Id_vehi = $idvehi
                                    AND Id_trelv = 1
                                    AND v.Id_cond = $cond ");
        return $ec->fetch();
    } 
    
    public function gTipoRelVehi($condicion=""){

        $sql = $this->_db->query("SELECT Id_trelv AS a, Nom_trelv AS b
                                    FROM tipo_relvehi
                                    $condicion
                                    ");
        return $sql->fetchAll();
    }
//------------------------------------------------------------------------------
//Registro relaciones viv
    
    public function tieneYaRel($viv=false,$per=false,$trel=false){
        
         $ec = $this->_db->query("SELECT Nom_cb,
                                         Num_viv,
                                         Nom_trel
                                 FROM vivienda v
                                 LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv) 
                                 LEFT JOIN calle_block cb ON (cb.Id_cb = v.Id_cb)
                                 LEFT JOIN tipo_rel tr ON (tr.Id_trel=vp.Id_trel)
                                 WHERE vp.Id_viv = $viv
                                    AND vp.Id_per = $per
                                    AND vp.Id_trel = $trel ");
        return $ec->fetch();
    }    
    
    public function addRelVivRun($viv=false,$per=false,$trel=false){    
                
        $sql = $this->_db->prepare(
                "INSERT INTO vivienda_persona VALUES" . 
                "(null, :Id_viv, :Id_per, :Id_trel)"               
                )
                ->execute(array(                                     
                    ':Id_viv' => $viv,
                    ':Id_per' => $per,
                    ':Id_trel' => $trel
                ));
        if ($sql) { 
        return true;
        }
    }
    
    public function getrelvivrun($viv=false, $per=false, $trel=false){
        
         $ec = $this->_db->query("SELECT v.Id_viv,
                                       Num_viv,
                                       Nom_cb
                                  FROM vivienda v 
                                  LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv)
                                  LEFT JOIN calle_block cb ON (cb.Id_cb=v.Id_cb)
                                  WHERE vp.Id_viv = $viv
                                      AND Id_per = $per
                                      AND Id_trel = $trel
                                 ");
        return $ec->fetch();
    }
//-----------------------------------------------------------------------------
//Registro relaciones vehi
    
    public function tieneYaRelVehi($vehi=false,$per=false,$trelv=false){
        
         $ec = $this->_db->query("SELECT Cod_vehi,
                                         Nom_marca,
                                         Nom_modelo,
                                         Nom_trelv
                                 FROM vehiculo v
                                 LEFT JOIN vehiculo_persona vp ON (vp.Id_vehi=v.Id_vehi)                                  
                                 LEFT JOIN modelo mo ON (mo.Id_modelo = v.Id_modelo)
                                 LEFT JOIN marca ma ON (ma.Id_marca = mo.Id_marca)
                                 LEFT JOIN tipo_relvehi tr ON (tr.Id_trelv=vp.Id_trelv)
                                 WHERE vp.Id_vehi = $vehi
                                    AND vp.Id_per = $per
                                    AND vp.Id_trelv = $trelv ");
        return $ec->fetch();
    }
    
    public function addRelVehiRun($vehi=false,$per=false,$trelv=false){    
                
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
    
    public function getrelvehirun($vehi=false, $per=false, $trelv=false){
        
         $ec = $this->_db->query("SELECT Cod_vehi,
                                         Nom_marca,
                                         Nom_modelo
                                 FROM vehiculo v
                                 LEFT JOIN vehiculo_persona vp ON (vp.Id_vehi=v.Id_vehi)                                  
                                 LEFT JOIN modelo mo ON (mo.Id_modelo = v.Id_modelo)
                                 LEFT JOIN marca ma ON (ma.Id_marca = mo.Id_marca)
                                 LEFT JOIN tipo_relvehi tr ON (tr.Id_trelv=vp.Id_trelv)
                                 WHERE vp.Id_vehi = $vehi
                                    AND vp.Id_per = $per
                                    AND vp.Id_trelv = $trelv
                                 ");
        return $ec->fetch();
    }
//------------------------------------------------------------------------------
    
    public function regVisPerAvanRun($per=false,$viv=false,$acte=false,$usu=false,$vehi=false,$eprop=false,$evisita=false,$cond=false){    
                
        $per = (int) $per;
        $viv = (int) $viv;
        $acte = (int) $acte;
        $usu = (int) $usu;
        $eprop = (int) $eprop;
        $evisita = (int) $evisita;
        $cond = (int) $cond;
        
        $sql = $this->_db->prepare(
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
        if ($sql) { 
        return true;
        }
    }
}
