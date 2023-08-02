<?php

class inmController extends refController {
    
    private $_inm;
    
    public function __construct() {
        parent::__construct();
        $this->_inm =  $this->loadModel('inm');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_inm');
        
        $this->_view->assign('titulo', 'Inmobiliarias');
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_inm->getInms();
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_inm']);
        }
        $this->_view->setJs(array('example'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('inm', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('example1'));

      $this->_view->renderizar('index','inm');
    }
    
    public function newInm(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_inm');
        
        $this->_view->assign('titulo', 'Crear nueva inmobiliaria');
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('cod')){
                $this->_view->assign('_error', 'Debe introducir un cód de la nueva inmobiliaria');
                $this->_view->renderizar('nuevo', 'inm');
                exit;
            }
            if(!$this->getSql('inm')){
                $this->_view->assign('_error', 'Debe introducir el nombre de la nueva inmobiliaria');
                $this->_view->renderizar('nuevo', 'inm');
                exit;
            }
            
            $this->_inm->newInm(
                    trim($this->getSql('cod')),
                    trim($this->getSql('inm'))
                    );
            
            Session::setMensaje("Inmobiliaria registrada correctamente");
            $this->redireccionar('ref/inm/');
            exit;
        }
      $this->_view->renderizar('nuevo','inm');
    }
    
    public function editInm($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_inm');        
        
        $this->_view->assign('titulo', 'Editar  inmobiliaria');
        
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('ref/inm');
        }
        
        if(!$this->_inm->getInm($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('ref/inm');
        }
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('inm')){
                $this->_view->assign('_error', 'Debe introducir el nombre de la inmobiliaria a modificar');
                $this->_view->renderizar('editar', 'inm');
                exit;
            }
            
            $this->_inm->editarInm(
                    trim($this->filtrarInt($id)),
                    trim($this->getPostParam('inm'))
            );
            
            Session::setMensaje("Inmobiliaria editada correctamente");
            $this->redireccionar('ref/inm');
            exit;
        }
        
        $this->_view->assign('datos', $this->_inm->getInm($this->filtrarInt($id)));
        $this->_view->renderizar('editar', 'inm');
    }
    
    public function delInm($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_inm');
                
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'La inmobiliaria a eliminar no existe');
                $this->_view->renderizar('index', 'inm');
                exit;
        }
        
        if(!$this->_inm->getInm($this->filtrarInt($id))){
            $this->_view->assign('_error', 'La inmobiliaria a eliminar no existe');
                $this->_view->renderizar('index', 'inm');
                exit;
        }
        
        $this->_inm->eliminarInm($this->filtrarInt($id));
        Session::setMensaje("Inmobiliaria eliminada correctamente");
        $this->redireccionar('ref/inm');
        
    }
}

?>
