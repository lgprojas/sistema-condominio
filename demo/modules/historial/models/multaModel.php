<?php

class multaModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllVivMultas($cond=''){

        $bd = $this->_db->query("SELECT v.Id_viv, Num_viv, Nom_cb, Id_esta, v.Id_cond, Nom_cond
                                 FROM vivienda v
                                 LEFT JOIN condominio c ON (c.Id_cond = v.Id_cond)
                                 LEFT JOIN calle_block cb ON (cb.Id_cb = v.Id_cb) 
                                 WHERE c.Id_cond = v.Id_cond 
                                 $cond 
                                 ORDER BY Nom_cb ASC");
        return $bd->fetchAll();
    }
    
    public function getVivMultas($viv=false, $cond=false){

        $bd = $this->_db->query("SELECT m.*, Cod_tmul, Nom_estmul, v.Id_cond 
                                 FROM multa m
                                 LEFT JOIN vivienda v ON (v.Id_viv=m.Id_viv) 
                                 LEFT JOIN est_multa em ON (em.Id_estmul=m.Id_estmul)
                                 LEFT JOIN tipo_multa tm ON (tm.Id_tmul=m.Id_tmul)
                                 WHERE v.Id_viv = $viv
                                 AND v.Id_cond = $cond
                                 ORDER BY Fchi_multa DESC");
        return $bd->fetchAll();
    }
    
    public function getDatosVivMulta($idviv=false, $cond=false){
        
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
    
    public function getTotalMultasViv($idviv = false){

        $sql = $this->_db->query("SELECT Id_multa, COUNT(*) AS Total 
                                  FROM multa 
                                  WHERE Id_viv = $idviv
                                    ");
        $t = $sql->fetch(PDO::FETCH_ASSOC);
        return $t['Total'];
    } 
    
    public function getPagadasMultasViv($idviv = false){

        $sql = $this->_db->query("SELECT Id_multa, COUNT(*) AS Pagadas
                                  FROM multa 
                                  WHERE Id_viv = $idviv
                                      AND Id_estmul = 2
                                    ");
        $t = $sql->fetch(PDO::FETCH_ASSOC);
        return $t['Pagadas'];
    } 
    
    public function getPendMultasViv($idviv = false){

        $sql = $this->_db->query("SELECT Id_multa, COUNT(*) AS Pendientes
                                  FROM multa 
                                  WHERE Id_viv = $idviv
                                      AND Id_estmul = 1
                                    ");
        $t = $sql->fetch(PDO::FETCH_ASSOC);
        return $t['Pendientes'];
    }
    
    public function getCondsGestorMulta($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondGestorMulta($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getCTMulta() {
        
        $sql = $this->_db->query("SELECT *
                                    FROM ctipo_multa
                                    ");
        return $sql->fetchAll();
    }
    
    public function getTMulta() {
        
        $sql = $this->_db->query("SELECT *
                                    FROM tipo_multa
                                    ");
        return $sql->fetchAll();
    }
    
    public function getEstadosMulta() {
        
        $sql = $this->_db->query("SELECT *
                                    FROM est_multa
                                    ");
        return $sql->fetchAll();
    }
    
    public function verificarMulta($multa=false,$viv=false,$cond=false){
        
        $ver = $this->_db->query(
                "SELECT Cod_multa 
                FROM multa m
                LEFT JOIN vivienda v ON (v.Id_viv=m.Id_viv) 
                WHERE Id_multa = $multa
                 AND m.Id_viv = $viv
                 AND Id_cond = $cond
                ");
        return $ver->fetch();
    }
    
    public function getIdCondMulta($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getIdVivCondMulta($idviv=false){
        
        $id = $this->_db->query("SELECT Id_cond
                                    FROM vivienda
                                    WHERE Id_viv = $idviv
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
//    public function getCBMulta($cond=""){
//        
//         $ec = $this->_db->query("SELECT * 
//                                  FROM calle_block
//                                  $cond ");
//        return $ec->fetchAll();
//    }    
    
//    public function getMultaConds(){
//
//        $per = $this->_db->query("SELECT *
//                                    FROM condominio
//                                    ");
//        return $per->fetchAll();
//    }
    
    public function getCBMultaCond($cond=false){
        
        $sc = $this->_db->query(
                "SELECT Id_cb AS a, Nom_cb AS b
                 FROM calle_block                
                 WHERE Id_cond = $cond                      
                 ORDER BY Nom_cb ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
    public function getTMul($ctmul=false){
        
        $sc = $this->_db->query(
                "SELECT Id_tmul AS a, Cod_tmul AS b
                 FROM tipo_multa                
                 WHERE Id_ctmul = $ctmul                      
                 ORDER BY Cod_tmul ASC "
                );
                $sc->setFetchMode(PDO::FETCH_ASSOC);
                return $sc->fetchAll();
    }
    
//    public function getMultaIdCond($idusu=false){
//        
//        $id = $this->_db->query("SELECT Id_cond
//                                    FROM persona p
//                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
//                                    WHERE Id_usu = $idusu 
//                                ");
//        $idcond = $id->fetch(PDO::FETCH_ASSOC);
//        return $idcond['Id_cond'];
//    }
    
    public function verificarExiCodMulta($cod=false, $viv=false){
        
        $id = $this->_db->query(
                "SELECT Id_multa FROM multa WHERE Cod_multa = '$cod' AND Id_viv = $viv"
                );
        return $id->fetch();
    }
    
    public function addMultaViv($cod=false,$fi=false,$fp=NULL,$n=NULL,$m=false,$usu=false,$tmul=false,$viv=false,$cond=false){    
        
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
    
    public function getMulta($idmulta=false, $idviv=false, $idcond=false){
       
        $multa = (int) $idmulta;
        $viv = (int) $idviv;
        $cond = (int) $idcond;
        $bd = $this->_db->query("SELECT m.*, 
                                        ctm.Id_ctmul, 
                                        Nom_ctmul, 
                                        tm.Id_tmul, 
                                        Cod_tmul, 
                                        em.Id_estmul, 
                                        Nom_estmul, 
                                        v.Id_cond 
                                 FROM multa m
                                 LEFT JOIN vivienda v ON (v.Id_viv=m.Id_viv) 
                                 LEFT JOIN est_multa em ON (em.Id_estmul=m.Id_estmul)
                                 LEFT JOIN tipo_multa tm ON (tm.Id_tmul=m.Id_tmul)
                                 LEFT JOIN ctipo_multa ctm ON (ctm.Id_ctmul=tm.Id_ctmul)
                                 WHERE Id_multa = $multa
                                 AND v.Id_viv = $viv
                                 AND v.Id_cond = $cond                               
                                ");
        return $bd->fetch();
    }
    
    public function editarMulta($id=false,$cod=false,$fi=false,$fp=NULL,$n=NULL,$m=false,$viv=false,$tmul=false,$emul=false,$cond=false){

        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
            ));
        
        $sql = $this->_db->prepare("UPDATE multa SET 
                            Fchi_multa = :fchi, 
                            Fchp_multa = :fchp, 
                            Nota_multa = :nota, 
                            Total_multa = :total,
                            Id_tmul = :tmul,
                            Id_estmul = :estmul
                            WHERE Id_multa = :id
                                AND Cod_multa = :cod
                                AND Id_viv = :viv
                            ")
        ->execute(array(
            ':id' => $id,
            ':cod' => $cod,
            ':viv' => $viv,
            ':fchi' => $fi,
            ':fchp' => !empty($fp) ? $fp : NULL,
            ':nota' => !empty($n) ? $n : NULL,
            ':total' => $m,
            ':tmul' => $tmul,
            ':estmul' => $emul
        ));
        
        if ($sql) { 
            return true;
        }
    }
    
    public function eliminarMulta($multa=false, $viv=false, $cond=false){
        
        $this->_db->prepare("SET @urut = :rut, @cond = :cond")
        ->execute(array(
            ':rut' => Session::get('rut_usu'),
            ':cond' => $cond
        ));
        
        $this->_db->query("DELETE FROM multa 
                            WHERE Id_multa = $multa
                                AND Id_viv = $viv
                            ");
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
    
    public function getCBLsMulta($cond = false){

        $per = $this->_db->query("SELECT Id_cb AS a, Nom_cb AS b
                                  FROM calle_block
                                  WHERE Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
}
?>
