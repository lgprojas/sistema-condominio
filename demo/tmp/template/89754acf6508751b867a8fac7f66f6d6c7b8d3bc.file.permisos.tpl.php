<?php /* Smarty version Smarty-3.1.11, created on 2017-10-10 06:58:19
         compiled from "C:\xampp\htdocs\icondo\modules\usuarios\views\index\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234759dc536b657ff0-65650827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89754acf6508751b867a8fac7f66f6d6c7b8d3bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\usuarios\\views\\index\\permisos.tpl',
      1 => 1497751242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234759dc536b657ff0-65650827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'permisos' => 0,
    'pr' => 0,
    'role' => 0,
    'usuario' => 0,
    'v' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59dc536b7dd9b8_24867856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dc536b7dd9b8_24867856')) {function content_59dc536b7dd9b8_24867856($_smarty_tpl) {?><div class="container">
<h3>Permisos de Usuario</h3>

<h4><strong>Usuario:</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value['Nom_usu'];?>
<br /><strong>Role:</strong> <?php echo $_smarty_tpl->tpl_vars['info']->value['Nom_role'];?>
</h4>
<div class="col-lg-8">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
        <table class="table table-bordered">
            <tr>
                <th style="text-align: center;">Permiso</th>
                <th style="text-align: center;">Estado</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['role']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==1){?>
                    <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("habilitado", null, 0);?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("denegado", null, 0);?>
                <?php }?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['permiso'];?>
</td>
                    <td>
                        <select class="form-control" name="perm_<?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['id'];?>
" style="width: 180px;">
                            <option value="x" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']){?> selected="selected"<?php }?>>Heredado(<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
)</option>
                            <option value="1" <?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==1&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']=='')){?> selected="selected"<?php }?>>Habilitado</option>
                            <option value=" " <?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==''&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']=='')){?> selected="selected"<?php }?>>Denegado</option>
                        </select>
                    </td>
                </tr>
                <?php } ?>
        </table>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input class="btn btn-primary" type="submit" value="guardar"/></p>
        <?php }?>
</form>
</div>
</div><?php }} ?>