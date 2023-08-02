<?php

class multaController extends historialController {
    
    private $_multa;
    
    public function __construct() {
        parent::__construct();
        $this->_multa =  $this->loadModel('multa');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_vivmulta');
        
        $this->_view->assign('titulo', 'Multas');
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_multa->getCondf());
                $cond = '';
                break;
                   
            case 2:
                $conds = array();
                $this->_view->assign('sadmin', 1);
                $sql = $this->_multa->getCondsGestorMulta(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_multa->getCondGestorMulta($condicion));
                $cond = ' AND v.'.$condicion;
                break;
            
            default:
                $id = $this->_multa->getIdCondMulta(Session::get('id_usuario'));
                $this->_view->assign('cbl', $this->_multa->getCBMultaCond(Session::get('cond')));
                $cond = ' AND v.Id_cond = '.$id;
        }
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_multa->getAllVivMultas($cond);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_viv']);
            $row[$i]['Cond_encrypt'] = $this->encrypt($row[$i]['Id_cond']);
            $row[$i]['TotMultas'] = $this->_multa->getTotalMultasViv($row[$i]['Id_viv']);
            $row[$i]['PagMultas'] = $this->_multa->getPagadasMultasViv($row[$i]['Id_viv']);
            $row[$i]['PendMultas'] = $this->_multa->getPendMultasViv($row[$i]['Id_viv']);
        }
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('viv', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        
      $this->_view->renderizar('index','multa');
    }
    
    public function indexMultas($idviv=false, $idcond=false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_lista_multas');
        
        $this->_view->assign('titulo', 'Multas viviendas');
        
        $viv = $this->decrypt($idviv);
        $cond = $this->decrypt($idcond);
        
        $this->_view->assign('Idviv_encrypt', $idviv);
        $this->_view->assign('Cond_encrypt', $idcond);
        $this->_view->assign('dat', $this->_multa->getDatosVivMulta($viv, $cond));
        $this->_view->assign('ctmul', $this->_multa->getCTMulta());
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_multa->getVivMultas($viv, $cond);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Fchi_multa'] =$this->formatDate($row[$i]['Fchi_multa']);
            $row[$i]['Fchp_multa'] =$this->formatDate($row[$i]['Fchp_multa']);
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_multa']);
        }
        
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJs(array('bootstrap-waitingfor'));
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('multas', $pag1->paginar($row, $pagina1, 30));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        
      $this->_view->renderizar('indexmultas','multa');
    }
    
    public function smv() {                         
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_multa');
        
        $cod = $this->getSql('cod');
        $fi = $this->getSql('fi');
        $n = $this->getSql('n');  
        $fp = $this->getSql('fp');
        $m = $this->getSql('m');
        $tmul = $this->getSql('tmul');
        $viv = $this->getSql('viv');  
        
        if (!$cod){
            $data = ['valor' => "0", 
                     'mssg' => "Debe ingresar Código multa (N° Boleta, serie recibo, N° comprobante, etc.)."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        if($this->_multa->verificarExiCodMulta($cod, $viv)){
            $data = ['valor' => "0", 
                     'mssg' => "El código ingresado ya se encuentra registrado."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        if (!$fi){
            $data = ['valor' => "0", 
                     'mssg' => "Debe seleccionar fecha de cuando se cursó la multa."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        if (!$m){
            $data = ['valor' => "0", 
                     'mssg' => "Debe ingresar monto total de la multa(ideal en pesos chilenos)."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        if (!$tmul){
            $data = ['valor' => "0", 
                     'mssg' => "Debe seleccionar motivo por el cual fue cursada la multa."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        
        $fchi = $this->formatDate($fi);
        $fchp = $this->formatDate($fp);
        
        $cond = $this->_multa->getIdVivCondMulta($viv);
            
            $respuesta = $this->_multa->addMultaViv(
                                            $cod,
                                            $fchi,
                                            $fchp,
                                            $n,                                           
                                            $m,
                                            Session::get('id_usuario'),
                                            $tmul,
                                            $viv,
                                            $cond
                        );
            
            if ($respuesta == true){
                $idviv = $this->encrypt($viv);
                $idcond = $this->encrypt($cond);
                Session::setMensaje("Multa aplicada correctamente a la vivienda.");
                $data = ['valor' => "1",
                         'r1' => $idviv,
                         'r2' => $idcond
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
                
            }else{
                Session::setError("No se pudo aplicar correctamente la multa a la vivienda.");
                $this->redireccionar('historial/multa/indexMultas/'.$this->encrypt($viv).'/'.$this->encrypt($cond));
                exit;
            }
    }
    
    public function getCBCond(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        
        if($this->getInt('cond'))
        echo json_encode($this->_multa->getCBMultaCond($this->getInt('cond')));
    }
    
    public function gettmul(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_multa');
        
        if($this->getInt('ctmul'))
        echo json_encode($this->_multa->getTMul($this->getInt('ctmul')));
    }
    
    public function editMulta($idmul=false, $idviv=false, $idcond=false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_multa');
        
        $this->_view->assign('titulo', 'Editar multa');
        
        $multa = $this->decrypt($idmul);
        $viv = $this->decrypt($idviv);
        $cond = $this->decrypt($idcond);
        
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJs(array('ajax')); 
        
        if(!$this->filtrarInt($multa)){
            Session::setError("Error en la información");
            $this->redireccionar('historial/multa/indexMultas/'.$idviv.'/'.$idcond);
        }
        
        if(!$this->_multa->verificarMulta($multa, $viv, $cond)){// si no devuele un post es porque no existe y redirecciona a post
            Session::setError("No existe multa");
            $this->redireccionar('historial/multa/indexMultas/'.$idviv.'/'.$idcond);
        }
        
        $this->_view->assign('v', $idviv);
        $this->_view->assign('c', $idcond);
        $this->_view->assign('dat', $this->_multa->getDatosVivMulta($viv, $cond));
        $this->_view->assign('ctmul', $this->_multa->getCTMulta());
        $this->_view->assign('tmul', $this->_multa->getTMulta());
        $this->_view->assign('emul', $this->_multa->getEstadosMulta());
        $row = $this->_multa->getMulta($multa, $viv, $cond);

        for ($i = 0; $i < count($row); $i++) {
            $row['Fchi'] = $this->formatDate($row['Fchi_multa']);
            $row['Fchp'] = $this->formatDate($row['Fchp_multa']);
        }
        $this->_view->assign('datos', $row);
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);

            if(!$this->getSql('fchi')){
                $this->_view->assign('_error', 'Debe seleccionar FECHA DE LA MULTA');
                $this->_view->renderizar('editar', 'multa');
                exit;
            }
            if(!$this->getSql('m')){
                $this->_view->assign('_error', 'Debe introducir MONTO DE LA MULTA');
                $this->_view->renderizar('editar', 'multa');
                exit;
            }
            if(!$this->getSql('tmul')){
                $this->_view->assign('_error', 'Debe seleccionar SUBCATEGORIA DE LA MULTA');
                $this->_view->renderizar('editar', 'multa');
                exit;
            }
            if(!$this->getSql('emul')){
                $this->_view->assign('_error', 'Debe seleccionar ESTADO DE LA MULTA');
                $this->_view->renderizar('editar', 'multa');
                exit;
            }
            
            $fchi = $this->formatDate($this->getSql('fchi'));
            $fchp = $this->formatDate($this->getSql('fchp'));
            
            $respuesta = $this->_multa->editarMulta(
                    $multa,
                    $this->getPostParam('cod'),
                    $fchi,
                    $fchp,
                    $this->getPostParam('nota'),
                    $this->getSql('m'),
                    $viv,
                    $this->getPostParam('tmul'),
                    $this->getSql('emul'),
                    $cond
            );
            
            if ($respuesta == true){
                Session::setMensaje("Se ha editado correctamente la multa");
                $this->redireccionar('historial/multa/indexMultas/'.$idviv.'/'.$idcond);
                exit;

            }else{
                Session::setError("No se ha podido editar la multa");
                $this->redireccionar('historial/multa/indexMultas/'.$idviv.'/'.$idcond);
                exit;
            }
        }        
        
        $this->_view->renderizar('editar', 'multa');
    }
    
    public function delMulta($idmulta=false, $idviv=false, $idcond=false){
        
        //Session::accesoEstricto(array('admin'));
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_multa');        
        
        $multa = $this->decrypt($idmulta);
        $viv = $this->decrypt($idviv);
        $cond = $this->decrypt($idcond);
        
        if(!$this->filtrarInt($multa)){
            $this->_view->assign('_error', 'La multa a eliminar no existe');
                $this->_view->renderizar('indexmultas', 'multa');
                exit;
        }
        
        if(!$this->_multa->verificarMulta($multa, $viv, $cond)){
            $this->_view->assign('_error', 'La multa a eliminar no existe');
                $this->_view->renderizar('indexmultas', 'multa');
                exit;
        }
        
        $this->_multa->eliminarMulta($multa, $viv);
        Session::setMensaje("Se ha eliminado correctamente la vivienda");
        $this->redireccionar('historial/multa/indexMultas/'.$idviv.'/'.$idcond);
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
                $this->_view->assign('cond', $this->_multa->getCondf());
                if($cond){
                   $condicion .= " AND v.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
                }
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $sql = $this->_multa->getCondsGestorMulta(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_multa->getCondGestorMulta($condi));
                if($cond){
                   $condicion .= " AND v.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
                }
                break;
            
            default:
                $id = $this->_multa->getIdCondv(Session::get('id_usuario'));
                if($cb){
                   $condicion .= " AND v.Id_cb = $cb ";
                }
                   $condicion .= " AND v.Id_cond = $id"; 
        }
        
        //echo $condicion;exit;
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_multa->getAllVivMultas($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_multa']);
            $row[$i]['Cond_encrypt'] = $this->encrypt($row[$i]['Id_cond']);
            $row[$i]['TotMultas'] = $this->_multa->getTotalMultasViv($row[$i]['Id_viv']);
            $row[$i]['PagMultas'] = $this->_multa->getPagadasMultasViv($row[$i]['Id_viv']);
            $row[$i]['PendMultas'] = $this->_multa->getPendMultasViv($row[$i]['Id_viv']);
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
        echo json_encode($this->_multa->getCBLsMulta($this->getInt('co')));
    }
}

?>
