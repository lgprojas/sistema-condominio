<?php /* Smarty version Smarty-3.1.11, created on 2019-04-20 11:36:20
         compiled from "/home/covecino/public_html/demo/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7301518805b08f41d2372f2-99331330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f913e9837842488959c79bdf17a2ae43c84c297' => 
    array (
      0 => '/home/covecino/public_html/demo/modules/usuarios/views/login/index.tpl',
      1 => 1528131657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7301518805b08f41d2372f2-99331330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b08f41d2d39d7_77045757',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b08f41d2d39d7_77045757')) {function content_5b08f41d2d39d7_77045757($_smarty_tpl) {?><div class="container">

<h2><i class="glyphicon glyphicon-log-in"> </i> Inicio Sesi&oacute;n</h2>

<br/>



<form class="navbar-form pull-left" name="form1" autocomplete="off" method="post" action="">

    <input type="hidden" value="1" name="enviar" />

    <div class="col-md-4">

       <div class="form-group">      

            <input class="form-control" type="text" name="usuario" placeholder="Usuario" autofocus="" />

       </div>

       <hr>

        <div class="form-group"> 

            <input class="form-control" type="password" name="pass" autocomplete="new-password" placeholder="Password"/>            

       </div>

       <hr>

       <div class="form-group">

            <button type="submit" value="Iniciar" class="btn bg-primary"><i class="glyphicon glyphicon-log-in"> </i> Entrar</button>

       </div>

       <br />

       <p> </p>

    </div>

</form>

</div><?php }} ?>