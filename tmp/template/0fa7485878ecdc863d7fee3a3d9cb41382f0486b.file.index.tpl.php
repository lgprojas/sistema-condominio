<?php /* Smarty version Smarty-3.1.11, created on 2017-10-10 20:27:55
         compiled from "C:\xampp\htdocs\icondo\views\errores\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:613859dd112b02dc86-65878856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fa7485878ecdc863d7fee3a3d9cb41382f0486b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\views\\errores\\index.tpl',
      1 => 1497751290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613859dd112b02dc86-65878856',
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
  'unifunc' => 'content_59dd112baf9095_46699420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd112baf9095_46699420')) {function content_59dd112baf9095_46699420($_smarty_tpl) {?><div class="container">
<h3><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h3>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>
</div><?php }} ?>