<?php /* Smarty version Smarty-3.1.11, created on 2018-03-20 01:37:16
         compiled from "/home/covecino/public_html/modules/errores/views/index/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9310288105ab065cc8d33d4-97357674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ccb4fa7c2c9fcf9b4ab4096dd45fa5b066de2f' => 
    array (
      0 => '/home/covecino/public_html/modules/errores/views/index/access.tpl',
      1 => 1515437431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9310288105ab065cc8d33d4-97357674',
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
  'unifunc' => 'content_5ab065cc995708_14534830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab065cc995708_14534830')) {function content_5ab065cc995708_14534830($_smarty_tpl) {?><div class="container">
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