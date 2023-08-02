<?php

class visitaController extends historialController {
    
    private $_visita;
    
    public function __construct() {
        parent::__construct();
        $this->_visita =  $this->loadModel('visita');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('hist_ver_visita');
        
        $this->_view->assign('titulo', 'Historial visitas');
        
        //$this->_view->setJsPlugin(array('jquery-1.12.4'));
        $this->_view->setJsPlugin(array('jquery-ui'));
        $this->_view->setCssPlugin(array('jquery-ui'));
        $this->_view->setCssPlugin(array('jquery-ui-timepicker-addon'));
        $this->_view->setJsPlugin(array('jquery-ui-timepicker-addon'));
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_visita->getCondsVisita());
                $cond = '';
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_visita->getCondsGestorVisita(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_visita->getCondGestorVisita($condicion));
                $cond = ' AND rv.'.$condicion;
                break;
            
            default:
                $id = $this->_visita->getIdCondVisita(Session::get('id_usuario'));
                $this->_view->assign('co', $id);
                $this->_view->assign('cbl', $this->_visita->getCBLsCond(Session::get('cond')));
                $cond = ' AND rv.Id_cond = '.$id;      
        }
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }       
        $row = $this->_visita->getAllVisitasCond($cond);
//        for ($i = 0; $i < count($row); $i++) {
//            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_regv']);
//        }
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('visitas', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        
      $this->_view->renderizar('index','visita');
    }
    
        public function gfv()
   {
       $pagina1 = $this->getInt('pagina');
       $f = $this->getSql('from');
       $t = $this->getSql('to');
       $cond = $this->getInt('co');
       $cb = $this->getInt('cb');
       $viv = $this->getInt('viv');
       //$registros  = $this->getInt('registros');
       $fechaDeHoy = date("Y-m-d");
       $condicion = "";
        
        if(Session::get('level') > 2){
            $id = $this->_visita->getIdCondVisita(Session::get('id_usuario'));
               if($f && empty($t)){
                   $from = $this->formatDate($f);
                   $condicion .= " AND (DATE(Fch_regv) BETWEEN DATE('$from') AND DATE('$fechaDeHoy')) ";
               }
               if(!empty($f) && !empty($t)){
                   $from = $this->formatDate($f);
                   $to = $this->formatDate($t);
                   $condicion .= " AND (DATE(Fch_regv) BETWEEN DATE('$from') AND DATE('$to')) ";
               }
               if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
               }
               if($viv){
                   $condicion .= " AND v.Id_viv = $viv ";
               }
                   $condicion .= " AND rv.Id_cond = $id";            
        }else{
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_visita->getCondsVisita());
                
                if($f && empty($t)){
                    $from = $this->formatDate($f);
                   $condicion .= " AND (DATE(Fch_regv) BETWEEN DATE('$from') AND DATE('$fechaDeHoy')) ";
                }
                if($f && $t){
                   $from = $this->formatDate($f);
                   $to = $this->formatDate($t);
                   $condicion .= " AND (DATE(Fch_regv) BETWEEN DATE('$from') AND DATE('$to')) ";
                }
                if($cond){
                   $condicion .= " AND rv.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
                }
                if($viv){
                   $condicion .= " AND v.Id_viv = $viv ";
               }
        } 
        //echo $condicion;exit;
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_visita->getAllVisitasCond($condicion);
//        for ($i = 0; $i < count($row); $i++) {
//            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_regv']);
//        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('visitas', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
   
    public function vgcb(){
        
        if($this->getInt('co'))
        echo json_encode($this->_visita->getCBLsCond($this->getInt('co')));
    }
    
    public function vgviv(){
        
        if($this->getInt('cb') && $this->getInt('co'))
        echo json_encode($this->_visita->getVivCB($this->getInt('cb'), $this->getInt('co')));
    }
}
