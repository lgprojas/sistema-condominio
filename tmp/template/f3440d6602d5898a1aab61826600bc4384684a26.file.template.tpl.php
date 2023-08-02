<?php /* Smarty version Smarty-3.1.11, created on 2015-08-13 05:15:31
         compiled from "C:\xampp\htdocs\vitricasas\views\layout\twb\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1143055b3a80c7e8474-60427160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3440d6602d5898a1aab61826600bc4384684a26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitricasas\\views\\layout\\twb\\template.tpl',
      1 => 1439435722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1143055b3a80c7e8474-60427160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55b3a80cdc6b34_37675217',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'it' => 0,
    'it2' => 0,
    'it3' => 0,
    'titulo1' => 0,
    '_error' => 0,
    '_contenido' => 0,
    'plgJs' => 0,
    'plgCss' => 0,
    'css' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b3a80cdc6b34_37675217')) {function content_55b3a80cdc6b34_37675217($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
        body{
            padding-top: 40px;
            padding-bottom: 40px;     
            background-color: #ffffff;
        }
        </style>
    </head>
    <body>

<div class="navbar-inverse navbar-default navbar-fixed-top">
<!--   <div class="navbar-inner"> -->
    <div class="container">
      
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-target=".navbar-collapse" data-toggle="collapse" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</a>
      </div>
            
       <div class="navbar-collapse collapse" style="height: 1px;">       
<!--  Menu dependiendo rol    --> 
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['home'])){?>   
                <ul class="nav navbar-nav">
                   <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['home']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                       <li <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>class="dropdown"<?php }?>>
                           <a <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>class="dropdown-toggle" data-toggle="dropdown"<?php }?>  href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['it']->value['imagen'];?>
"> </i><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?><b class="caret"></b><?php }?></a>
                       <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>
                           <ul class="dropdown-menu">
                           <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['it']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>           
                                <li <?php if (!empty($_smarty_tpl->tpl_vars['it2']->value['children'])){?>class="dropdown-submenu"<?php }?>>
                                    <a <?php if (!empty($_smarty_tpl->tpl_vars['it2']->value['children'])){?>class="dropdown-toggle" data-toggle="dropdown"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a>
                                <?php if (!empty($_smarty_tpl->tpl_vars['it2']->value['children'])){?>
                                    <ul class="dropdown-menu">
                                        <?php  $_smarty_tpl->tpl_vars['it3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['it2']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it3']->key => $_smarty_tpl->tpl_vars['it3']->value){
$_smarty_tpl->tpl_vars['it3']->_loop = true;
?>      
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['it3']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['it3']->value['title'];?>
</a>
                                            </li>  
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                                </li>          
                           <?php } ?>
                           </ul>
                       <?php }?>
                   <?php } ?>
                      </li>
                </ul>
            <?php }?>
            
            <?php if (Session::get('level')=="2"){?>
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu_usu'])){?>   
                <ul class="nav navbar-nav">
                   <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu_usu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                       <li <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>class="dropdown"<?php }?>>
                           <a <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>class="dropdown-toggle" data-toggle="dropdown"<?php }?>  href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['it']->value['imagen'];?>
"> </i><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?><b class="caret"></b><?php }?></a>
                       <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>
                           <ul class="dropdown-menu">
                           <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['it']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>           
                                <li><a  href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a></li>          
                           <?php } ?>
                           </ul>
                       <?php }?>
                   <?php } ?>
                      </li>
                </ul>
           <?php }?>
           <?php }?>
                  
            
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu_admin'])){?>   
                <ul class="nav navbar-nav">
                   <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu_admin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                       <li <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>class="dropdown"<?php }?>>
                           <a <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>class="dropdown-toggle" data-toggle="dropdown"<?php }?>  href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['it']->value['imagen'];?>
"> </i><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?><b class="caret"></b><?php }?></a>
                       <?php if (!empty($_smarty_tpl->tpl_vars['it']->value['children'])){?>
                           <ul class="dropdown-menu">
                           <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['it']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>           
                                <li><a  href="<?php echo $_smarty_tpl->tpl_vars['it2']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a></li>          
                           <?php } ?>
                           </ul>
                       <?php }?>
                   <?php } ?>
                      </li>
                </ul>
           <?php }?>
            

        <?php if (Session::get('autenticado')){?>
               <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#"><i class="glyphicon glyphicon-user"> </i> <?php echo Session::get('nombre_usu');?>
</a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login/cerrar" class="btn"><i class="glyphicon glyphicon-log-out"> </i> Salir</a></li>
                      </ul>
                  </li>
               </ul>  
        <?php }else{ ?>
                <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#"><i class="glyphicon glyphicon-log-in"> </i> Acceder</a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login/" class="btn">Iniciar sesión</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro/" class="btn">Registrarse</a></li>
                      </ul>
                  </li>
               </ul>  
        <?php }?>
       </div>     
    </div>
</div>
     <!-- </div>-->
            
<div class="">
       <div>          
           <div style="margin-top: 0px"><h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo1']->value)===null||$tmp==='' ? '' : $tmp);?>
</h2></div>
            <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>

            <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
            <div id="_errl" class="alert alert-warning">
                            <a class="close" data-dismiss="alert">x</a>
                            <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                        </div>
            <?php }?>
            
            <?php if (Session::get('error')){?>
                <div class="alert alert-warning">
                    <a class="close" data-dismiss="alert">x</a>
                    <?php echo Session::get('error');?>

                    <?php echo Session::destroy('error');?>

                </div>
            <?php }?>

            <?php if (Session::get('mensaje')){?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">x</a>
                    <?php echo Session::get('mensaje');?>

                    <?php echo Session::destroy('mensaje');?>

                </div>
            <?php }?>
            
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <br/><br/>
      </div>
</div>


<!--<link href="estilos.css" rel="stylesheet" type="text/css" />-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.validate.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.min.js"></script>
        <script type="text/javascript">
            var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
        </script>
        
        <!--Plugin's-->
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])){?>
        <?php  $_smarty_tpl->tpl_vars['plgJs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plgJs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plgJs']->key => $_smarty_tpl->tpl_vars['plgJs']->value){
$_smarty_tpl->tpl_vars['plgJs']->_loop = true;
?>
            <script src="<?php echo $_smarty_tpl->tpl_vars['plgJs']->value;?>
" type="text/javascript"></script>
        <?php } ?>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['css_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['css_plugin'])){?>
        <?php  $_smarty_tpl->tpl_vars['plgCss'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plgCss']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['css_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plgCss']->key => $_smarty_tpl->tpl_vars['plgCss']->value){
$_smarty_tpl->tpl_vars['plgCss']->_loop = true;
?>
             <link href="<?php echo $_smarty_tpl->tpl_vars['plgCss']->value;?>
" rel="stylesheet" type="text/css"/>
        <?php } ?>
        <?php }?>
        
        <!--CSS-->
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])){?>
        <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" rel="stylesheet" type="text/css" />      
        <?php } ?>
        <?php }?>
        <!--JS-->
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
            <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>       
        <?php } ?>
        <?php }?>
</body>
</html><?php }} ?>