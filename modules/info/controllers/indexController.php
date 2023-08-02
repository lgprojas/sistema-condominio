<?php

class indexController extends infoController {
    
    private $_index;
    
    public function __construct() {
        parent::__construct();
        $this->_index =  $this->loadModel('index');
    }
    
    public function index(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_infos');
        
        $this->_view->assign('titulo', 'Mural Condominio');
        
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');  
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_index->getCondInfo());
                $cond = '';
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_index->getCondsGestorInfo(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_index->getCondGestorInfo($condicion));
                $cond = ' WHERE i.'.$condicion;
                break;
            
            default:
                $idcond = $this->_index->getIdCondInfo(Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);
                $cond = ' WHERE i.Id_cond = ' . $idcond;
        }
        

        $row =$this->_index->getInfos($cond);
        
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_info']);
            $row[$i]['Fch_cinfo'] = $this->formatDate($row[$i]['Fch_cinfo']);
            $row[$i]['Fch_tinfo'] = $this->formatDate($row[$i]['Fch_tinfo']);
        }
        
        $this->_view->assign('info', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));

      $this->_view->renderizar('index','index');
    }
    
    public function newInfo(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('crear_info');
        
        $this->_view->assign('titulo', 'Crear nuevo informativo');
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJs(array('ajax'));        

        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_index->getCondInfo());
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_index->getCondsGestorInfo(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_index->getCondGestorInfo($condicion));
                break;
            
            default:
                $idcond = $this->_index->getIdCondInfo(Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);
        }
               
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir TÍTULO del nuevo Informativo');
                $this->_view->renderizar('nuevo', 'index');
                exit;
            }
            
            if(!$this->getTexto('desc')){
                $this->_view->assign('_error', 'Debe introducir DESCRIPCIÓN del nuevo Informativo');
                $this->_view->renderizar('nuevo', 'index');
                exit;
            }
            
            //Validación archivo
            if($_FILES['archivo']['error'] == 0){
            
                $ext = $this->validarExtensionFile($_FILES['archivo']['name']);

                if($ext == false){
                    $this->_view->assign('_error', 'Sólo son permitidos archivos PDF o DOC o DOCX');
                    $this->_view->renderizar('nuevo', 'index');
                    exit;
                }

                if(($_FILES["archivo"]["size"]/1024) >= 5120){//5M / 1024 = 5120
                    $this->_view->assign('_error', 'Sólo se permite archivos igual o inferiores a 15MB');
                    $this->_view->renderizar('nuevo', 'index');
                    exit;
                }

               if ($_FILES['archivo']['error'] > 0){               
                    $this->_view->assign('_error', 'Error al procesar el archivo ('.$_FILES['archivo']['error'].')');
                    $this->_view->renderizar('nuevo', 'index');
                    exit;
               }
               
               $ruta = ROOT."public/files/file_informativos/info_";
               $fechaHora = date("Y").date("m").date("d").date("H").date("i").date("s");
               $fileName = $this->filtrarNombre($_FILES['archivo']['name'], $fechaHora);//
           }
            
            $fchc = $this->formatDate($this->getPostParam('fchc'));
            $fcht = $this->formatDate($this->getPostParam('fchf'));

            $idusu = Session::get('id_usuario');
            
            if(Session::get('level') > 2){
                $idcond = Session::get('cond');
            }else{
                $idcond = $this->getPostParam('co');
            }            
            $this->_index->newInfo(
                    trim($this->getSql('nom')),
                    trim($this->getTexto('desc')),
                    $fchc,
                    $fcht,
                    $fileName,
                    $idusu,
                    $idcond
                    );    
            
                move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta . $fileName);                
                unset($ext,$ruta, $_FILES);

            Session::setMensaje("Se ha registrado el nuevo informativo correctamente");
            $this->redireccionar('info/index/');
            exit;
        }      
        
    $this->_view->renderizar('nuevo','index');
    
    }
    public function editInfo($idinfo = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_info');
        
        $id = $this->decrypt($idinfo);
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_index->getCondInfo());
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_index->getCondsGestorInfo(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_index->getCondGestorInfo($condicion));
                break;
            
            default:
                $idcond = $this->_index->getIdCondInfo(Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);
        }
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('info/');
        }
        
        if(!$this->_index->getIdInfo($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post
            $this->redireccionar('info/');
        }
        
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJsPlugin(array('jquery-ui-1.10.3.custom.min'));
        $this->_view->setCssPlugin(array('jquery-ui-1.10.3.custom'));
        $this->_view->setJs(array('ajax'));       
        
        $this->_view->assign('Id_encrypt', $idinfo);
        $row = $this->_index->getDatosInfo($this->filtrarInt($id));

        $row['Desc_info'] = $this->filtraSaltos($row['Desc_info']);
        $row['Fch_cinfo'] = $this->formatDate($row['Fch_cinfo']);            
        $row['Fch_tinfo'] = $this->formatDate($row['Fch_tinfo']);
        
        $this->_view->assign('datos', $row);

        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir TÍTULO del Informativo');
                $this->_view->renderizar('nuevo', 'index');
                exit;
            }
            
            if(!$this->getTexto('desc')){
                $this->_view->assign('_error', 'Debe introducir DESCRIPCIÓN del Informativo');
                $this->_view->renderizar('nuevo', 'index');
                exit;
            }
            
            $fchc = $this->formatDate($this->getPostParam('fchc'));
            $fcht = $this->formatDate($this->getPostParam('fchf'));
            
            if(Session::get('level') > 2){
                $idcond = Session::get('cond');
            }else{
                $idcond = $this->getPostParam('co');
            } 

            $this->_index->editInfo(
                    trim($this->getSql('nom')),
                    trim($this->getTexto('desc')),
                    $fchc,
                    $fcht,
                    $id,
                    $idcond
                    );  
            
            Session::setMensaje("Informativo editado correctamente");
            $this->redireccionar('info/');
            exit;
        }
        
        if($this->getInt('subirfile') == 1){
            
            //Validación archivo
            if($_FILES['archivo']['name']){
            
                $ext = $this->validarExtensionFile($_FILES['archivo']['name']);

                if($ext == false){
                    $this->_view->assign('_error', 'Sólo son permitidos archivos PDF o DOC o DOCX');
                    $this->_view->renderizar('nuevo', 'index');
                    exit;
                }

                if(($_FILES["archivo"]["size"]/1024) >= 5120){//5M / 1024 = 5120
                    $this->_view->assign('_error', 'Sólo se permite archivos igual o inferiores a 15MB');
                    $this->_view->renderizar('nuevo', 'index');
                    exit;
                }

               if ($_FILES['archivo']['error'] > 0){               
                    $this->_view->assign('_error', 'Error al procesar el archivo ('.$_FILES['archivo']['error'].')');
                    $this->_view->renderizar('nuevo', 'index');
                    exit;
               }
               
               $ruta = ROOT."public/files/file_informativos/";
               $fechaHora = date("Y").date("m").date("d").date("H").date("i").date("s");
               $fileName = "info_".$this->filtrarNombre($_FILES['archivo']['name'], $fechaHora);//
               
               $this->_index->addFileEdit($id, $fileName);
               
               move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta . $fileName);                
                unset($ext,$ruta, $_FILES);

            Session::setMensaje("Se ha agregado correctamente el archivo al informativo.");
            $this->redireccionar('info/index/editInfo/'. $idinfo);
            exit;
           }
        }
        
        $this->_view->renderizar('editar', 'index');
    }    
    public function delInfo($id = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_info');
                
        if(!$this->filtrarInt($id)){
            $this->_view->assign('_error', 'El Infoominio a eliminar no existe');
                $this->_view->renderizar('index', 'index');
                exit;
        }
        
        if(!$this->_index->getIdInfo($this->filtrarInt($id))){
            $this->_view->assign('_error', 'El Infoominio a eliminar no existe');
                $this->_view->renderizar('index', 'index');
                exit;
        }
        
        $this->_index->eliminarInfo($this->filtrarInt($id));
        Session::setMensaje("Infoominio eliminado correctamente");
        $this->redireccionar('info/');
        
    }    
    public function verInfo($idinfo=false) {
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_info');
        
        $this->_view->assign('titulo', 'Detalle Informativo');
        $id = $this->decrypt($idinfo);
        $info = $this->_index->getDatosInfo($id);
        $this->_view->assign('fchinfo', $this->formatDate($info['Fch_info']));
        $this->_view->assign('titinfo', $info['Nom_info']);
        $this->_view->assign('descinfo', nl2br($info['Desc_info']));
        $this->_view->assign('adjinfo', $info['Adj_info']);
        
        $this->_view->renderizar('detalle', 'index');
    }   
    public function delFileInfo($idinfo = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_info');
        
        $id = $this->decrypt($idinfo);        
        $ruta = 'public/files/file_informativos/';
        $row = $this->_index->getDatosInfo($this->filtrarInt($id));
        
        unlink($ruta.$row['Adj_info']); //original

        $this->_index->delFileEdit($id); 

        Session::setMensaje("Archivo quitado correctamente");
        $this->redireccionar('info/index/editInfo/'. $idinfo);
        
    }
    
        public function pco()
   {
       $pagina1 = $this->getInt('pagina');
       $cond = $this->getInt('co');
       
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_index->getCondInfo());
                if($cond){
                   $condicion = " WHERE i.Id_cond = $cond ";
                }
                break;
                   
            case 2:
                $this->_view->assign('sadmin', 1);
                $conds = array();
                $sql = $this->_index->getCondsGestorInfo(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_index->getCondGestorInfo($condi));
                if($cond){
                   $condicion = " WHERE i.Id_cond = $cond ";
                }
                break;
            
            default:
                $idcond = $this->_index->getIdCondInfo(Session::get('id_usuario'));
                $this->_view->assign('co', $idcond);
                $condicion = ' WHERE i.Id_cond = ' . $idcond;
        } 
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_index->getInfos($condicion);
        
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_info']);
            $row[$i]['Fch_cinfo'] = $this->formatDate($row[$i]['Fch_cinfo']);
            $row[$i]['Fch_tinfo'] = $this->formatDate($row[$i]['Fch_tinfo']);
        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('info', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
}

?>