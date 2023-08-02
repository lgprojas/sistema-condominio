<?php /* Smarty version Smarty-3.1.11, created on 2017-12-10 21:13:12
         compiled from "C:\xampp\htdocs\covecino\views\error\access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37285a2d95587dc434-99283914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f94cb355c851239d3a9a995c87b6d96aa3471817' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\views\\error\\access.tpl',
      1 => 1512936786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37285a2d95587dc434-99283914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2d9558af5bd2_38464941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2d9558af5bd2_38464941')) {function content_5a2d9558af5bd2_38464941($_smarty_tpl) {?><div class="container">
<h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login">Iniciar Sesi&oacute;n</a>

<?php }?>
</div><?php }} ?>