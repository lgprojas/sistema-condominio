<?php /* Smarty version Smarty-3.1.11, created on 2017-12-10 23:04:08
         compiled from "C:\xampp\htdocs\covecino\views\error\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220975a2daf1011e8e4-34561060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142d7446a8d2d6260247507dd395b985c5d2fd1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\views\\error\\index.tpl',
      1 => 1512943443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220975a2daf1011e8e4-34561060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2daf101bb2f2_43892385',
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2daf101bb2f2_43892385')) {function content_5a2daf101bb2f2_43892385($_smarty_tpl) {?><div class="container">
<h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>
</div><?php }} ?>