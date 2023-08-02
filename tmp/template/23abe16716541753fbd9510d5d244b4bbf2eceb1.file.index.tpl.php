<?php /* Smarty version Smarty-3.1.11, created on 2018-01-10 17:03:11
         compiled from "/home/covecino/public_html/views/error/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6462648135a56474f8eac92-55858512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23abe16716541753fbd9510d5d244b4bbf2eceb1' => 
    array (
      0 => '/home/covecino/public_html/views/error/index.tpl',
      1 => 1512943443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6462648135a56474f8eac92-55858512',
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
  'unifunc' => 'content_5a56474f9bfc23_32515954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a56474f9bfc23_32515954')) {function content_5a56474f9bfc23_32515954($_smarty_tpl) {?><div class="container">
<h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>
</div><?php }} ?>