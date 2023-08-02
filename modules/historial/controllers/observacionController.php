<?php

class observacionController extends historialController {
    
    private $_observacion;
    
    public function __construct() {
        parent::__construct();
        $this->_observacion =  $this->loadModel('observacion');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_lista_obs');
        
        $this->_view->assign('titulo', 'Observaciones condominio');
        
            switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_observacion->getAllCondObs());
                $cond = '';
                break;
                   
            case 2:
                $conds = array();
                $this->_view->assign('sadmin', 1);
                $sql = $this->_observacion->getCondsGestorObservacion(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_observacion->getCondGestorObservacion($condicion));
                $cond = ' AND o.'.$condicion;
                break;
            
            default:
                $id = $this->_observacion->getIdCondObservacion(Session::get('id_usuario'));
                $this->_view->assign('co', $id);
                $cond = ' AND o.Id_cond = '.$id;
        }
        
        $this->_view->assign('tobs', $this->_observacion->getTipoObservacion());
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_observacion->getAllObs($cond);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['fchi'] = $this->formatDateTimeShow($row[$i]['Fchi_obs']);
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_obs']);
            $row[$i]['Cond_encrypt'] = $this->encrypt($row[$i]['Id_cond']);
        }   
        
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        
        //datetimepicker
        $this->_view->setCssPlugin(array('jquery-ui-timepicker-addon'));
        $this->_view->setJsPlugin(array('jquery-ui-timepicker-addon'));
        
        $this->_view->setJs(array('bootstrap-waitingfor'));
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('obs', $pag1->paginar($row, $pagina1, 3));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        
      $this->_view->renderizar('index','observacion');
    }
    
    public function soc() {                         
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_obs');
        
        $cond = $this->getSql('co');
        $fi = $this->getSql('fi');
        $nota = $this->getSql('n');  
        $tobs = $this->getSql('to'); 
        
        switch (Session::get('level')) {
            case 1:
                if (!$cond){
                $data = ['valor' => "0", 
                         'mssg' => "Debe seleccionar condominio."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
                }
                break;
                   
            case 2:
                if (!$fi){
                $data = ['valor' => "0", 
                         'mssg' => "Debe seleccionar condominio."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
                }
                break;
        }
        
        if (!$fi){
            $data = ['valor' => "0", 
                     'mssg' => "Debe ingresar fecha observación."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        if (!$nota){
            $data = ['valor' => "0", 
                     'mssg' => "Debe ingresar detalle observacion."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        if (!$tobs){
            $data = ['valor' => "0", 
                     'mssg' => "Debe seleccionar el un tipo observación más cercana a la situación."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        
        $fchi = $this->formatDateTimeSave($fi);        
            
            $respuesta = $this->_observacion->addObsCond(
                                            $fchi,
                                            $nota,                                           
                                            $tobs,
                                            Session::get('id_usuario'),
                                            $cond              
                        );
            
            if ($respuesta == true){
                
                Session::setMensaje("Observacion registrada correctamente.");
                $data = ['valor' => "1"
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
                
            }else{
                $data = ['valor' => "0",
                         'mssg' => "No se pudo registrar correctamente la observacion."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
    }
    
    public function editObs($idobs=false, $idcond=false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_obs');
        
        $this->_view->assign('titulo', 'Editar observacion');
        
        $obs = $this->decrypt($idobs);
        $cond = $this->decrypt($idcond);
        
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        
        //datetimepicker
        $this->_view->setCssPlugin(array('jquery-ui-timepicker-addon'));
        $this->_view->setJsPlugin(array('jquery-ui-timepicker-addon'));
        
        $this->_view->setJs(array('ajax')); 
        
        if(!$this->filtrarInt($obs)){
            Session::setError("Error en la información");
            $this->redireccionar('historial/observacion');
        }
        
        $this->_view->assign('titulo', 'Observaciones condominio');
        
        if(!$this->_observacion->verificarObs($obs, $cond)){// si no devuele un post es porque no existe y redirecciona a post
            Session::setError("No existe observación");
            $this->redireccionar('historial/observacion');
        }
        
        $this->_view->assign('tobs', $this->_observacion->getTipoObservacion());
        $row = $this->_observacion->getObservacion($obs, $cond);

        for ($i = 0; $i < count($row); $i++) {
            $row['Fchi'] = $this->formatDateTimeShow($row['Fchi_obs']);
        }
        $this->_view->assign('datos', $row);
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
           
            if(!$this->getSql('fchi')){
                $this->_view->assign('_error', 'Debe seleccionar FECHA DE LA OBSERVACIÓN');
                $this->_view->renderizar('editar', 'observacion');
                exit;
            }
            if(!$this->getTexto('nota')){
                $this->_view->assign('_error', 'Debe introducir UN DETALLE DE LA OBSERVACIÓN');
                $this->_view->renderizar('editar', 'observacion');
                exit;
            }
            if(!$this->getSql('tobs')){
                $this->_view->assign('_error', 'Debe seleccionar TIPO SITUACIÓN');
                $this->_view->renderizar('editar', 'observacion');
                exit;
            }
            
            $fchi = $this->formatDateTimeSave($this->getSql('fchi'));
            
            $respuesta = $this->_observacion->editarObservacion(
                    $obs,
                    $fchi,
                    $this->getTexto('nota'),
                    $this->getSql('tobs'),
                    $cond
            );
            
            if ($respuesta == true){
                Session::setMensaje("Se ha editado correctamente la observacion");
                $this->redireccionar('historial/observacion');
                exit;

            }else{
                Session::setError("No se ha podido editar la observacion");
                $this->redireccionar('historial/observacion');
                exit;
            }
        }        
        
        $this->_view->renderizar('editar', 'observacion');
    }
    
    public function delObs($idobs=false, $idcond=false){
        
        //Session::accesoEstricto(array('admin'));
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_obs');        
        
        $obs = $this->decrypt($idobs);
        $cond = $this->decrypt($idcond);
        
        if(!$this->filtrarInt($obs)){
            $this->_view->assign('_error', 'La observacion a eliminar no existe');
                $this->_view->renderizar('index', 'observacion');
                exit;
        }
        
        if(!$this->_observacion->verificarObs($obs, $cond)){
            $this->_view->assign('_error', 'La observacion a eliminar no existe');
                $this->_view->renderizar('index', 'observacion');
                exit;
        }
        
        $this->_observacion->eliminarObs($obs, $cond);
        Session::setMensaje("Se ha eliminado correctamente la observación");
        $this->redireccionar('historial/observacion');
    }
    
    public function pafo()
   {
       $pagina1 = $this->getInt('pagina');
       $cond = $this->getInt('co');
       $condicion = "";
       
       switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_observacion->getAllCondObs());
                if($cond){
                   $condicion .= " AND o.Id_cond = $cond ";
                }
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $sql = $this->_observacion->getCondsGestorObservacion(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = ' Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_observacion->getCondGestorObservacion($condi));
                if($cond){
                   $condicion .= " AND o.Id_cond = $cond ";
                }
                break;
            
            default:
                $id = $this->_observacion->getIdCondObservacion(Session::get('id_usuario'));
                
                   $condicion .= " AND o.Id_cond = $id"; 
        }
        
        //echo $condicion;exit;
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_observacion->getAllObs($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['fchi'] = $this->formatDateTimeShow($row[$i]['Fchi_obs']);
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_obs']);
            $row[$i]['Cond_encrypt'] = $this->encrypt($row[$i]['Id_cond']);
        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('obs', $pag1->paginar($row, $pagina1, 3));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
}

?>
