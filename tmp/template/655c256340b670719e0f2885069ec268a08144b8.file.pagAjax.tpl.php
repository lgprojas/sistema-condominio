<?php /* Smarty version Smarty-3.1.11, created on 2018-03-24 16:03:33
         compiled from "/home/covecino/public_html/modules/ref/views/modelo/ajax/pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14571331105ab5dbf484a119-44996620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655c256340b670719e0f2885069ec268a08144b8' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/modelo/ajax/pagAjax.tpl',
      1 => 1521907184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14571331105ab5dbf484a119-44996620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab5dbf496a9f1_96645395',
  'variables' => 
  array (
    'modelo' => 0,
    '_acl' => 0,
    'color' => 0,
    'datos' => 0,
    'root' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab5dbf496a9f1_96645395')) {function content_5ab5dbf496a9f1_96645395($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['modelo']->value)&&count($_smarty_tpl->tpl_vars['modelo']->value)){?>
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Modelos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Marca</td> 
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_modelo')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_modelo')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_modelo')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
ref/modelo/editModelo/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_modelo')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
ref/modelo/delModelo/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay Modelos registrados</strong></p>
<?php }?> 

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>