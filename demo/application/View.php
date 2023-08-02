<?php
require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty{
    
    private $_request;
    private $_js;
    private $_css;
    private $_acl;
    private $_rutas;
    private $_jsPlugin;
    private $_cssPlugin;

    public function __construct(Request $peticion, ACL $_acl) {
        parent::__construct();
        $this->_request = $peticion;
        $this->_js = array();
        $this->_css = array();
        $this->_acl = $_acl;//inicializamos $_acl
        $this->_rutas = array();
        $this->_jsPlugin = array();
        $this->_cssPlugin = array();
        
        $modulo = $this->_request->getModulo();
        $controlador = $this->_request->getControlador();
        
        if($modulo){//verificamos si hay un módulo
            
            $this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views' . DS . $controlador . DS;//ruta vistas modules
            $this->_rutas['js'] = BASE_URL . 'modules/' . $modulo. '/views/' . $controlador . '/js/';
            $this->_rutas['css'] = BASE_URL . 'modules/' . $modulo. '/views/' . $controlador . '/css/';
        }else{
            $this->_rutas['view'] = ROOT . 'views' . DS . $controlador . DS;//ruta vistas modules
            $this->_rutas['js'] = BASE_URL . 'views/' . $controlador . '/js/';
            $this->_rutas['css'] = BASE_URL . 'views/' . $controlador . '/css/';
        
        }
    }
    
    public function renderizar($vista, $item = false, $noLayout = false){
         //para que trabaje la libreria smarty--
        $this->template_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS;//template por defecto en smarty
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS . 'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS . 'template' . DS;
         //para que trabaje la libreria smarty--
        //menu
        //if(Session::get('autenticado')){
            
            $home = array(0 => array(
                                  'id' => 'Home',
                                  'title' => ' Home',
                                  'enlace' => BASE_URL,
                                  'imagen' => 'glyphicon glyphicon-home',
                                  'children' => Array()
                                  ),
                          1 => array(
                                  'id' => 'Nosotros',
                                  'title' => ' Nosotros',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-globe',
                                  'children' => Array(
                                                      0 => array(
                                                                'title' => 'Quiénes Somos',
                                                                'enlace' => '#',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Producto & Servicio',
                                                                'enlace' => '#',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Nuestra Misión',
                                                                'enlace' => '#',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Nuestra Visión',
                                                                'enlace' => '#',
                                                                'children' => Array(),
                                                                 )
                                                     )
                                  ),
                                          
            );
            $menu_vecino = array(                 
                            0 => array(
                                  'id' => 'info',
                                  'title' => ' Mural',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-info-sign',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Mural condominio',
                                                                'enlace' => BASE_URL . 'info/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Encuestas',
                                                                'enlace' => BASE_URL . 'info/encuesta/',
                                                                'children' => Array(),
                                                                 )
                                                      )
                                        )
            );
            $menu_operador = array(                 
                            0 => array(
                                  'id' => 'Buscar',
                                  'title' => 'Buscar',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-search',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Por Patente',
                                                                'enlace' => BASE_URL . 'buscar/patente/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Por RUN',
                                                                'enlace' => BASE_URL . 'buscar/run/',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Por Vivienda',
                                                                'enlace' => BASE_URL . 'buscar/viv/',
                                                                'children' => Array(),
                                                                 ),
                                                      4 => array(
                                                                'title' => 'Avanzado',
                                                                'enlace' => BASE_URL . 'buscar/avanzado/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),
                            1 => array(
                                  'id' => 'Historial',
                                  'title' => 'Historial',
                                  'enlace' => '#',
                                  'imagen' => 'glyphicon glyphicon-book',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Visitas',
                                                                'enlace' => BASE_URL . 'historial/visita/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Multas',
                                                                'enlace' => BASE_URL . 'historial/multa/',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Observaciones',
                                                                'enlace' => BASE_URL . 'historial/observacion/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        )            
                );
            $menu_sadmin = array(   
                                0 => array(
                                  'id' => 'Referen',
                                  'title' => 'Referen',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Inmobiliaria',
                                                                'enlace' => BASE_URL . 'ref/inm/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Condominio',
                                                                'enlace' => BASE_URL . 'ref/cond/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Calle/block',
                                                                'enlace' => BASE_URL . 'ref/cb/',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Marca vehículo',
                                                                'enlace' => BASE_URL . 'ref/marca/',
                                                                'children' => Array(),
                                                                 ),
                                                      4 => array(
                                                                'title' => 'Modelo vehículo',
                                                                'enlace' => BASE_URL . 'ref/modelo/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                            ),                                        
                                1 => array(
                                  'id' => 'administrar',
                                  'title' => 'Administrar',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Personas',
                                                                'enlace' => BASE_URL . 'transa/per/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Viviendas',
                                                                'enlace' => BASE_URL . 'transa/viv/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Vehículos',
                                                                'enlace' => BASE_URL . 'transa/vehi/',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Encuestas',
                                                                'enlace' => BASE_URL . 'encuesta/index/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                            ),
                                2 => array(
                                  'id' => 'config',
                                  'title' => 'Config',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-wrench',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'ACL',
                                                                'enlace' => '#',
                                                                'children' => Array(
                                                                                    0 => array(
                                                                                               'title' => 'Lista permisos',
                                                                                               'enlace' => BASE_URL . 'acl/permisos',
                                                                                               'children' => Array(),
                                                                                               ),
                                                                                    1 => array(
                                                                                               'title' => 'Lista roles',
                                                                                               'enlace' => BASE_URL . 'acl/roles',
                                                                                               'children' => Array(),
                                                                                               ),
                                                                                    ),
                                                                         ),
                                                      1 => array(
                                                                'title' => 'Usuarios',
                                                                'enlace' => BASE_URL . 'usuarios/',
                                                                'children' => Array(
                                                                                    0 => array(
                                                                                               'title' => 'Lista Gestores',
                                                                                               'enlace' => BASE_URL . 'usuarios/gestores',
                                                                                               'children' => Array(),
                                                                                               ),                                                                                     
                                                                                    1 => array(
                                                                                               'title' => 'Lista usuarios',
                                                                                               'enlace' => BASE_URL . 'usuarios/',
                                                                                               'children' => Array(),
                                                                                               )
                                                                                    ),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Panel de Control',
                                                                'enlace' => '#',
                                                                'children' => Array(
                                                                                    0 => array(
                                                                                               'title' => 'Respaldos',
                                                                                               'enlace' => BASE_URL . 'backup/',
                                                                                               'children' => Array(),
                                                                                               )
                                                                                    ),
                                                                 )
                                                     )
                                      )
            );
            $menu_gestor = array(                 
                            0 => array(
                                  'id' => 'Referen',
                                  'title' => 'Referen',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Condominio',
                                                                'enlace' => BASE_URL . 'ref/cond/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Calle/block',
                                                                'enlace' => BASE_URL . 'ref/cb/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Marca vehículo',
                                                                'enlace' => BASE_URL . 'ref/marca/',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Modelo vehículo',
                                                                'enlace' => BASE_URL . 'ref/modelo/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),
                            1 => array(
                                  'id' => 'administrar',
                                  'title' => 'Administrar',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Personas',
                                                                'enlace' => BASE_URL . 'transa/per/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Viviendas',
                                                                'enlace' => BASE_URL . 'transa/viv/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Vehículos',
                                                                'enlace' => BASE_URL . 'transa/vehi/',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Encuestas',
                                                                'enlace' => BASE_URL . 'encuesta/index/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                            ),
                            2 => array(
                                  'id' => 'config',
                                  'title' => 'Config',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-wrench',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Usuarios',
                                                                'enlace' => BASE_URL . 'usuarios/',
                                                                'children' => Array(
                                                                                    0 => array(
                                                                                               'title' => 'Lista usuarios',
                                                                                               'enlace' => BASE_URL . 'usuarios',
                                                                                               'children' => Array(),
                                                                                               ), 
                                                                                    )
                                                                )
                                                     )
                                    )
                );
            $menu_comite = array( 
                            0 => array(
                                  'id' => 'Referen',
                                  'title' => 'Referen',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(                                                      
                                                      0 => array(
                                                                'title' => 'Calle/block',
                                                                'enlace' => BASE_URL . 'ref/cb/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),
                            1 => array(
                                  'id' => 'administrar',
                                  'title' => 'Administrar',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Personas',
                                                                'enlace' => BASE_URL . 'transa/per/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Viviendas',
                                                                'enlace' => BASE_URL . 'transa/viv/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Vehículos',
                                                                'enlace' => BASE_URL . 'transa/vehi/',
                                                                'children' => Array(),
                                                                 ),
                                                      3 => array(
                                                                'title' => 'Encuestas',
                                                                'enlace' => BASE_URL . 'encuesta/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),

            );
            $menu_admin = array( 
                            0 => array(
                                  'id' => 'Referen',
                                  'title' => 'Referen',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(                                                      
                                                      0 => array(
                                                                'title' => 'Calle/block',
                                                                'enlace' => BASE_URL . 'ref/cb/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Marca vehículo',
                                                                'enlace' => BASE_URL . 'ref/marca/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Modelo vehículo',
                                                                'enlace' => BASE_URL . 'ref/modelo/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),
                            1 => array(
                                  'id' => 'administrar',
                                  'title' => 'Administrar',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Personas',
                                                                'enlace' => BASE_URL . 'transa/per/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Viviendas',
                                                                'enlace' => BASE_URL . 'transa/viv/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Vehículos',
                                                                'enlace' => BASE_URL . 'transa/vehi/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),

            );
             
            $menu_conserje = array(  
                            0 => array(
                                  'id' => 'Referen',
                                  'title' => 'Referen',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(                                                      
                                                      0 => array(
                                                                'title' => 'Calle/block',
                                                                'enlace' => BASE_URL . 'ref/cb/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Marca vehículo',
                                                                'enlace' => BASE_URL . 'ref/marca/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Modelo vehículo',
                                                                'enlace' => BASE_URL . 'ref/modelo/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),
                            1 => array(
                                  'id' => 'administrar',
                                  'title' => 'Administrar',
                                  'enlace' => '#' ,
                                  'imagen' => 'glyphicon glyphicon-tasks',
                                  'children' => array(
                                                      0 => array(
                                                                'title' => 'Personas',
                                                                'enlace' => BASE_URL . 'transa/per/',
                                                                'children' => Array(),
                                                                 ),
                                                      1 => array(
                                                                'title' => 'Viviendas',
                                                                'enlace' => BASE_URL . 'transa/viv/',
                                                                'children' => Array(),
                                                                 ),
                                                      2 => array(
                                                                'title' => 'Vehículos',
                                                                'enlace' => BASE_URL . 'transa/vehi/',
                                                                'children' => Array(),
                                                                 ),
                                                      )
                                        ),
            );

        
        
        $_params = array(
             'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
             'ruta_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
             'ruta_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'home' => $home,
            'menu_vecino' => $menu_vecino,
            'menu_operador' => $menu_operador,
            'menu_sadmin' => $menu_sadmin,
            'menu_gestor' => $menu_gestor,
            'menu_admin' => $menu_admin,
            'menu_comite' => $menu_comite,
            'menu_conserje' => $menu_conserje,
            'item' => $item,
            'js' => $this->_js,
            'js_plugin' => $this->_jsPlugin,
            'css_plugin' => $this->_cssPlugin,
            'css' => $this->_css,
            'root' => BASE_URL,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            )
         );
        
        //echo '<pre>'; print_r($this->_rutas); exit;// test View
      
        if(is_readable($this->_rutas['view'] . $vista . '.tpl')){      
            if($noLayout){
                $this->template_dir = $this->_rutas['view'];
                $this->display($this->_rutas['view'] . $vista . '.tpl');
                exit;
            }
            $this->assign('_contenido', $this->_rutas['view'] . $vista . '.tpl');//por defecto vista index.tpl en views global
        }else{
            throw new Exception('Error de vista');
        }
        
        $this->assign('_acl', $this->_acl);//enviamos el objeto Acl a las vistas por method assign
        $this->assign('_layoutParams', $_params);
        $this->display('template.tpl');
    }
    
    public function setJs(array $js){//llama los .js en views especificas
        
        if(is_array($js) && count($js)){
            for($i=0;$i < count($js);$i++){
                $this->_js[] =  $this->_rutas['js']. $js[$i] . '.js';
            }
        }else{
            throw new Exception('Error de js');
        }
    }
    
    public function setJsPlugin(array $js){
        
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_jsPlugin[] = BASE_URL . 'public/js/' . $js[$i] . '.js';
            }
        }else{
            throw new Exception('Error de js Plugin');
        }
    }

    public function setCssPlugin(array $css){
        
        if(is_array($css) && count($css)){
            for($i=0; $i < count($css); $i++){
                $this->_cssPlugin[] = BASE_URL . 'public/css/' . $css[$i] . '.css';
            }
        }else{
            throw new Exception('Error de css Plugin');
        }
    }

    
    public function setCss(array $css){//llama los .js en views especificas
        
        if(is_array($css) && count($css)){
            for($i=0;$i < count($css);$i++){
                $this->_css[] =  $this->_rutas['css']. $css[$i] . '.css';
            }
        }else{
            throw new Exception('Error de css');
        }
    }
    
}
    
?>
