<?php /* Smarty version Smarty-3.1.11, created on 2017-04-26 13:02:00
         compiled from "C:\xampp\htdocs\munku\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189225900d2886a38f7-35957935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8024e559f965601b212d851688c34da201550023' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\acl\\index.tpl',
      1 => 1449869084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189225900d2886a38f7-35957935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5900d2887327e2_37633515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d2887327e2_37633515')) {function content_5900d2887327e2_37633515($_smarty_tpl) {?><h2>Listas de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>