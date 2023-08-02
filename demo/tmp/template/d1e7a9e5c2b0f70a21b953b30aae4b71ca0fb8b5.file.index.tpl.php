<?php /* Smarty version Smarty-3.1.11, created on 2018-01-15 06:40:29
         compiled from "C:\xampp\htdocs\covecino\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170455a2b0374b3f8e1-33142623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e7a9e5c2b0f70a21b953b30aae4b71ca0fb8b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1515386369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170455a2b0374b3f8e1-33142623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2b0374bbc2b8_29250281',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2b0374bbc2b8_29250281')) {function content_5a2b0374bbc2b8_29250281($_smarty_tpl) {?><div class="container">
<h2><i class="glyphicon glyphicon-log-in"> </i> Inicio Sesi&oacute;n</h2>
<br/>

<form class="navbar-form pull-left" name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <div class="col-md-4">
       <div class="form-group">      
            <input class="form-control" type="text" name="usuario" placeholder="Usuario" autofocus="" />
       </div>
       <hr>
        <div class="form-group"> 
            <input class="form-control" type="password" name="pass" placeholder="Password"/>            
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