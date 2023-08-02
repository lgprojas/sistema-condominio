<?php /* Smarty version Smarty-3.1.11, created on 2017-04-26 18:39:00
         compiled from "C:\xampp\htdocs\munku\views\error\access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2450558eba499c95111-94689421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71fd02894df9b2019365a8855ce0c34cce84830e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\error\\access.tpl',
      1 => 1493246333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2450558eba499c95111-94689421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58eba499d2ab37_29229040',
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eba499d2ab37_29229040')) {function content_58eba499d2ab37_29229040($_smarty_tpl) {?><div class="container">
<h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/usuarios/login">Iniciar Sesi&oacute;n</a>

<?php }?>
</div><?php }} ?>