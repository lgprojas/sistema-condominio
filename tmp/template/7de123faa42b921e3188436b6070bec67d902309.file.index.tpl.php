<?php /* Smarty version Smarty-3.1.11, created on 2017-12-09 05:34:21
         compiled from "C:\xampp\htdocs\covecino\views\errores\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11975a2b67cd3c5062-72257352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de123faa42b921e3188436b6070bec67d902309' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\views\\errores\\index.tpl',
      1 => 1497751290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11975a2b67cd3c5062-72257352',
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
  'unifunc' => 'content_5a2b67cd545645_17017078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2b67cd545645_17017078')) {function content_5a2b67cd545645_17017078($_smarty_tpl) {?><div class="container">
<h3><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h3>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>
</div><?php }} ?>