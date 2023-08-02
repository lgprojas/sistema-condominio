<?php

class loginModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario($usuario, $password){
        
        $datos = $this->_db->query(
                "SELECT u.Id_usu,
                        Fch_hses,
                        CAST(AES_DECRYPT(Rut_usu,'".ENCRYPT_KEY."')AS char(100)) AS Rut_usu,
                        CAST(AES_DECRYPT(Nom_usu,'".ENCRYPT_KEY."')AS char(100)) AS Nom_usu,
                        CAST(AES_DECRYPT(Usu_usu,'".ENCRYPT_KEY."')AS char(100)) AS Usu_usu,
                        Pass_usu,
                        CAST(AES_DECRYPT(Email_usu,'".ENCRYPT_KEY."')AS char(100)) AS Email_usu,
                        Id_role,
                        Id_estusu,
                        Id_per,
                        Id_cond                        
                 FROM usuario u
                 LEFT JOIN his_ses h ON (h.Id_usu=u.Id_usu)
                 WHERE Usu_usu = AES_ENCRYPT('$usuario', '".ENCRYPT_KEY."') 
                 AND Pass_usu = '" . Hash::getHash('sha1', $password, HASH_KEY) ."'               
                ");
        
        return $datos->fetch();
    }
//------------------------------------------------------------------------------
//check    
    public function verificarBloqueo($usuario=false){
        
        $sql = $this->_db->query(
                "SELECT Est_hses 
                 FROM usuario u
                 LEFT JOIN his_ses h ON (h.Id_usu=u.Id_usu)
                 WHERE Usu_usu = AES_ENCRYPT('$usuario', '".ENCRYPT_KEY."')"
                );
        $id = $sql->fetch(PDO::FETCH_ASSOC);
        return $id['Est_hses'];
    }
    
    public function verificarUsu($usuario=false){
        
        $sql = $this->_db->query(
                "SELECT Id_usu FROM usuario WHERE Usu_usu = AES_ENCRYPT('$usuario', '".ENCRYPT_KEY."')"
                );
        $id = $sql->fetch(PDO::FETCH_ASSOC);
        return $id['Id_usu'];
    }
    
    public function getDatosSesionUsu($usuario=false){
        
        $sql = $this->_db->query(
                "SELECT * FROM his_ses WHERE Id_usu = $usuario"
                );
        return $sql->fetch();
    }
    
    public function sumaNuevoIntento($idusu=false, $intento=false){
        
        $id = (int) $idusu;
        $this->_db->prepare("UPDATE his_ses SET Intentos_hses = :new WHERE Id_usu = :id")
        ->execute(array(
            ':id' => $id,
            ':new' => $intento
        ));
    }
    
    public function sumarNuevoIngreso($idusu=false){
        
        $id = (int) $idusu;
        $this->_db->prepare("UPDATE his_ses SET Cant_hses = Cant_hses + 1 WHERE Id_usu = :id")
        ->execute(array(
            ':id' => $id
        ));
    }
    
    public function sumaContBloq($idusu=false, $contBloq=false){
        
        $id = (int) $idusu;
        $this->_db->prepare("UPDATE his_ses SET ContBloq_hses = :new WHERE Id_usu = :id")
        ->execute(array(
            ':id' => $id,
            ':new' => $contBloq
        ));
    }
    
    public function sancionarConTiempo($idusu=false, $newTime=false){
        
        $id = (int) $idusu;
        $this->_db->prepare("UPDATE his_ses SET Fch_hses = :new WHERE Id_usu = :id")
        ->execute(array(
            ':id' => $id,
            ':new' => $newTime
        ));
    }
    
    public function reestableceFechaIntentos($idusu=false){
        
        $id = (int) $idusu;
        $this->_db->prepare("UPDATE his_ses SET 
                                    Fch_hses = NOW(), 
                                    Intentos_hses = 0, 
                                    ContBloq_hses = 0 
                             WHERE Id_usu = :id
                             ")
        ->execute(array(
            ':id' => $id
        ));
    }
    
    public function bloquearCuenta($idusu=false){
        
        $id = (int) $idusu;
        $this->_db->prepare("UPDATE his_ses SET Est_hses = 2 WHERE Id_usu = :id")
        ->execute(array(
            ':id' => $id
        ));
    }
//------------------------------------------------------------------------------    
    public function getConfigCond($cond = false){
        
        $datos = $this->_db->query("SELECT Id_tv
                                    FROM config_cond
                                    WHERE Id_cond = $cond
                        ");
        
        $est = $datos->fetch(PDO::FETCH_ASSOC);
        return $est['Id_tv'];
    }
    
    public function getEstResid($per = false, $in = " = 0"){
        
        $datos = $this->_db->query("
                                SELECT Id_per
                                FROM vivienda_persona
                                WHERE Id_per = $per
                                    AND Id_trel $in
                    ");
        
        $est = $datos->fetch(PDO::FETCH_ASSOC);
        return $est['Id_per'];
    }
}
?>
