<?php

class perModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllPers($condicion=''){

        $per = $this->_db->query("SELECT  p.Id_per,
                                          CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(150)) AS Rut_per,
                                          CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom1_per,
                                          CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom2_per,
                                          CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape1_per,
                                          CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape2_per,
                                          CAST(AES_DECRYPT(Fono_per,'".ENCRYPT_KEY."')AS char(150)) AS Fono_per,
                                          p.Id_cond,
                                          Nom_cond
                                  FROM persona p
                                  LEFT JOIN condominio c ON (c.Id_cond=p.Id_cond)
                                  LEFT JOIN vivienda_persona vp ON ( vp.Id_per = p.Id_per )
                                  LEFT JOIN vivienda v ON ( v.Id_viv = vp.Id_viv ) 
                                  WHERE c.Id_cond=p.Id_cond 
                                  $condicion 
                                  AND p.Id_per <> 1
                                  GROUP BY Ape1_per ASC, p.Id_per ASC, p.Id_cond ASC
                                  
                                ");
        $per->setFetchMode(PDO::FETCH_ASSOC);
        return $per->fetchAll();
    }
    
    public function verSiPoseeRecurso($idper = false){
        
        $id = (int) $idper;
        $paraB = $this->_db->query("SELECT Id_per
                                    FROM persona
                                    WHERE Id_per = $id
                                    AND (
                                        EXISTS (
                                            SELECT Id_per
                                            FROM vivienda_persona
                                            WHERE Id_per = $id
                                        )
                                        OR
                                        EXISTS (
                                            SELECT Id_per
                                            FROM vehiculo_persona
                                            WHERE Id_per = $id
                                        )
                                    )
                                     ");
        //$res = $paraB->fetchColumn(0);//para count(id)
        if ($paraB->rowCount() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    
    public function getPer($id){

        $c = $this->_db->query("SELECT e.Id_per,
                                       CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(150)) AS Rut_per,
                                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom1_per,
                                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom2_per,
                                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape1_per,
                                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape2_per,
                                       CAST(AES_DECRYPT(Fono_per,'".ENCRYPT_KEY."')AS char(150)) AS Fono_per,
                                       Fch_per,
                                       er.*,
                                       tr.*,
                                       e.Id_cond,
                                       Nom_cond,
                                       ac.*,                                       
                                       ve.Id_vehi,
                                       Cod_vehi,
                                       Nom_marca,
                                       Nom_modelo,
                                       trv.Id_trelv,
                                       Nom_trelv
                                FROM persona e
                                LEFT JOIN est_resi er ON (er.Id_estre=e.Id_estre)
                                LEFT JOIN condominio co ON (co.Id_cond=e.Id_cond)
                                LEFT JOIN actividad ac ON (ac.Id_act=e.Id_act)
                                LEFT JOIN vivienda_persona vp ON (vp.Id_per=e.Id_per)
                                LEFT JOIN vehiculo_persona vep ON (vep.Id_per=e.Id_per)
                                LEFT JOIN tipo_rel tr ON (tr.Id_trel=vp.Id_trel)
                                LEFT JOIN vivienda v ON (v.Id_viv=vp.Id_viv)
                                LEFT JOIN calle_block cb ON (cb.Id_cb=v.Id_cb)
                                LEFT JOIN vehiculo ve ON (ve.Id_vehi=vep.Id_vehi)
                                LEFT JOIN tipo_relvehi trv ON (trv.Id_trelv=vep.Id_trelv)
                                LEFT JOIN modelo mo ON(mo.Id_modelo=ve.Id_modelo)
                                LEFT JOIN marca ma ON(ma.Id_marca=mo.Id_marca)
                                WHERE e.Id_per = $id
                                ");
        return $c->fetch();
    }

    public function getEstRes(){
        
         $ec = $this->_db->query("select * from est_resi");
        return $ec->fetchAll();
    }    
    
    public function getAct(){
        
         $ec = $this->_db->query("select * from actividad");
        return $ec->fetchAll();
    }   
    
    public function getCond($id=false){

        $c = $this->_db->query("SELECT Id_cond, Nom_cond
                                FROM condominio 
                                WHERE Id_cond = (
                                    SELECT u.Id_cond
                                    FROM usuario u
                                    LEFT JOIN persona p ON ( p.Id_per = u.Id_per )
                                    WHERE Id_usu =$id
                                )");
        return $c->fetchAll();
    }
    
    public function getConds(){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    ");
        return $per->fetchAll();
    }
    
    public function getCondsGestorPer($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorPer($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getCBLs($cond = false){

        $per = $this->_db->query("SELECT Id_cb AS a, Nom_cb AS b
                                  FROM calle_block
                                  WHERE Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
    
    public function getVehiCB($cond = false, $cb = false){

        $per = $this->_db->query("SELECT vhp.Id_vehi AS c, Cod_vehi AS d
                                    FROM vehiculo ve
                                    LEFT JOIN vehiculo_persona vhp ON ( vhp.Id_vehi = ve.Id_vehi )
                                    LEFT JOIN persona p ON ( p.Id_per = vhp.Id_per )
                                    LEFT JOIN vivienda_persona vip ON ( vip.Id_per = p.Id_per )
                                    LEFT JOIN vivienda vi ON ( vi.Id_viv = vip.Id_viv )
                                    WHERE ve.Id_cond = $cond
                                     AND vi.Id_cb = $cb 
                                    GROUP BY vhp.Id_vehi ASC , Cod_vehi ASC
                                    ");
        return $per->fetchAll();
    }
    
    public function getVivAllCond($cond = false){
        
        $per = $this->_db->query("SELECT v.Id_viv AS c, Nom_cb d, Num_viv AS e
                                  FROM vivienda v
                                  LEFT JOIN calle_block cb ON(cb.Id_cb=v.Id_cb)
                                  WHERE v.Id_cond = $cond
                                      AND v.Id_viv NOT IN (Select Id_viv FROM vivienda_persona)
                                    ");
        return $per->fetchAll();
    }
    
    public function getVivDeCB($cb = false, $cond = false){

        $per = $this->_db->query("SELECT v.Id_viv AS c, Nom_cb d, Num_viv AS e
                                  FROM vivienda v
                                  LEFT JOIN calle_block cb ON(cb.Id_cb=v.Id_cb)
                                  WHERE v.Id_cb = $cb
                                      AND v.Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
    
    public function getVehiAllCond($cond = false){

        $per = $this->_db->query("SELECT Id_vehi AS c, Cod_vehi AS d
                                    FROM vehiculo 
                                    WHERE Id_cond = $cond
                                    ORDER BY Cod_vehi ASC
                                    ");
        return $per->fetchAll();
    }
    
    public function getDatosPer($id){

        $c = $this->_db->query("SELECT CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom1_per,
                                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(150)) AS Nom2_per,
                                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape1_per,
                                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(150)) AS Ape2_per
                                FROM persona 
                                WHERE Id_per = $id
                                ");
        return $c->fetch();
    }
    
    public function getVivRelPer($idper = false, $cond = false){

        $per = $this->_db->query("SELECT v.Id_viv,
                                       Num_viv,
                                       v.Id_cb,
                                       Nom_cb,
                                       Nom_trel
                                  FROM vivienda v 
                                  LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv)
                                  LEFT JOIN calle_block cb ON (cb.Id_cb=v.Id_cb)
                                  LEFT JOIN tipo_rel tr ON (tr.Id_trel=vp.Id_trel)
                                  WHERE Id_per = $idper
                                   AND v.Id_cond = $cond
                                  GROUP BY v.Id_viv ASC
                                    ");
        return $per->fetchAll();
    }
    
    public function getVehiRelPer($idper = false, $cond = false){

        $per = $this->_db->query("SELECT ve.Id_vehi, 
                                         Cod_vehi, 
                                         Nom_trelv
                                FROM vehiculo ve
                                LEFT JOIN vehiculo_persona vhp ON ( vhp.Id_vehi = ve.Id_vehi )
                                LEFT JOIN persona p ON ( p.Id_per = vhp.Id_per )
                                LEFT JOIN tipo_relvehi tr ON ( tr.Id_trelv = vhp.Id_trelv )
                                WHERE vhp.Id_per =$idper
                                AND p.Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
    
    public function getVivisCond($cond=false){
        
        $sc = $this->_db->query(
                "SELECT Id_viv AS a, Nom_cb AS b, Num_viv AS c
                 FROM vivienda v
                 LEFT JOIN calle_block cb ON(cb.Id_cb=v.Id_cb)                 
                 WHERE v.Id_cond = $cond                      
                 ORDER BY Num_viv ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
    public function getVehisCond($cond=false){
        
        $sc = $this->_db->query(
                "SELECT Id_vehi AS a, Nom_marca AS b, Nom_modelo AS c, Cod_vehi AS d 
                 FROM vehiculo v
                 LEFT JOIN modelo mo ON(mo.Id_modelo=v.Id_modelo)
                 LEFT JOIN marca ma ON(ma.Id_marca=mo.Id_marca)                 
                 WHERE Id_cond = $cond                      
                 ORDER BY Nom_marca ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
    public function getIdCond($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getIdCondPer($idper=false){
        
        $id = $this->_db->query("SELECT Id_cond
                                    FROM persona
                                    WHERE Id_per = $idper 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCBCond($cond=false){
        
         $ec = $this->_db->query("SELECT Id_cb AS a, Nom_cb AS b
                                  FROM calle_block
                                  WHERE Id_cond = $cond");
        return $ec->fetchAll();
    }
    
    public function getVivs($cond=false){
        
         $ec = $this->_db->query("SELECT Id_viv, Nom_cb, Num_viv 
                                  FROM vivienda v
                                  LEFT JOIN calle_block cb ON(cb.Id_cb=v.Id_cb)
                                  $cond");
        return $ec->fetchAll();
    }    
    
    public function getTRelViv(){
        
         $ec = $this->_db->query("select * from tipo_rel");
        return $ec->fetchAll();
    } 
    
    public function getAllVehi($cond=false){
        
         $ec = $this->_db->query("SELECT Id_vehi, Cod_vehi, Nom_modelo, Nom_marca 
                                  FROM vehiculo v
                                  LEFT JOIN modelo mo ON(mo.Id_modelo=v.Id_modelo)
                                  LEFT JOIN marca ma ON(ma.Id_marca=mo.Id_marca)
                                  $cond");
        return $ec->fetchAll();
    }    
    
    public function getAllRelVehi(){
        
         $ec = $this->_db->query("select * from tipo_relvehi");
        return $ec->fetchAll();
    } 
    
    public function verificarRut($id = false){
        
        $sql = $this->_db->query(
                "SELECT CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(150)) AS Rut_per 
                 FROM persona 
                 WHERE Rut_per = AES_ENCRYPT('$id', '".ENCRYPT_KEY."')"
                );
        return $sql->fetch();
    }
    
    public function getExistePropViv($idviv = false){
        
        $sql = $this->_db->query(
                "SELECT CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(150)) AS Rut_per 
                 FROM persona p
                 LEFT JOIN vivienda_persona vip ON ( vip.Id_per = p.Id_per )
                 WHERE Id_viv = $idviv
                 AND Id_trel = 1
                ");
        return $sql->fetch();
    }
    
    public function verificarSiPoseeProp($id=false, $cond=false){
        
        $sql = $this->_db->query(
                "SELECT CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(150)) AS Rut_per 
                 FROM persona p
                 LEFT JOIN vehiculo_persona vp ON (vp.Id_per=p.Id_per)
                 WHERE Id_vehi = $id
                     AND Id_trelv = 1
                     AND Id_cond = $cond
                ");
        return $sql->fetch();
    }
    
    public function verificarPer($id=false){
        
        $sql = $this->_db->query(
                "select Id_per from persona where Id_per = $id"
                );
        return $sql->fetch();
    }
    
    public function newPer($rut=false,$nom1=false,$nom2=false,$ape1=false,$ape2=false,$fono=NULL,$cond=NULL,$estre=false,$act=false){    
                
        $this->_db->prepare(
                "INSERT INTO persona VALUES
                (NULL, 
                AES_ENCRYPT(:Rut_per, '".ENCRYPT_KEY."'), 
                AES_ENCRYPT(:Nom1_per, '".ENCRYPT_KEY."'), 
                AES_ENCRYPT(:Nom2_per, '".ENCRYPT_KEY."'), 
                AES_ENCRYPT(:Ape1_per, '".ENCRYPT_KEY."'), 
                AES_ENCRYPT(:Ape2_per, '".ENCRYPT_KEY."'), 
                AES_ENCRYPT(:Fono_per, '".ENCRYPT_KEY."'), 
                NOW(),
                :Id_estre,
                :Id_cond,
                :Id_act
                )")
                ->execute(array(
                    ':Rut_per' => $rut,
                    ':Nom1_per' => $nom1,
                    ':Nom2_per' => $nom2,
                    ':Ape1_per' => $ape1,
                    ':Ape2_per' => $ape2,
                    ':Fono_per' => $fono,
                    ':Id_estre' => $estre,
                    ':Id_cond' => !empty($cond) ? $cond : NULL,
                    ':Id_act' => $act
                )); 
    }
    
    public function getIdPer($rut=false){
        
        $id = $this->_db->query("SELECT Id_per
                                    FROM persona 
                                    WHERE Rut_per = '{$rut}'
                                ");
        $idper = $id->fetch(PDO::FETCH_ASSOC);
        return $idper['Id_per'];
    }
    
    public function getIdPerViv($idper=false){
        
        $id = $this->_db->query("SELECT Id_per
                                    FROM vivienda_persona
                                    WHERE Id_per = $idper
                                ");
        $getid = $id->fetch(PDO::FETCH_ASSOC);
        return $getid['Id_per'];
    }
    
    public function getIdPerVehi($idper=false){
        
        $id = $this->_db->query("SELECT Id_per
                                    FROM vehiculo_persona
                                    WHERE Id_per = $idper
                                ");
        $getid = $id->fetch(PDO::FETCH_ASSOC);
        return $getid['Id_per'];
    }
    
    public function poseeYaRelVivPer($viv=false,$per=false){
        
         $ec = $this->_db->query("SELECT Nom_cb,
                                         Num_viv,
                                         Nom_trel
                                 FROM vivienda v
                                 LEFT JOIN vivienda_persona vp ON (vp.Id_viv=v.Id_viv)
                                 LEFT JOIN calle_block cb ON(cb.Id_cb=v.Id_cb)
                                 LEFT JOIN tipo_rel tr ON (tr.Id_trel=vp.Id_trel)
                                 WHERE vp.Id_viv = $viv
                                    AND vp.Id_per = $per");
        return $ec->fetch();
    }
    
    public function newVivPer($viv=false,$per=false,$trel=false){    
                
        $this->_db->prepare(
                "INSERT INTO vivienda_persona VALUES
                (NULL, 
                :Id_viv, 
                :Id_per, 
                :Id_trel
                )")
                ->execute(array(
                    ':Id_viv' => $viv,
                    ':Id_per' => $per,
                    ':Id_trel' => $trel
                )); 
    }
    
    public function poseeYaRelVehiPer($vehi=false,$per=false){
        
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
				");
        return $ec->fetch();
    }
    
    public function newVehiPer($vehi=false,$per=false,$trelv=false){    
                
        $this->_db->prepare(
                "INSERT INTO vehiculo_persona VALUES
                (NULL, 
                :Id_vehi, 
                :Id_per, 
                :Id_trelv
                )")
                ->execute(array(
                    ':Id_vehi' => $vehi,
                    ':Id_per' => $per,
                    ':Id_trelv' => $trelv
                )); 
    }
    
    public function editPer($rut=false,$nom1=false,$nom2=false,$ape1=false,$ape2=false,$fono=false,$estre=false,$cond=false,$act=false){    
                
        $this->_db->prepare( 
                "UPDATE persona SET 
                 Nom1_per = AES_ENCRYPT(:Nom1_per, '".ENCRYPT_KEY."'),
                 Nom2_per = AES_ENCRYPT(:Nom2_per, '".ENCRYPT_KEY."'),
                 Ape1_per = AES_ENCRYPT(:Ape1_per, '".ENCRYPT_KEY."'),
                 Ape2_per = AES_ENCRYPT(:Ape2_per, '".ENCRYPT_KEY."'), 
                 Fono_per = AES_ENCRYPT(:Fono_per, '".ENCRYPT_KEY."'),
                 Id_estre = :Id_estre,		
		 Id_cond = :Id_cond,
		 Id_act = :Id_act
                 WHERE Rut_per = AES_ENCRYPT('$rut', '".ENCRYPT_KEY."')"                               
                )
                ->execute(array(
                    ':Nom1_per' => $nom1,
                    ':Nom2_per' => $nom2,
                    ':Ape1_per' => $ape1,
                    ':Ape2_per' => $ape2,
                    ':Fono_per' => $fono,
                    ':Id_estre' => $estre,
                    ':Id_cond' => $cond,
                    ':Id_act' => $act
                )); 
    }

    public function editVivPer($viv=false,$per=false,$trel=false){
        
        $this->_db->prepare( 
                "UPDATE vivienda_persona SET 
                 Id_viv = :Id_viv,
                 Id_trel = :Id_trel 
                 WHERE Id_per =$per"                               
                )
                ->execute(array(
                    ':Id_viv' => $viv,
                    ':Id_trel' => $trel
                )); 
    }
    
    public function editVehiPer($vehi=false,$per=false,$trelv=false){
        
        $this->_db->prepare( 
                "UPDATE vehiculo_persona SET 
                 Id_vehi = :Id_vehi,
                 Id_trelv = :Id_trelv 
                 WHERE Id_per =$per"                               
                )
                ->execute(array(
                    ':Id_vehi' => $vehi,
                    ':Id_trelv' => $trelv
                ));
    }
    
    public function verVivPer($id=false){
        
        $sql = $this->_db->query("SELECT Id_per
                                    FROM vivienda_persona 
                                    WHERE Id_per = '{$id}'
                                ");
        $idper = $sql->fetch(PDO::FETCH_ASSOC);
        return $idper['Id_per'];
    }
    
    public function verificarIdVivPer($id=false){
        
        $sql = $this->_db->query(
                "select Id_viv from vivienda where Id_viv = $id"
                );
        return $sql->fetch();
    }
    
    public function verVehiPer($id=false){
        
        $sql = $this->_db->query("SELECT Id_per
                                    FROM vehiculo_persona 
                                    WHERE Id_per = '{$id}'
                                ");
        $idper = $sql->fetch(PDO::FETCH_ASSOC);
        return $idper['Id_per'];
    }

    public function deleteVivPer($viv = false, $per = false){
        
        $id = (int) $per;
        $this->_db->query("DELETE FROM vivienda_persona " .
                          "WHERE Id_viv = $viv AND Id_per=$id");
    }
    
    public function verificarIdVehiPer($id=false){
        
        $sql = $this->_db->query(
                "select Id_vehi from vehiculo where Id_vehi = $id"
                );
        return $sql->fetch();
    }
    
    public function deleteVehiPer($vehi = false, $per = false){
        
        $id = (int) $per;
        $this->_db->query("DELETE FROM vehiculo_persona 
                            WHERE Id_vehi = $vehi AND Id_per=$id");
    }
    
    public function eliminarPer($idper = false){
        
        $id = (int) $idper;
        $this->_db->query("DELETE FROM persona " .
                          "WHERE Id_per=$id");
    }
    
}
?>