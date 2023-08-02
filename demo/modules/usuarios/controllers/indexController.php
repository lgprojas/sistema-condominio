<?php

class indexController extends usuariosController {
    
    private $_usuarios;
    
    public function __construct() {
        parent::__construct();
        $this->_usuarios =  $this->loadModel('index');
    }
    
    public function index(){
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('ver_usu');
        
        //$this->_view->setJs(array('prueba'));
        $this->_view->assign('titulo', 'Usuarios');
        $this->_view->assign('color', '#F5FFFA'); 
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_usuarios->getCondfUsu());
                $cond = '';
                break;
            
            case 2:
                $conds = array();
                $this->_view->assign('sadmin', 1);
                $sql = $this->_usuarios->getCondsUsu(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = 'Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_usuarios->getCondGestor($condicion));
                $cond = ' AND u.'.$condicion;
                break;

            default:
                $id = $this->_usuarios->getIdCondUsu(Session::get('id_usuario'));
                $this->_view->assign('cbl', $this->_usuarios->getCBLsUsu(Session::get('cond')));
                $cond = ' AND u.Id_cond = '.$id;
                break;
        }
        
        $row = $this->_usuarios->getUsuarios($cond);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_usu']);
            $permisosUsuario = $this->_usuarios->getPermisosUsuario($row[$i]['Id_usu']);      
            $permisosRole = $this->_usuarios->getPermisosRole($row[$i]['Id_usu']);
            if(!$permisosUsuario || !$permisosRole){$row[$i]['Sin_perm'] = 1;}else{$row[$i]['Sin_perm'] = 0;}
        }
        $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('usuarios', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        
        $this->_view->renderizar('index', 'index');
    }
    
    public function permisos($usuarioID){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_perm_usu');
        
        //$id = $this->decrypt($usuarioID);
        $id = $usuarioID;
        
        if(!$id){
            Session::setMensaje("El usuario no existe");
            $this->redireccionar('usuarios');
            exit;
        }
        
        if($this->getInt('guardar') == 1){
            $values = array_keys($_POST);//tomas los key's del POST
            $replace = array();
            $eliminar = array();
            
            for($i = 0; $i < count($values); $i++){
                if(substr($values[$i],0,5) == 'perm_'){// extrae le prefijo perm_ , extrae los primeros 5 caracteres y si es igual a perm_
                    $permiso = (strlen($values[$i]) - 5);//para tomar los 2 últimos valores del prefijo
                    
                    if($_POST[$values[$i]] == 'x'){//el permiso está heredado del role y no ignorado
                        $eliminar[] = array(
                            'usuario' => $id,
                            'permiso' => substr($values[$i], - $permiso)//toma los 2 últimos caracteres de la cadena(en este caso el Id_perm que va después del prefijo) quiere decir que si enviamos "perm_12"
                        );
                    }else{
                        if($_POST[$values[$i]] == 1){//permisos_usuario existirá un valor 1 o 0
                            $v = 1;
                        }else{
                            $v = 0;
                        }
                        
                        $replace[] = array(
                            'permiso' => substr($values[$i], - $permiso),//toma los 2 últimos caracteres de la cadena
                            'valor' => $v,
                            'usuario' => $id//role contiene a $id = Id_role                            
                            
                        );
                    }
                }
            }
            
            for($i =0; $i < count($eliminar); $i++){
                $this->_usuarios->eliminarPermiso(
                        $eliminar[$i]['usuario'],
                        $eliminar[$i]['permiso']);
            }
            
             for($i =0; $i < count($replace); $i++){
                $this->_usuarios->editarPermiso(
                        $replace[$i]['usuario'],
                        $replace[$i]['permiso'],
                        $replace[$i]['valor']);
            }
        }
        
        $permisosUsuario = $this->_usuarios->getPermisosUsuario($id);      
        $permisosRole = $this->_usuarios->getPermisosRole($id);

        if(!$permisosUsuario || !$permisosRole){
            Session::setMensaje("Posee un error la información del usuario");
            $this->redireccionar('usuarios');
            exit;
        }
        
        $this->_view->assign('titulo', 'Permisos de usuario');
        $this->_view->assign('permisos', array_keys($permisosUsuario));//enviamos los usuarios
        $this->_view->assign('usuario', $permisosUsuario);
        $this->_view->assign('role', $permisosRole);
        $this->_view->assign('info', $this->_usuarios->getDatosUsuario($id));//devuelve el Nom_usu y Nom_role asociado a ese usuario
        
        $this->_view->renderizar('permisos');
    }
    
    public function editUsu($idusu = false){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('editar_usu');
        
        $id = $this->decrypt($idusu);
        //$id = $this->filtrarInt($idusu);
        
        if(!$id){
            $this->redireccionar('usuarios');
        }
        $row = $this->_usuarios->getDatosUsuario($id);
        
        $this->_view->assign('titulo', 'Edición de usuario');
        
        switch (Session::get('level')) {
            case 1:
                $this->_view->setJs(array('ajax')); 
                $this->_view->assign('cond', $this->_usuarios->getAllCond());
                break;
            case 2:
                $sql = $this->_usuarios->getCondsUsu(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condicion = ' Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_usuarios->getCondGestor($condicion));
                break;
            default:
                break;
            }
        
        $relViv = $this->_usuarios->getTipoRelConfCond($row['Id_cond']);
            switch ($relViv) {
                case 1:
                    $relusu = "1";
                    break;
                case 2:
                    $relusu = "1, 3";
                    break;
                case 3:
                    $relusu = "1, 3, 5";
                    break;
                default:
                    $relusu = "1";
                    break;
            }
            $this->_view->assign('per', $this->_usuarios->getPers($row['Id_cond'], $relusu));
            
            switch ($relViv) {
                case 1:
                    $cc = "1, 2, 8, 9";
                    break;
                case 2:
                    $cc = "1, 2, 9";
                    break;
                case 3:
                    $cc = "1, 2";
                    break;
                default:
                    break;
            }
            $this->_view->assign('rol', $this->_usuarios->getAllRole($cc));
        
        $this->_view->assign('est', $this->_usuarios->getEstUsu());
        $this->_view->assign('datos', $row);
        
        if($this->getPostParam('guardar') == 1){
            $this->_view->assign('datos1', $_POST);
            
            if(!$this->getPostParam('rut')){
                $this->_view->assign('_error', 'Debe introducir Rut del usuario');
                $this->_view->renderizar('edit', 'index');
                exit;
            }
            if(!$this->getSql('nom')){
                $this->_view->assign('_error', 'Debe introducir nombre personal del usuario');
                $this->_view->renderizar('edit', 'index');
                exit;
            }
            if(!$this->getSql('usu')){
                $this->_view->assign('_error', 'Debe introducir un nombre de usuario');
                $this->_view->renderizar('edit', 'index');
                exit;
            }
            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Si desea editar debe introducir una nueva contraseña');
                $this->_view->renderizar('edit', 'index');
                exit;
            }  
            if(!$this->getPostParam('email')){
                $this->_view->assign('_error', 'Si desea editar debe introducir un email');
                $this->_view->renderizar('edit', 'index');
                exit;
            }  
            if(!$this->getSql('per')){
                $this->_view->assign('_error', 'Debe seleccionar una persona para la cuenta');
                $this->_view->renderizar('edit', 'index');
                exit;
            }
            if(!$this->getSql('role')){
                $this->_view->assign('_error', 'Debe seleccionar el rol del usuario');
                $this->_view->renderizar('edit', 'index');
                exit;
            }
            if(!$this->getSql('est')){
                $this->_view->assign('_error', 'Debe seleccionar un estado (activado/desactivado)');
                $this->_view->renderizar('edit', 'index');
                exit;
            }
            $this->_usuarios->editUsuario(
                    $this->getPostParam('id'),
                    $this->getPostParam('rut'),
                    $this->getSql('nom'),
                    $this->getSql('usu'),                    
                    $this->getSql('pass'),
                    $this->getPostParam('email'),
                    $this->getSql('role'),
                    $this->getSql('est'),
                    $this->getSql('per'),
                    $this->getSql('cond')
                    );
            Session::setMensaje("Se ha editado correctamente el usuario");
            $this->redireccionar('usuarios');
            exit;
        }
        
        $this->_view->renderizar('edit', 'index');
    }
    
    public function pau()
   {
       $pagina1 = $this->getInt('pagina');
       $cond = $this->getInt('co');
       $cb = $this->getInt('cb');
       $condicion = "";
       
       switch (Session::get('level')) {
            case 1:
                $this->_view->assign('sadmin', 1);
                $this->_view->assign('cond', $this->_usuarios->getCondfUsu());
                if($cond){
                   $condicion .= " AND u.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND Id_cb = $cb ";
                }
                break;
            case 2:
                $this->_view->assign('sadmin', 1);
                $sql = $this->_usuarios->getCondsUsu(Session::get('id_usuario'));
                for ($i = 0; $i < count($sql); $i++) {
                    $conds[] = $sql[$i]['Id_cond'];
                }
                $allconds = implode(",",$conds);
                $condi = ' Id_cond IN ('.$allconds.')';
                $this->_view->assign('cond', $this->_usuarios->getCondGestor($condi));
                if($cond){
                   $condicion .= " AND u.Id_cond = $cond ";
                }
                if($cb){
                   $condicion .= " AND Id_cb = $cb ";
                }
                break;
            default:
                $id = $this->_usuarios->getIdCondUsu(Session::get('id_usuario'));
                if($cb){
                   $condicion .= " AND Id_cb = $cb ";
                }
                   $condicion .= " AND u.Id_cond = $id";    
                break;
       }
       
        if(Session::get('level') > 2){
        
        }else{
                
        } 
        //echo $condicion;exit;
        
        $this->getLibrary('paginador');
        $pag1 = new Paginador();
       
        $row = $this->_usuarios->getUsuarios($condicion);
        for ($i = 0; $i < count($row); $i++) {
            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_usu']);
        }
        
        $this->_view->assign('root', BASE_URL);
        $this->_view->assign('_acl', $this->_acl);//para permiso
        $this->_view->setJs(array('ajax'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('usuarios', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));
        $this->_view->renderizar('ajax/pagAjax', false, true);
   }
   
    public function gcbu(){
        
        if($this->getInt('co'))
        echo json_encode($this->_usuarios->getCBLsUsu($this->getInt('co')));
    }
    
    public function elimUsu($idusu) {
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('elim_usu');
        
        $id = $this->decrypt($idusu);
        
        if(!$id){
            Session::setMensaje("Usuario no existe");
            $this->redireccionar('usuarios');
            exit;
        }
        
        $this->_usuarios->elimUsuario($id);
        
        Session::setMensaje("Se ha eliminado correctamente el gestor");
        $this->redireccionar('usuarios');
        exit;
    }

}
?>
