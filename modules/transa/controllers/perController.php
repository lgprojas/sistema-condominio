<?php



class perController extends transaController {

    

    private $_per;

    

    public function __construct() {

        parent::__construct();

        $this->_per =  $this->loadModel('per');

    }

    

    public function index(){

        

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('ver_per');

        

        $this->_view->assign('titulo', 'Personas');

        

        switch (Session::get('level')) {

            case 1:

                $this->_view->assign('sadmin', 1);

                $this->_view->assign('cond', $this->_per->getConds());

                $cond = '';

                break;

            

            case 2:

                $conds = array();

                $this->_view->assign('sadmin', 1);

                $sql = $this->_per->getCondsGestorPer(Session::get('id_usuario'));

                for ($i = 0; $i < count($sql); $i++) {

                    $conds[] = $sql[$i]['Id_cond'];

                }

                $allconds = implode(",",$conds);

                $condicion = 'Id_cond IN ('.$allconds.')';

                $this->_view->assign('cond', $this->_per->getCondGestorPer($condicion));

                $cond = ' AND p.'.$condicion;

                break;

                

            default:

                $id = $this->_per->getIdCond(Session::get('id_usuario'));

                $this->_view->assign('cbl', $this->_per->getCBLs(Session::get('cond')));

                $cond = ' AND p.Id_cond = '.$id;     

        }

        

        $this->getLibrary('paginador');

        $pag1 = new Paginador();        

        $pagina1 = false;        

        if($_POST){

            $this->_view->assign('_datos', $_POST);

            $pagina1 = $this->getInt('pagina1');

        }       

        $row = $this->_per->getAllPers($cond);

        for ($i = 0; $i < count($row); $i++) {

            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_per']);

            $row[$i]['Posee_recurso'] = $this->_per->verSiPoseeRecurso($row[$i]['Id_per']);

        }

        

        $this->_view->setJs(array('ajax'));        

        $this->_view->assign('color', '#F5FFFA');        

        $this->_view->assign('per', $pag1->paginar($row, $pagina1, 10));

        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));

        

      $this->_view->renderizar('index','per');

    }

    

    public function newPer($run='',$var=''){

        

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('crear_per');

        

        $this->_view->assign('titulo', 'Crear nueva persona');

        $this->_view->assign('run', $run);

        $this->_view->assign('volver', $var);

        $this->_view->assign('estre', $this->_per->getEstRes());

        $this->_view->assign('act', $this->_per->getAct());

               

        switch (Session::get('level')) {

            case 1:

                $this->_view->assign('cond', $this->_per->getConds());

                break;

            

            case 2:

                $conds = array();

                $this->_view->assign('sadmin', 1);

                $sql = $this->_per->getCondsGestorPer(Session::get('id_usuario'));

                for ($i = 0; $i < count($sql); $i++) {

                    $conds[] = $sql[$i]['Id_cond'];

                }

                $allconds = implode(",",$conds);

                $condicion = 'Id_cond IN ('.$allconds.')';

                $this->_view->assign('cond', $this->_per->getCondGestorPer($condicion));

                break;

            

            default:

                $this->_view->assign('cond', $this->_per->getCond(Session::get('id_usuario')));

        }                

        

        $this->_view->setJs(array('ajax'));        

        

        if($this->getInt('guardar') == 1){

            $this->_view->assign('datos', $_POST);

            

            if(!$this->getPostParam('rut')){

                $this->_view->assign('_error', 'Debe introducir RUT de la persona');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }

            if($this->_per->verificarRut($this->getPostParam('rut'))){

                $this->_view->assign('_error', 'El Rut introducido ya se encuentra registrado');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }

            if(!$this->getSql('nom1')){

                $this->_view->assign('_error', 'Debe introducir PRIMER NOMBRE de la persona');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }

            if(!$this->getSql('nom2')){

                $this->_view->assign('_error', 'Debe introducir SEGUNDO NOMBRE de la persona');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }

            if(!$this->getSql('ape1')){

                $this->_view->assign('_error', 'Debe introducir el PRIMER APELLIDO de la persona');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }

            if(!$this->getSql('ape2')){

                $this->_view->assign('_error', 'Debe introducir el SEGUNDO APELLIDO de la persona');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }

            if(Session::get('level') != 1){

            if(!$this->getSql('cond')){

                $this->_view->assign('_error', 'Debe seleccionar CONDOMINIO');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }

            }            

            if(!$this->getSql('estre')){

                $this->_view->assign('_error', 'Debe seleccionar ESTADO RESIDENCIA');

                $this->_view->renderizar('nuevo', 'per');

                exit;

            }



            if($this->getSql('vehi')){

                if(!$this->getSql('trelv')){

                    $this->_view->assign('_error', 'Debe seleccionar LA RELACIÓN CON EL VEHÍCULO');

                    $this->_view->renderizar('nuevo', 'per');

                    exit;

                }

            }



            $this->_per->newPer(

                    trim($this->getPostParam('rut')),

                    trim($this->getSql('nom1')),

                    trim($this->getSql('nom2')),

                    trim($this->getSql('ape1')),

                    trim($this->getSql('ape2')),

                    trim($this->getSql('fono')),

                    trim($this->getSql('cond')),

                    trim($this->getSql('estre')),

                    trim($this->getSql('act'))

                    );

            

            Session::setMensaje("Se ha creado correctamente la persona");

            $this->redireccionar('transa/per');

            exit;

        }

      $this->_view->renderizar('nuevo','per');

    }

    

    public function getVivisCond(){

        

        if($this->getInt('cond'))

        echo json_encode($this->_per->getVivisCond($this->getInt('cond')));

    }

    

    public function getVehisCond(){

        

        if($this->getInt('cond'))

        echo json_encode($this->_per->getVehisCond($this->getInt('cond')));

    }

    

    public function editPer($ide = false, $volver=""){

        

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('editar_per');

        

        $this->_view->assign('titulo', 'Editar persona');

        

        $id = $this->decrypt($ide);

        

        if(!$this->filtrarInt($id)){

            $this->redireccionar('transa/per');

        }

        

        if(!$this->_per->verificarPer($this->filtrarInt($id))){// si no devuele un post es porque no existe y redirecciona a post

            $this->redireccionar('transa/per');

        }

        

        $row = $this->_per->getPer($this->filtrarInt($id));

        

        switch (Session::get('level')) {

            case 1:

                $this->_view->assign('cond', $this->_per->getConds());

                //$cond = ' WHERE v.Id_cond = '.$row['Id_cond'];

                break;

                       

            case 2:

                $conds = array();

                $this->_view->assign('sadmin', 1);

                $sql = $this->_per->getCondsGestorPer(Session::get('id_usuario'));

                for ($i = 0; $i < count($sql); $i++) {

                    $conds[] = $sql[$i]['Id_cond'];

                }

                $allconds = implode(",",$conds);

                $condicion = 'Id_cond IN ('.$allconds.')';

                $this->_view->assign('cond', $this->_per->getCondGestorPer($condicion));

                break;

            

            default:

                $this->_view->assign('cond', $this->_per->getCond(Session::get('id_usuario')));

                //$idcond = $this->_per->getIdCond(Session::get('id_usuario'));

                //$cond = ' WHERE v.Id_cond = '.$idcond;

        }

        

        $this->_view->assign('estre', $this->_per->getEstRes());       

        $this->_view->assign('act', $this->_per->getAct());

        

        $this->_view->assign('volver', $volver);        

        

//        $this->_view->assign('viv', $this->_per->getVivs($cond));

//        $this->_view->assign('trel', $this->_per->getTRelViv());

//        $this->_view->assign('vehi', $this->_per->getAllVehi($cond));

//        $this->_view->assign('trelv', $this->_per->getAllRelVehi());

        

        $this->_view->setJs(array('ajax'));

        $this->_view->assign('datos', $row);

        

        if($this->getInt('guardar') == 1){

            $this->_view->assign('datos1', $_POST);

            

            if(!$this->getSql('nom1')){

                $this->_view->assign('_error', 'Debe introducir PRIMER NOMBRE de la persona');

                $this->_view->renderizar('editar', 'per');

                exit;

            }

            if(!$this->getSql('nom2')){

                $this->_view->assign('_error', 'Debe introducir SEGUNDO NOMBRE de la persona');

                $this->_view->renderizar('editar', 'per');

                exit;

            }

            if(!$this->getSql('ape1')){

                $this->_view->assign('_error', 'Debe introducir el PRIMER APELLIDO de la persona');

                $this->_view->renderizar('editar', 'per');

                exit;

            }

            if(!$this->getSql('ape2')){

                $this->_view->assign('_error', 'Debe introducir el SEGUNDO APELLIDO de la persona');

                $this->_view->renderizar('editar', 'per');

                exit;

            }

            if(!$this->getSql('estre')){

                $this->_view->assign('_error', 'Debe seleccionar ESTADO RESIDENCIA');

                $this->_view->renderizar('editar', 'per');

                exit;

            }

            if(!$this->getSql('cond')){

                $this->_view->assign('_error', 'Debe seleccionar CONDOMINIO');

                $this->_view->renderizar('editar', 'per');

                exit;

            }

            

            //print_r($_POST);exit; 

           $this->_per->editPer(

                    trim($this->getPostParam('rut')),

                    trim($this->getSql('nom1')),

                    trim($this->getSql('nom2')),

                    trim($this->getSql('ape1')),

                    trim($this->getSql('ape2')),

                    trim($this->getSql('fono')),

                    trim($this->getSql('estre')),

                    trim($this->getSql('cond')),

                    trim($this->getSql('act'))

                    );                                    

            

            Session::setMensaje("Se ha editado correctamente la persona");

            $this->redireccionar('transa/per');

            exit;
        }



        $this->_view->renderizar('editar', 'per');

    }

    

    public function delPer($ide = false){

        

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('elim_per');

                

        $id = $this->decrypt($ide);

        

        if(!$this->filtrarInt($id)){

            $this->_view->assign('_error', 'La persona no corresponde');

                $this->_view->renderizar('index', 'per');

                exit;

        }

        

        if(!$this->_per->verificarPer($this->filtrarInt($id))){

            $this->_view->assign('_error', 'La persona no existe');

                $this->_view->renderizar('index', 'per');

                exit;

        }

        

//        if($this->_per->verVehiPer($this->filtrarInt($id))){

//            $this->_per->deleteVehiPer($this->filtrarInt($id));

//        }

        

        $this->_per->eliminarPer($this->filtrarInt($id));

        Session::setMensaje("Se ha eliminado correctamente a la persona");

        $this->redireccionar('transa/per');

        exit;



    } 

    

    public function asocVivPer($ideper=false) {

        

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('ver_asoc_viv_per');

        

        $this->_view->assign('titulo', 'Viviendas asociadas');

        

        $this->_view->assign('Id_encrypt', $ideper);

        $idper = $this->decrypt($ideper);

        $cond = $this->_per->getIdCondPer($idper);

        

        switch (Session::get('level')) {

            case 1:

                //$this->_view->assign('sadmin', 1);

                //$this->_view->assign('cond', $this->_per->getConds());

                //$this->_view->setJs(array('ajax_asoc'));

                $this->_view->assign('co', $cond);

                $this->_view->assign('cb', $this->_per->getCBCond($cond));

                break;

                   

            case 2:                

//                $conds = array();

//                $this->_view->assign('sadmin', 1);

//                $sql = $this->_per->getCondsGestorPer(Session::get('id_usuario'));

//                for ($i = 0; $i < count($sql); $i++) {

//                    $conds[] = $sql[$i]['Id_cond'];

//                }

//                $allconds = implode(",",$conds);

//                $condicion = 'Id_cond IN ('.$allconds.')';

//                $this->_view->assign('cond', $this->_per->getCondGestorPer($condicion));

//                $this->_view->setJs(array('ajax_asoc'));

                $this->_view->assign('co', $cond);

                $this->_view->assign('cb', $this->_per->getCBCond($cond));

                break;

            

            default:

                $this->_view->assign('co', $cond);

                $this->_view->assign('cb', $this->_per->getCBCond($cond));

        }     

        

        $this->_view->setJs(array('ajax1'));

        $this->_view->assign('trelviv', $this->_per->getTRelViv());

        

        $this->_view->assign('datosPer', $this->_per->getDatosPer($idper, $cond));

        $row = $this->_per->getVivRelPer($idper, $cond);

        for ($i = 0; $i < count($row); $i++) {

            $row[$i]['Id_viv_encrypt'] = $this->encrypt($row[$i]['Id_viv']);

        }

        $this->_view->assign('carga', $row);

        

        if($this->getInt('guardar') == 1){

            if(!$this->getSql('viv')){

                $this->_view->assign('_error', 'Debe seleccionar LA VIVIENDA');

                $this->_view->renderizar('asocviv', 'per');

                exit;

            }

            if(!$this->getSql('trel')){

                $this->_view->assign('_error', 'Debe seleccionar LA RELACIÓN CON LA VIVIENDA');

                $this->_view->renderizar('asocviv', 'per');

                exit;

            }

            $isRel = $this->_per->poseeYaRelVivPer($this->getSql('viv'), $idper);

            if($isRel){

                $this->_view->assign('_error', 'La persona ya posee una relación de "'.$isRel["Nom_trel"].'" con la vivienda "'.$isRel["Nom_cb"].'-'.$isRel["Num_viv"].'" y ya se encuentra en la lista.');

                $this->_view->renderizar('asocviv', 'per');

                exit;

            }

            if($this->getSql('viv') && $this->getSql('trel') == 1){

                if($this->_per->getExistePropViv($this->getSql('viv'))){

                    $propieViv = $this->_per->getExistePropViv($this->getSql('viv'));

                $this->_view->assign('_error', 'La vivienda ya posee un propietario. RUN: '.$propieViv['Rut_per']);

                $this->_view->renderizar('asocviv', 'per');

                exit;

                }

            }

            if($this->getSql('viv') && $this->getSql('trel')){

                

                $this->_per->newVivPer(

                        $this->getSql('viv'),

                        $idper,

                        $this->getSql('trel')

                );

            }

            

            Session::setMensaje("Se ha asociado correctamente la vivienda a la persona");

            $this->redireccionar('transa/per/asocVivPer/'.$ideper);

            exit;

        }

        

        $this->_view->renderizar('asocviv','per');

    }

    

    public function deleteVivRelPer($ideviv=false, $ideper=false) {

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('desasoc_viv_per');


        $idviv = $this->decrypt($ideviv);

        $idper = $this->decrypt($ideper);

        

        if(!$this->filtrarInt($idviv)){

            $this->_view->assign('_error', 'La vivienda no corresponde');

                $this->_view->renderizar('asocviv', 'per');

                exit;

        }

        

        if(!$this->_per->verificarIdVivPer($this->filtrarInt($idviv))){

            $this->_view->assign('_error', 'El vehículo no existe');

                $this->_view->renderizar('asocvehi', 'per');

                exit;

        }

        

        $this->_per->deleteVivPer($idviv, $idper);

        

        Session::setMensaje("Se ha quitado correctamente la vivienda relacionada a la persona.");

            $this->redireccionar('transa/per/asocVivPer/'.$ideper);

            exit;

    }

    

    public function asocVehiPer($ideper=false) {

        

        if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('ver_asoc_vehi_per');

        

        $this->_view->assign('titulo', 'Vehículos asociados');

        

        $this->_view->assign('Id_encrypt', $ideper);

        $idper = $this->decrypt($ideper);

        $cond = $this->_per->getIdCondPer($idper);

        

            switch (Session::get('level')) {

            case 1:

                $this->_view->assign('sadmin', 1);

                $this->_view->assign('cond', $this->_per->getConds());

                $this->_view->setJs(array('ajax_asoc'));

                break;

                   

            case 2:                

                $conds = array();

                $this->_view->assign('sadmin', 1);

                $sql = $this->_per->getCondsGestorPer(Session::get('id_usuario'));

                for ($i = 0; $i < count($sql); $i++) {

                    $conds[] = $sql[$i]['Id_cond'];

                }

                $allconds = implode(",",$conds);

                $condicion = 'Id_cond IN ('.$allconds.')';

                $this->_view->assign('cond', $this->_per->getCondGestorPer($condicion));

                $this->_view->setJs(array('ajax_asoc'));

                break;

            

            default:

                $this->_view->assign('co', $cond);

                $this->_view->assign('cb', $this->_per->getCBCond($cond));

        }      

        

        $this->_view->setJs(array('ajax2'));

        $this->_view->assign('trelv', $this->_per->getAllRelVehi());

        

        $this->_view->assign('datosPer', $this->_per->getDatosPer($idper, $cond));

        $row = $this->_per->getVehiRelPer($idper, $cond);

        for ($i = 0; $i < count($row); $i++) {

            $row[$i]['Id_vehi_encrypt'] = $this->encrypt($row[$i]['Id_vehi']);

        }

        $this->_view->assign('carga', $row);

        

        if($this->getInt('guardar') == 1){

            if(!$this->getSql('vehi')){

                $this->_view->assign('_error', 'Debe seleccionar EL VEHÍCULO');

                $this->_view->renderizar('asocvehi', 'per');

                exit;

            }

            if(!$this->getSql('trelv')){

                $this->_view->assign('_error', 'Debe seleccionar LA RELACIÓN CON EL VEHÍCULO');

                $this->_view->renderizar('asocvehi', 'per');

                exit;

            }

            $isRel = $this->_per->poseeYaRelVehiPer($this->getSql('vehi'),$idper);

            if($isRel){

                $this->_view->assign('_error', 'La persona ya posee una relación de "'.$isRel["Nom_trelv"].'" con el vehículo ['.$isRel["Cod_vehi"].'] '.$isRel["Nom_marca"].' '.$isRel["Nom_modelo"].' y ya se encuentra en la lista.');

                $this->_view->renderizar('asocvehi', 'per');

                exit;

            }

            if($this->getSql('trelv') == 1 && $this->_per->verificarSiPoseeProp($this->getSql('vehi'), $cond)){

                $rutProp = $this->_per->verificarSiPoseeProp($this->getSql('vehi'), $cond);

                $this->_view->assign('_error', 'El vehículo ya posee un propietario con RUN: '.$rutProp['Rut_per']);

                $this->_view->renderizar('asocvehi', 'per');

                exit;

            }

            

            if($this->getSql('vehi') && $this->getSql('trelv')){

                

                $this->_per->newVehiPer(

                        $this->getSql('vehi'),

                        $idper,

                        $this->getSql('trelv')

                );

            }

            

            Session::setMensaje("Se ha asociado correctamente el vehículo a la persona");

            $this->redireccionar('transa/per/asocVehiPer/'.$ideper);

            exit;

        }

        

        $this->_view->renderizar('asocvehi','per');

    }

    

    public function deleteVehiRelPer($idevehi=false, $ideper=false) {

	if(!Session::get('autenticado')){$this->redireccionar();}

        $this->_acl->acceso('desasoc_vehi_per');
        

        $idvehi = $this->decrypt($idevehi);

        $idper = $this->decrypt($ideper);

        

        if(!$this->filtrarInt($idvehi)){

            $this->_view->assign('_error', 'El vehículo no corresponde');

                $this->_view->renderizar('asocvehi', 'per');

                exit;

        }

        

        if(!$this->_per->verificarIdVehiPer($this->filtrarInt($idvehi))){

            $this->_view->assign('_error', 'El vehículo no existe');

                $this->_view->renderizar('asocvehi', 'per');

                exit;

        }

        

        $this->_per->deleteVehiPer($idvehi, $idper);



        Session::setMensaje("Se ha quitado correctamente el vehículo relacionado a la persona.");

            $this->redireccionar('transa/per/asocVehiPer/'.$ideper);

            exit;

    }

    

    public function pa()

   {

       $pagina1 = $this->getInt('pagina');

       $ape = $this->getSql('ape');

       $cond = $this->getInt('co');

       $cb = $this->getInt('cb');

       //$registros  = $this->getInt('registros');

       $condicion = "";

       

        if(Session::get('level') > 2){

            $id = $this->_per->getIdCond(Session::get('id_usuario'));

               if($ape){

                   $condicion .= " AND CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) LIKE '$ape%' ";

               }

               if($cb){

                   $condicion .= " AND Id_cb = $cb ";

               }

                   $condicion .= " AND p.Id_cond = $id";            

        }else{

                $this->_view->assign('sadmin', 1);

                $this->_view->assign('cond', $this->_per->getConds());

                if($ape){

                    $condicion .= " AND CAST(AES_DECRYPT(Ape1_per,'".ENCRYPT_KEY."')AS char(100)) LIKE '$ape%' ";

                }

                if($cb){

                   $condicion .= " AND Id_cb = $cb ";

               }

               if($cond){

                   $condicion .= " AND p.Id_cond = $cond ";

               }

        } 

        //echo $condicion;exit;

        

        $this->getLibrary('paginador');

        $pag1 = new Paginador();

       

        $row = $this->_per->getAllPers($condicion);

        for ($i = 0; $i < count($row); $i++) {

            $row[$i]['Id_encrypt'] = $this->encrypt($row[$i]['Id_per']);

        }

        

        $this->_view->assign('root', BASE_URL);

        $this->_view->assign('_acl', $this->_acl);//para permiso

        $this->_view->setJs(array('ajax'));        

        $this->_view->assign('color', '#F5FFFA');        

        $this->_view->assign('per', $pag1->paginar($row, $pagina1, 10));

        $this->_view->assign('paginacion1', $pag1->getView('paginacion_ajax'));

        $this->_view->renderizar('ajax/pagAjax', false, true);

   }

   

    public function gcb(){

        

        if($this->getInt('co'))

        echo json_encode($this->_per->getCBLs($this->getInt('co')));

    }

    

    public function gvcb(){

        

        if($this->getAlphaNum('cb') && $this->getInt('co'))

            

           if($this->getAlphaNum('cb') == "sr"){

                $result = $this->_per->getVivAllCond($this->getInt('co'));

           }else{

                $result = $this->_per->getVivDeCB($this->getInt('cb'), $this->getInt('co'));

           }

        echo json_encode($result);

    }

    

    public function gvecb(){

        

        if($this->getAlphaNum('cb') && $this->getInt('co'))

            //si selecciona sin relación

            if($this->getAlphaNum('cb') == "sr"){

                $result = $this->_per->getVehiAllCond($this->getInt('co'));

            }else{

                $result = $this->_per->getVehiCB($this->getInt('co'), $this->getInt('cb'));

            }

        echo json_encode($result);

    }

}

?>