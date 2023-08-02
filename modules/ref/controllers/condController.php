<?php

class condController extends refController {
    
    private $_cond;
    
    public function __construct() {
        parent::__construct();
        $this->_cond =  $this->loadModel('cond');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_cond');
        
        $this->_view->assign('titulo', 'Condominios');
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        $row = $this->_cond->getConds();
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_cond']);
        }
        $this->_view->setJs(array('example'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('cond', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('example1'));

      $this->_view->renderizar('index','cond');
    }
    
    public function newCond(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_cond');
        
        $this->_view->assign('titulo', 'Crear nuevo Condominio');
        
        $this->_view->assign('inm', $this->_cond->getInm());
        $this->_view->assign('ciu', $this->_cond->getCiu());
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir el NOMBRE del nuevo Condominio');
                $this->_view->renderizar('nuevo', 'cond');
                exit;
            }
            
            if(!$this->getSql('dir')){
                $this->_view->assign('_error', 'Debe introducir DIRECCIÓN del nuevo Condominio');
                $this->_view->renderizar('nuevo', 'cond');
                exit;
            }
            if(!$this->getSql('inm')){
                $this->_view->assign('_error', 'Debe seleccionar la inmobiliaria a la cual pertenece el Condominio');
                $this->_view->renderizar('nuevo', 'cond');
                exit;
            }
            if(!$this->getSql('ciu')){
                $this->_view->assign('_error', 'Debe seleccionar la CIUDAD del Condominio');
                $this->_view->renderizar('nuevo', 'cond');
                exit;
            }

            $this->_cond->newCond(
                    trim($this->getSql('nom')),
                    trim($this->getSql('dir')),
                    $this->getSql('inm'),
                    $this->getSql('ciu')
                    );
            
                Session::setMensaje("Se ha registrado el nuevo Condominio correctamente");
                $this->redireccionar('ref/cond/');
            exit;
        }
      $this->_view->renderizar('nuevo','cond');
    }
    
    public function editCond($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_cond');
        
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('ref/cond');
        }
        
        if(!$this->_cond->getIdCond($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('ref/cond');
        }
        
        $this->_view->assign('datos', $this->_cond->getDatosCond($this->filtrarInt($id)));
        $this->_view->assign('inm', $this->_cond->getInm());
        $this->_view->assign('ciu', $this->_cond->getCiu());

        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir el NOMBRE del nuevo Condominio');
                $this->_view->renderizar('editar', 'cond');
                exit;
            }
            
            if(!$this->getSql('dir')){
                $this->_view->assign('_error', 'Debe introducir DIRECCIÓN del nuevo Condominio');
                $this->_view->renderizar('editar', 'cond');
                exit;
            }
            if(!$this->getSql('inm')){
                $this->_view->assign('_error', 'Debe seleccionar la inmobiliaria a la cual pertenece el Condominio');
                $this->_view->renderizar('editar', 'cond');
                exit;
            }
            if(!$this->getSql('ciu')){
                $this->_view->assign('_error', 'Debe seleccionar la CIUDAD del Condominio');
                $this->_view->renderizar('editar', 'cond');
                exit;
            }

            $this->_cond->editarCond(
                    $id,
                    trim($this->getSql('nom')),
                    trim($this->getSql('dir')),
                    $this->getSql('inm'),
                    $this->getSql('ciu')
            );
            
            Session::setMensaje("Condominio editado correctamente");
            $this->redireccionar('ref/cond');
            exit;
        }
        
        $this->_view->renderizar('editar', 'cond');
    }
    
    public function delCond($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_cond');
                
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'El Condominio a eliminar no existe');
                $this->_view->renderizar('index', 'cond');
                exit;
        }
        
        if(!$this->_cond->getIdCond($this->filtrarInt($id))){
            $this->_view->assign('_error', 'El Condominio a eliminar no existe');
                $this->_view->renderizar('index', 'cond');
                exit;
        }
        
        $this->_cond->eliminarCond($this->filtrarInt($id));
        Session::setMensaje("Condominio eliminado correctamente");
        $this->redireccionar('ref/cond');
        
    }
    
    public function editConfigCond($ide = false) {
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_conf_cond');
                
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'El Condominio a editar no existe');
                $this->_view->renderizar('index', 'cond');
                exit;
        }
        
        if(!$this->_cond->getIdCond($this->filtrarInt($id))){
            $this->_view->assign('_error', 'El Condominio a editar no existe');
                $this->_view->renderizar('index', 'cond');
                exit;
        }
        
        $this->_view->assign('datos', $this->_cond->getDatosConfigCond($this->filtrarInt($id)));
        $this->_view->assign('tipovot', $this->_cond->getTipoVot());
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('tv')){
                $this->_view->assign('_error', 'Debe seleccionar quiénes deben votar');
                $this->_view->renderizar('config', 'cond');
                exit;
            }
            
            if(!$this->_cond->getIdCondInConfig($this->filtrarInt($id))){
                
                $this->_cond->addConfigCond(
                        $id,
                        trim($this->getSql('tv'))                    
                );
            }else{           
                $this->_cond->editarConfigCond(
                        $id,
                        trim($this->getSql('tv'))                    
                );
            }
            
            Session::setMensaje("Condominio configurado correctamente");
            $this->redireccionar('ref/cond');
            exit;
        }
        
        $this->_view->renderizar('config', 'cond');
    }
}

?>
