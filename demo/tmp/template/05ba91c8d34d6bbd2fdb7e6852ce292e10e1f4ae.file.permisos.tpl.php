<?php /* Smarty version Smarty-3.1.11, created on 2017-04-26 18:08:12
         compiled from "C:\xampp\htdocs\munku\views\acl\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25277590119a3d33904-00053506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05ba91c8d34d6bbd2fdb7e6852ce292e10e1f4ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\acl\\permisos.tpl',
      1 => 1493244483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25277590119a3d33904-00053506',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_590119a3df6fe7_20253830',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'permisos' => 0,
    'rl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590119a3df6fe7_20253830')) {function content_590119a3df6fe7_20253830($_smarty_tpl) {?><div class="container">
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