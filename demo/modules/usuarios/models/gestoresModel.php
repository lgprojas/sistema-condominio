<?php

class gestoresModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getGestores(){

        $sj = $this->_db->query("SELECT Id_usu,
                                CAST(AES_DECRYPT(Rut_usu,'".ENCRYPT_KEY."')AS char(100)) AS Rut_usu,
                                CAST(AES_DECRYPT(Nom_usu,'".ENCRYPT_KEY."')AS char(100)) AS Nom_usu, 
                                Nom_role,
                                Id_estusu       
                                FROM usuario u
                                LEFT JOIN role r ON (r.Id_role = u.Id_role)
                                WHERE u.Id_role IN (1,2)
                                ORDER BY Nom_usu ASC");
                return $sj->fetchAll();
    }
    
    public function verSiPoseeCond($idusu = false){
        
        $id = (int) $idusu;
        $paraB = $this->_db->query("SELECT Id_acond
                                     from gestor_cond 
                                     where Id_usu = $id"
                                    );
        if ($paraB->rowCount() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
    
    public function getAllPerGest(){
        
        $pers = $this->_db->query(
                "SELECT Id_per,
                       CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per,
                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per,
                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per,
                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per 
                FROM persona                
                WHERE Id_per NOT IN (SELECT Id_per FROM usuario)
                AND Id_cond IS NULL
                ");
                return $pers->fetchAll();        
    }
    
    public function getAllRolesGest(){
        
        $sql = $this->_db->query("SELECT * 
                                FROM role 
                                WHERE Id_role = 2
                                ORDER BY Id_role ASC");
        return $sql->fetchAll();
    }
    
    public function getAllEstGest(){
        
        $sql = $this->_db->query("SELECT * 
                                FROM est_usu
                                ORDER BY Id_estusu ASC");
        return $sql->fetchAll();
    }
    
    public function verificarUsuarioGestor($usuario = false){
        //verifica si ya existe el usuario en la base de datos
        $id = $this->_db->query(
                        "SELECT Id_usu, 
                                Cod_usu 
                        FROM usuario 
                        WHERE Usu_usu = AES_ENCRYPT('$usuario', '".ENCRYPT_KEY."')"
                );
        return $id->fetch();
    }
    
    public function verificarEmailGestor($email = false){
        //verifica si ya existe el usuario en la base de datos
        $id = $this->_db->query(
                        "SELECT Id_usu 
                        FROM usuario 
                        WHERE Email_usu = AES_ENCRYPT('$email', '".ENCRYPT_KEY."')"
                );
        return $id->fetch();
    }
    
        public function registrarUsuarioGestor($run, $nombre, $usuario, $password, $email, $role, $estusu, $per){
        
        $random = rand(1787108629, 9999999999);
        
        $this->_db->prepare("SET @urut = :rut")
        ->execute(array(
            ':rut' => Session::get('rut_usu')
            ));
        
        $this->_db->prepare(
                "INSERT INTO usuario VALUES" . 
                "(NULL, 
                   AES_ENCRYPT(:Rut_usu, '".ENCRYPT_KEY."'), 
                   AES_ENCRYPT(:Nom_usu, '".ENCRYPT_KEY."'),
                   AES_ENCRYPT(:Usu_usu, '".ENCRYPT_KEY."'),                   
                   :Pass_usu, 
                   AES_ENCRYPT(:Email_usu, '".ENCRYPT_KEY."'),
                   :Id_role, 
                   :Id_estusu, 
                   NOW(), 
                   :Cod_usu, 
                   :Id_per, 
                   NULL)"
                )
                ->execute(array(
                    ':Rut_usu' => $run,                    
                    ':Nom_usu' => $nombre,
                    ':Usu_usu' => $usuario,
                    ':Pass_usu' => Hash::getHash('sha1', $password, HASH_KEY),
                    ':Email_usu' => $email,
                    ':Id_role' => $role,
                    ':Id_estusu' => $estusu,
                    ':Cod_usu' => $random,
                    ':Id_per' => $per
                ));
    }
//------------------------------------------------------------------------------    
//Permisos gestor
    public function eliminarPermisoGestor($usuarioID=false, $permisoID=false){
        
        $this->_db->query(
                "delete from usuario_permiso where " .
                "Id_usu = $usuarioID and Id_perm = $permisoID"
                );
    }
    
    public function editarPermisoGestor($usuarioID=false, $permisoID=false, $valor=false){
        
         $this->_db->query(
                "replace into usuario_permiso set " .
                "Id_usu = $usuarioID , Id_perm = $permisoID , Valor_perm_usu = '$valor'"
                );
    }
    
    public function getPermisosUsuarioGestor($usuarioID=false){
        
        $acl = new ACL($usuarioID);
        return $acl->getPermisos();//devolverá los permisos de este usuario que enviemos($usuarioID)
    }
    
    public function getPermisosRoleGestor($usuarioID=false){
        
        $acl = new ACL($usuarioID);
        return $acl->getPermisosRole();
    }
    
    public function getDatosUsuarioGestor($usuarioID){
        
        $usuario = $this->_db->query(
                "SELECT p.Id_per,
                       CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per,
                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per,
                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per,
                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per,
                       u.Id_usu,
                       CAST(AES_DECRYPT(Rut_usu,'".ENCRYPT_KEY."')AS char(100)) AS Rut_usu,
                       CAST(AES_DECRYPT(Nom_usu,'".ENCRYPT_KEY."')AS char(100)) AS Nom_usu,
                       CAST(AES_DECRYPT(Usu_usu,'".ENCRYPT_KEY."')AS char(100)) AS Usu_usu,
                       CAST(AES_DECRYPT(Email_usu,'".ENCRYPT_KEY."')AS char(100)) AS Email_usu,
                       u.Id_role,
                       u.Id_estusu,
                       u.Id_cond, 
                       r.*,
                       e.*,
                       c.*
                FROM usuario u 
                LEFT JOIN persona p ON (p.Id_per=u.Id_per) 
                LEFT JOIN role r ON (u.Id_role=r.Id_role) 
                LEFT JOIN est_usu e ON (u.Id_estusu=e.Id_estusu)
                LEFT JOIN condominio c ON (c.Id_cond=u.Id_cond)
                WHERE u.Id_usu= $usuarioID"
                );
                return $usuario->fetch();
    }
//------------------------------------------------------------------------------
//Asignar Condominio
    
    public function getDatosGestor($id = false) {
        
        $dl = $this->_db->query("SELECT CAST(AES_DECRYPT(Nom_usu,'".ENCRYPT_KEY."')AS char(100)) AS Nom_usu, 
                                    Nom_role
                                    FROM usuario u
                                    LEFT JOIN role r ON (r.Id_role = u.Id_role)
                                    WHERE Id_usu = $id"
                                   );
        return $dl->fetch();
    }
    
    public function getAllConds(){
        
        $cat = $this->_db->query("SELECT * FROM condominio ORDER BY Nom_cond ASC");
        return $cat->fetchAll();
    }
    
    public function getCondAsigGestor($idusu = false){ 
        
        $id = (int) $idusu;
        $psb = $this->_db->query("SELECT gc.Id_cond, Nom_cond
                                    FROM gestor_cond gc
                                    LEFT JOIN condominio c ON ( c.Id_cond = gc.Id_cond )
                                    WHERE Id_usu = $id"
                                   );
        return $psb->fetchAll();
    }
    
    public function getCondAgre($idusu = false, $cond = false){
        
        $c = (int) $cond;
        $exi = $this->_db->query("
            SELECT Nom_cond 
            FROM gestor_cond gc
            LEFT JOIN condominio c ON ( c.Id_cond = gc.Id_cond )
            WHERE gc.Id_usu = {$idusu} 
                AND gc.Id_cond = {$c}");
        if ($exi->rowCount() > 0) {
             $var = $exi->fetch(PDO::FETCH_ASSOC);
             return $var['Nom_cond'];
        } else {
            return false;
        }
    }
    
    public function addCondUsuGestor($idusu=false, $idcond=false){
        
        $u = (int) $idusu;
        $c = (int) $idcond;
        $this->_db->query("INSERT INTO gestor_cond VALUES (NULL, $u, $c)");
        
    }
    
    public function elimCondUsuGestor($idusu=false,$idcond=false){  
        
        $u = (int) $idusu;
        $c = (int) $idcond;
        $this->_db->query("DELETE FROM gestor_cond WHERE Id_usu = $u AND Id_cond = $c");
        
    }
//------------------------------------------------------------------------------

    public function getDatosUsuGestor($usuarioID){
        
        $usuario = $this->_db->query(
                "SELECT p.Id_per,
                       CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per,
                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per,
                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per,
                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per,
                       u.Id_usu,
                       CAST(AES_DECRYPT(Rut_usu,'".ENCRYPT_KEY."')AS char(100)) AS Rut_usu,
                       CAST(AES_DECRYPT(Nom_usu,'".ENCRYPT_KEY."')AS char(100)) AS Nom_usu,
                       CAST(AES_DECRYPT(Usu_usu,'".ENCRYPT_KEY."')AS char(100)) AS Usu_usu,
                       CAST(AES_DECRYPT(Email_usu,'".ENCRYPT_KEY."')AS char(100)) AS Email_usu,
                       u.Id_role,
                       u.Id_estusu,
                       u.Id_cond, 
                       r.*,
                       e.*,
                       c.*
                FROM usuario u 
                LEFT JOIN persona p ON (p.Id_per=u.Id_per) 
                LEFT JOIN role r ON (u.Id_role=r.Id_role) 
                LEFT JOIN est_usu e ON (u.Id_estusu=e.Id_estusu)
                LEFT JOIN condominio c ON (c.Id_cond=u.Id_cond)
                WHERE u.Id_usu= $usuarioID"
                );
                return $usuario->fetch();
    }
    
    public function editUsuGestor($idu=false,$rut=false,$nom=false,$usu=false,$pass=false,$email=false,$rol=false,$est=false,$per=false,$cond=NULL){
        
        $this->_db->prepare("SET @urut = :rut")
        ->execute(array(
            ':rut' => Session::get('rut_usu')
            ));
        
         $id = (int) $idu;
        $this->_db->prepare(
                "UPDATE usuario 
                SET Rut_usu = AES_ENCRYPT(:rut, '".ENCRYPT_KEY."'),
                    Nom_usu = AES_ENCRYPT(:nom, '".ENCRYPT_KEY."'),
                    Usu_usu = AES_ENCRYPT(:usu, '".ENCRYPT_KEY."'),                   
                    Pass_usu = :pass, 
                    Email_usu = AES_ENCRYPT(:email, '".ENCRYPT_KEY."'),
                    Id_role = :rol, 
                    Id_estusu = :est,
                    Id_per = :per,
                    Id_cond = :cond
                WHERE Id_usu = :id
                ")->execute(array(
            ':id' => $id,
            ':rut' => $rut,
            ':nom' => $nom,
            ':usu' => $usu,
            ':pass' => Hash::getHash('sha1', $pass, HASH_KEY),
            ':email' => $email,
            ':rol' => $rol,
            ':est' => $est,
            ':per' => $per,
            ':cond' => $cond
                    
        ));
    }
    
    public function elimUsuGestor($usuarioID=false){
        
        $this->_db->prepare("SET @urut = :rut")
        ->execute(array(
            ':rut' => Session::get('rut_usu')
            ));
        
        $this->_db->query(
                "DELETE FROM usuario WHERE " .
                "Id_usu = $usuarioID and Id_role = 2"
                );
    }
}
?>
