<?php



class registroModel extends Model{

    

    public function __construct() {

        parent::__construct();

    }

    

    public function verificarUsuario($usuario = false){

        //verifica si ya existe el usuario en la base de datos

        $id = $this->_db->query(

                        "SELECT Id_usu, 

                                Cod_usu 

                        FROM usuario 

                        WHERE Usu_usu = AES_ENCRYPT('$usuario', '".ENCRYPT_KEY."')"

                );

        return $id->fetch();

    }

    

    public function verificarEmail($email = false){

        //verifica si ya existe el usuario en la base de datos

        $id = $this->_db->query(

                        "SELECT Id_usu 

                        FROM usuario 

                        WHERE Email_usu = AES_ENCRYPT('$email', '".ENCRYPT_KEY."')"

                );

        return $id->fetch();

    }

    

    public function getTipoRelConf($cond=false){

        

        $id = $this->_db->query("SELECT Id_tv 

                                    FROM config_cond 

                                    WHERE Id_cond = $cond 

                                ");

        $idrel = $id->fetch(PDO::FETCH_ASSOC);

        return $idrel['Id_tv'];

    }

    

    public function registrarUsuario($run, $nombre, $usuario, $password, $email, $role, $estusu, $per, $cond=NULL){

        

        $random = rand(1787108629, 9999999999);

        

        $this->_db->prepare("SET @urut = :rut")

        ->execute(array(

            ':rut' => Session::get('rut_usu')

            ));

        

        $this->_db->prepare(

                "INSERT INTO usuario VALUES" . 

                "(null, 

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

                   :Id_cond)"

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

                    ':Id_per' => $per,

                    ':Id_cond' => $cond

                ));

    }

    

    public function getUsuarioRegistrado($id = false, $codigo = false){

        

        $usuario = $this->_db->query(

                                "SELECT * 

                                 FROM usuario c 

                                 WHERE Id_usu = $id 

                                   AND Cod_usu = '$codigo'"

                );

        return $usuario->fetch();// devuelve los datos en un array

    }

    

    public function activarUsuario($id, $codigo){

        

        $this->_db->query(

                "UPDATE usuario SET Id_estusu = 1 " .

                "WHERE Id_usu = $id AND Cod_usu = '$codigo'"

                );

    }

    

    public function getAllPer($cond = false, $relusu=0){



        $per = $this->_db->query(

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

                return $per->fetchAll();

    }

    

    public function getAllPerJson($cond = false, $relusu=0){



        $per = $this->_db->query(

                "SELECT p.Id_per AS a,

                       CAST(AES_DECRYPT(Nom1_per,'".ENCRYPT_KEY."')AS char(100)) AS d,

                       CAST(AES_DECRYPT(Nom2_per,'".ENCRYPT_KEY."')AS char(100)) AS e,

                       CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) AS b,

                       CAST(AES_DECRYPT(Ape2_per,'".ENCRYPT_KEY."')AS char(100)) AS c                    

                FROM persona p

                LEFT JOIN vivienda_persona vp ON (vp.Id_per=p.Id_per)

                WHERE (Id_act IN (2, 3) OR Id_trel IN ($relusu)) 

                    AND Id_cond = $cond

                    AND p.Id_per NOT IN (SELECT Id_per FROM usuario)

                ");

                return $per->fetchAll();

    }

    

    public function getAllRJson($confcond=false){



        $per = $this->_db->query(

                "SELECT Id_role AS a,

                        Nom_role AS b               

                FROM role

                WHERE Id_role NOT IN ($confcond)                   

                ");

                return $per->fetchAll();

    }

    

    public function getAllCond(){

        

        $sql = $this->_db->query(

                "SELECT * FROM condominio"

                );

                return $sql->fetchAll();

    }

    

    public function getAllRoles(){

        

        $roles = $this->_db->query(

                "SELECT * FROM role"

                );

                return $roles->fetchAll();

    }

    

    public function getAllRolesG(){

        

        $roles = $this->_db->query(

                "SELECT * FROM role WHERE Id_role NOT IN (1,2)"

                );

                return $roles->fetchAll();

    }

    

    public function getAllEstUsu(){

        

        $estusu = $this->_db->query(

                "SELECT * FROM est_usu"

                );

                return $estusu->fetchAll();

    }

    
    public function registrarRegSesiones($usu=false){    
                
        $this->_db->prepare(
                "insert into his_ses values" . 
                "(null, NOW(), :Cant_hses, :Intentos_hses, :ContBloq_hses, :Est_hses, :Id_usu)"               
                )
                ->execute(array(
                    ':Cant_hses' => 0,
                    ':Intentos_hses' => 0,
                    ':ContBloq_hses' => 0,
                    ':Est_hses' => 1,
                    ':Id_usu' => $usu
                ));
    }

}



?>