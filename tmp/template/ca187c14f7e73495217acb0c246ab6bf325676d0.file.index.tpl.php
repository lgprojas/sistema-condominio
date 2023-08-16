<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:02:41
         compiled from "C:\xampp\htdocs\condominio\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197972739964dd1d51cb0195-25838722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca187c14f7e73495217acb0c246ab6bf325676d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1528131545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197972739964dd1d51cb0195-25838722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd1d51cf4426_06733779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd1d51cf4426_06733779')) {function content_64dd1d51cf4426_06733779($_smarty_tpl) {?><div class="container">

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