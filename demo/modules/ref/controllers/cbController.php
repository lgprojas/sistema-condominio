<?php

class cbController extends refController {
    
    private $_cb;
    
    public function __construct() {
        parent::__construct();
        $this->_cb =  $this->loadModel('cb');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_cb');
        
        $this->_view->assign('titulo', 'Calle/Blocks');
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_cb->getCBConds());
                $cond = '';
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_cb->getCondsGestorCB(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_cb->getCondGestorCB($condicion));
                $cond = ' WHERE cb.'.$condicion;
                break;
            
            default:
                  $id = $this->_cb->getIdCondCB(Session::get('id_usuario'));
                  $cond = ' WHERE cb.Id_cond = '.$id;
        }
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_cb->getCBs($cond);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_cb']);
        }
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('cb', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));

      $this->_view->renderizar('index','cb');
    }
    
    public function newCB(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_cb');
        
        $this->_view->assign('titulo', 'Crear nueva Calle/Block');       
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_cb->getCBConds());
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_cb->getCondsGestorCB(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_cb->getCondGestorCB($condicion));
                break;
            
            default:
                $id = $this->_cb->getIdCondCB(Session::get('id_usuario'));
                $this->_view->assign('co', $id);
        }
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir el NOMBRE de la nueva Calle/Block');
                $this->_view->renderizar('nuevo', 'cb');
                exit;
            }
            if(!$this->getSql('cond')){
                $this->_view->assign('_error', 'Debe seleccionar el condominio al cual pertenece la Calle/Block');
                $this->_view->renderizar('nuevo', 'cb');
                exit;
            }

            $this->_cb->newCB(
                    trim($this->getSql('nom')),
                    $this->getSql('cond')
                    );
                Session::setMensaje("Se ha registrado la nueva Calle/Block correctamente");
                $this->redireccionar('ref/cb/');
            exit;
        }
      $this->_view->renderizar('nuevo','cb');
    }
    
    public function editCB($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_cb');
        
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('ref/cb');
        }
        
        if(!$this->_cb->getIdCB($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('ref/cb');
        }
        
        $this->_view->assign('datos', $this->_cb->getDatosCB($this->filtrarInt($id)));
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_cb->getCBConds());
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_cb->getCondsGestorCB(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_cb->getCondGestorCB($condicion));
                break;
            
            default:
                $id = $this->_cb->getIdCondCB(Session::get('id_usuario'));
                $this->_view->assign('co', $id);
        }

        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir el NOMBRE de la nueva Calle/Block');
                $this->_view->renderizar('nuevo', 'cb');
                exit;
            }
            if(!$this->getSql('cond')){
                $this->_view->assign('_error', 'Debe seleccionar el condominio al cual pertenece la Calle/Block');
                $this->_view->renderizar('nuevo', 'cb');
                exit;
            }

            $this->_cb->editarCB(
                    $id,
                    trim($this->getSql('nom')),
                    $this->getSql('cond')
            );
            
            Session::setMensaje("Calle/Block editado correctamente");
            $this->redireccionar('ref/cb');
            exit;
        }
        
        $this->_view->renderizar('editar', 'cb');
    }
    
    public function delCB($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_cb');
                
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'La Calle/Block a eliminar no existe');
                $this->_view->renderizar('index', 'cb');
                exit;
        }
        
        if(!$this->_cb->getIdCB($this->filtrarInt($id))){
            $this->_view->assign('_error', 'La Calle/Block a eliminar no existe');
                $this->_view->renderizar('index', 'cb');
                exit;
        }
        
        $this->_cb->eliminarCB($this->filtrarInt($id));
        Session::setMensaje("Calle/Block eliminado correctamente");
        $this->redireccionar('ref/cb');
        
    }
    
        public function pcb()
   {
       $pagina1 = $this->getInt('pagina');
       $cond = $this->getInt('co');
       $condicion = "";
       
       switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_cb->getCBConds());
                if($cond){
                   $condicion .= " WHERE cb.Id_cond = $cond ";
                }
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_cb->getCondsGestorCB(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_cb->getCondGestorCB($condi));
                if($cond){
                   $condicion .= " WHERE cb.Id_cond = $cond ";
                }
                break;
            
            default:
                $id = $this->_cb->getIdCondCB(Session::get('id_usuario'));
                $condicion .= " WHERE cb.Id_cond = $id"; 
        }
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_cb->getCBs($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_cb']);
        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('cb', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
}

?>
