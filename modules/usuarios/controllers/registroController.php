<?php



class registroController extends Controller{

    

    private $_registro;

    

    public function __construct() {

        parent::__construct();

        

        $this->_registro = $this->loadModel('registro');

    }

    

    public function index() {

        

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('crear_usu');

        

        $this->_view->assign('titulo', 'Registro');

        if(Session::get('level') == 1){

            $this->_view->setJs(array('ajax')); 

            //$this->_view->assign('role', $this->_registro->getAllRoles());

            $this->_view->assign('rolGestor', 1);

            $this->_view->assign('cond', $this->_registro->getAllCond());

            

        }

        if(Session::get('level') == 2){

            $this->_view->setJs(array('ajax'));

            //$this->_view->assign('role', $this->_registro->getAllRolesG());

            $this->_view->assign('cond', $this->_registro->getAllCond());

            $this->_view->assign('rolGestor', 1);

        }

        if(Session::get('level') != 1 && Session::get('level') != 2){

            $relViv = $this->_registro->getTipoRelConf(Session::get('cond'));

            switch ($relViv) {

                case 1:

                    $relusu = "1";

                    break;

                case 2:

                    $relusu = "1, 3";

                    break;

                case 3:

                    $relusu = "1, 3, 5";

                    break;

                default:

                    break;

            }

            $this->_view->assign('per', $this->_registro->getAllPer(Session::get('cond'), $relusu));            

        }

            

        $this->_view->assign('estusu', $this->_registro->getAllEstUsu());

        

        if($this->getInt('enviar') == 1){

            $this->_view->assign('datos', $_POST);

            

            if(!$this->getPostParam('run')){

                $this->_view->assign('_error', 'Debe ingresar RUN');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if(!$this->getSql('nombre')){

                $this->_view->assign('_error', 'Debe introducir su nombre');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if(!$this->getAlphaNum('usuario')){

                $this->_view->assign('_error', 'Debe introducir su nombre usuario');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if($this->_registro->verificarUsuario($this->getAlphaNum('usuario'))){

                $this->_view->assign('_error', 'El usuario ' . $this->getAlphaNum('usuario') . ' ya existe');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if($this->_registro->verificarEmail($this->getPostParam('email'))){

                $this->_view->assign('_error', 'El email ' . $this->getAlphaNum('email') . ' ya se encuentra registrado');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if(!$this->getSql('pass')){

                $this->_view->assign('_error', 'Debe introducir su password');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if($this->getPostParam('pass') != $this->getPostParam('confirmar')){

                $this->_view->assign('_error', 'Los passwords no coinciden');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if(!$this->getSql('per')){

                $this->_view->assign('_error', 'Debe seleccionar la persona para el usuario');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            if(!$this->getSql('role')){

                $this->_view->assign('_error', 'Debe seleccionar el role del usuario');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            

            $this->getLibrary('class.phpmailer');

            $mail = new PHPMailer();

            

            $this->_registro->registrarUsuario(

                    $this->getPostParam('run'),                    

                    $this->getSql('nombre'),

                    $this->getAlphaNum('usuario'),

                    $this->getSql('pass'),

                    $this->getPostParam('email'),

                    $this->getSql('role'),

                    $this->getSql('estusu'),                    

                    $this->getSql('per'),

                    $this->getSql('cond')

                    );

            

            $usuario = $this->_registro->verificarUsuario($this->getAlphaNum('usuario'));

            

            if(!$usuario){

                $this->_view->assign('_error', 'Error al registrar el usuario');

                $this->_view->renderizar('index', 'registro');

                exit;

            }

            $this->_registro->registrarRegSesiones($usuario);


            $mail->From = 'www.athel.cl';

            $mail->FromName = 'Condominio: ';

            $mail->Subject = 'Activacion de cuenta de usuario';

            $mail->Body = 'Hola <strong>'. $this->getSql('nombre') . '</strong>,' .

                    '<p>Se ha registrado en www.ishcc.cl';           

            $mail->AltBody = 'Su servidor de correo no soporta HTML';

            //$mail->AddAttachment($rutafile);

            $mail->AddAddress($this->getPostParam('email'));

            $mail->Send();

            

            $this->_view->assign('datos', false);//luego de completado se vacien los campos

            

            if(Session::get('level') == 1){

                Session::setMensaje("Usuario registrado correctamente, sugerir revisar email.");

                $this->redireccionar('usuarios');

                exit;

            }else{

                Session::setMensaje("Registro Completado.");

                $this->redireccionar('index');

                exit;

            }

            //$this->_view->assign('_mensaje', 'Registro Completado, revise su email para activar su cuenta');

        }

        

        $this->_view->renderizar('index', 'registro');

    }

    

    public function gpc(){

        

        if($this->getInt('cond')){

        $relViv = $this->_registro->getTipoRelConf($this->getInt('cond'));

        switch ($relViv) {

                case 1:

                    $relusu = "1";

                    break;

                case 2:

                    $relusu = "1, 3";

                    break;

                case 3:

                    $relusu = "1, 3, 5";

                    break;

                default:

                    break;

            }

        }

        echo json_encode($this->_registro->getAllPerJson($this->getInt('cond'),$relusu));

    }

    

        public function grc(){

        

        if($this->getInt('cond')){

        $relViv = $this->_registro->getTipoRelConf($this->getInt('cond'));

        switch ($relViv) {

                case 1:

                    $cc = "1, 2, 8, 9";

                    break;

                case 2:

                    $cc = "1, 2, 9";

                    break;

                case 3:

                    $cc = "1, 2";

                    break;

                default:

                    break;

            }

        }

        echo json_encode($this->_registro->getAllRJson($cc));

    }

    

    public function activar($id, $codigo){

        

        if(!$this->filtrarInt($id) || !$this->filtrarInt($codigo)){

            $this->_view->assign('_error', 'Esta cuenta no existe');

            $this->_view->renderizar('activar', 'registro'); 

            exit;

        }

        $row = $this->_registro->getUsuarioRegistrado(

                        $this->filtrarInt($id),

                        $this->filtrarInt($codigo)

                        );

        

        if(!$row){

            $this->_view->assign('_error', 'Esta cuenta no existe');

            $this->_view->renderizar('activar', 'registro'); 

            exit;

        }

        

        if($row['Id_estusu'] == 1){

            $this->_view->assign('_error', 'Esta cuenta ya ha sido activada');

            $this->_view->renderizar('activar', 'registro'); 

            exit;

        }

        

        $this->_registro->activarUsuario(

                    $this->filtrarInt($id),

                    $this->filtrarInt($codigo)

                );

        

        $row1 = $this->_registro->getUsuarioRegistrado(

                            $this->filtrarInt($id),

                            $this->filtrarInt($codigo)

                            );



        if($row1['Id_estusu'] == 0){

            $this->_view->assign('_error', 'Error al activar la cuenta, por favor intente mas tarde');

            $this->_view->renderizar('activar', 'registro'); 

            exit;

        }

        

//        $this->_view->assign('_mensaje', 'Su cuenta ha sido activada');

//         $this->_view->renderizar('activar', 'registro'); 

                Session::setMensaje("Su cuenta ha sido activada");

                 $this->_view->renderizar('activar', 'registro'); 

                exit;

    }

}



?>