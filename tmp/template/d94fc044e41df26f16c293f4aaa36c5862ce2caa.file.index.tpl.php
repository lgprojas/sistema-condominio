<?php /* Smarty version Smarty-3.1.11, created on 2018-06-04 13:01:41
         compiled from "/home/covecino/public_html/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21045604575a563f6d2f4be3-48321228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd94fc044e41df26f16c293f4aaa36c5862ce2caa' => 
    array (
      0 => '/home/covecino/public_html/modules/usuarios/views/login/index.tpl',
      1 => 1528131545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21045604575a563f6d2f4be3-48321228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a563f6d378ca7_86671808',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a563f6d378ca7_86671808')) {function content_5a563f6d378ca7_86671808($_smarty_tpl) {?><div class="container">

<h2><i class="glyphicon glyphicon-log-in"> </i> Inicio Sesi&oacute;n</h2>

<br/>



<form class="navbar-form pull-left" name="form1" method="post" autocomplete="off" action="">

    <input type="hidden" value="1" name="enviar" />

    <div class="col-md-4">

       <div class="form-group">      

            <input class="form-control" type="text" name="usuario" placeholder="Usuario" autofocus="" />

       </div>

       <hr>

        <div class="form-group"> 

            <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password"/>            

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