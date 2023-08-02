<?php

class visitaModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllVisitasCond($condicion=''){

        $sql = $this->_db->query("SELECT  rv.Id_regv,
                                          Fch_regv,
                                          CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(150)) AS Rut_per,
                                          CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom1_per,
                                          CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom2_per,
                                          CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape1_per,
                                          CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape2_per,
                                          Nom_cb,
                                          Num_viv,
                                          Nom_esta,
                                          Nom_actext,
                                          Cod_vehi,
                                          Est_prop,
                                          Est_visita,
                                          c.Id_cond,
                                          Nom_cond
                                  FROM reg_visita rv
                                  LEFT JOIN persona p ON (p.Id_per=rv.Id_per)
                                  LEFT JOIN condominio c ON (c.Id_cond=rv.Id_cond)
                                  LEFT JOIN vivienda v ON ( v.Id_viv = rv.Id_viv ) 
                                  LEFT JOIN calle_block cb ON ( cb.Id_cb = v.Id_cb )
                                  LEFT JOIN estacionamiento e ON ( e.Id_esta = v.Id_esta )
                                  LEFT JOIN act_extra ae ON ( ae.Id_actext = rv.Id_actext )
                                  WHERE c.Id_cond=p.Id_cond 
                                  $condicion 
                                  GROUP BY Fch_regv DESC, rv.Id_cond ASC
                                  
                                ");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    
    public function getCondsGestorVisita($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorVisita($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getIdCondVisita($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCondsVisita(){

        $sql = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $sql->fetchAll();
    }
    
    public function getCBLsCond($cond = false){

        $sql = $this->_db->query("SELECT Id_cb AS a, Nom_cb AS b
                                  FROM calle_block
                                  WHERE Id_cond = $cond
                                    ");
        return $sql->fetchAll();
    }
    
    public function getVivCB($cb = false, $cond = false){

        $per = $this->_db->query("SELECT v.Id_viv AS c, Nom_cb AS d, Num_viv AS e
                                  FROM vivienda v
                                  LEFT JOIN calle_block cb ON(cb.Id_cb=v.Id_cb)
                                  WHERE v.Id_cb = $cb
                                      AND v.Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
}