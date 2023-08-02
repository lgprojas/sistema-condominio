<?php

class avanzadoModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getCondAvanz(){

        $sql = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $sql->fetchAll();
    }
    
    public function getIdCondAvanz($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }

    public function getCondsGestorAvanz($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorAvanz($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getNamePerCond($per=false, $cond=false) {
        
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
    
    public function getIdPers($ape1 = false, $ape2 = false, $nom1 = false, $nom2 = false, $cond = false) {

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
    
    public function getDatosPer($idper=false, $cond=false){

        $c = $this->_db->query("SELECT e.Id_per,
                                       CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(150)) AS Rut_per,
                                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom1_per,
                                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom2_per,
                                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape1_per,
                                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape2_per,
                                       CAST(AES_DECRYPT(Fono_per,'".ENCRYPT_KEY."')AS char(150)) AS Fono_per, 
                                       e.Id_estre,
                                       Nom_estre,
                                       Nom_cond,
                                       Nom_act
                                FROM persona e
                                LEFT JOIN est_resi er ON (er.Id_estre=e.Id_estre)
                                LEFT JOIN condominio co ON (co.Id_cond=e.Id_cond)
                                LEFT JOIN actividad ac ON (ac.Id_act=e.Id_act)                               
                                WHERE e.Id_per = $idper
                                    AND e.Id_cond = $cond
                                ");
        return $c->fetch();
    }
    
    public function getEsPropViv($idper=false, $cond=false){
        
         $ec = $this->_db->query("SELECT Nom_cb,
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
                                LEFT JOIN estacionamiento e ON ( e.Id_esta = vi.Id_esta )
                                WHERE vp.Id_per = $idper
                                AND p.Id_cond = $cond
                                AND vp.Id_trel = 1
                                ");
        return $ec->fetch();
    } 
    
    public function getAllVivCond($cond=false){

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
    
    public function getAllVehiCond($cond=false){

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
    
    public function getEsPropVehi($idper=false, $cond=false){
        
         $ec = $this->_db->query("SELECT Cod_vehi,
                                       Desc_vehi,
                                       Nom_modelo,
                                       Nom_marca
                                FROM vehiculo v
                                LEFT JOIN modelo mo ON (mo.Id_modelo=v.Id_modelo)
                                LEFT JOIN marca ma ON (ma.Id_marca=mo.Id_marca)                                                                                                
                                LEFT JOIN vehiculo_persona vep ON (vep.Id_vehi=v.Id_vehi)                               
                                WHERE vep.Id_per = $idper
                                    AND Id_trelv = 1
                                    AND v.Id_cond = $cond ");
        return $ec->fetch();
    } 
    
    public function getVivPoseeProp($idviv=false, $cond=false){
        
         $ec = $this->_db->query("SELECT v.Id_viv
                                 FROM vivienda v
                                 LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv)                                                               
                                 WHERE vp.Id_viv = $idviv
                                    AND Id_trel = 1
                                    AND v.Id_cond = $cond ");
        return $ec->fetch();
    } 
    
    public function getVehiPoseeProp($idvehi=false, $cond=false){
        
         $ec = $this->_db->query("SELECT v.Id_vehi
                                 FROM vehiculo v
                                 LEFT JOIN vehiculo_persona vp ON (vp.Id_vehi=v.Id_vehi)                                                               
                                 WHERE vp.Id_vehi = $idvehi
                                    AND Id_trelv = 1
                                    AND v.Id_cond = $cond ");
        return $ec->fetch();
    } 
    
    public function getTipoRelViv($condicion=""){

        $sql = $this->_db->query("SELECT Id_trel AS a, Nom_trel AS b
                                    FROM tipo_rel
                                    $condicion
                                    ");
        return $sql->fetchAll();
    }
    
    public function getTipoRelVehi($condicion=""){

        $sql = $this->_db->query("SELECT Id_trelv AS a, Nom_trelv AS b
                                    FROM tipo_relvehi
                                    $condicion
                                    ");
        return $sql->fetchAll();
    }
    
    public function getActExtAvanz(){

        $sql = $this->_db->query("SELECT *
                                    FROM act_extra
                                    ");
        return $sql->fetchAll();
    }
    
//--------------------------------------------------
//Registro relaciones viv
    
    public function poseeYaRel($viv=false,$per=false,$trel=false){
        
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
   
    public function addrelviv($viv=false,$per=false,$trel=false){    
                
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
    
    public function getrelviv($viv=false, $per=false, $trel=false){
        
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
    
    public function poseeYaRelVehi($vehi=false,$per=false,$trelv=false){
        
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
    
    public function addrelvehi($vehi=false,$per=false,$trelv=false){    
                
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
    
    public function getrelvehi($vehi=false, $per=false, $trelv=false){
        
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
//getDatosParaRegistroVisita
    
    public function getAllVivRelPer($idper = false, $cond = false){

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
//------------------------------------------------------------------------------
    
    public function getAllVehiRelPer($idper = false, $cond = false){

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
    
    public function regVisPerAvan($per=false,$viv=false,$acte=false,$usu=false,$vehi=false,$eprop=false,$evisita=false,$cond=false){    
                
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