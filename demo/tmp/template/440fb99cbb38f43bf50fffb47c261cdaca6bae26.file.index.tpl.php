<?php /* Smarty version Smarty-3.1.11, created on 2014-05-19 17:23:00
         compiled from "C:\xampp\htdocs\scp_vm\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10248537a21d434ca43-39293740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '440fb99cbb38f43bf50fffb47c261cdaca6bae26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1400512971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10248537a21d434ca43-39293740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537a21d43ccb80_28634707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a21d43ccb80_28634707')) {function content_537a21d43ccb80_28634707($_smarty_tpl) {?><div class="container">
<h2><i class="glyphicon glyphicon-log-in"> </i> Inicio Sesi&oacute;n</h2>
<br/>

<form class="navbar-form pull-right" name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
   <div class="form-group">      
        <input class="form-control" type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Usuario" autofocus="" />
   </div>
    <div class="form-group"> 
        <input class="form-control" type="password" name="pass" placeholder="Password"/>
        <button type="submit" value="Iniciar" class="btn bg-primary"><i class="glyphicon glyphicon-log-in"> </i> Entrar</button>
   </div>
</form>
</div><?php }} ?>