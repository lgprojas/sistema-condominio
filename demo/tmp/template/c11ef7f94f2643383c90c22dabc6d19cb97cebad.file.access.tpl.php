<?php /* Smarty version Smarty-3.1.11, created on 2018-05-26 20:37:32
         compiled from "/home/covecino/public_html/demo/modules/errores/views/index/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8303827215b09efbcd8c095-20402261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11ef7f94f2643383c90c22dabc6d19cb97cebad' => 
    array (
      0 => '/home/covecino/public_html/demo/modules/errores/views/index/access.tpl',
      1 => 1515437431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8303827215b09efbcd8c095-20402261',
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
  'unifunc' => 'content_5b09efbce09f56_44124203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b09efbce09f56_44124203')) {function content_5b09efbce09f56_44124203($_smarty_tpl) {?><div class="container">
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