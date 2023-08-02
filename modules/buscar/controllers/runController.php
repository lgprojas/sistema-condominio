<?php

class runController extends buscarController {
    
    private $_run;
    
    public function __construct() {
        parent::__construct();
        $this->_run =  $this->loadModel('run');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('bus_run');
        
        $this->_view->assign('titulo', 'Buscar RUN');
        $this->_view->setJs(array('ajax'));
        
        switch (Session::get('level')) {
            case 1:
                $select = 777;
                $this->_view->assign('select', $select);
                $this->_view->assign('allcond', $this->_run->getCondRUN());
                break;
                   
            case 2:
                $select = 777;
                $this->_view->assign('select', $select);
                $conds = array();
                $sql = $this->_run->getCondsGestorRUN(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('allcond', $this->_run->getCondGestorRUN($condicion));
                break;
            
            default:
                $co = $this->_run->getIdCondRUN(Session::get('id_usuario'));
                $this->_view->assign('co', $co);
        }
        
        if($this->getPostParam('buscar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if (!$this->getPostParam('run')){
                    $this->_view->assign('_error', 'Debe ingresar un RUN');
                    $this->_view->renderizar('index', 'run');
                    exit;
            }

                if (!$this->getPostParam('cond')){
                    $this->_view->assign('_error', 'Debe seleccionar un condominio');
                    $this->_view->renderizar('index', 'run');
                    exit;
                }
                $cond = $this->getPostParam('cond');
            
            if(!$this->_run->verificarRUN(trim($this->getPostParam('run')), $cond)){
                $this->_view->assign('_error', 'El RUN ingresado no se encuentra registrado. <a href="'.BASE_URL.'transa/per/newPer/'.trim($this->getPostParam('run')).'/1">Registrar</a>');
                $this->_view->renderizar('index', 'run');
                exit;
            }
                
            $run = $this->_run->getDatos(trim($this->getPostParam('run')), $cond);
                $run['Id_encrypt'] = $this->encrypt($run['Id_per']);
                $this->_view->assign('dat', $run);
            $relacion = $this->_run->getDatosRel(trim($this->getPostParam('run')), $cond);
                $this->_view->assign('dat1', $relacion);
            $viv = $this->_run->getDatosViv(trim($this->getPostParam('run')), $cond);
                $this->_view->assign('dat2', $viv);
            $estaciona  = $this->_run->getDatosEstaciona(trim($this->getPostParam('run')), $cond);
                $this->_view->assign('dat3', $estaciona);
            $vehiProp  = $this->_run->getVehiProp(trim($this->getPostParam('run')), $cond);
                $this->_view->assign('dat4', $vehiProp);
            
            $idper = $run["Id_per"];
            $this->_view->assign('cond', $cond);
            $this->_view->assign('idper', $run["Id_per"]);
            $this->_view->assign('allvivfilt', $this->_run->gAllVivCond($cond));
            $this->_view->assign('allvehifilt', $this->_run->gAllVehiCond($cond));
            $this->_view->assign('actext', $this->_run->gActExtAvanz());  
            
            $this->_view->assign('allVivRelPer', $this->_run->gAllVivRelPer($idper,$cond));
            $this->_view->assign('allVehiRelPer', $this->_run->gAllVehiRelPer($idper,$cond));
        }
        
        $this->_view->renderizar('index', 'run');
    }
    
    public function gettrelrun(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        
        if($this->getPostParam('viv') && $this->getPostParam('co')){
            $viv = $this->getPostParam('viv');
            $cond = $this->getPostParam('co');
            
            if($this->_run->gVivPoseeProp($viv, $cond)){
                $condicion = " WHERE Id_trel <> 1";
            }
        echo json_encode($this->_run->gTipoRelViv($condicion));
        }
    }
    
    public function addRelPerVivRun() {                         
        
            $rel = $this->_run->tieneYaRel(
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
            
            $respuesta = $this->_run->addRelVivRun(
                    $this->getSql('viv'),
                    $this->getSql('per'),
                    $this->getSql('trel')                   
                    );
            
            if ($respuesta == true){
                    $addSel = $this->_run->getrelvivrun(
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
    
    public function gettrelvrun(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        
        if($this->getPostParam('vehi') && $this->getPostParam('co')){
            $vehi = $this->getPostParam('vehi');
            $cond = $this->getPostParam('co');
            
            if($this->_run->gVehiPoseeProp($vehi, $cond)){
                $condicion = " WHERE Id_trelv <> 1";
            }
        echo json_encode($this->_run->gTipoRelVehi($condicion));
        }
    }
    
    public function addRelPerVehiRun() {                         
        
            $rel = $this->_run->tieneYaRelVehi(
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
            
            $respuesta = $this->_run->addRelVehiRun(
                    $this->getSql('vehi'),
                    $this->getSql('per'),
                    $this->getSql('trelv')                   
                    );
            
            if ($respuesta == true){
                    $addSel = $this->_run->getrelvehirun(
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
    public function regVisitaRun() {
        
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

        $respuesta = $this->_run->regVisPerAvanRun(
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

