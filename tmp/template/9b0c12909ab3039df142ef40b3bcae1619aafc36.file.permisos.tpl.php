<?php /* Smarty version Smarty-3.1.11, created on 2018-05-13 12:02:42
         compiled from "C:\xampp\htdocs\covecino\modules\usuarios\views\gestores\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180905af853625811a1-42207894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b0c12909ab3039df142ef40b3bcae1619aafc36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\usuarios\\views\\gestores\\permisos.tpl',
      1 => 1526223753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180905af853625811a1-42207894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af8536272e040_22559219',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af8536272e040_22559219')) {function content_5af8536272e040_22559219($_smarty_tpl) {?><div class="container">
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
usuarios/gestores"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input class="btn btn-primary" type="submit" value="guardar"/></p>
        <?php }?>
</form>
</div>
</div><?php }} ?>