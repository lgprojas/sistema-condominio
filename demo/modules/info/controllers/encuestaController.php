<?php

class encuestaController extends infoController {
    
    private $_encuesta;
    
    public function __construct() {
        parent::__construct();
        $this->_encuesta =  $this->loadModel('encuesta');
    }
    
    public function index(){
        
        $this->_view->assign('titulo', 'Encuestas');
        
        if(Session::get('level') > 2){

            $trel = $this->_encuesta->getTipoRel(Session::get('id_per'));//administrador propietario
            $condicion = ' WHERE e.Id_cond = '. Session::get('cond');
            $encuestas = $this->_encuesta->getAllEncuUsu($condicion);
            
            for ($i = 0; $i < count($encuestas); $i++) {
                $encuestas[$i]['Est_encu'] = $this->_encuesta->getEstVotEncu($encuestas[$i]['Id_encu'], Session::get('id_usuario'));
            }
            
            switch (Session::get('user_access')) {
                    case 1:
                        $this->_view->assign('encuestas', $encuestas);
                        if($trel == 1){
                        $this->_view->assign('reside', 1); 
                        }
                    break; 
                    case 2:
                        $this->_view->assign('encuestas', $encuestas);
                        if($trel == 1 || $trel == 3){
                        $this->_view->assign('reside', 1); 
                        }
                    break;
                    case 3:
                        $this->_view->assign('encuestas', $encuestas);
                        if($trel == 1 || $trel == 3 || $trel == 5){
                        $this->_view->assign('reside', 1); 
                        }
                    break;
                    default:
                        $this->_view->assign('encuestas', $encuestas);
                    break;
            }
        }else{
            $encuestas = $this->_encuesta->getAllEncuUsu();
            for ($i = 0; $i < count($encuestas); $i++) {
                $encuestas[$i]['Est_encu'] = $this->_encuesta->getEstVotEncu($encuestas[$i]['Id_encu'], Session::get('id_usuario'));
            }
            $this->_view->assign('puede_votar', Session::get('cond'));
            $this->_view->assign('encuestas', $encuestas);
            $this->_view->assign('reside2', 1);
        }
        
        $this->_view->renderizar('index', 'encuesta');
    }
    
    public function votar($idencu=false){
        
        $this->_view->assign('encu', $idencu);
        $cond = $this->_encuesta->getCondEncu($idencu);
        $this->_view->assign('estado', $this->_encuesta->getEstVotEncu($idencu, Session::get('id_usuario')));
        
        if(Session::get('level') > 2){
            
            $trel = $this->_encuesta->getTipoRel(Session::get('id_per'));//administrador propietario
             
            switch (Session::get('user_access')) {
                    case 1:
                        $this->_view->assign('encuesta', $this->_encuesta->getNameEncu($idencu, Session::get('cond')));
                        $this->_view->assign('opciones', $this->_encuesta->getAllItemEncu($idencu, Session::get('cond')));
                        if($trel == 1){
                        $this->_view->assign('reside', 1); 
                        }
                    break; 
                    case 2:
                        $this->_view->assign('encuesta', $this->_encuesta->getNameEncu($idencu, Session::get('cond')));
                        $this->_view->assign('opciones', $this->_encuesta->getAllItemEncu($idencu, Session::get('cond')));
                        if($trel == 1 || $trel == 3){
                        $this->_view->assign('reside', 1); 
                        }
                    break;
                    default:
                        $this->_view->assign('encuesta', $this->_encuesta->getNameEncu($idencu, Session::get('cond')));
                        $this->_view->assign('opciones', $this->_encuesta->getAllItemEncu($idencu, Session::get('cond')));
                    break;
            }
        }else{
            $this->_view->assign('encuesta', $this->_encuesta->getNameEncuAdmin($idencu));
            $this->_view->assign('opciones', $this->_encuesta->getAllItemEncuAdmin($idencu));
            $this->_view->assign('reside', 1);
        }
        
        if($this->getPostParam('guardar') == 1){

            if (!$this->getPostParam('voto')){
                $this->_view->assign('_error', 'Debe seleccionar una opción');
                $this->_view->renderizar('votar', 'encuesta');
                exit;
            }
            
            $this->_encuesta->addVotoEncuesta(
                    Session::get('id_usuario'),
                    $idencu, 
                    $this->getPostParam('voto'), 
                    $cond
                    );
            
            Session::setMensaje("Se ha registrado correctamente su voto.");
            $this->redireccionar('info/encuesta/votar/'.$idencu);
            exit;
        }
        
        $this->_view->renderizar('votar', 'encuesta');
    }
    
}