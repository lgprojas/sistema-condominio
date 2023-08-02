<?php /* Smarty version Smarty-3.1.11, created on 2018-03-20 02:23:05
         compiled from "C:\xampp\htdocs\covecino\modules\errores\views\index\access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87445ab062796f6184-65333301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '192e2802d4fb8461d471480143aadef15de50a86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\errores\\views\\index\\access.tpl',
      1 => 1515437431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87445ab062796f6184-65333301',
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
  'unifunc' => 'content_5ab06279dd8123_92051299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab06279dd8123_92051299')) {function content_5ab06279dd8123_92051299($_smarty_tpl) {?><div class="container">
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