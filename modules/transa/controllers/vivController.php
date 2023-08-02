<?php

class vivController extends transaController {
    
    private $_viv;
    
    public function __construct() {
        parent::__construct();
        $this->_viv =  $this->loadModel('viv');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_viv');
        
        $this->_view->assign('titulo', 'Viviendas');
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_viv->getCondf());
                $cond = '';
                break;
                   
            case 2:
                $conds = array();
                $this->_view->assign('sadmin', 1);
                $sql = $this->_viv->getCondsGestorViv(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_viv->getCondGestorViv($condicion));
                $cond = ' AND v.'.$condicion;
                break;
            
            default:
                $id = $this->_viv->getIdCondViv(Session::get('id_usuario'));
                $this->_view->assign('cbl', $this->_viv->getCBVivCond(Session::get('cond')));
                $cond = ' AND v.Id_cond = '.$id;
        }
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        $row = $this->_viv->getVivs($cond);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_viv']);
        }
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('viv', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        
      $this->_view->renderizar('index','viv');
    }
    
    public function newViv(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_viv');
        
        $this->_view->assign('titulo', 'Crear nueva vivienda');
        $this->_view->setJs(array('ajax')); 
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_viv->getVivConds());
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);                
                $conds = array();
                $sql = $this->_viv->getCondsGestorViv(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_viv->getCondGestorViv($condicion));
                break;
            
            default:
                $co = $this->_viv->getIdCondViv(Session::get('id_usuario'));
                $this->_view->assign('co', $co);
                $cond = 'WHERE Id_cond = '. $co;
        }
        
        $this->_view->assign('cb', $this->_viv->getCBViv($cond));
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('num')){
                $this->_view->assign('_error', 'Debe introducir el número de la vivienda a crear');
                $this->_view->renderizar('nuevo', 'viv');
                exit;
            }
            if(!$this->getSql('cb')){
                $this->_view->assign('_error', 'Debe seleccionar CALLE/BLOCK');
                $this->_view->renderizar('editar', 'viv');
                exit;
            }
            if(!$this->getSql('esta')){
                $this->_view->assign('_error', 'Debe seleccionar N° ESTACIONAMIENTO');
                $this->_view->renderizar('editar', 'viv');
                exit;
            }
            if(!$this->getSql('cond')){
                $this->_view->assign('_error', 'Debe seleccionar CONDOMINIO');
                $this->_view->renderizar('editar', 'viv');
                exit;
            }
            
            $this->_viv->newViv(
                    $this->getSql('num'),
                    $this->getSql('cb'),
                    $this->getSql('esta'),
                    $this->getSql('cond')
                    );
            Session::setMensaje("Se ha creado correctamente la vivienda");
            $this->redireccionar('transa/viv');
            exit;
        }
      $this->_view->renderizar('nuevo','viv');
    }
    
    public function getCBCond(){
        
        if($this->getInt('cond'))
        echo json_encode($this->_viv->getCBVivCond($this->getInt('cond')));
    }
    
    public function editViv($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_viv');
        
        $this->_view->assign('titulo', 'Editar vivienda');
        
        $id = $this->decrypt($ide);
        
        $this->_view->setJs(array('ajax')); 
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('viv');
        }
        
        if(!$this->_viv->getViv($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('viv');
        }
        
        $row = $this->_viv->getViv($this->filtrarInt($id));
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_viv->getVivConds());
                $cond = ' WHERE Id_cond = '.$row['Id_cond'];
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_viv->getCondsGestorViv(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_viv->getCondGestorViv($condicion));
                $cond = ' WHERE Id_cond = '.$row['Id_cond'];
                break;
            
            default:
                $idcond = $this->_viv->getIdCondViv(Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);                
                $cond = ' WHERE Id_cond = '.$idcond;
        }
        
        $this->_view->assign('calleblock', $this->_viv->getCBViv($cond));

        $this->_view->assign('datos', $row);
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getPostParam('num')){
                $this->_view->assign('_error', 'Debe introducir el número de la vivienda a modificar');
                $this->_view->renderizar('editar', 'viv');
                exit;
            }
            if(!$this->getSql('cb')){
                $this->_view->assign('_error', 'Debe seleccionar CALLE/BLOCK');
                $this->_view->renderizar('editar', 'viv');
                exit;
            }
            if(!$this->getSql('esta')){
                $this->_view->assign('_error', 'Debe seleccionar N° ESTACIONAMIENTO');
                $this->_view->renderizar('editar', 'viv');
                exit;
            }
            if(!$this->getSql('cond')){
                $this->_view->assign('_error', 'Debe seleccionar CONDOMINIO');
                $this->_view->renderizar('editar', 'viv');
                exit;
            }
            
            $this->_viv->editarViv(
                    $this->filtrarInt($id),
                    $this->getPostParam('num'),
                    $this->getSql('cb'),
                    $this->getSql('esta'),
                    $this->getSql('cond')
            );
            Session::setMensaje("Se ha editado correctamente la vivienda");
            $this->redireccionar('transa/viv');
            exit;
        }
        
        $this->_view->renderizar('editar', 'viv');
    }
    
    public function delViv($ide = false){
        
        //Session::accesoEstricto(array('admin'));
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_viv');        
        
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'La vivienda a eliminar no existe');
                $this->_view->renderizar('viv', 'viv');
                exit;
        }
        
        if(!$this->_viv->getViv($this->filtrarInt($id))){
            $this->_view->assign('_error', 'La vivienda a eliminar no existe');
                $this->_view->renderizar('viv', 'viv');
                exit;
        }
        
        $this->_viv->eliminarViv($this->filtrarInt($id));
        Session::setMensaje("Se ha eliminado correctamente la vivienda");
        $this->redireccionar('transa/viv');
    }
    
    public function pav()
   {
       $pagina1 = $this->getInt('pagina');
       $cond = $this->getInt('co');
       $cb = $this->getInt('cb');
       $condicion = "";
       
       switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_viv->getCondf());
                if($cond){
                   $condicion .= " AND v.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
                }
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $sql = $this->_viv->getCondsGestorViv(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_viv->getCondGestorViv($condi));
                if($cond){
                   $condicion .= " AND v.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
                }
                break;
            
            default:
                $id = $this->_viv->getIdCondv(Session::get('id_usuario'));
                if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
                }
                   $condicion .= " AND v.Id_cond = $id"; 
        }
        
        //echo $condicion;exit;
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_viv->getVivs($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_viv']);
        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('viv', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
   
    public function gcbv(){
        
        if($this->getInt('co'))
        echo json_encode($this->_viv->getCBLsViv($this->getInt('co')));
    }
}

?>
