<?php /* Smarty version Smarty-3.1.11, created on 2017-04-26 18:42:26
         compiled from "C:\xampp\htdocs\munku\views\acl\permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:800759012252877f94-82701866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f758a5a6d35ca16b431019f558e4c41cae744f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\acl\\permisos_role.tpl',
      1 => 1493244387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '800759012252877f94-82701866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'permisos' => 0,
    'pr' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5901225296e625_08720223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5901225296e625_08720223')) {function content_5901225296e625_08720223($_smarty_tpl) {?><div class="container">
<h2>Administración de permisos de role</h2>

<h3>Role: <?php echo $_smarty_tpl->tpl_vars['roles']->value['Nom_role'];?>
</h3>

<p>Permisos</p>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
        <table class="table table-bordered">
            <tr>
                <th style="text-align: center;">Permiso</th>
                <th style="text-align: center;">Habilitado</th>
                <th style="text-align: center;">Denegado</th>
                <th style="text-align: center;">Ignorar</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['nombre'];?>
</td>
                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==1)){?> checked="checked" <?php }?> /></td>
                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']=='')){?> checked="checked" <?php }?> /></td>
                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="x" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==="x")){?> checked="checked" <?php }?> />
                    </td>
                </tr>
                <?php } ?>
        </table>
        <?php }?>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input type="submit" value="Guardar" class="btn btn-primary" /></p>
</form>
</div><?php }} ?>