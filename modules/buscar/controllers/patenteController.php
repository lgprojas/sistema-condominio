<?php

class patenteController extends buscarController {
    
    private $_patente;
    
    public function __construct() {
        parent::__construct();
        $this->_patente =  $this->loadModel('patente');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('bus_pat');
        
        $this->_view->assign('titulo', 'Buscar Patente');
        $this->_view->setJs(array('jquery-ui.min'));
        $this->_view->setJs(array('ajax'));
        $this->_view->setCss(array('jquery-ui'));
        
        switch (Session::get('level')) {
            case 1:
                $select = 777;
                $this->_view->assign('select', $select);
                $this->_view->assign('allcond', $this->_patente->getCondPat());
                break;
                   
            case 2:
                $select = 777;
                $this->_view->assign('select', $select);
                $conds = array();
                $sql = $this->_patente->getCondsGestorPat(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('allcond', $this->_patente->getCondGestorPat($condicion));
                break;
                
            default:
                $co = $this->_patente->getIdCondPat(Session::get('id_usuario'));
                $this->_view->assign('co', $co);
        }
        
        if($this->getPostParam('buscar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if (!$this->getPostParam('cod')){
                    $this->_view->assign('_error', 'Debe ingresar una patente');
                    $this->_view->renderizar('index', 'patente');
                    exit;
            }
            
            $cond = $this->getPostParam('cond');
                           
            $this->_view->assign('usu', Session::get('id_usuario'));
            $this->_view->assign('cond', $cond);
            
            if(!$this->_patente->verificarCod(trim($this->getPostParam('cod')), $cond)){
                $this->_view->assign('_error', 'La Patente no se encuentra registrada. <a href="'.BASE_URL.'transa/vehi/newVehi/'.trim($this->getPostParam('cod')).'/1">Registrar</a>');
                $this->_view->renderizar('index', 'patente');
                exit;
            }
            if(!$this->_patente->verCodAsoc(trim($this->getPostParam('cod')), $cond)){
                $this->_view->assign('_error', 'Patente encontrada pero no se encuentra asociada a ninguna persona');
                $this->_view->renderizar('index', 'patente');
                exit;
            }
                
            $patente = $this->_patente->getDatosPatente(trim($this->getPostParam('cod')), $cond);
                $this->_view->assign('dat', $patente);
            $propietario = $this->_patente->getDatosProp(trim($this->getPostParam('cod')), $cond);
                $this->_view->assign('datp', $propietario);
            $relacion = $this->_patente->getDatosRel(trim($this->getPostParam('cod')), $cond);
                $this->_view->assign('dat1', $relacion);
            $condominio = $this->_patente->getDatosCond(trim($this->getPostParam('cod')), $cond);
                $this->_view->assign('dat4', $condominio);
            $viv = $this->_patente->getDatosViv(trim($this->getPostParam('cod')), $cond);
                $this->_view->assign('dat2', $viv);
            $estaciona  = $this->_patente->getDatosEstacionaPatente(trim($this->getPostParam('cod')), $cond);
                $this->_view->assign('dat3', $estaciona);
                
            $row = $this->_patente->getPerAsoc(trim($this->getPostParam('cod')), $cond);
            for ($i = 0; $i < count($row); $i++) {
                $row[$i]['Vivasoc_per'] = $this->_patente->getVivRelPerPatente($row[$i]['Id_per'], $cond);          
            }
            
            $this->_view->assign('relvehi', $this->_patente->getRelVehi($this->getPostParam('cod'), $cond));
            
                $this->_view->assign('perAsoc', $row);
                $this->_view->assign('actext', $this->_patente->getActExt());
                
                //se usa rel per con la patente
                //se usa todas las viv del cond
                //se usa todas las act posibles
                
                $this->_view->assign('allviv', $this->_patente->getAllVivCond($cond));
                $this->_view->assign('relviv', $this->_patente->getRelVivCond());
            
        }

        $this->_view->renderizar('index', 'patente');
    }
    
    public function gpcbp(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        
        if($this->getPostParam('q')){
        //$idcole = 1;//Session::get('id_cole');
        echo json_encode($this->_patente->getNamePerCondBusqPat($this->getPostParam('q'), $this->getPostParam('co')));
        }
    }

//------------------------------------------------------------------------------    
    public function arpp() {                         
        
            $cond = $this->getPostParam('c');
            $pers = explode(' ', trim($this->getPostParam('p')));
//            echo trim($pers[0])."-".trim($pers[1])."-".trim($pers[2])."-".trim($pers[3])."-".$cond;
//            exit;
            $idper = $this->_patente->getIdPersBusPat(trim($pers[0]), trim($pers[1]), trim($pers[2]), trim($pers[3]), $cond); 
            
            if(!$idper){
                $data = ['valor' => "0", 
                         'mssg' => "La persona ingresada no existe."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
            
            $idvehi = $this->_patente->getIdVehiPat($this->getPostParam('vehi'), $cond); 
            
            if(!$idvehi){
                $data = ['valor' => "0", 
                         'mssg' => "El vehículo asociado no existe."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
            //echo $idvehi."-".$idper."-".$this->getPostParam('trv')."-".$cond;exit;
            $rel = $this->_patente->poseeYaRelPerPat(
                    $idvehi,
                    $idper,
                    $this->getPostParam('trv'),
                    $cond
                    );
            
            if ($rel){
                $data = ['valor' => "0", 
                         'mssg' => strtoupper($rel["Nom1_per"])." ".strtoupper($rel["Nom2_per"])." ".strtoupper($rel["Ape1_per"])." ".strtoupper($rel["Ape2_per"])." ya posee una relación de '".strtoupper($rel["Nom_trelv"])."' con este vehículo '[".strtoupper($rel["Cod_vehi"])."]."
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
            
            $respuesta = $this->_patente->addrelperpat(
                    $idvehi,
                    $idper,
                    $this->getSql('trv')                   
                    );
            
            if ($respuesta == true){
                    $addSel = $this->_patente->getrelperpat(
                        $idvehi,
                        $idper,
                        $this->getSql('trv'),
                        $cond
                        );
                $data = ['valor' => "1", 
                         'mssg' => "Relación guardada correctamente.",
                         'i' => strtoupper($addSel['Id_per']),
                         'r1' => strtoupper($addSel['Nom1_per']),
                         'r2' => strtoupper($addSel['Nom2_per']),
                         'r3' => strtoupper($addSel['Ape1_per']),
                         'r4' => strtoupper($addSel['Ape2_per'])
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
    
    public function regVisitaPer() {
        
        $per = $this->getPostParam('per');
        $viv = $this->getPostParam('vivasoc');
        $act = $this->getPostParam('act');
        $vehi = $this->getAlphaNum('vehi');
        if($this->getPostParam('eprop') !== "undefined"){ $eprop = 1; }else{ $eprop = 0;}
        if($this->getPostParam('evisita') !== "undefined"){ $evisita = 1; }else{ $evisita = 0;}
        $cond = $this->getPostParam('co');
            //echo $per ." ".$viv." ".$eprop ." ".$evisita." ".$cond;exit;     
            //echo $this->filtrarInt($per)." ".$this->filtrarInt($viv)." ".Session::get('id_usuario')." ".$this->getSql($eprop)." ".$this->getSql($evisita)." ".$this->getSql($cond);exit;        
        
            $respuesta = $this->_patente->regVisitaPerPatente(
                            $this->filtrarInt($per),
                            $this->filtrarInt($viv),
                            $this->filtrarInt($act),                   
                            Session::get('id_usuario'),
                            trim($vehi),
                            $this->filtrarInt($eprop),
                            $this->filtrarInt($evisita),
                            $this->filtrarInt($cond)                    
                            );
            
            if($respuesta){
                $data = ['valor' => "1", 
                         'mssg' => "Guardado",
                         'r1' => $respuesta
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }else{
                $data = ['valor' => "0", 
                         'mssg' => "Error"
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
    }
    
//------------------------------------------------------------------------------ 
        public function drv() {
        
        $idr = $this->getPostParam('idr');
        $cond = $this->getPostParam('co');
        
            $respuesta = $this->_patente->deletRegVisita(
                            $this->filtrarInt($idr),                   
                            $this->filtrarInt($cond)                    
                            );
            
            if($respuesta == true){
                $data = ['valor' => "1", 
                         'mssg' => "Quitado"
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }else{
                $data = ['valor' => "0", 
                         'mssg' => "Error"
                        ];                
                header('Content-type: application/json; charset=utf-8');
                echo json_encode($data);
                exit;
            }
    }
//------------------------------------------------------------------------------
        
    public function regVisitaPerAvan() {
        
        $per = $this->getPostParam('per');
        $viv = $this->getPostParam('viv');
        $rviv = $this->getPostParam('relviv');
        $act = $this->getPostParam('act');
        $vehi = $this->getAlphaNum('vehi');
        if($this->getPostParam('eprop') !== "undefined"){ $eprop = 1; }else{ $eprop = 0;}
        if($this->getPostParam('evisita') !== "undefined"){ $evisita = 1; }else{ $evisita = 0;}
        $cond = $this->getPostParam('co');
        
        if (!$this->getPostParam('per')){
            $this->_view->assign('_error', 'Debe debe seleccionar una persona');
            $this->_view->renderizar('index', 'patente');
            exit;
        }
        
        if(!$this->_patente->existePer($per)){
            $this->_view->assign('_error', 'La persona no existe');
            $this->_view->renderizar('index', 'patente');
            exit;
        }
        
        if(!$this->_patente->existeViv($viv)){
            $this->_view->assign('_error', 'La vivienda no existe');
            $this->_view->renderizar('index', 'patente');
            exit;
        }
        
        if(!$this->_patente->existeRelVivPer($viv, $per)){
            $this->_patente->addRelVivPer($viv, $per, $rviv);
        }

            $this->_patente->regVisitaPerPatenteAvan(
                    $this->filtrarInt($per),
                    $this->filtrarInt($viv),
                    $this->filtrarInt($act),
                    Session::get('id_usuario'),
                    trim($vehi),
                    $this->filtrarInt($eprop),
                    $this->filtrarInt($evisita),
                    $this->filtrarInt($cond)                    
                    );
            
            return true;
    }
}

