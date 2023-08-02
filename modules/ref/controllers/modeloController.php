<?php

class modeloController extends refController {
    
    private $_modelo;
    
    public function __construct() {
        parent::__construct();
        $this->_modelo =  $this->loadModel('modelo');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_modelo');
        
        $this->_view->assign('titulo', 'Modelos vehículos');
        
        $this->_view->assign('marca', $this->_modelo->getMarcas());
        $this->_view->assign('_acl', $this->_acl);
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_modelo->getModelos();
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_modelo']);
        }
        $this->_view->setJs(array('pagAjax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('modelo', $pag1->paginar($row, $pagina1, 30, 8));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));

      $this->_view->renderizar('index','modelo');
    }
    
    public function newModelo(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_modelo');
        
        $this->_view->assign('titulo', 'Crear nuevo Modelo');       
    
        $this->_view->assign('marca', $this->_modelo->getMarcas());
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir el NOMBRE del nuevo Modelo');
                $this->_view->renderizar('nuevo', 'modelo');
                exit;
            }
            if(!$this->getSql('marca')){
                $this->_view->assign('_error', 'Debe seleccionar la MARCA a la cual pertenece el Modelo');
                $this->_view->renderizar('nuevo', 'modelo');
                exit;
            }

            $this->_modelo->newModelo(
                    trim($this->getSql('nom')),
                    $this->getSql('marca')
                    );
                Session::setMensaje("Se ha registrado el nuevo Modelo correctamente");
                $this->redireccionar('ref/modelo/');
            exit;
        }
      $this->_view->renderizar('nuevo','modelo');
    }
    
    public function editModelo($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_modelo');
        
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('ref/modelo');
        }
        
        if(!$this->_modelo->getIdModelo($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('ref/modelo');
        }
        
        $this->_view->assign('datos', $this->_modelo->getDatosModelo($this->filtrarInt($id)));        
        $this->_view->assign('marca', $this->_modelo->getMarcas());

        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir el NOMBRE del nuevo Modelo');
                $this->_view->renderizar('nuevo', 'modelo');
                exit;
            }
            if(!$this->getSql('marca')){
                $this->_view->assign('_error', 'Debe seleccionar la MARCA a la cual pertenece el Modelo');
                $this->_view->renderizar('nuevo', 'modelo');
                exit;
            }

            $this->_modelo->editarModelo(
                    $id,
                    trim($this->getSql('nom')),
                    $this->getSql('marca')
            );
            
            Session::setMensaje("Modelo editado correctamente");
            $this->redireccionar('ref/modelo');
            exit;
        }
        
        $this->_view->renderizar('editar', 'modelo');
    }
    
    public function delModelo($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_modelo');
                
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'El Modelo a eliminar no existe');
                $this->_view->renderizar('index', 'modelo');
                exit;
        }
        
        if(!$this->_modelo->getIdModelo($this->filtrarInt($id))){
            $this->_view->assign('_error', 'El Modelo a eliminar no existe');
                $this->_view->renderizar('index', 'modelo');
                exit;
        }
        
        $this->_modelo->eliminarModelo($this->filtrarInt($id));
        Session::setMensaje("Modelo eliminado correctamente");
        $this->redireccionar('ref/modelo');
        
    }
    
    
       public function pa()
   {
       $pagina1 = $this->getInt('pagina');
       $nombre = $this->getSql('nombre');
       $marca = $this->getInt('marca');
       $registros  = $this->getInt('registros');
       $condicion = "";
       
       if($nombre){
           $condicion .= " AND `Nom_modelo` LIKE '$nombre%' ";
       }
       
       if($marca){
           $condicion .= " AND ma.Id_marca = $marca ";
       }
       
        $this->getLibrary('paginador');
        $pag1 = new Paginador();

        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('marca', $this->_modelo->getMarcas());
        $this->_view->assign('_acl', $this->_acl);//para permiso
        
        $row = $this->_modelo->getModelos($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_modelo']);
        }
        $this->_view->setJs(array('pagAjax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('modelo', $pag1->paginar($row, $pagina1, 20, 8));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
}

?>
