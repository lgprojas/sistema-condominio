<?php
//listar los usuario y poner un enlace hacia los permisos de usuario

class indexModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuarios($cond =''){
        
        $usuario = $this->_db->query(
                "SELECT u.Id_usu,
                    CAST(AES_DECRYPT(Nom_usu,'".ENCRYPT_KEY."')AS char(100)) AS Nom_usu,
                    u.Id_role,
                    u.Id_cond,
                    Id_estusu,
                    Nom_role, 
                    Nom_cond
                 FROM usuario u
                 LEFT JOIN role r ON (r.Id_role=u.Id_role)
                 LEFT JOIN condominio c ON (c.Id_cond=u.Id_cond)
                 LEFT JOIN persona p ON(p.Id_per=u.Id_per)
                 LEFT JOIN vivienda_persona vip ON (vip.Id_per=p.Id_per)
                 LEFT JOIN vivienda vi ON (vi.Id_viv=vip.Id_viv)
                 WHERE p.Id_per = u.Id_per
                 $cond 
                 AND u.Id_role NOT IN (1,2)
                 GROUP BY u.Id_usu ASC , Nom_usu ASC 
                 ");
                return $usuario->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getUsuariosG(){
        
        $usuario = $this->_db->query(
                "SELECT u.*,Nom_role
                 FROM usuario u
                 LEFT JOIN role r ON (r.Id_role=u.Id_role)
                 WHERE u.Id_role NOT IN (1,2,3)
                 ORDER BY Id_cond ASC
                 ");
                return $usuario->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getDatosUsuario($usuarioID){
        
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
    
    public function getPers($cond = false, $relusu = false){
        
        $pers = $this->_db->query(
                "SELECT p.Id_per,
                       CAST(AES_DECRYPT(Rut_per,'".ENCRYPT_KEY."')AS char(100)) AS Rut_per,
                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom1_per,
                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS Nom2_per,
                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape1_per,
                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS Ape2_per 
                FROM persona p
                LEFT JOIN vivienda_persona vp ON (vp.Id_per=p.Id_per)
                WHERE (Id_act IN (2, 3) OR Id_trel IN ($relusu)) 
                    AND Id_cond = $cond
                    AND p.Id_per NOT IN (SELECT Id_per FROM usuario)
                ");
                return $pers->fetchAll();        
    }
    
    public function getAllCond(){
        
        $sql = $this->_db->query(
                "select * from condominio"
                );
                return $sql->fetchAll();        
    }
    
    public function getAllRole($confcond=false){

        $per = $this->_db->query(
                "SELECT Id_role,
                        Nom_role               
                FROM role
                WHERE Id_role NOT IN ($confcond)                   
                ");
                return $per->fetchAll();
    }
    
    public function getRolesG(){
        
        $roles = $this->_db->query(
                "SELECT * FROM role WHERE Id_role NOT IN (1,2,3)"
                );
                return $roles->fetchAll();
    }
    
    public function getTipoRelConfCond($cond=false){
        
        $id = $this->_db->query("SELECT Id_tv 
                                    FROM config_cond 
                                    WHERE Id_cond = $cond 
                                ");
        $idrel = $id->fetch(PDO::FETCH_ASSOC);
        return $idrel['Id_tv'];
    }
    
    public function getEstUsu(){
        
        $est = $this->_db->query(
                "select * from est_usu"
                );
                return $est->fetchAll();        
    }
    
    public function editUsuario($idu=false,$rut=false,$nom=false,$usu=false,$pass=false,$email=false,$rol=false,$est=false,$per=false,$cond=NULL){
        
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

    public function getPermisosUsuario($usuarioID=false){
        
        $acl = new ACL($usuarioID);
        return $acl->getPermisos();//devolverá los permisos de este usuario que enviemos($usuarioID)
    }
    
    public function getPermisosRole($usuarioID=false){
        
        $acl = new ACL($usuarioID);
        return $acl->getPermisosRole();
    }
    
    public function eliminarPermiso($usuarioID=false, $permisoID=false){
        
        $this->_db->query(
                "delete from usuario_permiso where " .
                "Id_usu = $usuarioID and Id_perm = $permisoID"
                );
    }
    
    public function editarPermiso($usuarioID=false, $permisoID=false, $valor=false){
        
         $this->_db->query(
                "replace into usuario_permiso set " .
                "Id_usu = $usuarioID , Id_perm = $permisoID , Valor_perm_usu = '$valor'"
                );
    }
    
    public function getIdCondUsu($idusu=false){
        
        $id = $this->_db->query("SELECT u.Id_cond
                                    FROM persona p
                                    LEFT JOIN usuario u ON (u.Id_per=p.Id_per)
                                    WHERE Id_usu = $idusu 
                                ");
        $idcond = $id->fetch(PDO::FETCH_ASSOC);
        return $idcond['Id_cond'];
    }
    
    public function getCondsUsu($idusu = false){

        $per = $this->_db->query("SELECT Id_cond
                                    FROM gestor_cond
                                    WHERE Id_usu = $idusu
                                    ");
        return $per->fetchAll();
    }    
    
    public function getCondfUsu($condicion=''){

        $per = $this->_db->query("SELECT *
                                    FROM condominio
                                    $condicion
                                    ");
        return $per->fetchAll();
    }
    
    public function getCondGestor($condi=''){

        $condicion = 'WHERE '.$condi;
        $per = $this->_db->query("SELECT *
                                    FROM condominio 
                                    $condicion
                                    ");
        return $per->fetchAll();
    }

    
    public function getCBLsUsu($cond = false){

        $per = $this->_db->query("SELECT Id_cb AS a, Nom_cb AS b
                                  FROM calle_block
                                  WHERE Id_cond = $cond
                                    ");
        return $per->fetchAll();
    }
    
    public function elimUsuario($usuarioID=false){
        
        $this->_db->query(
                "DELETE FROM usuario WHERE " .
                "Id_usu = $usuarioID AND Id_role NOT IN (1,2) "
                );
    }
}
    
?>
