<?php /* Smarty version Smarty-3.1.11, created on 2018-04-19 05:43:04
         compiled from "/home/covecino/public_html/modules/transa/views/vehi/ajax/pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17468275765ad82c68609a39-72101237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f051918560bfc8019389660c21149afc1cd910a5' => 
    array (
      0 => '/home/covecino/public_html/modules/transa/views/vehi/ajax/pagAjax.tpl',
      1 => 1524116547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17468275765ad82c68609a39-72101237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vehi' => 0,
    'sadmin' => 0,
    '_acl' => 0,
    'color' => 0,
    'datos' => 0,
    'root' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ad82c686d5764_49571859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad82c686d5764_49571859')) {function content_5ad82c686d5764_49571859($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['vehi']->value)&&count($_smarty_tpl->tpl_vars['vehi']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">Listado de vehículos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Patente</td>
        <td style="font-weight:bold;text-align: center;width: 100px;">Marca</td>       
        <td style="font-weight:bold;text-align: center;width: 100px;">Modelo</td> 
	<?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;width: 100px;">Condominio</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_vehi')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_vehi')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vehi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_vehi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
</td>
	<?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_vehi')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
transa/vehi/editVehi/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_vehi')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
transa/vehi/delVehi/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay vehículos registrados!</strong></p>
<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>