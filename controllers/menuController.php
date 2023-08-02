<?php

class menuController extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->_view->assign('titulo', 'Menu prueba');

        if(Session::get('autenticado')){
            $this->_view->assign('menu', $this->_menu->getMenu('administracion', 'principal'));
        }
        else {
            $this->_view->assign('menu', $this->_menu->getMenu('sitio', 'principal'));
        }     
        $this->_view->renderizar('index','menu');
    }
}
?>
