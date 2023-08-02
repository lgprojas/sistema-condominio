<?php

class indexController extends encuestaController {
    
    private $_index;
    
    public function __construct() {
        parent::__construct();
        $this->_index =  $this->loadModel('index');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_encu');
        
        $this->_view->assign('titulo', 'Encuestas');
        
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJs(array('ajax'));
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('ifcond', 1);
                $this->_view->assign('cond', $this->_index->getCond());
                $cond = '';
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('ifcond', 1);
                $conds = array();
                $sql = $this->_index->getCondsGestorEncu(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_index->getCondGestorEncu($condicion));
                $cond = ' WHERE e.'.$condicion;
                break;
            
            default:
                $this->_view->assign('ifcond', 0);
                $idcond = $this->_index->getIdCondUsu(Session::get('id_usuario'));
                $cond = ' WHERE e.Id_cond = '.$idcond;
                //$this->_view->assign('cond', $idcond);
        }
        
        $row = $this->_index->getEncuestas($cond);
        //$this->encrypt($idsec);
        //$id = $this->decrypt($i);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_encu']);
            $row[$i]['Cond_encrypt'] = $this->encrypt($row[$i]['Id_cond']);
        }
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('encuestas', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));

        if($this->getPostParam('guardar') == 1){
            
            if(!Session::get('autenticado')){$this->redireccionar();}
            $this->_acl->acceso('crear_encu');

                if (!$this->getPostParam('encuesta')){
                    $this->_view->assign('_error', 'Debe ingresar una pregunta');
                    $this->_view->renderizar('index', 'index');
                    exit;
                }

                $this->_index->addEncuesta($this->getPostParam('encuesta'), $this->formatDate($this->getPostParam('fcht')), $this->getPostParam('cond'));
                Session::setMensaje("Se ha agregado correctamente la encuesta");
                $this->redireccionar('encuesta/index/index/');
                exit;
        }
        
        if($this->getPostParam('update') == 1){
            $this->_view->assign('datos1', $_POST);

            if(!Session::get('autenticado')){$this->redireccionar();}
            $this->_acl->acceso('editar_encu');
            
            if(!$this->getPostParam('encuesta')){
                $this->_view->assign('_error', 'Para guardar debe ingresar una pregunta');
                $this->_view->renderizar('index', 'index');
                exit;
            }

            $this->_index->editEncuesta(
                    $this->getPostParam('encuesta'),
                    $this->formatDate($this->getPostParam('fcht')),
                    $this->getPostParam('cond'),
                    $this->getPostParam('idencu')
                    );
            Session::setMensaje("Se ha editado correctamente la encuesta");
            $this->redireccionar('encuesta/index/index/');
            exit;
        }
        
        $this->_view->renderizar('index', 'index');
    }
    
    public function editEstEncu($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('edit_est_encu');
        
        $idencu = $this->decrypt($ide);
        $estado = $this->_index->getEstEncu($idencu);

        if($estado == 1){
            $this->_index->editEstEncuesta($idencu, 2);
            Session::setMensaje("Se ha editado correctamente el estado de la encuesta");
            $this->redireccionar('encuesta/index/');
            exit;
        }else{
            $this->_index->editEstEncuesta($idencu, 1);
            Session::setMensaje("Se ha editado correctamente el estado de la encuesta");
            $this->redireccionar('encuesta/index/');
            exit;
        }
    }
    
    public function deleteEncu($ide = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_encu');
        
        $idencu = $this->decrypt($ide);
        
        if(!$this->filtrarInt($idencu)){
            $this->_view->assign('_error', 'El ID de la encuesta no es válido');
                $this->_view->renderizar('index', 'index');
                exit;
        }
        
        if(!$this->_index->verificarEncuesta($idencu)){
            $this->_view->assign('_error', 'La encuesta no existe');
                $this->_view->renderizar('index', 'index');
                exit;
        }
        
        $this->_index->eliminarEncuesta($this->filtrarInt($idencu));
        Session::setMensaje("Se ha eliminado correctamente la encuesta");
        $this->redireccionar('encuesta/index/');
    }
//------------------------------------------------------------------------------
    public function pen()
   {
       $pagina1 = $this->getInt('pagina');
       $cond = $this->getInt('co');
       $condicion = "";
       
       switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_index->getCond());
                if($cond){
                   $condicion .= " WHERE e.Id_cond = $cond ";
                }
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $sql = $this->_index->getCondsGestorEncu(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_index->getCondGestorEncu($condi));
                if($cond){
                   $condicion .= " WHERE e.Id_cond = $cond ";
                }
                break;
            
            default:
                $id = $this->_index->getIdCondUsu(Session::get('id_usuario'));
                $condicion .= " WHERE e.Id_cond = $id"; 
        }
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_index->getEncuestas($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_encu']);
        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('encuestas', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
//------------------------------------------------------------------------------
    public function addItems($ide=false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_items');
        
        $this->_view->assign('titulo', 'Items Encuesta');        
        $this->_view->setJs(array('ajax'));
        
        $idencu = $this->decrypt($ide);
        
        $row = $this->_index->getItemsEncu($idencu);
        for($i = 0; $i < count($row); $i++){           
            $row[$i]['Est_adj'] = $this->_index->getEstFileItem($row[$i]['Id_iencu'], $row[$i]['Id_encu']);
            $row[$i]['Id_Xencu'] = $this->encrypt($row[$i]['Id_encu']);
            $row[$i]['Id_Xiencu'] = $this->encrypt($row[$i]['Id_iencu']);
        }
        $this->_view->assign('items', $row);

        if($this->getPostParam('guardar') == 1){

        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_item');
            
                if (!$this->getPostParam('item')){
                    $this->_view->assign('_error', 'Debe ingresar un ítem');
                    $this->_view->renderizar('items', 'index');
                    exit;
                }

                $this->_index->addItemEncuesta($this->getPostParam('item'), $idencu);
                Session::setMensaje("Se ha agregado correctamente el ítem");
                $this->redireccionar('encuesta/index/addItems/'.$ide);
                exit;
        }
        
        if($this->getPostParam('update') == 1){
            $this->_view->assign('datos1', $_POST);

        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_item');
            
            if(!$this->getPostParam('item')){
                $this->_view->assign('_error', 'Para guardar debe ingresar un ítem');
                $this->_view->renderizar('items', 'index');
                exit;
            }

            $this->_index->editItemEncuesta(
                    $this->getPostParam('item'),
                    $this->getPostParam('iditem'),
                    $idencu
                    );
            Session::setMensaje("Se ha editado correctamente el ítem de la encuesta");
            $this->redireccionar('encuesta/index/addItems/'. $ide);
            exit;
        }
        
        if($this->getPostParam('subirfile') == 1){
            
            $ext = $this->validarExtensionFile($_FILES['archivo']['name']);

            if($ext == false){
                Session::setError("Sólo son permitidos archivos PDF o DOC o DOCX");
                $this->redireccionar('encuesta/index/addItems/'. $ide);                             
                exit;
            }
            
            if(($_FILES["archivo"]["size"]/1024) >= 5120){//5M / 1024 = 5120
                Session::setError("Sólo se permite archivos igual o inferiores a 15MB");
                $this->redireccionar('encuesta/index/addItems/'. $ide);                             
                exit;
            }
                        
           if ($_FILES['archivo']['error'] > 0){
               
                Session::setError('Error al subir el archivo ('.$_FILES['archivo']['error'].')');
                $this->redireccionar('encuesta/index/addItems/'. $ide);                            
                exit;
	   }else{
               $ruta = ROOT."public/files/";
               $fechaHora = date("Y").date("m").date("d").date("H").date("i").date("s");
               $fileName = $this->filtrarNombre($_FILES['archivo']['name'], $fechaHora);//
               
                $this->_index->addFileItemEncuesta($fileName, $this->getPostParam('item'), $idencu);
               
                move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta . $fileName);
                
                unset($ext,$ruta, $_FILES);
                
                Session::setMensaje("Se ha subido correctamente el archivo en el ítem");
                $this->redireccionar('encuesta/index/addItems/'. $ide);
                exit;
           }
        }
        
        
        $this->_view->renderizar('items', 'index');
    }
    
    public function deleteFileItemEncu($ide = false, $ien = false) {
        
        $idencu = $this->decrypt($ide);
        $iencu = $this->decrypt($ien);
        
        if(!$this->filtrarInt($iencu) || !$this->filtrarInt($idencu)){
            $this->_view->assign('_error', 'Los valores no corresponden');
                $this->_view->renderizar('items', 'index');
                exit;
        }
        
        if(!$this->_index->verificarItemEncuesta($this->filtrarInt($idencu), $this->filtrarInt($iencu))){
            $this->_view->assign('_error', 'El ítem de la encuesta no existe');
                $this->_view->renderizar('items', 'index');
                exit;
        }
        
        $nameFile = $this->_index->getNameFileItemEncuesta($this->filtrarInt($idencu), $this->filtrarInt($iencu));
        
        $this->_index->deleteFileItemEncuesta($idencu, $iencu);
        
        $ruta = ROOT."public/files/";
        unlink($ruta . $nameFile);
        
        unset($ruta, $nameFile);
        
        Session::setMensaje("Se ha quitado correctamente el archivo del ítem");
        $this->redireccionar('encuesta/index/addItems/'. $ide);
        exit;
    }
    
    public function deleteItemEncu($ide = false, $item = false) {
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_item');
        
        $idencu = $this->decrypt($ide);
        $iencu = $this->decrypt($item);
        
        if(!$this->filtrarInt($iencu) || !$this->filtrarInt($idencu)){
            $this->_view->assign('_error', 'Los valores no corresponden');
                $this->_view->renderizar('items', 'index');
                exit;
        }
        
        if(!$this->_index->verificarItemEncuesta($this->filtrarInt($idencu), $this->filtrarInt($iencu))){
            $this->_view->assign('_error', 'El ítem de la encuesta no existe');
                $this->_view->renderizar('items', 'index');
                exit;
        }
        
        $nameFile = $this->_index->getNameFileItemEncuesta($this->filtrarInt($idencu), $this->filtrarInt($iencu));
        
        $this->_index->deleteItemEncuesta($idencu, $iencu);
        
        $ruta = ROOT."public/files/";
        unlink($ruta . $nameFile);
        
        unset($ruta, $nameFile);
        
        Session::setMensaje("Se ha quitado correctamente el ítem de la encuesta");
        $this->redireccionar('encuesta/index/addItems/'. $ide);
        exit;
    }
    
    public function estVotaEncu($ide = false, $idcond = false) {
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_votos_encu');
        
        $this->_view->assign('titulo', 'Resultado encuesta');
        $idencu = $this->decrypt($ide);
        $cond = $this->decrypt($idcond);
        
        $this->_view->assign('encuesta', $this->_index->getNameEncuVota($idencu, $cond));
        $this->_view->assign('opciones', $this->_index->getEstVotEncu($idencu));
        
        $this->_view->renderizar('vota', 'index');
    }
}
