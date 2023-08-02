<?php

class avanzadoController extends buscarController {
    
    private $_avanz;
    
    public function __construct() {
        parent::__construct();
        $this->_avanz =  $this->loadModel('avanzado');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('bus_avanz');
        
        $this->_view->assign('titulo', 'Búsqueda avanzada');
        $this->_view->setJs(array('jquery-ui.min'));
        $this->_view->setJs(array('ajax'));
        $this->_view->setCss(array('jquery-ui'));
        
        switch (Session::get('level')) {
            case 1:
                $select = 777;
                $this->_view->assign('select', $select);
                $this->_view->assign('allcond', $this->_avanz->getCondAvanz());
                break;
                   
            case 2:
                $select = 777;
                $this->_view->assign('select', $select);
                $conds = array();
                $sql = $this->_avanz->getCondsGestorAvanz(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('allcond', $this->_avanz->getCondGestorAvanz($condicion));
                break;
            
            default:
                $idcond = $this->_avanz->getIdCondAvanz(Session::get('id_usuario'));
                $this->_view->assign('usu', Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);
        }
        
        if($this->getPostParam('buscar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if (!$this->getPostParam('perco')){
                    $this->_view->assign('_error', 'Debe ingresar el nombre de una persona');
                    $this->_view->renderizar('index', 'avanzado');
                    exit;
            }
            
            $cond = $this->getPostParam('cond');
            
            $pers = explode(' ', trim($this->getPostParam('perco')));
                //buscamos la ID de la persona
                $idper = $this->_avanz->getIdPers(trim($pers[0]), trim($pers[1]), trim($pers[2]), trim($pers[3]), $cond); 
                //print_r($idalum);
                if(!$idper){
                    $this->_view->assign('_error', 'La persona introducida no se encuentra registrada');
                    $this->_view->renderizar('index', 'avanzado');
                    exit;
                }
                
            $datosPer = $this->_avanz->getDatosPer(trim($idper), $cond);
                $this->_view->assign('dat', $datosPer);
            $datosPropViv = $this->_avanz->getEsPropViv(trim($idper), $cond);
                $this->_view->assign('dat1', $datosPropViv);
            $datosPropVehi = $this->_avanz->getEsPropVehi(trim($idper), $cond);
                $this->_view->assign('dat2', $datosPropVehi);
                
            $this->_view->assign('cond', $cond);
            $this->_view->assign('idper', $datosPer["Id_per"]);
            $this->_view->assign('allvivfilt', $this->_avanz->getAllVivCond($cond));
            $this->_view->assign('allvehifilt', $this->_avanz->getAllVehiCond($cond));
            $this->_view->assign('actext', $this->_avanz->getActExtAvanz());  
            
            $this->_view->assign('allVivRelPer', $this->_avanz->getAllVivRelPer($idper,$cond));
            $this->_view->assign('allVehiRelPer', $this->_avanz->getAllVehiRelPer($idper,$cond));
        }

        $this->_view->renderizar('index', 'patente');
    }

// Búsqueda avanzada
    
    public function gpc(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        
        if($this->getPostParam('q')){
        //$idcole = 1;//Session::get('id_cole');
        echo json_encode($this->_avanz->getNamePerCond($this->getPostParam('q'), $this->getPostParam('co')));
        }
    }   
    
    public function gettrel(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        
        if($this->getPostParam('viv') && $this->getPostParam('co')){
            $viv = $this->getPostParam('viv');
            $cond = $this->getPostParam('co');
            
            if($this->_avanz->getVivPoseeProp($viv, $cond)){
                $condicion = " WHERE Id_trel <> 1";
            }
        echo json_encode($this->_avanz->getTipoRelViv($condicion));
        }
    }
    
    public function gettrelv(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        
        if($this->getPostParam('vehi') && $this->getPostParam('co')){
            $vehi = $this->getPostParam('vehi');
            $cond = $this->getPostParam('co');
            
            if($this->_avanz->getVehiPoseeProp($vehi, $cond)){
                $condicion = " WHERE Id_trelv <> 1";
            }
        echo json_encode($this->_avanz->getTipoRelVehi($condicion));
        }
    }
    
    public function addRelPerViv() {                         
        
            $rel = $this->_avanz->poseeYaRel(
                    $this->getSql('viv'),
                    $this->getSql('per'),
                    $this->getSql('trel')                   
                    );
            
            if ($rel){
                $data = ['valor' => "0", 
                         'mssg' => "Ya posee una relación de '".$rel["Nom_trel"]."' con vivienda '".$rel["Nom_cb"]."-".$rel["Num_viv"]."'."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
            
            $respuesta = $this->_avanz->addrelviv(
                    $this->getSql('viv'),
                    $this->getSql('per'),
                    $this->getSql('trel')                   
                    );
            
            if ($respuesta == true){
                    $addSel = $this->_avanz->getrelviv(
                        $this->getSql('viv'),
                        $this->getSql('per'),
                        $this->getSql('trel')                   
                        );
                $data = ['valor' => "1", 
                         'mssg' => "Relación guardada correctamente.",
                         'i' => $addSel['Id_viv'],
                         'r1' => $addSel['Nom_cb'],
                         'r2' => $addSel['Num_viv']
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }else{
                $data = ['valor' => "0", 
                         'mssg' => "No se pudo relacionar a la vivienda."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
    }
    
    public function addRelPerVehi() {                         
        
            $rel = $this->_avanz->poseeYaRelVehi(
                    $this->getSql('vehi'),
                    $this->getSql('per'),
                    $this->getSql('trelv')                   
                    );
            
            if ($rel){
                $data = ['valor' => "0", 
                         'mssg' => "Ya posee una relación de '".$rel["Nom_trelv"]."' con vehículo '[".$rel["Cod_vehi"]."] ".$rel["Nom_marca"]." ".$rel["Nom_modelo"]."'."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
            
            $respuesta = $this->_avanz->addrelvehi(
                    $this->getSql('vehi'),
                    $this->getSql('per'),
                    $this->getSql('trelv')                   
                    );
            
            if ($respuesta == true){
                    $addSel = $this->_avanz->getrelvehi(
                        $this->getSql('vehi'),
                        $this->getSql('per'),
                        $this->getSql('trelv')                   
                        );
                $data = ['valor' => "1", 
                         'mssg' => "Relación guardada correctamente.",
                         'i' => $addSel['Cod_vehi'],
                         'r1' => $addSel['Nom_marca'],
                         'r2' => $addSel['Nom_modelo']
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }else{
                $data = ['valor' => "0", 
                         'mssg' => "No se pudo relacionar al vehículo."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
    }

//------------------------------------------------------------------------------    
    public function regVisita() {
        
        $per = $this->getPostParam('per');
        $viv = $this->getPostParam('viv');
        $act = $this->getPostParam('act');
        $vehi = $this->getPostParam('vehi');
        if($this->getPostParam('eprop') !== "undefined"){ $eprop = 1; }else{ $eprop = 0;}
        if($this->getPostParam('evisita') !== "undefined"){ $evisita = 1; }else{ $evisita = 0;}
        $cond = $this->getPostParam('co');
        
        if (!$this->getPostParam('viv')){
            $data = ['valor' => "0", 
                     'mssg' => "Debe seleccionar vivienda"
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        if (!$this->getPostParam('act')){
            $data = ['valor' => "0", 
                     'mssg' => "Debe seleccionar vivienda"
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }
        
        if ((empty($vehi) && ($eprop == 1 || $evisita == 1)) || (!empty($vehi) && ($eprop == 0 && $evisita == 0))){
            $data = ['valor' => "0", 
                     'mssg' => "No hay coherencia entre vehículo y estacionamiento."
                    ];                
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($data);
            exit;
        }

        $respuesta = $this->_avanz->regVisPerAvan(
                    $this->filtrarInt($per),
                    $this->filtrarInt($viv),
                    $this->filtrarInt($act),
                    Session::get('id_usuario'),
                    trim($vehi),
                    $this->filtrarInt($eprop),
                    $this->filtrarInt($evisita),
                    $this->filtrarInt($cond)                    
                    );
            
        if ($respuesta == true){
                $data = ['valor' => "1", 
                         'mssg' => "Visita registrada correctamente."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }else{
                $data = ['valor' => "0", 
                         'mssg' => "No se pudo registrar visita."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
    }
}