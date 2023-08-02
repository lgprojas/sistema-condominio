<?php /* Smarty version Smarty-3.1.11, created on 2018-04-17 01:37:27
         compiled from "/home/covecino/public_html/modules/transa/views/per/ajax/pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5185660345ab5daedc93f45-91734011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41984d23820314c1ebc14faf3b717932fc450a22' => 
    array (
      0 => '/home/covecino/public_html/modules/transa/views/per/ajax/pagAjax.tpl',
      1 => 1523591505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5185660345ab5daedc93f45-91734011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab5daede11017_83894085',
  'variables' => 
  array (
    'per' => 0,
    'sadmin' => 0,
    '_acl' => 0,
    'color' => 0,
    'datos' => 0,
    'root' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab5daede11017_83894085')) {function content_5ab5daede11017_83894085($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['per']->value)&&count($_smarty_tpl->tpl_vars['per']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">Listado de personas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Rut</td>
        <td style="font-weight:bold;text-align: center;">1er Apellido</td>      
        <td style="font-weight:bold;text-align: center;">2do Apellido</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_viv_per')){?><td style="font-weight:bold;text-align: center;">Asoc. Viv.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_vehi_per')){?><td style="font-weight:bold;text-align: center;">Asoc. Vehí.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_per')){?><td style="font-weight:bold;text-align: center;">Edit</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_per')){?><td style="font-weight:bold;text-align: center;">Elim</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['per']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Rut_per'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape1_per'];?>
</td>        
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape2_per'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom1_per'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_viv_per')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-home" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
transa/per/asocVivPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_vehi_per')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-road" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
transa/per/asocVehiPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>        
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_per')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
transa/per/editPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_per')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
transa/per/delPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay personas registradas!</strong></p>
<?php }?> 

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>