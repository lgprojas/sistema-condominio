<?php

class marcaController extends refController {
    
    private $_marca;
    
    public function __construct() {
        parent::__construct();
        $this->_marca =  $this->loadModel('marca');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_marca');
        
        $this->_view->assign('titulo', 'Marcas Vehículos');
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_marca->getMarcas();
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_marca']);
        }
        $this->_view->setJs(array('example'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('marca', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('example1'));

      $this->_view->renderizar('index','marca');
    }
    
    public function newMarca(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_marca');
        
        $this->_view->assign('titulo', 'Crear nueva marca');
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);

            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir el nombre de la nueva marca');
                $this->_view->renderizar('nuevo', 'marca');
                exit;
            }
            
            $this->_marca->newMarca(
                    trim($this->getSql('nom'))
                    );
            
            Session::setMensaje("Marca registrada correctamente");
            $this->redireccionar('ref/marca/');
            exit;
        }
      $this->_view->renderizar('nuevo','marca');
    }
    
    public function editMarca($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_marca');        
        
        $this->_view->assign('titulo', 'Editar marca');
        
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('ref/marca');
        }
        
        if(!$this->_marca->getMarca($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('ref/marca');
        }
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getPostParam('nom')){
                $this->_view->assign('_error', 'Debe introducir el nombre de la marca a modificar');
                $this->_view->renderizar('editar', 'marca');
                exit;
            }
            
            $this->_marca->editarMarca(
                    $id,
                    trim($this->getPostParam('nom'))
            );
            
            Session::setMensaje("Marcaobiliaria editada correctamente");
            $this->redireccionar('ref/marca');
            exit;
        }
        
        $this->_view->assign('datos', $this->_marca->getMarca($this->filtrarInt($id)));
        $this->_view->renderizar('editar', 'marca');
    }
    
    public function delMarca($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_marca');
                
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'La marca a eliminar no existe');
                $this->_view->renderizar('index', 'marca');
                exit;
        }
        
        if(!$this->_marca->getMarca($this->filtrarInt($id))){
            $this->_view->assign('_error', 'La marca a eliminar no existe');
                $this->_view->renderizar('index', 'marca');
                exit;
        }
        
        $this->_marca->eliminarMarca($this->filtrarInt($id));
        Session::setMensaje("Marca eliminada correctamente");
        $this->redireccionar('ref/marca');
        
    }
}

?>
