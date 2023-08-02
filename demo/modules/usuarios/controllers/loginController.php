<?php

Class loginController extends Controller{
    
    private $_login;

    public function __construct() {
        parent::__construct();
        $this->_login = $this->loadModel('login');
    }
    
    public function index(){
        
        if(Session::get('autenticado')){//verifica si esta logeado así no permitira entrar nuevamente al login           
            $this->redireccionar();
        }
        
        $this->_view->assign('titulo', 'Iniciar Sesion');
        $sesionNow = date('Y-m-d H:i:s');
        
        if($this->getInt('enviar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_error', 'Debe introducir su nombre de usuario');
                $this->_view->renderizar('index','login');
                exit;        
            }
            
            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->renderizar('index','login');
                exit;        
            }
            
            ///procesamos datos de ingreso
            $row = $this->_login->getUsuario(
                    $this->getAlphaNum('usuario'),
                    $this->getSql('pass')
                    );
            
            if($row['Fch_hses'] > $sesionNow){
                $this->_view->assign('_error', 'Por favor intente más tarde...');
                $this->_view->renderizar('index','login');
                exit;
            }
            
            if(!$row){
                
                $respuesta = $this->intentosLogin($this->getAlphaNum('usuario'));
                if($respuesta){  
                    
                    $this->_view->assign('_error', $respuesta);
                    $this->_view->renderizar('index','login');
                    exit;
                    
                }else{
                    $this->_view->assign('_error', 'Usuario y/o password incorrecto(s)');
                    $this->_view->renderizar('index','login');
                    exit;
                }
            }
            
            if($this->_login->verificarBloqueo($this->getAlphaNum('usuario')) != 1){
                $this->_view->assign('_error', 'Error al acceder..');
                $this->_view->renderizar('index','login');
                exit;
            }
            
            if($row['Id_estusu'] != 1){
                $this->_view->assign('_error', 'Este usuario no esta habilitado');
                $this->_view->renderizar('index','login');
                exit;
            }
            
            Session::set('autenticado', true);
            Session::set('level', $row['Id_role']);
            Session::set('nombre_usu', $row['Nom_usu']);
            Session::set('usuario', $row['Usu_usu']);
            Session::set('id_usuario', $row['Id_usu']);
            Session::set('rut_usu', $row['Rut_usu']);
            Session::set('id_per', $row['Id_per']);
            Session::set('cond', $row['Id_cond']);
            Session::set('tiempo', time());
            
            $this->_login->reestableceFechaIntentos($row['Id_usu']);
            $this->_login->sumarNuevoIngreso($row['Id_usu']);
            
            if(Session::get('cond')){
                $configCond = $this->_login->getConfigCond($row['Id_cond']);
                Session::set('user_access', $configCond);
                
                switch (Session::get('user_access')) {
                    case 1:
                            $in = " = 1";
                        break;
                    case 2:
                            $in = " IN (1, 3)";
                        break;
                    case 3:
                            $in = " IN (1, 3, 5)";
                        break;
                    default:
                        break;
                }

                $residente = $this->_login->getEstResid($row['Id_per'], $in);

                empty($residente) ? Session::set('resid', 0) : Session::set('resid', 1);
                //if($configCond == 1){$in = " = 1";}
                //if($configCond == 2){$in = " IN (1, 3)";}
                //if($configCond == 3){$in = " IN (1, 3, 5)";}
                
            }else{
                Session::set('resid', 1);
            }
            //echo Session::get('resid');exit;
            //para testear usar print_r($_SESSION);//comprueba si funciona sesión
            $this->redireccionar();
        }
        
        $this->_view->renderizar('index', 'login');
        
    }
    
    public function intentosLogin($usu=false){
        
    $existe = $this->_login->verificarUsu($usu);
    //echo $existe;exit;
   
    if($existe){
        $idusu = $existe;
    }else{
        return false; 
    }    
    
    $fechaHoy = date("Y-m-d");
    $sesionNow = date('Y-m-d H:i:s');
    
    $row = $this->_login->getDatosSesionUsu($idusu);
    //echo $row['Fch_hses'];exit;
    if($row['ContBloq_hses'] < 3){
        if($row['Fch_hses'] < $sesionNow){

            if($row['Intentos_hses'] < 3){
                
               $ultimoDia = date('Y-m-d', strtotime($row['Fch_hses']));
               //echo $ultimoDia;exit;
               if($ultimoDia == $fechaHoy){

                   $intentos = $row['Intentos_hses'] + 1;
                   $this->_login->sumaNuevoIntento($idusu, $intentos);
                   //echo "se suma +1 a los 3 intentos para bloquear por 15 min.";exit;
               }else{
                   //$contadorBloqueo = 0;//se reinicia el contador bloqueo cuenta
                   //$intentos = 0;
                   $this->_login->reestableceFechaIntentos($idusu);
                   //registrar la fecha de este intento
                   //$this->_login->fechaNuevoIntento($idusu, $sesionNow);
                   //echo "se resetea contadorBloqueo cuenta e intentos, además se actualiza último día  por la de hoy";exit;
               } 
            }else{

               $minutes_to_add = 15;
               $ultimaSesion = $row['Fch_hses'];
               $time = new DateTime($ultimaSesion);
               $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));//se le suma 15 min de bloqueo a la sesión
               $newTiempo = $time->format('Y-m-d H:i:s');
               $this->_login->sancionarConTiempo($idusu, $newTiempo);
               $contadorBloqueo = $row['ContBloq_hses'] + 1;
               $this->_login->sumaContBloq($idusu, $contadorBloqueo);
               //echo "se bloquea hasta [$ultimaSesion],  se suma +1 a contador bloqueo";exit;
               return "Ha realizado varios intentos, por favor intente más tarde 1";
            }
        }else{
             //echo "ha realizado varios intentos, por favor intente más tarde 2";exit;
             return "ha realizado varios intentos, por favor intente más tarde 2";
        }
    }else{
        
        $this->_login->bloquearCuenta($idusu);
        //echo "Por su seguridad la cuenta ha sido bloqueada, por favor contactese con el gestor del sistema.";exit;
        return "Por su seguridad la cuenta ha sido bloqueada, por favor contactese con el gestor del sistema.";
    }
    }
    
    public function cerrar(){
        
        Session::destroy();//2 var Session::destroy(array('var1', 'var2'));
        $this->redireccionar();//$this->redireccionar('login/mostrar');
    }
}

?>
