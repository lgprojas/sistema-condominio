<?php /* Smarty version Smarty-3.1.11, created on 2018-01-13 03:24:56
         compiled from "/home/covecino/public_html/views/acl/permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7609693745a597c085069f4-18374805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fae7240d929a487934801f3798eb0c317f8e25a' => 
    array (
      0 => '/home/covecino/public_html/views/acl/permisos.tpl',
      1 => 1497751290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7609693745a597c085069f4-18374805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'permisos' => 0,
    'rl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a597c085bffd3_88648437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a597c085bffd3_88648437')) {function content_5a597c085bffd3_88648437($_smarty_tpl) {?><div class="container">
<h2>Administracion de permisos</h2>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/nuevo_permiso">Nuevo Permiso</a></p>
<?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
    <table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>Permiso</th>
        <th>Llave</th>
        <th></th>
    </tr>   
    <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['Id_perm'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['Nom_perm'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['Key_perm'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/editar_permiso/<?php echo $_smarty_tpl->tpl_vars['rl']->value['Id_perm'];?>
">Editar</a></td>
        </tr>     
    <?php } ?>   
</table>
<?php }else{ ?>
    <p><strong>No hay permisos registrados.</strong></p>
<?php }?>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/nuevo_permiso">Nuevo Permiso</a></p>
</div><?php }} ?>