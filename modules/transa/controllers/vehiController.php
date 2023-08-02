<?php

class vehiController extends transaController {
    
    private $_vehi;
    
    public function __construct() {
        parent::__construct();
        $this->_vehi =  $this->loadModel('vehi');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_vehi');     
        
        $this->_view->assign('titulo', 'Vehículos');
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_vehi->getCondfVehi());
                $cond = '';
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_vehi->getCondsGestorVehi(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_vehi->getCondGestorVehi($condi));
                break;
            
            default:
                $idcond = $this->_vehi->gIdCond(Session::get('id_usuario'));
                $this->_view->assign('cbl', $this->_vehi->getCBLsVehi(Session::get('cond')));
                $this->_view->assign('co', $idcond);
                $cond = ' AND v.Id_cond = '.$idcond;
        }       
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_vehi->getVehis($cond);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_vehi']);
        }
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('vehi', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        
      $this->_view->renderizar('index','vehi');
    }
    
    public function newVehi($cod="", $var=""){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_vehi');
        
        $this->_view->assign('titulo', 'Crear nueva vehículo');
        $this->_view->assign('cod', $cod);
        $this->_view->assign('volver', $var);
        $this->_view->assign('mar', $this->_vehi->getMar());
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_vehi->getConds());
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_vehi->getCondsGestorVehi(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_vehi->getCondGestorVehi($condi));
                break;
            
            default:
                $idcond = $this->_vehi->gIdCond(Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);
        }  
        
        $this->_view->setJs(array('ajax'));        
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getPostParam('cod')){
                $this->_view->assign('_error', 'Debe introducir PATENTE del vehículo');
                $this->_view->renderizar('nuevo', 'vehi');
                exit;
            }
            if($this->_vehi->verificarVehi($this->getPostParam('cod'), $this->getPostParam('cond'))){
                $this->_view->assign('_error', 'La PATENTE ya se encuentra registrada en el condominio');
                $this->_view->renderizar('nuevo', 'vehi');
                exit;
            }
            if(!$this->getPostParam('mar')){
                $this->_view->assign('_error', 'Debe seleccionar MARCA del vehículo');
                $this->_view->renderizar('nuevo', 'vehi');
                exit;
            }
            if(!$this->getPostParam('mod')){
                $this->_view->assign('_error', 'Debe seleccionar MODELO del vehículo');
                $this->_view->renderizar('nuevo', 'vehi');
                exit;
            }
            $patente = strtoupper($this->getPostParam('cod'));
            
            $this->_vehi->newVehic(
                    $patente,
                    $this->getPostParam('desc'),
                    $this->getPostParam('mod'),
                    $this->getPostParam('cond')
                    );
            Session::setMensaje("Se ha creado correctamente el vehículo");
            $this->redireccionar('transa/vehi');
            exit;
        }
      $this->_view->renderizar('nuevo','vehi');
    }
    
    public function getMod(){
        
        if($this->getInt('mar'))
        echo json_encode($this->_vehi->getMod($this->getInt('mar')));
    }
    
    public function editVehi($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_vehi');
        
        $this->_view->assign('titulo', 'Editar vehículo');
        
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('transa/vehi');
        }
        
        if(!$this->_vehi->verificarIdVehi($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('transa/vehi');
        }
        
        $row = $this->_vehi->getVehi($this->filtrarInt($id));
        
        $this->_view->assign('mar', $this->_vehi->getMarcas());
        $this->_view->assign('mod', $this->_vehi->getModelos());
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_vehi->getConds());
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_vehi->getCondsGestorVehi(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_vehi->getCondGestorVehi($condi));
                break;
            
            default:
                $idcond = $this->_vehi->gIdCond(Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);
        } 
        
        $this->_view->setJs(array('ajax'));
        $this->_view->assign('datos', $row);
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos1', $_POST);
            
            if(!$this->getPostParam('cod')){
                $this->_view->assign('_error', 'Debe introducir PATENTE del vehículo');
                $this->_view->renderizar('editar', 'vehi');
                exit;
            }
            if(!$this->getPostParam('mar')){
                $this->_view->assign('_error', 'Debe seleccionar MARCA del vehículo');
                $this->_view->renderizar('editar', 'vehi');
                exit;
            }       
            if(!$this->getPostParam('mod')){
                $this->_view->assign('_error', 'Debe seleccionar MODELO del vehículo');
                $this->_view->renderizar('editar', 'vehi');
                exit;
            } 
            
            $this->_vehi->editVehi(
                    $this->getPostParam('id'),
                    $this->getPostParam('desc'),
                    $this->getPostParam('mod'),
                    $this->getPostParam('cond')                                     
                    );
            Session::setMensaje("Se ha editado correctamente el vehículo");
            $this->redireccionar('transa/vehi');
            exit;
        }

        $this->_view->renderizar('editar', 'vehi');
    }
    
    public function delVehi($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_vehi');
                
        $id = $this->decrypt($ide);
        
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'El vehículo no corresponde');
                $this->_view->renderizar('index', 'vehi');
                exit;
        }
        
        if(!$this->_vehi->verificarIdVehi($this->filtrarInt($id))){
            $this->_view->assign('_error', 'El vehículo no existe');
                $this->_view->renderizar('index', 'vehi');
                exit;
        }
        
        $this->_vehi->eliminarVehi($this->filtrarInt($id));
        Session::setMensaje("Se ha eliminado correctamente el vehículo");
        $this->redireccionar('transa/vehi');
        exit;
    }
    
    public function pave()
   {
       $pagina1 = $this->getInt('pagina');
       $cond = $this->getInt('co');
       $cb = $this->getInt('cb');
       $condicion = "";
       
       switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_vehi->getCondfVehi());
                if($cond){
                   $condicion .= " AND v.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND vi.Id_cb = $cb ";
                }
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_vehi->getCondsGestorVehi(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_vehi->getCondGestorVehi($condi));
                if($cond){
                   $condicion .= " AND v.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND vi.Id_cb = $cb ";
                }
                break;
            
            default:
                $id = $this->_vehi->gIdCond(Session::get('id_usuario'));
                if($cb){
                   $condicion .= " AND vi.Id_cb = $cb ";
                }
                   $condicion .= " AND v.Id_cond = $id";  
        } 

        //echo $condicion;exit;
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_vehi->getVehis($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_viv']);
        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('vehi', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
   
    public function gcbve(){
        
        if($this->getInt('co'))
        echo json_encode($this->_vehi->getCBLsVehi($this->getInt('co')));
    }
}
?>
