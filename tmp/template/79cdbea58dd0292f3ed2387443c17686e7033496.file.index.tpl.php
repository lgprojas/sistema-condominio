<?php /* Smarty version Smarty-3.1.11, created on 2017-05-21 22:25:24
         compiled from "C:\xampp\htdocs\munku\views\errores\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3053259224bd5550164-73738404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79cdbea58dd0292f3ed2387443c17686e7033496' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\errores\\index.tpl',
      1 => 1495419916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3053259224bd5550164-73738404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59224bd55d17c0_03138131',
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59224bd55d17c0_03138131')) {function content_59224bd55d17c0_03138131($_smarty_tpl) {?><div class="container">
<h3><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h3>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>
</div><?php }} ?>