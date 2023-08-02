<?php

class vivController extends buscarController {
    
    private $_bviv;
    
    public function __construct() {
        parent::__construct();
        $this->_bviv =  $this->loadModel('viv');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('bus_viv');
        
        $this->_view->assign('titulo', 'Buscar vivienda');
        
        switch (Session::get('level')) {
            case 1:
                $select = 777;
                $this->_view->assign('select', $select);
                $this->_view->assign('cond', $this->_bviv->getCondBViv());
                break;
                   
            case 2:
                $select = 777;
                $this->_view->assign('select', $select);
                $conds = array();
                $sql = $this->_bviv->getCondsGestorBViv(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_bviv->getCondGestorBViv($condicion));
                break;
                
            default:
                $co = $this->_bviv->getIdCondViv(Session::get('id_usuario'));
                $this->_view->assign('cb', $this->_bviv->getCBViv($co));
                $this->_view->assign('co', $co);
        }
        
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJs(array('bootstrap-waitingfor'));
        $this->_view->setJs(array('ajax'));
        
        if($this->getPostParam('buscar') == 1){
            $this->_view->assign('datos', $_POST);
            
            $cond = $this->getPostParam('cond');
            
            if (!$this->getPostParam('cb')){
                    $this->_view->assign('_error', 'Debe seleccionar calle/block de la vivienda.');
                    $this->_view->renderizar('index', 'viv');
                    exit;
            }
            if (!$this->getPostParam('num')){
                    $this->_view->assign('_error', 'Debe seleccionar número de la vivienda.');
                    $this->_view->renderizar('index', 'viv');
                    exit;
            }
            $consulta = $this->_bviv->getIdViv(trim($this->getPostParam('num')), $cond);
           
            if(empty($consulta)){
                $this->_view->assign('_error', 'La vivienda seleccionada no se encuentra registrada.');
                $this->_view->renderizar('index', 'viv');
                exit;
            }
            if(!$this->_bviv->verVivAsoc(trim($this->getPostParam('num')), $cond)){
                $this->_view->assign('_error', 'La vivienda no se encuentra asociada a un propietario.');
                $this->_view->renderizar('index', 'viv');
                exit;
            }
                
            $viv = $this->_bviv->getDatos(trim($this->getPostParam('num')),$cond);
                $this->_view->assign('dat', $viv);
            $prop = $this->_bviv->getDatosProp(trim($this->getPostParam('num')), $cond);
                $this->_view->assign('dat1', $prop);
                
            $this->_view->assign('cond', $cond);
            $this->_view->assign('tmul', $this->_bviv->getTipoMotivosMultaViv());
//            $PerVehi = $this->_bviv->getDatosTit(trim($this->getPostParam('viv')));
//                $this->_view->assign('dat2', $PerVehi);

        }
        $this->_view->renderizar('index', 'viv');
    }
    
    public function getCB(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        if(!Session::get('level') == 1 || !Session::get('level') == 2){$this->redireccionar();}
        $this->_acl->acceso('bus_viv');
        
        if($this->getInt('cond'))
        echo json_encode($this->_bviv->getCBCond($this->getInt('cond')));
    }
    
    public function getNumViv(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('bus_viv');
        
        if($this->getInt('cb'))
        echo json_encode($this->_bviv->getNumViv($this->getInt('cb')));
    }
    
        public function smbv() {                         
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        //$this->_acl->acceso('crear_bviv');
        
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
        if($this->_bviv->verExiCodMulta($cod, $viv)){
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
        
        $cond = $this->_bviv->getIdVivCondMultaViv($viv);
            
            $respuesta = $this->_bviv->addMultaVivBViv(
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
                $viv = $this->_bviv->getDatos($viv, $cond);
                Session::setMensaje("Multa aplicada correctamente a vivienda Calle/Block: ".$viv["Nom_cb"].", N°: ".$viv["Num_viv"]);
                $data = ['valor' => "1"
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
}

